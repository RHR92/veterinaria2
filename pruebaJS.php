<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
</head>
<body>
	<script>
	$(document).ready(function(){
		$("#operacion").click(function() {
			$num1= parseFloat($("#n1").val());
			var num2 = parseFloat($("#n2").val());
			$suma = $num1 + num2;
			$("#resultado").text($suma);
		});

	});
</script>
<h1>Ejemplo JS Operaciones</h1>
<input type="number" maxlength="2" id="n1" placeholder="Digite el numero">
<input type="number" maxlength="2" id="n2" placeholder="Digitel el numero 2">
<input type="button" id="operacion" value="Sumar">
<p id="resultado"></p>



<script type="text/javascript" href="bootstrap/js/bootstrap.js"></script>
</body>
</html>


