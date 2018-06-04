<html>
	<head>
		<title>Formulario de entrada del dato</title>
	</head>
	<body>

		<!--<form method="post" action="pagina2.php">

			<input type="text" name="nombre" placeholder="nombre">
			<br>
			<input type="text" name="edad" placeholder="edad">
			<br>
			<input type="submit" value="confirmar">
		</form>-->
		<!--<form action="pagina2.php" method="post">
			<input type="text" name="nombre" placeholder="Nombre">
			<br>
			<input type="radio" name="radio1" value="Sin estudios" checked>Sin estudios
			<br>
			<input type="radio" name="radio1" value="estudios primarios">estudios primarios
			<br>
			<input type="radio" name="radio1" value="estudios secundarios.">secundarios
			<br>
			<input type="submit" name="operar">
		</form>-->
		<form action="pagina2.php" method="post">
		  Ingrese primer valor:
		  <input type="text" name="valor1">
		  <br>
		  Ingrese segundo valor:
		  <input type="text" name="valor2">
		  <br>
		  <input type="checkbox" name="check1">sumar
		  <br>
		  <input type="checkbox" name="check2">restar
		  <br>
		  <input type="submit" name="operar">
		</form>
	</body>
</html>