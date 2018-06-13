<?php
	
/* PERSONNAGE JEU VIDEO

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
*/

/* FORMULAIRE
	require'form.php';

	$form = new form ($_POST);
	var_dump($form->data);
	die();
?>

 <form action='#' method='POST'>
 	<?php
	 	echo $form-> input('username');
		echo $form-> input('password');
		echo $form-> input();
	?>

 </form>
*/
// STATIC ET CONSTANTES

 require'text.php';
 var_dump(Text::withzero (5));


?>
