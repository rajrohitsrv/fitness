
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
		<title>Fitness First/NECK</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-moveleft">
	<div class="container" id="con1">
	        <div id="h"><p id="Modal">Neck & Traps: Exercises, Anatomy<br> And Tips!</p></div>
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
			<p id="p1">Neck & Traps Anatomy<br><br>all neck exercise include traps exercise</p>
		   <img src="../content/images/neck_1.gif" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Levator Scapulae,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/neck_3.gif" height="100%" width="100%">
            </div>
			</div>
			<div class="card effect__hover" id="c3">
			 <div class="card__front">
			<p id="p2">Upper Trapezius,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/neck_2.gif" height="100%" width="100%">
            </div>
			</div>
			<h1 id="h1">NECK & TRAPS EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Isometric Neck Exercise - Front And Back</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> You can perform this exercise seated or standing. Place your head and neck in a neutral position. Place both your left hand on the on the left side of your head and gently push for the required number of seconds on your workout. Resist any movement of your head by "isometrically" contracting your neck muscles. Repeat with your right hand on the right side of your head.
         This is an excellent way to strengthen your neck muscles with minimal risk of injury. Can also be done on the front and back of the head.<br><br><a href="../video-learning/neck&traps/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/neck_4.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/neck_5.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Lying Face Down Plate Neck Resistance</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Lie face down with shoulders about even with the end of a flat bench. Place a barbell plate on the back of your head and hold it in place with your hands. Raise head up and back in a semicircular motion as far as 
			comfortable. Return to starting position.<br><br><a href="../video-learning/neck&traps/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/neck_6.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/neck_7.png" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">Seated Head Harness Neck Resistance</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Place the desired weight on chain attached to the head harness. Sit on a flat bench with your feet firmly on the floor. Lean forward slightly so the plate hangs free. Place your hands on your knees. 
		   Raise head up and back in a semicircular motion as far as comfortable. Can be done standing as well.<br><br><a href="../video-learning/neck&traps/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/neck_8.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/neck_9.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="4">
			   <h1 id="h2">Barbell Shrug</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Hold a barbell with both hands in front of you with your hands a little wider than shoulder width apart. Keep your feet at shoulder width. Stand straight up with the bar hanging at arms length. Droop shoulders down as much as possible to start. Raise your shoulders up as far as you can go. You can also rotate your shoulders as you go up, going in a semicircular motion from front to rear.
		   Then slowly return to the starting position. Can also be down with dumbbells.<br><br><a href="../video-learning/neck&traps/4.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i>  </p>
			   <div class="cardl__front">
            <img src="../content/images/traps_1.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/traps_2.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="5">
			 <h1 id="h2">Snatch Pull</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> These are just like the Power Clean except that you start from a hanging position and you do not catch it at the top.
		   Check out the Power Clean for more info.<br><br><a href="../video-learning/neck&traps/5.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
		   <div class="cardl__front">
            <img src="../content/images/traps_3.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/traps_4.jpg" height="100%" width="100%">
            </div>
		  </div>
		   
			  <div class="cardl effect__random" data-id="6">
			  <h1 id="h2">Upright Cable Row</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>Standing upright, grasp a straight bar connected to a cable machine with your hands about shoulder width apart. Let the bar hang straight down in front of you. Keep your body and wrists straight. Pull the bar straight up toward your chin, keeping it close to your body. 
		   Concentrate on either pulling with your traps or the front of your shoulders, depending on what you want to work most. Lower slowly to the starting position. Don't cheat by leaning forward or backward. Don't swing!<br><br><a href="../video-learning/neck&traps/6.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
          <div class="cardl__front">
            <img src="../content/images/traps_5.png" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/traps_6.jpg" height="100%" width="100%">
            </div>			 
			 </div>
			  <div class="footer" style="margin:230vw 0; position:absolute;">
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
var bod2=document.getElementById("con1");

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