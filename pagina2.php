<html>
	<head>
		<title>Captura de datos del form</title>
	</head>
	<body>

		<?php
			#Controlar los inputs simples
			/*echo "El nombre ingresado es: ";
			echo $_POST['nombre'];
			echo "<br/>edad: ". $_POST['edad'] ."<br>";
			if ($_POST['edad'] >= 18){
				echo "Es mayor de edad";
			}else{
				echo "Es menor de edad";
			}*/
			#sumar o restar dos numeros por input dependiendo que este seleciondo en el radio
			/*if ($_POST['radio1']=="Sin estudios"){
				echo $_POST['radio1'];
			}elseif ($_POST['radio1']=="estudios primarios"){
				echo $_POST['radio1'];
			}else{
				echo $_POST['radio1'];
			}*/
			#checkbox
			/*if (isset($_POST['check1'])){
				$suma=$_POST['valor1'] + $_POST['valor2'];
				echo "La suma es:".$suma."<br>";
			}
			if (isset($_POST['check2'])){
				$resta=$_POST['valor1'] - $_POST['valor2'];
				echo "La resta es:".$resta;
			}*/
			# ver que item de un select se ha pulsado
			/*if ($_POST['ganancia']=="alta"){ 
				echo $_POST['nombre']." , Debe pagar impuestos por ganancia";
			}else{
				echo $_POST['nombre']." , No debe pagar impuestos";
			}*/
			#TextArea
				
				echo $_POST['contrato']; 
		?>

	</body>
</html>