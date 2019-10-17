<?php
require_once('classes/User.php');
require_once('model/userManager.php');
use AFPA\classes\User;

class Controller{

    function newUser(array $data)
    {   
        $userManager = new userManager();
    	$user = new User($data);

    	$insertion = $userManager->newUserDB($user);
    	     
        if ($insertion === false) {
            die('Impossible d\'ajouter le membre !');
        }
        else {
            header('Location: index.php?a=users');
        }
    }


    function showAllUsers()
    {
        $userManager = new userManager();

        $users = $userManager->getAllUsers();

        require('view/user/users.php');
    }


    function showUser($id)
    {
        $userManager = new userManager();

        $user = $userManager->getUser($id);
        $user = new User($user->fetch());

        require('view/user/user.php');
    }

    function updateUserForm($id)
    {
        $userManager = new userManager();

        $user = $userManager->getUser($id);
        $user = new User($user->fetch());

        require('view/user/updateUserForm.php');
    }


    function updateUser($id,array $data)
    {
        $userManager = new userManager();
        $user = new User($data);
        $user->setId($id);

        $update = $userManager->updateUserDB($user);
             
        if ($update === false) {
            die('Impossible d\'ajouter le membre !');
        }
        else {
            header('Location: index.php?a=users');
        }
    }
}


