<?php

	ob_start();
	session_start();
	require_once '../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: ../index.html");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fitness First/Forearms</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-rotatetop">
	<div class="container" id="con2">
	        <div id="h"><p id="Modal">FOREARMS: Exercises, Anatomy<br> And Tips!</p></div>
	<div class="wrapper"><!-- wrapper needed for scroll -->
	<div class="nav2" >
     <ul>
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="../content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-bars" id="showMenu"></span></li>
	 <li id="so" style=" margin:-1vw 20vw;"><span class="fa fa-user"></span>&nbsp;Hi'&nbsp;<?php echo $userRow['userName']; ?>&nbsp;<i class="fa fa-caret-down" id="myBtn"></i></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="../index.html" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
			 <div class="sob" id="myModal" style="margin:6.9vw 63vw;">
					<a href="../logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>			
			
			<div class="card" id="c1">
			<p id="p1">forearms Anatomy<br><br>all forearms exercise included</p>
		   <img src="../content/images/forearma_1.gif" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Brachialis,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/triceps_2.png" height="100%" width="100%">
            </div>
			</div>
			<div class="card effect__hover" id="c3">
			 <div class="card__front">
			<p id="p2">Brachioradialis,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/forearma_2.jpg" height="100%" width="100%">
            </div>
			</div>
			<h1 id="h1">FOREARMS EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Palms-Down Dumbbell Wrist Curl Over A Bench</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>Place two dumbbells beside a flat bench and then kneel on the opposite side of the bench. Hold dumbbells with your palms down. Place forearms flat on the bench with the back of your wrists on the edge of the bench. Lower dumbbells as far as possible, 
		   keeping a tight grip. Curl dumbbells up as high as possible. Do not let your forearms move! Can also be done with a barbell.<br><br><a href="../video-learning/forearms/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/forearma_3.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/forearma_4.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Palms-Down Wrist Curl Over A Bench</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Place a barbell beside a flat bench and the kneel on the other side of the bench. Hold the bar palms down with your hands about 16 inches apart. Place your forearms flat on the bench and put the back of your wrists on the edge of the bench. Lower bar as far as possible, then curl bar up as high as possible. 
		   Do not move your forearms! Can also be done with two dumbbells.<br><br><a href="../video-learning/forearms/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/forearma_5.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/forearma_6.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">Palms-Up Barbell Wrist Curl Over A Bench</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Place a barbell beside a flat bench and the kneel on the other side of the bench. Hold the bar palms up with your hands about 16 inches apart. Place your forearms flat on 
		   the bench and put the back of your wrists on the edge of the bench. Lower bar as far as possible, then curl bar up as high as possible. Do not move your forearms! Can also be done with two dumbbells.<br><br><a href="../video-learning/forearms/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/forearma_7.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/forearma_8.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="footer" style="margin:130vw 0; position:absolute;">
<div class="fo-wrapper">
<h1>Contact With Us</h1>
<p id="p1" style="margin:7vw 4vw">Mobile number:+91 7042561593<br>Alternet number:+91 7011195854<br>
	 E-mail id:<span style="color:#0fcddb">right.vella@gmail.com</span><br>Alternet Id:<span style="color:#0fcddb">rohit.rajsrivastva@gmail.com</span></p>
	 <p id="p2" style="margin:15vw 0">&copy 2016 fitness first. All Rights Reserved.</p>
	 <div class="fo-nav">
	 <ul>
	   <li><a href="../index.html">Home</a></li>
	   <li><a href="../about.php">About</a></li>
	   <li><a href="../exercise.php">Exercise</a></li>
	   <li><a href="../bmi.php">Bmi</a></li>
	   
	   </ul>
	   </div>
	 </div>
</div>				
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav bottom horizontal">
				<a href="./neck.php">NECK</a>
				<a href="./lats.php">LATS</a>
				<a href="./shoulder.php">SHOULDER</a>
				<a href="./chest.php">CHEST</a>
				<a href="./triceps.php">TRICEPS</a>
				<a href="./biceps.php">BICEPS</a>
				<a href="./mid-back.php">MID-BACK</a>
				<a href="./low-back.php">LOW-BACK</a>
				<a href="./forearms.php">FOREARMS</a>
				<a href="./glutes.php">GLUTES</a>
				<a href="./abs.php">ABS</a>
				<a href="./quads.php">QUADS</a>
				<a href="./hamstrings.php">HAMSTRINGS</a>
				<a href="./calves.php">CALVES</a>
				
				</nav>
		</div><!-- /perspective -->
		<script src="../content/js/classie.js"></script>
		<script src="../content/js/menu.js"></script>
		<script src="../content/js/flip.js"></script>
				<script>
var modal2 = document.getElementById('Modal');
var btn2 = document.getElementById("showMenu");
var bod2=document.getElementById("con2");

btn2.onclick = function() {
    modal2.style.display = "block";
}
bod2.onclick = function(){
	modal2.style.display="none";
}
//next
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var bod=document.getElementById("normal");


// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}


bod.onclick = function(){
	modal.style.display="none";
}

</script>
	</body>
</html>
<?php ob_end_flush(); ?>