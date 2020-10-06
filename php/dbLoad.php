<?php
	include "dbClass.php";
	$mydb = new myDBC();

	$tempID = $_GET['data'];
	
	$sql = "SELECT * FROM Persons WHERE id = $tempID";
	$mydb->runQuery($sql);
	$result = $mydb->runQuery($sql);
	
	if(mysqli_num_rows($result) > 0) {
	   $data   =   mysqli_fetch_all($result, MYSQLI_ASSOC);
	   echo json_encode($data);
	}  
?>
