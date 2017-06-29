<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $name = $_POST['dname'];
    $cnic=$_POST['cnic'];
    $address=$_POST['address'];

  
}
$cdate=date("Y/m/d h:i:sa");
$status=true;


$query="INSERT INTO driver (id,name,cnic,address,status,mdate) VALUES (NULL,'$name','$cnic','$address','$status','$cdate')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
