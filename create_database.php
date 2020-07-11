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
	'name VARCHAR(30) NOT NULL, '.
	'email  VARCHAR(50) NOT NULL, '.
	'runs  INT NOT NULL , '.
	'gender  VARCHAR(10) , '.
	'age  INT , '.
	  'score1  INT , '.
      'score2  INT , '.
      'score3  INT , '.
      'score4  INT , '.
      'score5  INT , '.
      'score6  INT , '.
      'score7  INT , '.
      'score8  INT , '.
      'score9  INT , '.
      'score10 INT , '.
      'score11 INT , '.
      'score12 INT , '.
      'score13 INT , '.
      'score14 INT , '.
      'score15 INT , '.
      'score16 INT , '.
      'score17 INT , '.
      'score18 INT , '.
      'score19 INT , '.
      'score20 INT , '.
	'hscore1  INT , '.
	'hscore2  INT , '.
	'hscore3  INT , '.
	'hscore4  INT , '.
	'memory INT , '.
	'question1 INT , '.
	'question2 INT , '.
	'question3 INT , '.
	'question4 INT , '.
	'question5 INT , '.
	'question6 INT , '.
	'question7 INT , '.
	'question8 INT , '.
	'question9 INT , '.
	'question10 INT , '.
	'question11 INT , '.
	'question12 INT , '.
	'question13 INT , '.
	'question14 INT , '.
	'question15 INT , '.
	'question16 INT , '.
	'question17 INT , '.
	'question18 INT , '.
	'question19 INT , '.
	'question20 INT , '.
	'question21 INT , '.
	'question22 INT , '.
	'question23 INT , '.
	'question24 INT , '.
	'question25 INT , '.
	'question26 INT , '.
	'question27 INT , '.
	'question28 INT , '.
	'question29 INT , '.
	'question30 INT , '.
	'question31 INT , '.
	'question32 INT , '.
	'question33 INT , '.
	'question34 INT , '.
	'question35 INT , '.
	'question36 INT , '.
	'question37 INT , '.
	'question38 INT , '.
	'question39 INT , '.
	'question40 INT , '.
	'question41 INT , '.
	'question42 INT , '.
	'question43 INT , '.
	'question44 INT , '.
	'question45 INT , '.
	'question46 INT , '.
	'question47 INT , '.
	'question48 INT , '.
	'question49 INT , '.
	'question50 INT , '.
	'question51 INT , '.
	'question52 INT , '.
	'question53 INT , '.
	'question54 INT , '.
	'question55 INT , '.
	'question56 INT , '.
	'question57 INT , '.
	'question58 INT , '.
	'question59 INT , '.
	'question60 INT , '.
	'question61 INT , '.
	'question62 INT , '.
	'question63 INT , '.
	'primary key ( uid ))';

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
