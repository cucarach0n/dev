<?php
	class ChangeString{
		//cadena '11 hijo'

		public function build($cadena){
			$cadenaNueva = "";
			$arrayAbecedario = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
			
			for ($j=0; $j < strlen($cadena); $j++) { 
				if (in_array(substr($cadena,$j,1),$arrayAbecedario)) {
					for ($i=0; $i < count($arrayAbecedario); $i++) { 
						if ($arrayAbecedario[$i] == substr($cadena,$j,1)) {
							$posicion = $i + 1;
							$cadenaNueva = $cadenaNueva.$arrayAbecedario[$posicion];
							break;
						}
					
					}
				}
				else {
					$cadenaNueva = $cadenaNueva.substr($cadena,$j,1);
				}
				
			}
			return $cadenaNueva;
		}

	}
?>

