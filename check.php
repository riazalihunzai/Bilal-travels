<?php
include ('connection.php');
session_start();

$admin= $_SESSION["admin"];
$pass= $_SESSION["pass"];

$query="SELECT * FROM admindb";
$_SESSION["check"] ="red";
$result=mysqli_query($connect,$query);

if (mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))

{ 

	if($row["admin"]==$admin&&$row["password"]==$pass)
	{

$_SESSION["check"] ="green";


	}
	
}

}





  ?>