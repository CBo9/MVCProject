<?php
require('classes/User.php');
use AFPA\classes\User;


function newUser(array $data){
	require('model/userManager.php');

	$user = new User($data);
    print_r($user);
	$insertion = newUserDB($user);
	     
    if ($insertion === false) {
        die('Impossible d\'ajouter le membre !');
    }
    else {
        header('Location: index.php');
    }
}

function showAllUsers(){
    require('model/userManager.php');

    $users = getAllUsers();
    

    require('view/users.php');

}

function showUser($id){
    require('model/userManager.php');

    $user = getUser($id);
    $user = new User($user->fetch());
    require('view/user.php');
}


