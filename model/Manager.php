<?php

class Manager{
	
    protected function db_connect()
    {
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
}