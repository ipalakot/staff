<?php

/**
* 
*/
class Archer extends personnage
{
	
	protected $vie = 40;

	public function attaque($cible){
		$this-> vie -= $this->atk;
		parent::attaque($cible);
		}
}


?>