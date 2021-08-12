<?php
	ob_start();
	session_start();
	require_once '../../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: ../../index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<title>Seated Head Harness Neck Resistance</title>
<link rel="stylesheet" type="text/css" href="../../content/css/videos.css" />
<link rel="stylesheet" href="../../content/css/top-nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../content/js/modernizr.custom.25376.js"></script>
   <link rel="stylesheet" href="../../content/css/footer.css">
</head>
<body>
<div class="layer1" id="con3">
<div class="nav2"  >
     <ul style="width:98.9%">
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="../../content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-angle-double-down" id="showMenu"></span></li>
	 <li id="so" style=" margin:-1vw 20vw;"><span class="fa fa-user"></span>&nbsp;Hi'&nbsp;<?php echo $userRow['userName']; ?>&nbsp;<i class="fa fa-caret-down" id="myBtn"></i></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="../../home.php" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
	 <div class="sob" id="myModal" style="margin:6.9vw 63vw;">
					<a href="../../logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>	
<div class="nav-roll" id="Modal">
<ul>
<li><a href="./1.php">Isometric Neck Exercise - Front And Back</a></li>
<li><a href="./2.php">Lying Face Down Plate Neck Resistance</a></li>
<li><a href="./3.php">Seated Head Harness Neck Resistance</a></li>
<li><a href="./4.php">Barbell Shrug</a></li>
<li><a href="./5.php">Snatch Pull</a></li>
<li><a href="./6.php">Upright Cable Row</a></li>
<li><span class="fa fa-angle-double-up" id="hide"></span></li>
</ul>
</div>	

<div class="wrap"></div>
<div class="box">

<h1>Seated Head Harness Neck Resistance</h1>
<p><span style="color:#f8f80c;">Exercise Data</span><br><br>Type: <span style="color:#33b1ef;">Strength</span><br>
Main Muscle Worked: <span style="color:#33b1ef;">Neck</span><br>
Equipment:<span style="color:#33b1ef;">Weighted thing  with chain</span><br>
Level:<span style="color:#33b1ef;">Intermediate</span><br>
Total round:<span style="color:#33b1ef;"> 10 out of 10</span><br>
increase your numbers of round as you mastered it ,for biginner set total 10 rounds <br>for more effective result.</p>
<div class="video">
<video width="100%"  poster="../../content/images/neck_9.jpg" controls >
  <source src="../../content/video/neck3.mp4" type="video/mp4">
</video>
</div>
</div>

<div class="box2">
<div class="card"><img src="../../content/images/neck_8.jpg" height="100%" width="100%"></div>
<div class="card"> <img src="../../content/images/neck_9.jpg" height="100%" width="100%"></div>
<h1>Seated Head Harness Neck Resistance images</h1>
</div>
<div class="box3">
<h1>Guide</h1>
<p><span style="color:#f8f80c;">1.</span> Place a neck strap on the floor at the end of a flat bench. Once you have selected the weights, sit at the end of the flat bench with your feet wider than shoulder width apart from each other. Your toes should be pointed out.<br><br>
<span style="color:#f8f80c;">2.</span> Slowly move your torso forward until it is almost parallel with the floor. Using both hands, securely position the neck strap around your head.<span style="color:#f8f80c;"> Tip: </span>Make sure the weights are still lying on the floor to prevent any strain on the neck. Now grab the weight with both hands while elevating your torso back until it is almost perpendicular to the floor.
 <span style="color:#f8f80c;">Note:</span> Your head and torso needs to be slightly tilted forward to perform this exercise.<br>
<span style="color:#f8f80c;">3.</span> Now place both hands on top of your knees. This is the starting position.<br>
<span style="color:#f8f80c;">4.</span> Slowly lower your neck down until your chin touches the upper part of your chest while breathing in.<br>
<span style="color:#f8f80c;">5.</span> While exhaling, bring your neck back to the starting position. Repeat for the recommended amount of repetitions.<br>
<span style="color:#f8f80c;">Caution:</span>This exercise puts a lot of stress on the neck muscles and should be approached with caution. Any sudden jerk or movement can cause you to strain a neck muscle. It is best to practice the form at first without any weights to get used to the
 movements required for this exercise.

 </p>
 
 <a href="../../exercise/neck.php">Back to main page <i class="fa fa-arrow-right"></i></a>
 
<div class="rec"> Main Muscle<img src="../../content/images/1.gif" height="100%" width="100%"></div>
</div>

 <div class="footer" style="margin:113vw 0; position:absolute;">
<div class="fo-wrapper">
<h1>Contact With Us</h1>
<p id="p1" style="margin:7vw 4vw">Mobile number:+91 7042561593<br>Alternet number:+91 7011195854<br>
	 E-mail id:<span style="color:#0fcddb">right.vella@gmail.com</span><br>Alternet Id:<span style="color:#0fcddb">rohit.rajsrivastva@gmail.com</span></p>
	 <p id="p2" style="margin:15vw 0">&copy 2016 fitness first. All Rights Reserved.</p>
	 <div class="fo-nav">
	 <ul>
	   <li><a href="../../home.php">Home</a></li>
	   <li><a href="../../about.php">About</a></li>
	   <li><a href="../../exercise.php">Exercise</a></li>
	   <li><a href="../../bmi.php">Bmi</a></li>
	   
	   </ul>
	   </div>
	 </div>
	 </div>
	</div>
	
<script>
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
//next
var modal2 = document.getElementById('Modal');
var btn2 = document.getElementById("showMenu");
var bod2=document.getElementById("hide");

btn2.onclick = function() {
    modal2.style.display = "block";
}
bod2.onclick = function(){
	modal2.style.display="none";
}
</script>
</body>
</html>
<?php ob_end_flush(); ?>