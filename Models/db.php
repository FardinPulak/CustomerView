<?php 

function con()
{
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbname="final";
	$conn=new mysqli($serverName,$userName,$password,$dbname);
	return $conn;
}

?>