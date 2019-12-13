<?php
$myfile = fopen("ScoreData.txt", "a") or die("Unable to open file!");
$score = $_POST["score"];
fwrite($myfile, $score);
fwrite($myfile, "\n");
fclose($myfile);
?>

