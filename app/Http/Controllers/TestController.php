<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Interfaces\TestInterface;
use yajra\Datatables\Datatables;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller implements TestInterface
{

    protected $u;
    

    public function am_I_Connected($ip)
    {
        //$ip = 'www.google.cm'; //some ip
        exec("ping -n 4 $ip 2>&1", $output, $retval);
        if ($retval != 0) { 
        return 0 ; // not connected
        } 
        else 
        { 
        return 1 ; }  // you are connected
    }


    public function loaddata()
    {
    	
    	return view('tableview',compact('val'));
    }

    /**
    *@Comment permet de remplir la table avec des informations 
    *@Route('/ajax',name=null)
    *@return revoit les ressources appelées par ajax, et remplit la table
    *
    */
    public function ajax()
    {
    	
    	return Datatables::of(User::query())
        ->setRowClass('{{$id %2 ==0? "alert-success": "alert-warning"}}')
        ->setRowId(function($user){
            return $user->id;
        })
        ->setRowData([
                    'data-id' => '{{$id}}',
                    'data-name' => '{{$name}}',
                        ])
        ->addColumn('Action','buttonView',compact('id'))  // buttonView est une vue située dans le dossier view à laquelle on transmet l'id de la ligne ponctuelle
        ->rawColumns(['Action'])    // on utilise rawColumn pour effectuer du rendu en html
        ->make(true);	
    }


    /**
    *@Comment Affiche le formulaire d'ajout d'un nouvel element
    *@route('/add',name='showAddModalBox')
    *@return view add (le fichier add.blade.php se trouve dans le dossier views)
    *@param nothing
    *
    */
    public function addForm()
    {
    	return view('add');
    }



    public function store(Request $request)
    {
        
    $messages = [
            'email.required'    => 'We need to know your email ',
            ];

            $validator = Validator::make($request->all(), 
                [
                    'name' => 'bail|required|string|min:5',  // Le champ name est obligatoire
                    'email' => 'bail|required|email|unique:users',    // Le champ email doit presenter la nomenclature d'un email et est obligatoire
                    'password' => 'nullable'
                ],$messages);

            if ($validator->fails())
            {  
                return redirect('/')->withErrors($validator)->withInput();
            }

        // Injection en Bdd
            // On cree un nouvel utilisateur
            $user = new user;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = !is_null($request->password)?Hash::make($request->password):Hash::make('defaultpassword');
            $user->save();
            
            $data['name'] = $user->name;
            $data['email'] = $user->email;
            $data['password'] = $user->password;
            $data['user'] = $user;

            $status = '';
            $this->u = $user;
            // Nous devons verifier les identifiants de connexion au serveur smtp dans le fichier .env qui se trouve a la racine du projet
            if ($this->am_I_Connected('www.google.com') == 1){
                try{
                    Mail::send('add', $data, function ($message) 
                        {
                            $message->to($this->u->email)->subject('Test Laravel form');
                        }); 
                } catch (Exception $e) {
                    $status = 'Caught exception: '.  $e->getMessage(). "\n";
                }

            }
/*
            
    */

        $status = nl2br($request->name."\nhave been added with success!");
        
        return redirect('/')->with(['status'=>$status]);
        
    }



}
