<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $name = $_POST['name'];
    $ppi=$_POST['price'];
  
}



$query="INSERT INTO expenses (id,typename,ppi) VALUES (NULL,'$name','$ppi')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
