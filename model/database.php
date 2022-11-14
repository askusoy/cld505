<?php
	//database connection details
	$host = 'mysqldb.ccj6e1dsz8lm.us-east-1.rds.amazonaws.com'; // changed to endpoint URL
	$user = 'admin'; // might be different...
	$password = 'awsbaru2022!'; // might be different as well... need to test
	$database = 'gorgeous_cupcakes';

	//connect to database with a try/catch statement
	//if the connection is not successful display the error message via database_error.php
	//the PDOException class represents the error raised by PDO
	//the PDO error is stored in the variable $e
	//the PDO error is returned as a string via the getMessage() function
	try
	{
		$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
	}
	catch(PDOException $e)
	{
		$error_message = $e->getMessage();
		include('../view/database_error.php');
		exit();
	}
?>