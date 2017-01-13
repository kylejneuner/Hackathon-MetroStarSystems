<?php

	include "connectdb.php";
	
	$data=json_decode(file_get_contents("php://input"));
	$id = $dbhandle->real_escape_string($data->id);
	$parentName = $dbhandle->real_escape_string($data->parentName);
	$childName = $dbhandle->real_escape_string($data->childName);
	$dropOff = $dbhandle->real_escape_string($data->dropOff);
	$pickUp = $dbhandle->real_escape_string($data->pickUp);
	
	$query="INSERT INTO kidtracker VALUES('".$parentName."','".$childName."','".$pickUp."','".$dropOff."',$id)";
	$dbhandle->query($query);

?>