<?php 
require('controller/controller.php');

$controller = new Controller();

if(!empty($_GET)){
	extract($_GET);
	if(isset($a)){
		switch($a){
			case'archives':
				require'view/archives.php';
				break;

			case 'form':
				require'view/user/register.php';
				break;

			case 'newUser':
				$controller->newUser($_POST);
				break;


			case 'users':
				if(!isset($id)){
					$controller->showAllUsers();
				}else{
					$controller->showUser($id);
				}
				break;

			case 'updateUserForm':
				if(!isset($id)){
					require'view/error.php';
				}else{
					$controller->updateUserForm($id);
				}
				break;

			case 'updateUser':
				if(!isset($id)){
					require'view/error.php';
				}else{
					$controller->updateUser($id,$_POST);
				}
				break;

			case 'about':
				require'view/about.php';
				break;

			default:
				require'view/error404.php';
		}
	}else{
		require'view/error404/php';
	}
}
else{
	require('view/accueil.php');
}