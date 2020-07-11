<?php

$error = '';
$answer = '';


session_start();
#echo '<p><label class="text-danger"> '.var_dump($_SESSION).' </label></p>';


function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
  

  if(empty($_POST["answer"]))
	  {
		$error .= '<p><label class="text-danger">Answer is required</label></p>';
	  }
  else
	 {
	   $answer = clean_text($_POST["answer"]);
	 }
	

  if($error == '')
   {

	  require '../config.php';

	  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
	  if ($mysqli->connect_errno)
		{
			$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>'; 
		}
		

	 if($error == '')
	    {    $sql = "UPDATE `user_data` SET  
			
			        `memory` = '$answer'    WHERE `email` = '$_SESSION[email]' AND `runs` = 1";
                
                  $result = $mysqli->query($sql);


		$host  = $_SERVER['HTTP_HOST'];
       $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
       $extra = 'q_1.php';
       header("Location: http://$host$uri/$extra");exit;          

		}
 
	} 

} 	 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Memory</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	 <div class="container">
   <h2 align="center">In about 100 words tell us about a memory where you cheated/deceived/ acted in a amoral way . Please try to give a date to the memory if possible. </h2>
   <br />
   
    <form method="post" id="form">

     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <br>
      <input type="comment" name="answer" placeholder="type your memory here" value="<?php echo $answer; ?>" style="width: 800px;
      height: 200px;
      padding: 20px;
      padding:30px;
      margin:40px auto;
      position: center;
      box-shadow: none;
      border: 5px solid #AAAAAA" />
     </div>
     <input type="submit" name="submit" class="btn btn-info" value="Submit" id="submit" />
	
      <div><span id="display" style="color:#FF0000;font-size:15px"></span></div>
    </form>
</div>           
</body>
</html>