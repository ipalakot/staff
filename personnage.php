><?php
	
	class personnage {

		public $vie = 80;
		public $atk = 20;
		private $nom;

		public function __contruct($nom){
			$this->nom=$nom;
		}

		public function regenere(){
			$this-> vie = 100;
		}

		public function mort(){
			return $this-> vie <= 0;
		}

		public function attaque($cible){
			$this-> vie -= $this->atk;
			var_dump($cible);
		}
	}
?>