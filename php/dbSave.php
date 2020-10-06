<?php
	include "dbClass.php";
	$mydb = new myDBC();

	$myContent = $_POST['data'];
	echo $myContent;
	
	$sql = "INSERT INTO Persons (Age, LastName) VALUES (20, '$myContent')";
	$mydb->runQuery($sql);
	$id = $mydb->lastInsertID();
	echo 'success';
?>
