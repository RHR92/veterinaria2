<!DOCTYPE html>
<html>
<head>
	<title>Semafaro</title>
<!-- 	<script type="text/javascript" src="bootstrap/js/jquery.js"></script> -->
</head>
<body>
	<script type="text/javascript">
		function verde(){
			document.getElementById("verde").style.backgroundColor = "green";
			document.getElementById("amarillo").style.backgroundColor = "black";
			document.getElementById("rojo").style.backgroundColor = "black";

		}

			function amarillo(){
			document.getElementById("verde").style.backgroundColor = "black";
			document.getElementById("amarillo").style.backgroundColor = "yellow";
			document.getElementById("rojo").style.backgroundColor = "black";

		}

			function rojo{
			document.getElementById("verde").style.backgroundColor = "black";
			document.getElementById("amarillo").style.backgroundColor = "black";
			document.getElementById("rojo").style.backgroundColor = "red";

		}
	</script>

	<div style="border: 10px; background: black; width: 50px; border-radius: 10px;">
		<div onclick="verde()" id="verde" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
		<div onclick="amarillo()" id="amarillo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
		<div onclick="rojo()" id="rojo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: black"></div>
	</div>

	<script type="text/javascript" href="bootstrap/js/bootstrap.js"></script>
</body>
</html>