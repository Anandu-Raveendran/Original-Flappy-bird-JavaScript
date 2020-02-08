<?php

$error = '';
$name = '';
$email = '';
$age = '';
$gender = '';


function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 if(empty($_POST["age"]))
 {
  $error .= '<p><label class="text-danger"> Age is required </label></p>';
 }
 else
 {

    $age = clean_text($_POST["age"]); 
  if ( $age < 18)
  {
    $error .= '<p><label class="text-danger">Not eligble </label></p>';
  }
 }
 if(empty($_POST["gender"]))
 {
  $error .= '<p><label class="text-danger">Gender is required</label></p>';
 }
 else
 {
  $gender = clean_text($_POST["gender"]);
 }

 if($error == '')
 {

	require 'config.php';

	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
	if ($mysqli->connect_errno) {
		$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>';
	}

	$sql = "INSERT INTO " . $table_name. " (`name`, `email`, `age`, `gender`) VALUES 
							   ('$name','$email','$age','$gender');";
							   
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
	
 }
 if($error == '')
 {
 
  session_destroy();
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['rounds'] = 1 ;

 
  $error = '<label class="text-success">Thank you </label>';
  $name = '';
  $email = '';
  $age = '';
  $gender = '';

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'firstpage.html';
header("Location: http://$host$uri/$extra");

 }
 
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Contact Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body   background="./practise_flappy/img/vista.jpg">
  <br />
  <div class="container">
  <h1 align="center">Welcome to the Flappy Bird Game </h1>

   <h2 align="center">Tell Us About Yourself </h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">
     
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>Enter Name</label>
      <input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
     </div>
     <div class="form-group">
      <label>Enter Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
     </div>
     <div class="form-group">
      <label>Age</label>
      <input type="text" name="age" class="form-control" placeholder="Enter Age" value="<?php echo $age; ?>" />
     </div>
     <div class="form-group">
      <label>Gender</label>
      <input type="text" name="gender" class="form-control" placeholder="Enter Gender" value="<?php echo $gender; ?>" />
     </div>
     
     <div class="form-group" align="center">

      
      <input type="submit" name="submit" class="btn btn-info" value="Submit" />
     
     </div>
    </form>
   </div>
  </div>
 </body>
</html>