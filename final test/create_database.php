<?php

	require 'config.php';

	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);
	if ($mysqli->connect_errno) {
		echo "\nFailed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		exit;
	}
	else
		echo "\nConnected successfully";
   
  
  $sql = 'CREATE TABLE '. $table_name .'( '.
      'uid INT NOT NULL AUTO_INCREMENT, '.
      'name VARCHAR(20) NOT NULL, '.
      'email  VARCHAR(20) NOT NULL, '.
      'gender  VARCHAR(20) , '.
      'age  INT , '.
      'score1  INT , '.
      'score2  INT , '.
      'score3  INT , '.
      'score4  INT , '.
      'score5  INT , '.
      'highest_score_reported  INT , '.
      'lowest_score_reported  INT , '.
	    'primary key (uid))';
  
if (!$result = $mysqli->query($sql)) {
    echo "\nSorry, the website is experiencing problems.";
    echo "\nError: Our query failed to execute and here is why: \n";
    echo "\nQuery: " . $sql . "\n";
    echo "\nErrno: " . $mysqli->errno . "\n";
    echo "\nError: " . $mysqli->error . "\n";
    exit;
}   

   echo "\nTable created successfully\n";
  
$mysqli->close();
?>
