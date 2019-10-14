<?php



function newUser(array $data){
	require('model/userManager.php');
	
	$insertion = newUserDB($data);
	     
    if ($insertion === false) {
        die('Impossible d\'ajouter le membre !');
    }
    else {
        header('Location: index.php');
    }
}


