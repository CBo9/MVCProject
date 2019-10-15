<?php


function newUserDB(User $user){
	$db=db_connect();
	$insert= $db->prepare('INSERT INTO users (name, password, email ) VALUES (:name,:password,:email)');
	$insert->execute(['name'=>$user->getName(),
				   'password'=>$user->getPassword(),
				   'email'=>$user->getEmail()]);

}

function getAllUsers(){
	$db=db_connect();
	$users = $db->prepare('SELECT * FROM users');
	$users->execute();
	
	return $users;
}

function db_connect(){
	try
		{
			$connexion = new PDO("mysql:host=localhost;dbname=MVC_DB;charset=utf8",'root','mysql');
			array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
			return $connexion;
		}
	catch(Exception $e)
		{
			echo 'Echec de la connexion:'.$e->getMessage();
		}
}