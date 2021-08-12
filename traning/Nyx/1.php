
<?php
	ob_start();
	session_start();
	require_once '../../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location:../../index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nyx/ENDURANCE</title>
		<link rel="stylesheet" href="../../content/css/workout.css">
		<link rel="stylesheet" href="../../content/css/tr.css">
		<link rel="stylesheet" type="text/css" href="../../content/css/component.css" />
		<link rel="stylesheet" href="../../content/css/top-nav.css">
	   <link rel="stylesheet" href="../../content/css/footer.css">
		<script src="../../content/js/modernizr.custom.25376.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
		<div id="perspective" class="perspective effect-movedown">
	<div class="container" id="con2">
	        <div id="h"><p id="Modal">Nyx exercise</p></div>
	<div class="wrapper"><!-- wrapper needed for scroll -->
	<div class="nav2" >
     <ul>
	 <li style=" margin:-0.8vw 40vw; position:absolute;"><img src="../../content/images/logo.png" height="110px" width="230px"></li>
	  <li id="so" style=" margin:-1vw 0vw;"><span class="fa fa-bars" id="showMenu"></span></li>
	 <li id="so" style=" margin:-1vw 20vw;"><span class="fa fa-user"></span>&nbsp;Hi'&nbsp;<?php echo $userRow['userName']; ?>&nbsp;<i class="fa fa-caret-down" id="myBtn"></i></li>
      <li style="margin:-1vw 0vw; float:left;"><a href="../../home.php" style= ""><span class="fa fa-home" ></span></a></li>
	 </ul>
	 </div>
			 <div class="sob" id="myModal" style="margin-left:63vw; margin-top:-6vw;  position:absolute;">
					<a href="../../logout.php?logout"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
					<i class="up"><i class="fa fa-caret-up" id="normal"></i></i>
					</div>			
			
<div class="nav-roll" style="width:100%;">
<ul>
<li><a href="./1.php">ENDURANCE</a></li>
<li><a href="./2.php">STANDARD</a></li>
<li><a href="./3.php">STRENGTH</a></li>
<li><a href="../../traning.php">Back to main page</a></li>
</ul>
</div>
<h1>Nyx<br>
<span style="color:#f8f80c; font-size:2vw;">ENDURANCE</span>
</h1>
<p id="p1">
<span style="color:#33b1ef;"> Type :</span> Endurance<br>
<span style="color:#33b1ef;"> Level :</span> Beginners<br>
<span style="color:#33b1ef;"> Equpment :</span> Body only<br>
<span style="color:#33b1ef;"> Total Round :</span> 5<br>
Please note! Every round contain some numbers of repitation and its decreased after compleating the all exercise by 5 after rest one is compleated ,as given as below:
</p>
		
<div class="video">
<video width="100%" height="100%"  controls >
  <source src="../../movies/cr1.mp4" type="video/mp4">
</video>

<p id="pv"><span style="color:#33b1ef;"> Crunches  </span><br>

<span style="color:#33b1ef;">Round 1.</span> Repeate all exercise 25 time until rest<br>
<span style="color:#33b1ef;">Round 2.</span> Repeate all exercise 20 time until rest<br>
<span style="color:#33b1ef;">Round 3.</span> Repeate all exercise 15 time until rest<br>
<span style="color:#33b1ef;">Round 4.</span> Repeate all exercise 10 time until rest<br>
<span style="color:#33b1ef;">Round 5/</span> Repeate all exercise 05 time until rest<br>
</p>

</div>		
		
<div class="video" id="v2">
<video width="100%" height="100%"   controls >
  <source src="../../movies/rr.mp4" type="video/mp4">
</video>
<p id="pv"><span style="color:#33b1ef;"> HH leg Raises </span> <br>

<span style="color:#33b1ef;">Round 1.</span> Repeate all exercise 25 time until rest<br>
<span style="color:#33b1ef;">Round 2.</span> Repeate all exercise 20 time until rest<br>
<span style="color:#33b1ef;">Round 3.</span> Repeate all exercise 15 time until rest<br>
<span style="color:#33b1ef;">Round 4.</span> Repeate all exercise 10 time until rest<br>
<span style="color:#33b1ef;">Round 5/</span> Repeate all exercise 05 time until rest<br>
</p>
</div>		
	
<div class="video" id="v3">
<video width="100%" height="100%"  controls >
  <source src="../../movies/stand1.mp4" type="video/mp4">
</video>
<p id="pv"><span style="color:#33b1ef;"> HH standups</span>  <br>

<span style="color:#33b1ef;">Round 1.</span> Repeate all exercise 25 time until rest<br>
<span style="color:#33b1ef;">Round 2.</span> Repeate all exercise 20 time until rest<br>
<span style="color:#33b1ef;">Round 3.</span> Repeate all exercise 15 time until rest<br>
<span style="color:#33b1ef;">Round 4.</span> Repeate all exercise 10 time until rest<br>
<span style="color:#33b1ef;">Round 5/</span> Repeate all exercise 05 time until rest<br>
</p>
</div>	
		
<div class="video" id="v4">

<p id="pv" style="margin-top:10vw;"><span style="color:#33b1ef;"> Rest </span><br> 
Rest for one minute
</p>

</div>			
		
		
			 			
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav top2 horizontal">
				<a href="../Aphrodite/1.php">Aphrodite</a>
				<a href="../Ares/1.php">Ares</a>
				<a href="../Athena/1.php">Athena</a>
				<a href="../Dione/1.php">Dione</a>
				<a href="../Krio/1.php">Krios</a>
				<a href="../Metis/1.php">Metis</a>
				<a href="../Morpheus/1.php">Morpheus</a>
				<a href="../Nyx/1.php">Nyx</a>
				<a href="../Persephone/1.php">Persephone</a>
				<a href="../Prometheus/1.php">Prometheus</a>
				<a href="../Zeus/1.php">Zeus</a>
				
				
				</nav>
		</div><!-- /perspective -->
		<script src="../../content/js/classie.js"></script>
		<script src="../../content/js/menu.js"></script>
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