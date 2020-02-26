<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Game</title>
			<script><?php session_start(); echo '<p><label class="text-danger"> '.var_dump($_SESSION).' </label></p>'; ?>
</script>
		<link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
		<style>        
			canvas{
				border: 1px solid #000;
				display: block;
				margin: 0 auto;
			}
		</style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		<canvas id="bird" width="320" height="480"></canvas>
		<script src="game.js"></script>
	</body>
</html>
