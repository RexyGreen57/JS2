<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 2</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<script src="validacion.js"></script>
<body>
	<h1>Ingresa los numeros  a comparar</h1>
	<br>
	<h3>Primer Numero</h3>
	<br>
	<input type="text" name="num1" id="num1" class="campo" onpaste="return false" ondrop="return false" maxlength="8">
	<br>
	<h3>Segundo Numero</h3>
	<br>
	<input type="text" name="num2" id="num2" class="campo" onpaste="return false" ondrop="return false" maxlength="8">
	<br>
	<h3>Tercer Numero</h3>
	<br>
	<input type="text" name="num3" id="num3" class="campo" onpaste="return false" ondrop="return false" maxlength="8">
	<br>
	<br>
	<button onclick="verificarNumero2()" class="boton">Obtener Numero Mas Alto</button>
	<br>
	<h3>Numero Mas Alto</h3>
	<br>
	<input type="text" name="numMax" id="numMax" class="campo" readonly="readonly">
	<br>
	<br>
	<h3><a href="index.php">Volver</a></h3>
</body>
</html>
