<?php 

function mytimedisplay(){
  include ('connection.php');
$query="SELECT* FROM timing";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{

  echo "<table class='table table-bordered'>
    <thead>
      <tr>
        <th>#</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Fare</th>
        <th>Date</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
        <th>Departure Sequence</th>
        <th>Arrival Sequence</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>";
   

while($row=mysqli_fetch_assoc($result1))
{ 
  echo "<tr><td>".$row["id"]."</td><td>".$row["dept"]."</td><td>".$row["arrival"]."</td><td>".$row["fare"]."</td><td>".$row["ddate"]."</td><td>".$row["depttime"]."</td><td>".$row["arrivaltime"]."</td><td>".$row["dseq"]."</td><td>".$row["aseq"]."</td><td>".$row["status"]."</td><td style='padding-right:3%;'><button type='button' class='btn btn-success'>Edit</button><button type='button' class='btn btn-danger'>Delete</button></td> </tr><br>";

}
echo "</table>"; 
}
else
{
   echo "no datafound";
}
mysql_close($connect);   
}     

?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
   <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
   <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">
   <script type="text/javascript" src="clockface-master/js/clockface.js"></script>
  <link rel="stylesheet" type="text/css" href="clockface-master/css/clockface.css">
    
   
  <script type="text/javascript">
  	function showcontent() {
  	
    document.getElementById("office").classList.toggle("show");

  	}
  	function showcontentstaff()
  	{
 document.getElementById("staff").classList.toggle("show");

  	}
   
      function  showtime()
    {
  document.getElementById("time").classList.toggle("show");

    }

     </script>
   </head>
   <style type="text/css">
   	.vertical-menu {
    width: 200px;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
}

.vertical-menu a:hover {
    background-color: #F9E79F;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}
#office{
	display: none;
}
#show{
	display: block;
}
#staff{
	display: none;
}
#time{
  display: none;
}
   </style>

   <body>
   	<div class="row" style="background-color: black">
   		<div class="col-md-4">
   			<p style="color:#3498DB;font-size: 200%;text-align: left;padding-top: 3%; ">Bilal travels</p>
   		</div>
<div class="col-md-4">
</div>
<div class="col-md-4" style="text-align: right; padding-right: 2%;padding-top: 1%;">
 <button type="button" class="btn btn-primary glyphicon glyphicon-user" > Logout</button>
 
</div>
   	</div>

<div class="row"> 
<div class="col-md-2" >  	
<div class="vertical-menu" >
  <a href="#" class="active">Dashboard</a>
  <a href="#">Point of Sale</a>
  <a href="#" class="glyphicon glyphicon-menu-down" onclick="showtime()"> Bus Timing</a>
 <div id="time">
  <a href="bustiming.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Add New</a>
  <a href="viewtiming.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> View</a>
</div>
  <a  href="#"  onclick="showcontent()" class="glyphicon glyphicon-menu-down" > Back Office</a>
  <div id="office">
  <a href="cities.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Cities</a>
  <a href="routes.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Routes/Fares</a>
  <a href="buses.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Buses</a>
  <a href="expenses.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Expense Type</a>
  <a href="#" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Bus Expense</a>
  <a href="#" onclick="showcontentstaff()" class="glyphicon glyphicon-menu-down" style="font-size: 80%; padding-left: 20%;"> Staff</a>
<div id="staff">
	 <a href="staff.php" class="glyphicon glyphicon-cog" style="font-size: 80%; padding-left: 30%;"> Driver</a>
	  <a href="hostess.php" class="glyphicon glyphicon-cog" style="font-size: 80%; padding-left: 30%;"> Bus Hotess</a>

</div>
  <a href="terminal.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Terminals</a>
</div>


  <a href="#">Report</a>
  <a href="#" >Users</a>
 
  

</div>
</div>
<div class="col-md-10">
<br>
<br>
<div style="background-color: #229954"><h4 class="glyphicon glyphicon-globe"  style="color: white;padding-left: 3%;"> Transport Timings</h4></div><br>
<br>
<?php  
mytimedisplay();
?>
</div>
</div>

   </body>
   </html>