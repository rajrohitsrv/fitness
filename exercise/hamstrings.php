
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
		<title>Fitness First/Hamstrings</title>
		<link rel="stylesheet" href="../content/css/workout.css">
		<link rel="stylesheet" type="text/css" href="../content/css/component.css" />
		<link rel="stylesheet" href="../content/css/top-nav.css">
	   <link rel="stylesheet" href="../content/css/footer.css">
		<script src="../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-airbnb">
	<div class="container" id="con1">
	        <div id="h"><p id="Modal">HAMSTRINGS: Exercises, Anatomy<br> And Tips!</p></div>
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
			<p id="p1">hamstrings Anatomy<br><br>all hamstrings exercise included</p>
		   <img src="../content/images/gultes_1.gif"" height="100%" width="100%">
			</div>
			<div class="card effect__hover">
			 <div class="card__front">
			<p id="p2">Semitendinosus,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/ham_1.jpg" height="100%" width="100%">
            </div>
			</div>
			<div class="card effect__hover" id="c3">
			 <div class="card__front">
			<p id="p2">Psoas,<br>
			 <span style="font-size:5vw; text-decoration:underline;">Anatomy</span><br>here.
			 </p>
            </div>
            <div class="card__back">
			 <img src="../content/images/ham_2.jpg" height="100%" width="100%">
            </div>
			</div>
			<h1 id="h1">HAMSTRINGS EXERCISE<h1>
			  <div class="cardl effect__random" data-id="1">
			  <h1 id="h2">Barbell Lunge</h1>
			  <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span> Place a barbell on your upper back. Lift your chest up and look straight ahead. Position your right leg forward in a long stride. Your foot should be far enough in front of you so that when you bend your right knee, your thigh and lower leg form a right angle. Slowly bend your knees, lowering your hips so your rear knee just clears the floor. Pause briefly in this position, then slowly straighten your legs and raise your body back up to a standing position. Complete a full set, then switch legs and repeat,
		   or alternate legs for each rep. Make sure your knee does NOT travel past your toes in the down position! Can also be done with dumbbells in each hand instead of using a barbell.<br><br><a href="../video-learning/hamstrings/1.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i></p>
			   <div class="cardl__front">
            <img src="../content/images/quads_7.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/quads_8.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
		   <div class="cardl effect__random" data-id="2">
		   <h1 id="h2">Dumbbell Lunges</h1>
		    <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  Hold a dumbbell in each hand and pull your shoulders back. Lift your chest up and look straight ahead. Position your right leg forward in a long stride. Your foot should be far enough in front of you so that when you bend your right knee, your thigh and lower leg form a right angle. Slowly bend your knees, lowering your hips so your rear knee just clears the floor. Pause briefly in this position, then slowly straighten your legs
		   and raise your body back up to a standing position. Complete a full set, then switch legs and repeat, or alternate legs for each rep. Make sure your knee does NOT travel past your toes in the down position!<br><br><a href="../video-learning/hamstrings/2.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/ham_3.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/ham_4.jpg" height="100%" width="100%">
            </div>
			  </div>
			  
			  <div class="cardl effect__random" data-id="3">
			   <h1 id="h2">Flutter Kicks</h1>
			   <p id="p2"> <span style="color:#f8f80c; font-size:2vw;">Tips:</span>  On a step or platform, (or on your bed if you train at home) lie facedown with hips on the edge of the step, legs straight with toes resting lightly on the floor. (If you are using a bed, your legs will be off the edge and your feet high off the floor.) Squeeze your glutes and hamstrings and straighten the legs until they are level 
		   with the hips. Lift one leg higher then the other and alternate. Move each leg as though you are doing a flutter kick in water. Try doing 3 sets of 20 repetitions on each leg.<br><br><a href="../video-learning/hamstrings/3.php">Know More</a>&nbsp;<i class="fa fa-angle-double-right"></i> </p>
			  <div class="cardl__front">
            <img src="../content/images/ham_5.jpg" height="100%" width="100%">
			</div>
            <div class="cardl__back">
              <img src="../content/images/ham_6.jpg" height="100%" width="100%">
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
			<nav class="outer-nav left vertical">
				<a href="./neck.php">NECK</a>
				<a href="./lats.php">LATS</a>
				<a href="./shoulder.php">SHOULDER</a>
				<a href="./chest.php">CHEST</a>
				<a href="./triceps.php">TRICEPS</a>
				<a href="./biceps.php">BICEPS</a>
				<a href="./mid-back.php">MID-BACK</a>
				</nav>
				<nav class="outer-nav left2 vertical">
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