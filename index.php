<?php
	require'personnage.php';

	$merlin = new personnage("Merlin");
	// $merlin->nom='Merlin';
	$merlin->regenere();
	
	$harry = new personnage("Harry");
	//$harry->nom='Harry';
	var_dump($harry->mort());

	$merlin->attaque($harry);

	var_dump($merlin);
	var_dump($harry);

?>