<?php
	echo "definicion de arrays tradicionales.<br>";
	$x[0] = 1;
	$x[1] = 23;
	$x[2] = 25;
	$x[3] = 41;
	echo "para recorrerlos funciona como en un array normal.<br>";
	for ($i=0;$i<count($x);$i++){
		echo $x[$i]."<br>";
	}
	echo "se puede sustituir la funcion count(nombre array) por sizeof(nombre array) es lo mismo.<br>";
	echo "otra forma de declarar un array es:<br> \$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo').<br><br>";
	$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
	for ($i=0;$i<sizeof($semana);$i++){
		echo $semana[$i]."<br>";
	}
	echo "<br>ahora para obtener el primer elemento de un array es \$semana[0] y el ultimo end(\$semana)<br><br>";
	echo $semana[0]."<br>".end($semana);
?>