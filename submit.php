<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $cname = $_POST['cityname'];
  
}

$cdate=date("Y/m/d h:i:sa");
$status=true;
$mdate="";
$query="INSERT INTO cities (id,cname,cdate,mdate,status) VALUES (NULL,'$cname','$cdate','$mdate','$status')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
