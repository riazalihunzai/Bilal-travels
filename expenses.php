<?php 

function myexpensesdisplay(){
  include ('connection.php');
$query="SELECT* FROM expenses";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{

  echo "<table class='table table-bordered'>
    <thead>
      <tr>
        <th>#</th>
        <th>Type Name</th>
        <th>Price Per item</th>
        <th>Action</th>
      </tr>
    </thead>";
   

while($row=mysqli_fetch_assoc($result1))
{ 
  echo "<tr><td>".$row["id"]."</td><td>".$row["typename"]."</td><td>".$row["ppi"]."</td><td style='padding-left:10%;'><button type='button' class='btn btn-success'>Edit</button><button type='button' class='btn btn-danger'>Delete</button></td> </tr><br>";
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
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'submitexpenses.php',
            data: $('form').serialize(),
            success: function () {
              
            }
            }
          });

        });

      });
    </script>
  <script type="text/javascript">
  	function showcontent() {
  	
    document.getElementById("office").classList.toggle("show");

  	}
  	function showcontentstaff()
  	{
 document.getElementById("staff").classList.toggle("show");

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
  <a href="#">Bus Timing</a>

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
<label >Expense</label>
<br>
<br>
<div style="background-color: #229954"><h4 class="glyphicon glyphicon-globe"  style="color: white;padding-left: 3%;"> Add New ExpenseType</h4></div><br>


<form  class="form-inline" method="post" >
  <div class="form-group">
  <div class="col-md-4" >
  <label >Name</label>
<input type="text" name="name"  class="form-control" required>
<br>
<br>
<button  type="submit" class="btn btn-success"  >  Submit</button>
</div>


<div class="col-md-4" style="margin-left:  30%;">
  <label >Price Per item</label>
  <input type="text" name="price"  class="form-control" required>
</div>
  </div>

</form>
<div class="col-md-9">
<br>
<div style="background-color: #229954"><h2 class="glyphicon glyphicon-globe"  style="color: white;padding-left: 2%;padding-bottom: 1%;"> View Buses </h2></div>
<?php
myexpensesdisplay();

?>

            
</div>
</div>
</div>

</body>
</html>