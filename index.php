<?php 
require('controller/controller.php');

if(isset($_GET['a'])){
	extract($_GET);
	if($a == 'archives'){
		require ('view/archives.php');
	}
	if($a == 'form'){
		require ('view/form.php');
	}
	if($a == 'newUser'){
		newUser($_POST);
	}
	if($a == 'users'){
		showAllUsers();
	}
}
else{
	require('view/accueil.php');
}