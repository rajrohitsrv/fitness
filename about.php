<!DOCTYPE html>
<html>
	<head>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="./content/css/component.css" />
		<link rel="stylesheet" href="./content/css/about.css">
		<link rel="stylesheet" href="./content/css/top-nav.css">
		<link rel="stylesheet" href="./content/css/footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="./content/js/modernizr.custom.25376.js"></script>
		
	</head>
	<body>
		<div id="perspective" class="perspective effect-rotateleft">
			<div class="container">
		
				<div class="wrapper"><!-- wrapper needed for scroll -->
				<div class="column"><p><button>Show Menu</button></p></div>
	<div class="nav2" >
     <ul>
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="./content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-bars" id="showMenu"></span></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="./index.php" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
			 <div class="sob" id="myModal" style="margin:6.9vw 63vw;">
					<a href="logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>			
					<div class="container1">
					<h1>A few words about us</h1>
					 <div class="cir"></div>
					 <p id="p1"> We here in fitness first provide world class exercises .<br><br>These exercise are the best for live fit
We will soon launch the yoga classes and sport fitness. Gym fitness ,yoga classes and sports fitness are perfect for a fitness boost  and not only great for our returning clients but for our new clients who just want a quick boost rather than an intensive week.<br>
Finally, Our edition have nutrition advices. That guide our old and new clients to live perfect and long life  as well as attract new clients to join us.<br> <br>
<span style="color:#43DFF7; text-shadow:2px 2px 4px grey; font-size:30px;">"Our 3 mantra to fit"-</span>
<br><br>
<span style="color:#ff7a45;text-shadow:4px 4px 8px #68fa57;" >Dedication </span>- 
<span style="color:#e1ed39; text-shadow:4px 4px 8px #43DFF7;">Motivation</span>-
<span style="color:#68fa57;text-shadow:4px 4px 8px #ff7a45;">Transformation</span>
</p>
				
</div>	
<div class="footer" style="margin:48.2vw 0; position:absolute;">
<div class="fo-wrapper">
<h1>Contact With Us</h1>
<p id="p1" style="margin:7vw 4vw">Mobile number:+91 7042561593<br>Alternet number:+91 7011195854<br>
	 E-mail id:<span style="color:#0fcddb">right.vella@gmail.com</span><br>Alternet Id:<span style="color:#0fcddb">rohit.rajsrivastva@gmail.com</span></p>
	 <p id="p2" style="margin:15vw 0">&copy 2016 fitness first. All Rights Reserved.</p>
	 <div class="fo-nav">
	 <ul>
	   <li><a href="./index.php">Home</a></li>
	   <li><a href="./about.php">About</a></li>
	   <li><a href="./exercise.php">Exercise</a></li>
	   <li><a href="./bmi.php">Bmi</a></li>
	   
	   </ul>
	   </div>
	 </div>
</div>				
				
				</div><!-- wrapper -->
				
			</div><!-- /container -->
		
			
			<nav class="outer-nav right vertical">
				<a href="./index.php">Home</a>
				<a href="./about.php" >About</a>
				<a href="./exercise.php">Exercise</a>
				<a href="./bmi.php">Bmi</a>
				<a href="./traning.php">Workouts</a>
			</nav>
		</div><!-- /perspective -->
		<script src="./content/js/classie.js"></script>
		<script src="./content/js/menu.js"></script>
		<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var bod=document.getElementById("normal");


// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}


bod.onclick = function(){
	modal.style.display="none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
	</body>
</html>
<?php ob_end_flush(); ?>