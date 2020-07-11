<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
  	<link rel="stylesheet" type="text/css" href="piss.css">
  </head>

  <body background="img/back.gif" >
  	<p style="font-family:Courier; color:white; font-size: 20px;">
  	<center>

   		<div class="container">
	    <h2 style="color:white;">SCORES AFTER ROUND THREE</h2>
	    <table class="table" style= "font-size: 18px;
	    padding:10px; color: white; 
	    ">
		      <thead>
			      <tr>
			       <th>NAME</th>
			     <th>SCORE</th>
			      </tr>	
		 		 		
		       </thead>

		     <tbody>
			
		          <?php

		           $table = mysqli_query($conn ,'SELECT * FROM user_data ORDER BY  hscore3 DESC limit 10');
		            while($row = mysqli_fetch_array($table)){ ?>
			           <tr>
			               <td> <?php echo $row['name']; ?> </td>
			               <td> <?php echo $row['hscore3'];?></td>
			              
			             </tr>

		            <?php }
		            ?> 
			 
		     </tbody>
	     </table>

	     </p>

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

			>Play Next Round</button>
     </div>
     </center>
 </body>
</html>