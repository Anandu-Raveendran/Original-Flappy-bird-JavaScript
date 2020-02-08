<?php

session_start();
$_SESSION["score".$_SESSION["rounds"]++] = $_POST["score"];

?>

