<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 4</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<script src="validacion.js"></script>
<body>
	<h1>Ingresa tu salario anual y meses trabajados</h1>
	<br>
	<h3>Sueldo</h3>
	<br>
	<input type="text" name="num1" id="num1" class="campo" onpaste="return false" ondrop="return false" maxlength="10">
	<br>
	<h3>Meses</h3>
	<br>
	<input type="text" name="num2" id="num2" class="campo" onpaste="return false" ondrop="return false" maxlength="3">
	<br>
	<br>
	<button onclick="verificarNumero4()" class="boton" class="campo">Calcular Utilidades</button>
	<br>
	<h3>Utilidades</h3>
	<br>
	<input type="text" name="res" id="util" class="campo" readonly="readonly" ">
	<br>
	<h3><a href="index.php">Volver</a></h3>
</body>
</html>
