<?php

namespace App\Table;

		class Article{


/*  


		public function __get($key){

				$method = 'get' .ucfirst($key);
				return $this-> $method();
			} 
*/	
			public function getUrl(){

				return 'index.php?p=article&id=' . $this->id;
			}


			public function getExtrait(){

				$html = '<p>' . substr($this->contenu, 0, 10) .'...</p>';
				$html .= '<p><a href="' . $this->getUrl() . '"> Voir la suite </a> </p>';
				return $html;
			}
		}

?>