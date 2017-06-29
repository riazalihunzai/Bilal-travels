<?php 
function selectcity(){
include ('connection.php');
$query="SELECT* FROM cities";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{
echo "<div class='myoption'>";
echo "<select class='form-control' id='sel1' name='dept'>";
echo "<option>Select a city</option>";
while($row=mysqli_fetch_assoc($result1))
{ 
  echo "<option>".$row["cname"]."</option>";
}
echo " </select>
      </div>
      <br>";
}
else
{
  echo "<div class='myoption'>";
echo "<select class='form-control' id='sel1' >";
echo "<option>Select a city</option>";
echo " </select>
      </div>
      <br>";
}
return 0;
mysql_close($connect);   
  }

?>

 
       
    