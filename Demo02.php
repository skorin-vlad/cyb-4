<html>
	<head>
		<title>Demo PHP</title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
		<h1>Hello from PHP!</h1>
		<?php
			$x = 2;
			$y = 2;
			$z = $x + $y;
			echo "<h2>Result:$z</h2>";
			
			$now = date("H:i:s");
			echo "<h1>Page opened at: $now</h1>";
		?>
	</body>
</html>