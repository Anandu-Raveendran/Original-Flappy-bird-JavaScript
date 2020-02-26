<?php

session_start();
$_SESSION['rounds'] = 1 ;
$runs = $_SESSION['runs'];
$email = $_SESSION['email'];
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];

require '../config.php';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
if ($mysqli->connect_errno) {
	$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>';
}

$sql = "INSERT INTO " . $table_name. " (`name`, `email`, `runs`, `age`, `gender`) VALUES 
	('$name','$email', '$runs' , '$age','$gender');";

if (!$result = $mysqli->query($sql)) {
	if($mysqli->errno == 1062)
	{
		$error .= '<p><label class="text-danger"> This email id already exists. Please use a differnt one. </label></p>';
	}
	else{
		$error .= '<p><label class="text-danger">'.
			'Query: ' . $sql .
			'Errno: '. $mysqli->errno . 
			'Error: '. $mysqli->error.
			'</label></p>';
	}
}

if($error == '')
{
	#			session_destroy();
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'index.html';
	header("Location: http://$host$uri/$extra");
}
else
	echo $error;

?>

