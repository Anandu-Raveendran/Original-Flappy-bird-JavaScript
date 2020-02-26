<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	</head>
	<body align="center"  background="./img/vista.jpg" >
	 <?php session_start();?>

		<br>
		<h1 align="center"  >Thank you for your time</h1>
		<p align="center" >Have a nice day </p>
		<img align="center"  height=500px  src="./img/pup.png" alt="Flowers in Chania">
		<br>
		<button style="display: block;
			       margin: 30px auto;
			       padding: 10px;
			       overflow: hidden;
			       border-width: 0;
			       outline: none;
			       border-radius: 2px;
			       box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
			       background-color: #2ecc71;
			       color: #ecf0f1;
			       transition: background-color .3s;
			       "align = "bottom" 
			onclick="window.location.href = 'add_run.php';"

			>Play next round</button>

		<button style="display: block;
			       margin: 30px auto;
			       padding: 10px;
			       overflow: hidden;
			       border-width: 0;
			       outline: none;
			       border-radius: 2px;
			       box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
			       background-color: #2ecc71;
			       color: #ecf0f1;
			       transition: background-color .3s;
			       "align = "bottom" 
			onclick="window.location.href = '../index.php';"

			>Go back to start page</button>

	</body>

</html>
