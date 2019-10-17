<?php
require_once('model/Manager.php');

use AFPA\classes\User;


class userManager extends Manager{

	function newUserDB(User $user){
		$db=$this->db_connect();
		$insert= $db->prepare('INSERT INTO users (name, password, email ) VALUES (:name,:password,:email)');
		$insert->execute(['name'=>$user->getName(),
					   'password'=>$user->getPassword(),
					   'email'=>$user->getEmail()]);

	}

	function getAllUsers(){
		$db=$this->db_connect();
		$users = $db->prepare('SELECT * FROM users');
		$users->execute();
		
		return $users;
	}

	function getUser($id){
		$db = $this->db_connect();
		$user = $db->prepare("SELECT * FROM users WHERE id = '$id' ");
		$user->execute();

		return $user;
	}

	function updateUserDB(User $user){
		$db = $this->db_connect();
		$update = $db->prepare("UPDATE users SET name = :name , email = :email , password = :password WHERE id = :id ");
		$update->execute(['name'=>$user->getName(),
						'email'=>$user->getEmail(),
						'password'=>$user->getPassword(),
						'id'=>$user->getId()]);
	}
}