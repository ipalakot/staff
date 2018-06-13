<?php
	
	/**
	* class Form
	* Permet de generer des Formulaires
	*/
	class Form 
	{
		/**
		* @var array Données utilisées par le Formulaire
		*/
		public $data;
		
		/**
		* @var string Tag utilisé pour entourer les champs
		*/
		public $surround='p';

		
		/**
		* @param $data Données utilisées par le Formulaire
		*/
		public function __construct($data=array())
		{
			$this-> data = $data;
		}
	

		/**
		* @param $html string code html a entourer
		* @return string
		*/
		public function surround($html)
		{
			return"<{$this->surround}-> {html} </{$this->surround}>";
		}		

		
		/**
		* @param $index string 
		* @return string
		*/
		public function getValue($index)
		{
			return isset($this->data[$index])? $this->data[$index]: NULL;
		}

		/**
		* @param $index string 
		* @return string
		*/
		public function input($name)
		{
			#echo '<input type="text" name="'.$name . '" value="'.$this-> getValue($name) . '">';
			      '<input type="text" name="'.$name . '" value="'.$this-> getValue($name) . '">';
		}
		
		/**
		* @param $index string 
		* @return string
		*/
		public function submit()
		{
			echo '<button type="submit"> Envoyer  <button/>';
		}


	}
	?>
