<?php

namespace App;
use \PDO;

	class Database {

		private $db_name;
		private $db_user;
		private $db_pass;
		private $db_host;
		private $pdo;

		
		public function __construct ($db_name, $db_host='localhost', $db_user='root', $db_pass='')
			{	$this-> db_name= $db_name;
				$this-> db_host = $db_host;
				$this-> ddb_user = $db_user;
				$this-> db_pass = $db_pass;
			}

		private function getPDO(){
			if ($this -> pdo === NULL) {
				$pdo = new PDO('mysql:dbname=staff_blog; host=localhost', 'root', '');
				$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this -> PDO = $pdo;
			}
			return $pdo;
		}

		public function query($statement, $class_name)
		{
			$req = $this->getPDO()->query($statement);
			$datas=$req->fetchall(PDO::FETCH_CLASS,$class_name);
			//$this -> PDO ;
			return $datas;
		}
	}

