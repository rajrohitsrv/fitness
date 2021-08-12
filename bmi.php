
<!DOCTYPE html>
<html>
	<head>
		<title>Fitness First/Bmi</title>
		<link rel="stylesheet" type="text/css" href="./content/css/component.css" />
		<link rel="stylesheet" href="./content/css/bmi.css">
		<link rel="stylesheet" href="./content/css/top-nav.css">
		<link rel="stylesheet" href="./content/css/footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="./content/js/modernizr.custom.25376.js"></script>
	<script rel="javascript">
function computeBMI() {
      //Obtain user inputs
     var height = Number(document.getElementById("height").value);
     var heightunits = document.getElementById("heightunits").value;
     var weight = Number(document.getElementById("weight").value);
     var weightunits = document.getElementById("weightunits").value;


     //Convert all units to metric
     if (heightunits == "inches") height /= 39.3700787;
	 if (heightunits == "centimeters") height /= 100;
     if (weightunits == "lb") weight /= 2.20462;

     //Perform calculation
     var BMI = weight / Math.pow(height, 2);
     //Display result of calculation
document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
     if (BMI < 18.5) document.getElementById("comment").innerHTML = "Underweight";
     if (BMI >= 18.5 && BMI <= 24.9) document.getElementById("comment").innerHTML = "Normal";
     if (BMI >= 25 && BMI <= 29.9) document.getElementById("comment").innerHTML = "Overweight";
     if (BMI > 29.9) document.getElementById("comment").innerHTML = "Obses";
     document.getElementById("answer").value = output;
 }
 </script>
	</head>
	<body>
		<div id="perspective" class="perspective effect-laydown">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
				<div class="column"><button>Show Menu</button></div>
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
					<div class="cont">
					<p id="p">KNOW YOUR BODY MASS INDEX</p>
					<p id="p1"><span style="color:#43DFF7; font-size:1.8vw; text-shadow:2px 2px 4px #FAF3BC;">What is "BMI" ? & IT's importance!</span><br><br>
Body mass index (BMI) is a statistical measure of your weight scaled according to your height. It is a simple index of weight-for-height and is widely used by medical, health and fitness professionals to classify underweight, overweight and obesity in adults. BMI is a useful tool and for most individuals is an accurate way to classify weight, but it should be used along with other measurements as it does have limitations. However, you can calculate their BMI without the use of expensive equipment or special knowledge.<br><br>
BMI is calculated by dividing weight (in kilograms) by height (in meters) squared. The World Health Organization defines overweight as a BMI of 25.0 to 29.9 and obesity as a BMI greater than 30. A BMI value of 19.5 to 24.9 is considered normal, and less than 18.5 is defined as underweight.<br><br>
Before BMI was commonly used, health professionals calculated ideal body weight for women using a simple mathematical formula. A weight of 100 lb. was allotted for the first five feet of height, and 5 lb. was added for every additional inch of height. This system was limited because it was based on the concept of one ideal weight for all women of a given height.
</p>
 <div class="card effect__hover">
 <div class="card__front">
 <p id="p2">calculate your,<br>
			 <span style="font-size:7vw; text-decoration:underline;">BMI</span><br>here.
			 </p>
 </div>
   <div class="card__back">
    <h1 id="h1">Body Mass Index Calculator</h1>
  <p id="lp">Height</p>
        <input type="text" class="put1" placeholder="Enter your height:" id="height" >
        <select type="multiple" class="sel1" id="heightunits">
            <option value="metres" selected="selected">metres</option>
			<option value="centimeters">centimeters</option>
            <option value="inches">inches</option>
        </select>
    </p>
    <p><p id="lp2">Weight</p>
        <input type="text" class="put2" placeholder="Enter your weight:" id="weight" />
        <select type="multiple" class="sel2" id="weightunits">
            <option value="kg" selected="selected">kilograms</option>
            <option value="lb">pounds</option>
        </select>
    </p>
    <input type="button" class="but" value="computeBMI" onclick="computeBMI()"/>
     <h1 id="h2">Your BMI is  <span style="color:#06FCEB; text-shadow:2px 2px 4px grey; font-size:28px;" id="output"></span></h1>

    <h1 id="h3">This means you are  <span style="color:#06FCEB; text-shadow:2px 2px 4px grey; font-size:28px;" id='comment'></span> </h1> 
   </div>

 </div>
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
			<nav class="outer-nav top horizontal">
				<a href="./index.php" >Home</a>
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