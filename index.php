<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="tyle.css" />
<title>Premiers tests du CSS</title>
</head>
	<body>

			<?php				
					require 'class/Autoloader.php';
					Autoloader::register();

					$form = new bootstrapForm ($_POST);
				
			?>

			 <form action='#' method='post'>
			 	<?php
				 	echo $form-> input('username');
					echo $form-> input('password');
					echo $form-> submit();
				?>

	 		</form>
	 </body>
</html>
	
<?php
/* PERSONNAGE JEU VIDEO

	require'personnage.php';
	require'Archer.php';

	$merlin = new personnage("Merlin");
	// $merlin->nom='Merlin';
	//$merlin->regenere();
	
	$harry = new personnage("Harry");
	//$harry->nom='Harry';
	//var_dump($harry->mort());

	//$merlin->attaque($harry);

	$Legolas= new Archer('Legolas');

	$Legolas->attaque($harry);

	var_dump($merlin);
	echo "<br/>";
	var_dump($harry);
	echo "<br/>";
	var_dump($Legolas);
	echo "<br/>";  


// STATIC ET CONSTANTES
/* 
 require'text.php';
 var_dump(Text::withzero (5));

*/

?>
