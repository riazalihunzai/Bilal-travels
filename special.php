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
<div style="background-color: #229954"><h4 class="glyphicon glyphicon-globe"  style="color: white;padding-left: 3%;"> Special Booking</h4></div><br>




</div>
</div>

   </body>
   </html>