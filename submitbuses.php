<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $busnumber = $_POST['busnumber'];
  

}

$mdate=date("Y/m/d h:i:sa");
$status=ture;
$query="INSERT INTO buses (id,busnum,mdate,status) VALUES (NULL,'$busnumber','$mdate','$status')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
