<?php 
require('controller/controller.php');

if(isset($_GET['a'])){
	extract($_GET);
	switch($a){
		case'archives':
			require ('view/archives.php');
			break;

		case 'form':
			require ('view/user/register.php');
			break;

		case 'newUser':
			newUser($_POST);
			break;


		case 'users':
			if(!isset($id)){
				showAllUsers();
			}else{
				showUser($id);
			}
			break;

		case 'about':
			require('view/about.php');
			break;
	}
}
else{
	require('view/accueil.php');
}