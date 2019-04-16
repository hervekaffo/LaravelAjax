<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.css" media="screen">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <!-- Datatable dependecies -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <!---->
  </head>
  <body>
<!-- Nav Bar -->
  
    <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
        <a href="../" class="navbar-brand">Ajax</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </div>
<!-- Nav Bar -->
    <div class="container">

      <button id="addItem"  class="btn btn-primary">Add new item</button>
      <hr>
@if(count($errors) !== 0 )
<div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Message</div>
                <div class="card-body">
                  @foreach ($errors->all() as $message) 
                  <p class="card-text"> {{$message}}</p>
                  @endforeach
                  
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@elseif($message = Session::get('status') )
<div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Message</div>
                <div class="card-body">
                  <p class="card-text"> {!!$message!!}</p>                      
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

@endif
    </div>  


<!-- Table into div container class -->
<div id="container" class="container">
  <table class="table table-hover" id='mytable'>
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                
  </table>
</div>
<!-- Table into div container class -->

<!-- Trigger/Open the Modal -->
      


<!-- Add Modal Box -->
  <div id="source-modal" class="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="h5" class="modal-title">Modal title</h5>
          <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>-->
        </div>
        <div class="modal-body">
            <!-- Form Input Goes here -->
            <div class="col-lg-10 offset-lg-1">
              <form id="addform" class="bs-component" method="POST" action="{{action('TestController@store')}}" accept-charset="UTF-8" >
                @csrf

                <div class="form-group">
                  <label class="form-control-label">Name</label>
                  <input type="text" value="" class="form-control " id="name" name="name" required>
                  <div class="valid-feedback"></div>
                </div>

                <div class="form-group ">
                  <label class="form-control-label">Email</label>
                  <input type="text" value="" class="form-control " id="email" name="email" required>
                  <div class="invalid-feedback"></div>
                </div>
                <div class="form-group has-info">
                  <label class="form-control-label" for="inputDanger1">Password</label>
                  <input id="pwd" type="password" value="" class="form-control" id="inputInvalid" name="password">
                  <div class="invalid-feedback"></div>
              </div>
            </div>
          <!-- Form input Goes here -->
        </div>
        <div class="modal-footer">
          <input type="hidden" id="idform" value="">
          <button id="sub" type="button" class="btn btn-primary" onclick="">Save changes</button>
          <button id="cls" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- End Modal Box -->

<!-- Message Box -->


 




<!-- End Message Box -->
</body>

    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>

    <!-- DataTable Dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {


        // Click pour soumission
        $('#sub').on('click',function(){
          let confirmation = confirm('please confirm your action');
          if(confirmation == true){
            document.getElementById('addform').submit();
          }
            
        });

      // Ouvrir le formulaire d'ajout d'un nouvel element
       $('#addItem').on('click',function(){
          // On efface le formulaire avant de l'afficher pour ajouter un nouvel element
          document.getElementById('addform').reset();
          $('#container').fadeOut(100);
          $("#source-modal").fadeIn(500);
          $('#pwd').attr('disabled',false);
       });

       // fermer la fenêtre modale
       $('#cls').on('click',function(){
              // fermer la fenêtre modale
              $("#source-modal").fadeOut(500);
              $('#container').fadeIn(100);
        });
       

        $('#ail').data('form_link');

        // Charger les informmations de la table
        var table = $('#mytable').DataTable({
            processing: true,
            serverSide: true,
            ajax:'/ajax',
            columns:[
                //{ data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'email', name: 'email'},
                { data: 'Action', name: 'Action'},
            ]

        });

        $('#mytable').on('click','button',function(){
            // on recupere le nom (colonne 1) et l'email (colonne 2)
            let currow = $(this).closest('tr');
            let itemName = currow.find("td:eq(0)").text();
            let itemEmail = currow.find("td:eq(1)").text();
            // afficher la fenêtre modale
            document.getElementById('addform').reset();
            $("#source-modal").fadeIn(500);
            $('#name').val(itemName);
            $('#email').val(itemEmail);
            $('#pwd').attr('disabled',true);

        });
       
        // Listen Click Event on item
           /* $('#mytable').on('click','button',function(){
                
              $.ajax({
                      url: "/add", 
                 datatype:"html",
                  success: function(result){
                    
                      // afficher la fenêtre modale
                          $("#source-modal .modal-body").html(result);
                          $("#source-modal").fadeIn(500);
                          // On recupere les champs name et email de la ligne ponctuelle
                    let currow = $(this).closest('tr'); // this designe le bouton de la ligne ponctuelle
                    // on recupere le nom (colonne 1) et l'email (colonne 2)
                    let itemName = currow.find("td:eq(1)").text();
                    let itemEmail = currow.find("td:eq(2)").text();

                    $('#name').val(itemName);
                     /*document.getElementByName('name').val() = itemName;
                     document.getElementByName('email').val() = itemEmail;
                     },
                    error: function(msg,statut){
                        alert('An error occurs while connecting remote computer.');
                     }
              });
            });*/

            


      });

      
    </script>
</html>