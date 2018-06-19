<?php

require'../App/Autoloader.php';
App\Autoloader::register();

if (isset ($_GET['p'])) 
	{
		$p = $_GET['p'];
	} 
		else
		{
			$p='home';
		}


// INITIALISATION DES OBJETS

$db = new App\Database('staff_blog');

ob_start();

if ($p=== 'home') {
	require'../pages/home.php';
   } 

   elseif ($p=== 'single')
       {
		require'../pages/single.php';
	}
$content=ob_get_clean();

require'../Pages/Templates/default.php';
?>

