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
    <script>
     $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'submittiming.php',
            data: $('form').serialize(),
            success: function () {
    
   
              
            }
          });

        });

      });
    </script>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker({
            minDate:0,
            
        });

  } );
  $(function(){
    $('#t2').clockface({
        format: 'HH:mm',
        trigger: 'manual'
    });   
 
    $('#toggle-btn').click(function(e){   
        e.stopPropagation();
        $('#t2').clockface('toggle');
    });
});

$(function(){
    $('#t1').clockface({
        format: 'HH:mm',
        trigger: 'manual'
    });   
 
    $('#toggle-btn1').click(function(e){   
        e.stopPropagation();
        $('#t1').clockface('toggle');
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
   
      function  showtime()
    {
  document.getElementById("time").classList.toggle("show");

    }

function showstartbooking()
{
  document.getElementById("start").classList.toggle("show");
}
function showspecial()
{
  document.getElementById("Special").classList.toggle("show");
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
#start{
  display: none;
}
#Special{
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
  <a href="#"  class="glyphicon glyphicon-menu-down" onclick="showstartbooking()"> Point of Sale</a>
  <div id="start">
  <a href="startbooking.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Start Booking</a>
  <a href="currentbooking.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Current Booking</a>
   <a href="#" onclick="showspecial()"  class="glyphicon glyphicon-menu-down"  style="font-size: 90%; padding-left: 20%;"> Special Booking</a>
  <div id="Special">
    <a href="specialbooking.php" class="glyphicon glyphicon-cog" style="font-size: 80%; padding-left: 20%;"> Add New</a>
<a href="specialview.php" class="glyphicon glyphicon-cog" style="font-size: 80%; padding-left: 20%;"> View</a>
  </div>
  <a href="refund.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Refund</a>
  <a href="vocher.php" class="glyphicon glyphicon-cog" style="font-size: 90%; padding-left: 20%;"> Voucher</a>
  </div>
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
<div style="background-color: #229954"><h4 class="glyphicon glyphicon-globe"  style="color: white;padding-left: 3%;"> Voucher</h4></div><br>
<form   class="form-inline" method="post" >
  <div class="form-group">
  <div class="col-md-4" >
  <label >Chepter No</label>
<input class="form-control"  type="text"    required> 
</div>
<div class="col-md-3" style="margin-left:  21%; ">
<label >Date</label>
<input class="form-control"  type="text"  name="datepicker" id="datepicker"  required> 

</div>
  </div>

<div class="row">
<div class="col-md-10">
<div class="col-md-3" >
<br> 
<label >Vehicle No</label>
<div  style="width: 70%">

    <input class="form-control"  type="text"   required> 
    
</div>
</div>
<div class="col-md-3" style="padding-left: 10%;"> 
<br>
<label >H.V no</label>
<div  style="width: 70%">
    <input class="form-control"  type="text"    required> 
</div>
</div>

    </div>        
</div>
<br>
<div class="row">
<div class="col-md-10">

<div class="col-md-3"> 
<label >Time</label>
<div class="input-append " style="width: 70%">
    <input type="text" id="t1" value="14:30" class="input-small form-control " name="arrivaltime" readonly="">
    <button class="btn " type="button" id="toggle-btn1">
        <i class="glyphicon glyphicon-time"></i>
    </button>
</div>

</div>
<div class="col-md-3" style="padding-left: 10%;"> 
<label >Driver</label>
<br>
<input class="form-control"  type="text"  name="aseq"  required> 
</div>
    </div>        
</div>

<div class="row">
<div class="col-md-10">

<div class="col-md-3"> 
<label >Hostess </label>
<br>
<input class="form-control"  type="text"  name="dseq"  required> 
<br>


</div>
<div class="col-md-3" style="padding-left: 10%;"> 
<label >Route</label>
<br>
<?php
include ('connection.php');
$query="SELECT* FROM routes";
$result1=mysqli_query($connect,$query);
if(mysqli_num_rows($result1)>0)
{
echo "<div class='myoption'>";
echo "<select class='form-control' id='sel1' name='route'>";
echo "<option>Select a city</option>";
while($row=mysqli_fetch_assoc($result1))
{ 
  echo "<option>".$row["dept"]." to ".$row["arrival"]."</option>";

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
?></div>

</div>        
</div>
<div class="row">
<div class="col-md-10">

<div class="col-md-3"> 
<br>
<label >Fuel</label>
<br>
<input class="form-control"  type="text"  name="dseq" s required> 

</div>
<div class="col-md-3" style="padding-left: 10%;"> 
<br>
<label > Amount</label>
<br>
<input class="form-control"  type="text"  name="aseq"  required> 

</div>
    </div>     

</div>
<br>
<div class="row">
<div class="col-md-10">

<div class="col-md-8" style="width: 30%;"> 
<br>
<label >Commission</label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required > 
<br>
<label >Toll Taxes  </label>
<br>
<input class="form-control"  type="text"  name="dseq"  style="width: 170%;" required> 
<br>
<label >Refreshment</label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Washing / Cleaning</label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Greece / Air  </label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Oil </label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Other Expenses</label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Total Expenses    </label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Booking Specials </label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
<label >Net Profit / Loss </label>
<br>
<input class="form-control"  type="text"  name="dseq" style="width: 170%;" required> 
<br>
</div>

    </div>     

</div>
<br>
<div style="padding-left: 1%;"><button  type="submit" class="btn btn-success"  >  Generate</button></div>
</form>



</div>
</div>

   </body>
   </html>