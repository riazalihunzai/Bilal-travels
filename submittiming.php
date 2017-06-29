<?php

include ('connection.php');

if( $_SERVER["REQUEST_METHOD"]=="POST"){
 
    $route = $_POST['route'];
    $ddate=$_POST['datepicker'];
     $depttime=$_POST['deptime'];
     $arrivaltime=$_POST['arrivaltime'];
     $dseq=$_POST['dseq'];
     $aseq=$_POST['aseq'];
}

$fare=0;
$status=true;
$dept=" ";
$arrival=" ";
$query="SELECT* FROM routes";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{

while($row=mysqli_fetch_assoc($result1))
{ 
  if(!strcmp($row["dept"]." to ".$row["arrival"],$route)){
$fare=$row["fare"];
$dept=$row["dept"];
$arrival=$row["arrival"];
  }


}

}
else
{

}
echo $ddate;
$query="INSERT INTO timing (id,dept,arrival,fare,ddate,depttime,arrivaltime,dseq,aseq,status) VALUES (NULL,'$dept','$arrival','$fare','$ddate','$depttime','$arrivaltime','$dseq','$aseq','$status')";

if(mysqli_query($connect,$query))
{

}
else
{
echo "<h>Error</h>".mysql_error();

}
mysqli_close();
    ?>
    
    
