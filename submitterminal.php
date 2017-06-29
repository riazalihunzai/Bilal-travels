<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $terminalname = $_POST['terminalname'];
    $city=$_POST['city'];
  
}
$status=1;


$query="INSERT INTO terminal (id,terminal,city,status) VALUES (NULL,'$terminalname','$city','$status')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
