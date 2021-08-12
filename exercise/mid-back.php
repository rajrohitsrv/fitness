
<?php
	ob_start();
	session_start();
	require_once '../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: ../index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fitness First/MID-BACK</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-movedown">
	<div class="container" id="con2">
	        <div id="h"><p id="Modal">MIDDLE BACK: Exercises, Anatomy<br> And Tips!</p></div>
	<div class="wrapper"><!-- wrapper needed for scroll -->
	<div class="nav2" >
     <ul>
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="../content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-bars" id="showMenu"></span></li>
	 <li id="so" style=" margin:-1vw 20vw;"><span class="fa fa-user"></span>&nbsp;Hi'&nbsp;<?php echo $userRow['userName']; ?>&nbsp;<i class="fa fa-caret-down" id="myBtn"></i></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="../index.php" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
			 <div class="sob" id="myModal" style="margin:6.9vw 63vw;">
					<a href="../logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>			
			
			<div class="card" id="c1">
			<p id="p1">middle-back Anatomy<br><br>all middle-back exercise included</p>
		   <img src="../content/images/Lats_2.jpg" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Rhomboids,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/mid-back_1.jpg" height="100%" width="100%">
            </div>
			</div>
			<div class="card effect__hover" id="c3">
			 <div class="card__front">
			<p id="p2">Rotator Cuff,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/lats_2.jpg" height="100%" width="100%">
            </div>
			</div>
			<h1 id="h1">MIDDLE BACK EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Bent Over Barbell Row</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Position your feet at about shoulder width. Bend over so your back is as close to parallel to the floor as you can and hold bar with an overhand grip and with hands a little wider than shoulder width. Keep legs slightly bent. Hold bar at arm's length straight down. Pull bar straight up to the lower part of your chest. Slowly lower bar back to starting position. 
		   Keep your head up and back straight at all times, and do NOT swing or use momentum to lift the weight!<br><br><a href="../video-learning/mid-back/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/mid-back_2.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/mid-back_3.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Seated Cable Rows</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Sit down at a low-pulley rowing machine with your feet flat against the footrests and your knees slightly bent. Bending only at the waist, lean forward and grasp the pulley handle in front of you. Your palms should be facing each other. Keep your back FLAT and looking forward, slowly draw the handles back to your stomach while simutaneously leaning back at the waist until your torso is prependicular to 
		   the floor. The handles should reach your stomach just as your upper body reaches the upright position. Slowly return to the starting position by leaning forward from the waist while extending your arms in front of you. TO ISOLATE YOUR LATS ONLY do not bend forward at all, just keep your back straight up and down and move only your arms and squeeze your back.<br><br><a href="../video-learning/mid-back/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/mid-back_4.gif" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/mid-back_5.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">T-Bar Row with Handle</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Straddle a T-bar rowing machine with your feet firmly on the ground. Using a narrow grip, hold the bar slightly off the ground so your back is straight and not hunched. Lift the bar up toward your body with your back by squeezing your shoulder blades together. Bring the weight up as high as you can, or until it touches your lower chest. Your elbows should be pointing up and slightly out as you lift. Return to the starting position in a slow,
		   controlled manner. You can also do a variation of this with just a barbell on the ground.<br><br><a href="../video-learning/mid-back/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/mid-back_6.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/mid-back_7.jpg" height="100%" width="100%">
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
	   <li><a href="../index.php">Home</a></li>
	   <li><a href="../about.php">About</a></li>
	   <li><a href="../exercise.php">Exercise</a></li>
	   <li><a href="../bmi.php">Bmi</a></li>
	   
	   </ul>
	   </div>
	 </div>
</div>				
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav top2 horizontal">
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