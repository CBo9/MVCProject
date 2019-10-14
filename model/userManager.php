<?php
require('classes/User.php');

use AFPA\classes\User;

function newUserDB(array $data){
	$user = new User($data);
	$db=db_connect();
	$insert= $db->prepare('INSERT INTO users (name, password, email ) VALUES (:name,:password,:email)');
	$insert->execute(['name'=>$user->getName(),
				   'password'=>$user->getPassword(),
				   'email'=>$user->getEmail()]);

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