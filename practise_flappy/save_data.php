
<?php


if(isset($_POST["score"]))
{
	$actual_score = $_POST["score"];
alert("actual score = "+$actual_score);
}
 
  $file_open = fopen("ParticipantInfo.csv", "a");
  $no_rows = count(file("ParticipantInfo.csv"));
  if($no_rows > 1)
  {
alert("no_rows = "+$no_rows);
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'actual_score'  => $actual_score,
   
  );
  fputcsv($file_open, $form_data);
  $actual_score  = '';

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'firstpage.html';
header("Location: http://$host$uri/$extra");

 }
}

?>
