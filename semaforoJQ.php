<!DOCTYPE html>
<html>
<head>
	<title>Semaforo JQ</title>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
</head>
<body>
		<div style="border: 10px; background: black; width: 50px; border-radius: 10px;">
		<div  id="verde" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: green"></div>
		<div  id="amarillo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: yellow"></div>
		<div  id="rojo" style="border-radius: 150px; border: 1; height: 50px; width: 50px; background: red"></div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#verde").click(function(){
				$("#verde").css('box-shadow', '2px 2px 35px green')
				$("#amarillo").css('box-shadow', 'none')
				$("#rojo").css('box-shadow', 'none')

			})
				$("#amarillo").click(function(){
				$("#verde").css('box-shadow' ,'none')
				$("#amarillo").css('box-shadow', '2px 2px 35px yellow')
				$("#rojo").css('box-shadow' ,'none')

			})
				$("#rojo").click(function(){
				$("#verde").css('box-shadow' ,'none')
				$("#amarillo").css('box-shadow', 'none')
				$("#rojo").css('box-shadow', '2px 2px 35px red')

			})
		})
	</script>
	<script type="text/javascript" href="bootstrap/js/bootstrap.js"></script>

</body>
</html>