<?php

namespace App\Http\Interfaces;

Interface TestInterface{

	// Telecharger tous les utilisateurs de la BD
	public function loaddata();

	// Afficher le formulaire d'ajour d'un utilisateur
	public function addForm();

	// requête Ajax de telechargement de tous les utilisateurs
	public function ajax();

}