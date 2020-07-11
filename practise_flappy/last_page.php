<?php

$error = '';
$hscore = '';


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
   

  if(empty($_POST["hscore"]))
	  {
		$error .= '<p><label class="text-danger">High score  is required</label></p>';
	  }
  else
	 {
	   $hscore = clean_text($_POST["hscore"]);
	 }
	

  if($error == '')
   {

	  require '../config.php';

	  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
	  if ($mysqli->connect_errno)
		{
			$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>'; 
		}
		 


	     $score1 = (int)$_SESSION['score1'];
		 $score2 = (int)$_SESSION['score2'];
		 $score3 = (int)$_SESSION['score3'];
		 $score4 = (int)$_SESSION['score4'];
		 $score5 = (int)$_SESSION['score5'];
		 $score6 = (int)$_SESSION['score6'];
		 $score7 = (int)$_SESSION['score7'];
		 $score8 = (int)$_SESSION['score8'];
		 $score9 = (int)$_SESSION['score9'];
		 $score10= (int)$_SESSION['score10'];
		 $score11= (int)$_SESSION['score11'];
		 $score12= (int)$_SESSION['score12'];
		 $score13= (int)$_SESSION['score13'];
		 $score14= (int)$_SESSION['score14'];
		 $score15= (int)$_SESSION['score15'];
		 $score16= (int)$_SESSION['score16'];
		 $score17= (int)$_SESSION['score17'];
		 $score18= (int)$_SESSION['score18'];
		 $score19= (int)$_SESSION['score19'];
		 $score20= (int)$_SESSION['score20'];

	 $runs = $_SESSION['runs'];

	 $sql = "UPDATE `user_data` SET  
			`score1` =  $score1, 
			`score2` =  $score2, 
			`score3` =  $score3, 
			`score4` =  $score4,
			`score5` =  $score5,
			`score6` =  $score6,
			`score7` =  $score7,
			`score8` =  $score8,
			`score9` =  $score9,
			`score10` = $score10,
			`score11` = $score11,
			`score12` =  $score12,
			`score13` =  $score13,
			`score14` =  $score14,
			`score15` =  $score15,
			`score16` =  $score16,
			`score17` =  $score17,
			`score18` =  $score18,
			`score19` =  $score19,
			`score20` =  $score20		 
			WHERE `email` = '$_SESSION[email]' AND `runs` = $runs";

	 if (!$result = $mysqli->query($sql))
	  {
	    $error .= '<p><label class="text-danger">'.
				'Query: ' . $sql .
				'Errno: '. $mysqli->errno . 
				'Error: '. $mysqli->error;
		}
		 

	 if($error == '')
	    { 
	     

		        if ($_SESSION['runs'] == 1 )

		        {
		        	
		     	    $sql = "UPDATE `user_data` SET  
			
			        `hscore1` = $hscore
			 
			          WHERE `email` = '$_SESSION[email]' AND `runs` = $runs";
			           $result = $mysqli->query($sql);

			           $_SESSION['runs']++;


		     $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'index.php';
			 header("Location: http://$host$uri/$extra"); exit; 

			  }  


		        
		  if ($_SESSION['runs'] == 2 ) { 
		  	   $sql = "UPDATE `user_data` SET  
			
			        `hscore2` = $hscore
			 
			        WHERE `email` = '$_SESSION[email]' AND `runs` = $runs";
			        $result = $mysqli->query($sql);
			         $_SESSION['runs']++;



		     $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'part2.html';
			 header("Location: http://$host$uri/$extra");exit;

		    }  

		    if ($_SESSION['runs'] == 3 ) { 
		  	   $sql = "UPDATE `user_data` SET  
			
			        `hscore3` = $hscore
			 
			        WHERE `email` = '$_SESSION[email]' AND `runs` = $runs";
			        $result = $mysqli->query($sql);
			         $_SESSION['runs']++;



		     $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'index.php';
			 header("Location: http://$host$uri/$extra"); exit;
			}

             else { 
		  	   $sql = "UPDATE `user_data` SET  
			
			        `hscore4` = $hscore
			 
			        WHERE `email` = '$_SESSION[email]' AND `runs` = $runs";
			        $result = $mysqli->query($sql);



		     $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'thankyou.php';
			 header("Location: http://$host$uri/$extra"); 

	} 

		        
		  

		        
		  
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
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body  >
  <br />
  <div class="container">
   <img src="images/41.png" class="box5">
   <br />
   <div class="col-md-6" style="margin:0 auto; float:none;">
    <form method="post">

     <br />
     <?php echo $error; ?>
     <div class="form-group">
       <img src="images/42.png" class="box4"><br>
      <input type="text" name="hscore" placeholder="Enter Highest Score" value="<?php echo $hscore; ?>" />
     </div><br>

     <div class="form-group" align="center">


      <input type="submit" name="submit" class="btn btn-info" value="Submit" />

     </div>
    </form>
   </div>
  </div>
 </body>
</html>
