<?php 
   $error = '';
   $question= '';
   session_start();
   
if(isset($_POST["submit"]))
 {
 	if(isset($_POST["question"]))
	{
    	$question = $_POST['question'];
 	}
 	else {
		echo '<h2>Please answer the question.</h2>';
	}

}
 if($error == '')
   {

	  require '../config.php';

	  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
	  if ($mysqli->connect_errno)
		{
			$error .= '<p><label class="text-danger">Failed to connect to MySQL: (' . $mysqli->connect_errno . ') " . $mysqli->connect_error</label></p>'; 
		}
		
	
 	 {
		
		if($question == 1) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 1
			 
			          WHERE `email` = '$_SESSION[email]' AND `runs` = 1";
			           $result = $mysqli->query($sql); 
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 

		}
		if($question == 2) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 2
			 
			          WHERE `email` = '$_SESSION[email]' AND `runs` = 1";
			           $result = $mysqli->query($sql);
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		
		}
		if($question == 3) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 3
			 
			          WHERE `email` = '$_SESSION[email]' AND `runs` = 1";
			           $result = $mysqli->query($sql);
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		
		}
		if($question == 4) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 4
			 
			          WHERE `email` = '$_SESSION[email]' AND `runs` = 1";
			           $result = $mysqli->query($sql);
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		
		}
		if($question == 5) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 5
			 
			          WHERE `email` = '$_SESSION[email]'AND `runs` = 1";
			           $result = $mysqli->query($sql);
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		
		}
		if($question == 6) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 6
			 
			          WHERE `email` = '$_SESSION[email]'AND `runs` = 1";
			           $result = $mysqli->query($sql);
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		
		}
		if($question == 7) { $sql = "UPDATE `user_data` SET  
			
			        `question35` = 7
			 
			          WHERE `email` = '$_SESSION[email]'AND `runs` = 1";
			           $result = $mysqli->query($sql); 
			 $host  = $_SERVER['HTTP_HOST'];
			 $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			 $extra = 'q_36.php';
			 header("Location: http://$host$uri/$extra"); exit; 
		}


			 
		
		}
	        
	}
?>

<html>
<head>
<title>Autobiographical Memory Questionnaire </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<link rel="stylesheet" type="text/css" href="design.css">
<div class="container">
	
<h1>Based on your answer please answer the following questions</h1>
<br><br>

<form method="post">


<div class="container"> 
	<h3> As I remember the event, there are gaps and some things I cannot remember in the storyline
 </h3>
<ul>
  <li>
    <input type="radio" id="1" value="1" name="question">
    <label for="1"> Strongly  Disagree</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="2" value="2" name="question">
    <label for="2">Disagree</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="3" value="3" name="question">
    <label for="3"> Somewhat Disagree</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
   <li>
    <input type="radio" id="4" Value= "4" name="question">
    <label for="4">Neither Agree or Disagree</label>
    
    <div class="check"></div>
  </li>
  
  <li>
    <input type="radio" id="5" value="5" name="question">
    <label for="5">Somewhat Agree</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  
  <li>
    <input type="radio" id="6" value="6" name="question">
    <label for="6">Agree</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
  <li>
    <input type="radio" id="7" value="7" name="question">
    <label for="7">Strongly Agree</label>
    
    <div class="check"><div class="inside"></div></div>
  </li>
</ul>
</div>


</div>
<div class="container">
<input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
</div>
</form>
</div>
</body>
</html>