<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $dept = $_POST['dept'];
    $arrival=$_POST['arrival'];
    $fare=$_POST['fare'];

}



$query="INSERT INTO routes (id,dept,arrival,fare) VALUES (NULL,'$dept','$arrival','$fare')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
