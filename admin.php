<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery-ui/external/jquery/jquery.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
   <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.min.css">

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
            minDate:0,
            
        });

  } );
  </script>
	<title>Bilal Travels</title>
</head>



<style >
.alert-danger{

  display: none;
}


.pick{
	background-color:white;
	border-radius: 25px;
	opacity:0.8; 
	color:#2980B9;
}

.dropdown{
	display: none;
}
#footersmall{
	display: none;
}
.mytext{

	align-content: center;

}
.nav-pills > li > a:hover {
  background-color: #F4D03F;
  text-decoration: none;
}

@media screen and (max-width: 1000px ) {
.nav-pills{
	font-size: 65%;
	display: none;
	
}
.nav-pills > li > a:hover {
  background-color: white;
  text-decoration: none;
}

.welcometext{
	font-size: 100%
}
.pick>h3{
font-size:90%;
}
label{
	font-size: 70%;
    padding-left: 40%;
}
option{
	font-size: 70%;

}

.datepicker{
	padding-left: 20%;
	padding-right: 17%;
	
}
.mybutton{
	padding-left: 40%;
}
.myoption{
	padding-left: 20%;
	padding-right: 25%;
}
h3{
	font-size: 80%;
}
#footer{
	display: none;
}
img{
	margin: auto;
    width: 70%;
    padding-left:28%;

     
}
.dropdown{
	padding-top: 10%;
	 display: block;
}
#footersmall{
	display: block;
}
.dropbtn {
    background-color: #F6F7F7;
    
    padding-bottom: 10%;
    font-size: 210%;
    border: none;
    cursor: pointer;
   
}



.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown a:hover {background-color: #F4D03F}
.show {display:block;}
.glyphicon-th-list{
 color:black;
}

}

</style>

<body>

<nav class="navbar navbar-default navbar-static-top top">
<br>
<div class="container " >     
<div class="row">  
<div class="col-md-6 logo">
<a href="index.php"><img src="logo.png" ></a>
</div>
<div class="col-md-6"> 
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn glyphicon glyphicon-th-list"></button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index.php"><p class="glyphicon glyphicon-home"> Home</p></a>
   <a href="contact.php"><p class="glyphicon glyphicon-phone-alt"> Contact</p></a>
    <a href="faq.php"><p class="glyphicon glyphicon-question-sign"> FAQ</p></a>
    <a href="about.php"><p class="glyphicon glyphicon-user"> About</p></a>
    <a href="https://bookme.pk/cargo"><p class="glyphicon glyphicon-gift"> Cargo</p></a>
  </div>
</div>
    
<br>       
  <ul class="nav nav-pills" role="tablist">
    <li class=""><a href="index.php"><p class="glyphicon glyphicon-home"> Home</p></a></li>
    <li class=""><a href="contact.php"><p class="glyphicon glyphicon-phone-alt"> Contact</p></a></li>
    <li class=""><a href="faq.php"><p class="glyphicon glyphicon-question-sign"> FAQ</p></a></li>
    <li class=""><a href="about.php"><p class="glyphicon glyphicon-user"> About</p></a></li>
    <li class=""><a href="https://bookme.pk/cargo"><p class="glyphicon glyphicon-gift"> Cargo</p></a></li>
       
  </ul>
  </div>
  </div>
</div>
</nav>
<br>

<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-3">
<form  method="POST">
<div class="form-group">
  <label style="color:#2980B9;">Admin</label><br>
  <input type="text" name="username" class="form-control" required >
  <br>
 <label style="color:#2980B9;">Password</label>
 <br>
 <input type="Password" name="password"  class="form-control"  required >
<br>
<button type="submit" class="btn btn-success" >Login</button>
</div>


</form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php 
$_SESSION["admin"]=$_POST['username'];
$_SESSION["pass"]=$_POST['password'];

?>
<?php
include ('check.php');

if($_SESSION["check"]=="green")
{  
  echo "<div class='alert alert-success ' role='alert'>Successfully Login</div>";
  
}
else if ($_SESSION["check"]=="red")
{
 echo "<script>alert('Incorrect Attempt')</script>";
}

?>


<div id="footer"  style="background-color: #586171;">
      <div class="container">
        <p class="footer-block" ><h3 style="color: white;text-align: center;"><b>YOU CAN FIND US ON SOCIAL NETWORKS</b></h3></p>  
         <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-5">
         <div class="footimg" style="display: inline-block;">
         
 <img src="facebook_2015_logo_detail.jpg" style="height: 20%; width: 20%;" /> 
 <img src="twitter_318-136405.jpg" style="height: 20%; width: 20%;" />
 <img src="New_Logo_Gmail.svg.png" style="height: 30%; width: 26%;" />
</div>
</div>
</div>

    </div>
     <p class="footer-block" ><h3 style="color: white;text-align: center;"><b>- IF YOU NEED HELP PLEASE CALL: 0313-7786888 -</b></h3></p>
    <br>
    </div>
 <div id="footersmall"  style="background-color: #586171;">
      <div class="container">
        <p class="footer-block" ><h3 style="color: white;text-align: center;"><b></b></h3></p>  
         <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-5">
         <div class="footimg" style="display: inline-block;">
 
</div>
</div>
</div>

    </div>
     <p class="footer-block" ><h3 style="color: white;text-align: center;"><b>- IF YOU NEED HELP PLEASE CALL: 0313-7786888 -</b></h3></p>
    <br>
    </div>
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body></html>

