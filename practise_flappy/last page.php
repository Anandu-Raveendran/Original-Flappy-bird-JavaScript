<?php

$error = '';
$name = '';
$hscore = '';
$lscore= '';

session_start();
#   $error = '<p><label class="text-danger"> '.var_dump($_SESSION).' </label></p>';
#   $error = '<p><label class="text-danger"> '
#   .$_SESSION['score1']. ", "
#   .$_SESSION['score2']. ", "
#   .$_SESSION['score3']. ", "
#   .$_SESSION['score4']. ", "
#   .$_SESSION['score5']. ", "
#   .' </label></p>';


function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	# if(empty($_POST["name"]))
	#{
	# $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	#}
	#else
	#{
	# $name = clean_text($_POST["name"]);
	# if(!preg_match("/^[a-zA-Z ]*$/",$name))
	# {
	#  $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
	# }
	#}

	if(empty($_POST["hscore"]+ 1))
	{
		$error .= '<p><label class="text-danger">High score  is required</label></p>';
	}
	else
	{
		$hscore = clean_text($_POST["hscore"]);
	}
	if(empty($_POST["lscore"]+1))
	{
		$error .= '<p><label class="text-danger">Lowest score is required</label></p>';
	}
	else
	{
		$lscore = clean_text($_POST["lscore"]);
	}

	if($error == '')
	{

		require '../config.php';

		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
		if ($mysqli->connect_errno) {
			$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>';
		}

		$score1 = (int)$_SESSION['score1'];
		$score2 = (int)$_SESSION['score2'];
		$score3 = (int)$_SESSION['score3'];
		$score4 = (int)$_SESSION['score4'];
		$score5 = (int)$_SESSION['score5'];

		$sql = "UPDATE `user_data` SET  
			`score1` =  $score1, 
			`score2` =  $score2, 
			`score3` =  $score3, 
			`score4` =  $score4,
			`score5` =  $score5,
			`highest_score_reported` = $hscore , 
			`lowest_score_reported` = $lscore 
			WHERE `email` = '$_SESSION[email]'";

		if (!$result = $mysqli->query($sql)) {
			$error .= '<p><label class="text-danger">'.
				'Query: ' . $sql .
				'Errno: '. $mysqli->errno . 
				'Error: '. $mysqli->error;
		}

		if($error == '')
		{
			session_destroy();
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'thanks.html';
			header("Location: http://$host$uri/$extra");
		}

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
 <body background="./img/vista.jpg" >
  <br />
  <div class="container">
   <h2 align="center"> Tell Us your Scores </h2>
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">

     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>What was your Highest Score</label> <br>
      <input type="text" name="hscore" placeholder="Enter Highest Score" value="<?php echo $hscore; ?>" />
     </div>
     <div class="form-group">
      <label>What was your Lowest Score</label> <br>
      <input type="text" name="lscore" placeholder="Enter Lowest Score" value="<?php echo $lscore; ?>" />
     </div>


     <div class="form-group" align="center">


      <input type="submit" name="submit" class="btn btn-info" value="Submit" />

     </div>
    </form>
   </div>
  </div>
 </body>
</html>
