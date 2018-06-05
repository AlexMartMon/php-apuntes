<?php
	
	$asociacion = array('dni'=>'02828533',
						'nombre'=>'Martín Alejandro',
						'poblacion'=> array(
											'calle' => 'acera del darro',
											'poblacion' => 'granada'
											));
	//echo count($asociacion['poblacion']);
	foreach($asociacion as $x => $x_value) {
		if ( $x != 'poblacion' ){
			echo "Key=" . $x . ", Value=" . $x_value."<br>";
		}elseif ( $x == 'poblacion'){
			foreach($x_value as $y => $y_value){
				echo "&nbsp; Key=" . $y . ", Value=" . $y_value."<br>";
			}
		}
	}
	//echo $asociacion['nombre']."<br>".$asociacion[2][0];
?>