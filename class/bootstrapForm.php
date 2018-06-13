<?php
	
/**
* 
*/
class bootstrapForm extends form
{
		
		/**
		* @param $html string code html a entourer
		* @return string
		*/
		public function surround($html)
		{
			return"<div class=\"form-group\"> {html} </div>";
		}		



		/**
		* @param $index string 
		* @return string
		*/
		public function input($name)
		{
			return $this-> surround(
				'<label>' .$name . '</label>
				<input type="TEXT" name="'.$name . '" value='.$this-> getValue($name) . ' class="form-control">');
		}
}

?>
