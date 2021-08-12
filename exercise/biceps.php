
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
		<title>Fitness First/Biceps</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-moveleft">
	<div class="container" id="con2">
	        <div id="h"><p id="Modal">BICEPS: Exercises, Anatomy<br> And Tips!</p></div>
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
			<p id="p1">Biceps & Traps Anatomy<br><br>all Biceps exercise include</p>
		   <img src="../content/images/biceps_1.gif" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Biceps Brachii,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/biceps_2.jpg" height="100%" width="100%">
            </div>
			</div>
			<div class="card effect__hover" id="c3">
			 <div class="card__front">
			<p id="p2">Pronator Teres,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/biceps_3.png" height="100%" width="100%">
            </div>
			</div>
			<h1 id="h1">BICEPS EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Barbell Curl</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Possibly the best biceps exercise! With your hands shoulder-width apart, grip a barbell with an underhand grip. Stand straight up with your shoulders squared and with your feet shoulder-width apart. Let the bar hang down at arm's length in front of you, with your arms, shoulders and hands in a straight line. WITHOUT leaning back or swinging the weight, curl the bar up toward your chest in an arc. Keep your elbows in the same place and close to your sides. 
		   Bring the weight up as high as you can and squeeze the biceps at the top. Lower the weight slowly, resisting all the way down until your arms are nearly straight.<br><br><a href="../video-learning/biceps/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/biceps_4.png" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/biceps_5.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Hammer Curls</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>With a dumbbell in each hand, stand with your arms hanging at your sides, palms facing each other. Keep your elbows locked into your sides. Your upper body and elbows should remain in the same place during the whole lift. Keeping your palms facing each other, curl the weight in your right hand up in a semi-circle toward your right shoulder.
		   Squeeze the biceps hard at the top of the lift and then slowly lower. Do not turn your wrists during this lift! You can also do one arm at a time and/or alternate.<br><br><a href="../video-learning/biceps/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/biceps_6.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/biceps_7.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">Overhead Cable Curl</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Attach the stirrup attachment to two overhead cable pulleys. Stand between them and grasp the handles with an underhand grip. Hold your arms straight out to your sides so your body is forming a "T" and put your hands at about the same height as your head. With your elbows staying in the same place, curl your hands toward your shoulders. Your elbows should not go up or down, 
		   and they should not go forward! Squeeze for a moment and return to the starting position.<br><br><a href="../video-learning/biceps/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/biceps_8.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/biceps_9.jpg" height="100%" width="100%">
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
			<nav class="outer-nav right vertical">
				<a href="./neck.php">NECK</a>
				<a href="./lats.php">LATS</a>
				<a href="./shoulder.php">SHOULDER</a>
				<a href="./chest.php">CHEST</a>
				<a href="./triceps.php">TRICEPS</a>
				<a href="./biceps.php">BICEPS</a>
				<a href="./mid-back.php">MID-BACK</a>
				</nav>
				
				<nav class="outer-nav right2 vertical">
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