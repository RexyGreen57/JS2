<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 3</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<script src="validacion.js"></script>
<body>
	<h1>Ingresa tu salario por hora y horas trabajadas</h1>
	<br>
	<h3>Sueldo</h3>
	<br>
	<input type="text" name="num1" id="num1" class="campo" onpaste="return false" ondrop="return false" maxlength="3">
	<br>
	<h3>Horas Trabajadas</h3>
	<br>
	<input type="text" name="num2" id="num2" class="campo" onpaste="return false" ondrop="return false" maxlength="2">
	<br>
	<br>
	<button onclick="verificarNumero3()" class="boton" class="campo">Calcular Sueldo Con Horas Extra</button>
	<br>
	<h3>Sueldo</h3>
	<br>
	<input type="text" name="res" id="sal" class="campo" readonly="readonly">
	<br>
	<h3><a href="index.php">Volver</a></h3>
</body>
</html>
