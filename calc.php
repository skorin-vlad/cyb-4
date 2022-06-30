<?php
	session_start();

	//kod avtorizacii)
	if (!isset($_SESSION["user"])) {
		echo '<meta http-equiv="refresh" content= "2; url=login.php" />';
		die("Login is required! You will be redirected to login page.");
	}
?>

<html>
	<head>
	<!-- -->
		<title>Calculator</title>
		<meta charset="utf-8"/>

		<style>
			input, button {
				width: 150px;
				margin: 5px;
				text-align: center;
			}
		</style>
		
		<script>
			function plus(){
				var x, y, z;
				x = parseInt(document.getElementById("txt1").value);
				y = parseInt(document.getElementById("txt2").value);
				z = x + y;
				document.getElementById("txt3").value = z;
			}
		</script>
	</head>
	
	<body>
		<h1>JavaScript Calculator</h1>
		<input type="text" id="txt1" autocomplete="off"/> </br>
		<input type="text" id="txt2" autocomplete="off"/> </br>
		<button onclick="plus()">+</button> </br>
		<input type="text" id="txt3" readonly="true"/>
		<!-- ispolzovat br - eto durnoy ton-->
	</body>
</html>