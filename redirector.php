<?php
session_start();
//echo "<p>".$_SESSION['page']."<p>";
//Check if the seesion varialbe exists
if(!empty($_SESSION['page'])) {
	// if exists then check if the page value is the current page then don't redirect
	if(strcmp($_SESSION['page'], basename($_SERVER['PHP_SELF']))!=0)
	{
	// else redirect to the page value wala page
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
   //echo "<p>".$_SESSION['page']."<p>";
	$page = $_SESSION['page'];
    header("Location: $page");
	}
	// Here we set the entire URL expect for the localhost or IP address as the SESSION[page]value.
}else{
    $host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "index.php";
	//header("Location: http://$host$uri/$extra");
}

?>