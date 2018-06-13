<?php

	/**
	* 
	*/
	
	

	class Autoloader {

		static function register()
			{
				spl_autoload_register(array(__CLASS__, 'autoload'));
			}

		
		function autoload($class_name)
			{
				require'class/' .$class_name.'php';
			}

	}



?>