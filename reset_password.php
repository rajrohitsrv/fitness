<?php
	if(isset($_POST["reset-password"])) {
		$conn = mysqli_connect("localhost", "root", "", "dbtest");
		$sql = "UPDATE `dbtest`.`users` SET `userPass` = '" . md5($_POST["member_password"]). "' WHERE `users`.`userEmail` = '" . $_GET["name"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully. you can now login.<br> <div class='login'> <a href='./index.php'>login here<i class='fa fa-arrow-right'></i></a></div>";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>bjhvhj</title>
<link rel="stylesheet" href="./content/css/index.css">
<link rel="stylesheet" href="./content/css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script>
function validate_password_reset() {
	if((document.getElementById("member_password").value == "") && (document.getElementById("confirm_password").value == "")) {
		document.getElementById("validation-message").innerHTML = "Please enter new password!"
		return false;
	}
	if(document.getElementById("member_password").value  != document.getElementById("confirm_password").value) {
		document.getElementById("validation-message").innerHTML = "Both password should be same!"
		return false;
	}
	
	if(document.getElementById("member_password").value.length   < 6 ){
		document.getElementById("validation-message").innerHTML = "Password contain at least 6 characters !"
		return false;
	}
	return true;
}
</script>
<body>
<div class="wrapper">
<ul>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
<li style="opacity:0.6"></li>
</ul>
<div id="rcir"></div>
<div class="r-modal">
<div class="r-modal-content" style="text-align:center;">
<p id="m_f" style="text-align:center;"><i class=" fa fa-refresh ">  Reset Your Password!</i></p>
 <span style="color:#6bd2f4; font-size:1.5vw; text-align:center;">Enter your New Password to reset it:</span>

 <form name="frmReset"  method="post" autocomplete="off" class="form3" style="margin-top:2.8vw;" onSubmit="return validate_password_reset();">
	<div class="login">
	<div id="sc_msg"><?php if(!empty($success_message)) { ?>
	<?php echo $success_message; ?>
	<?php } ?></div></div>

	<div id="error_msg">
	<div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>
</div>

		<input type="password" name="member_password" id="member_password" placeholder="Enter Your New Password">
		<input type="password" name="confirm_password" id="confirm_password" placeholder="Conform your Password">
		<button type="submit"  name="reset-password"    id="reset-password"     value="Reset Password" style="color:rgb(40, 96, 144); background-color:#6bd2f4;">Reset</button> 

</form>
</div>
</div>
</div>
	</body>	
</html>	