<?php 

function getdata(){
  include ('connection.php');


$query="SELECT * FROM cities ORDER BY id DESC LIMIT 1";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{

$row=mysqli_fetch_assoc($result1);
 echo ("<table  id='mytable' class='table table-bordered mytable'><tr><th>Id</th><th>City Name</th><th>Date Created</th><th>Date Modified</th><th>Status</th><th>Action</th></tr>"."<tr><td>".$row["id"]."</td><td>".$row["cname"]."</td><td>".$row["cdate"]."</td><td>".$row["mdate"]."</td><td>".$row["status"]."</td><td><button type='button' class='btn btn-danger'>Edit</button></td> </tr><br>"."</table>");

}
else
{
   echo "no datafound";
}
mysql_close($connect); 

   }
  
  return getdata(); 

?>