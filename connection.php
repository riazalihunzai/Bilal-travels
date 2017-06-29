<?php 
$server="localhost";
$username="root";
$password="root";
$db="travel";
$connect=mysqli_connect($server,$username,$password,$db);
if(!$connect)
{
	die("Error Database not working".mysql_connect_error());
}


 ?>