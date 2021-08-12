
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
		<title>Fitness First/CHEST</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-laydown">
	<div class="container" id="con3">
	        <div id="h"><p id="Modal">CHEST: Exercises, Anatomy<br> And Tips!</p></div>
	<div class="wrapper"><!-- wrapper needed for scroll -->
	<div class="nav2" >
     <ul>
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="../content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-bars" id="showMenu"></span></li>
	 <li id="so" style=" margin:-1vw 20vw;"><span class="fa fa-user"></span>&nbsp;Hi'&nbsp;<?php echo $userRow['userName']; ?>&nbsp;<i class="fa fa-caret-down" id="myBtn"></i></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="../home.php" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
			 <div class="sob" id="myModal" style="margin:6.9vw 63vw;">
					<a href="../logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>			
			
			<div class="card" id="c1">
			<p id="p1">chest Anatomy<br><br>all chest exercise included</p>
		   <img src="../content/images/chest_1.gif" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Pectoralis Major,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/chest_2.png" height="100%" width="100%">
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
			<h1 id="h1">CHEST EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Barbell Bench Press - Medium Grip</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Lie on a flat bench and firmly position your feet flat on the floor a little more than shoulder width apart. Keep your back flat on the bench! Using a grip broader than shoulder width, hold the barbell above your body, then lower slowly to the middle of your chest. Without bouncing the weight off your chest, drive the barbell up 
		   over the middle of your chest until your arms are straight and your elbows are locked. Lower the bar down slowly.<br><br><a href="../video-learning/chest/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/chest_3.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/chest_4.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Dumbbell Flyes</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Sit down on a flat bench with a dumbbell in each hand. Then lie back, keeping the dumbbells close to your chest. Lift the dumbbells over your chest by extending your arms. Maintain a slight bend in your elbows. Keep your hips and shoulders flat on the bench and your feet on the floor. Lower the dumbbells to the sides of your body in an arc-like motion. At the lowest point, your bent elbows should be on a horizontal 
		   plane even with the bench. Slowly bring the weights back up over your chest in an arc. The bend in your elbows should stay the same throughout the exercise.<br><br><a href="../video-learning/chest/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/chest_5.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/chest_6.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">Pushups</h1>
			   <p id="p2" style="margin-top:2vw;"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Kneel down on the floor and place your hands flat on the floor and slightly wider than shoulder width apart. With your shoulders directly over your hands, straighten your arms. Move your feet back, placing your toes on the floor, so that your knees are off the floor and your legs are straight. At this point, your body should form a straight line from your shoulders to your ankles. Your body should remain straight throughout this exercise. Keep your head and neck in line with your body so that your are looking down toward the floor. This is the starting position. In a controlled fashion, lower your body down toward the floor, bending your elbows, 
		   until your body is nearly touching the floor. Now, push your body up away from the floor, straightening your arms, until you have returned to the starting position. If you need to reduce the intensity of this exercise you can perform the pushup from your knees.<br><br><a href="../video-learning/chest/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/chest_7.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/chest_8.jpg" height="100%" width="100%">
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
	   <li><a href="../home.php">Home</a></li>
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
var bod2=document.getElementById("con3");

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