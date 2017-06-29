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
    <li class="active"><a href="index.php"><p class="glyphicon glyphicon-home"> Home</p></a></li>
    <li class=""><a href="contact.php"><p class="glyphicon glyphicon-phone-alt"> Contact</p></a></li>
    <li class=""><a href="faq.php"><p class="glyphicon glyphicon-question-sign"> FAQ</p></a></li>
    <li class=""><a href="about.php"><p class="glyphicon glyphicon-user"> About</p></a></li>
    <li class=""><a href="https://bookme.pk/cargo"><p class="glyphicon glyphicon-gift"> Cargo</p></a></li>
       
  </ul>
  </div>
  </div>
</div>
</nav>


<div  style="background-image: url('download.jpg'); background-color:#cccccc; background-size: 50% 100% ;">


<div class="container" >
<div class="row">
<div class="col-md-7">
<br>
<br>
	<h1  class="welcometext" style="text-align: center;color: white;"><b style="font-size: 200%;">Welcome to Bilal Travels </b><br> Providing quality services at unbeatable rates.
With our services, you can easily order a bus ticket and be prepared for your trip in no time.</h1>
</div>

<div class="col-md-4">
<br>
<br>
<div class="pick">
<br>
<br>
<h3  align="center" ><b>Pick Your Destination<b></h3>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<form>
	<div class="form-group">
	<br>
    <label >Traveling From</label> 
  <br>
  <div class="myoption">
  <select class="form-control" id="sel1">
        <option>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Peshawar</option>
      </select>
      </div>
<br>
<label >Traveling To</label>
<div class="myoption">
  <select class="form-control" id="sel1" >
        <option>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Peshawar</option>
      </select>
      </div>
<br>
<label>Departure Date</label>
<div class="datepicker">
<input type="text"  name="datepicker" id="datepicker" style="width:80%;" required> <div  class="glyphicon glyphicon-calendar" ></div>
<br>
<br>
</div>
<div class="mybutton">
 <button  type="button" class="btn btn-success ">Search</button>
 <br>
  </div></div>
  
  </form>
  </div>
  </div>
  </div>
  <br>
<br>



  </div>
  </div>
  </div>

</div>
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
</body>
</html>