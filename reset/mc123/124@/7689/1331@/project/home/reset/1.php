<?php
	
	if(isset($_POST["reset-password"])) {
		
			$conn = mysqli_connect("localhost", "root", "", "dbtest");
		$sql = "UPDATE `dbtest`.`users` SET `userPass` = '" . md5($_POST["pass"]). "' WHERE `users`.`userEmail` = '" . $_POST["name"] . "'";
		$result = mysqli_query($conn,$sql);
		$success_message = "Password is reset successfully.You can login now.";
		
	}
	  




?>
<!DOCTYPE html>
<html>
<head>
<title>
Reset Password
</title>
<link rel="stylesheet" href="../../../../../../../../content/css/index.css">
<link rel="stylesheet" href="../../../../../../../../content/css/reset.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
 
 <div id="sc_msg"><?php if(!empty($success_message)) { ?>
	<div class="success_message"><?php echo $success_message; ?></div>
	<?php } ?></div>

	 <div id="error_msg"><div id="validation-message">
		<?php if(!empty($error_message)) { ?>
	<?php echo $error_message; ?>
	<?php } ?>
	</div>
	</div>
	<div id="error_msg"> 
	<?php if(!empty($error)) { ?>
	<?php echo $passErro; ?>
	<?php } ?>
	</div>
 <form name="frmReset" method="post" action="./reset_password.php" autocomplete="off" class="form3" style="margin-top:2.8vw;" onSubmit="return validate_password_reset();">
 <input type="password" name="pass" placeholder="Enter Your New Password"   id="member_password"/ >
<input type="password" name="pass2" placeholder="Conform your Password"  id="confirm_password"/ > 
<button type="submit"  name="reset-password" style="color:rgb(40, 96, 144); background-color:#6bd2f4;">Reset</button> 
 </form>
</div>
</div>
</div>
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
	
	if((document.getElementById("member_password").length < 6){
		document.getElementById("validation-message").innerHTML = "Yor password Have at leset six character."
		return false;
}
	return true;
}
</script>
</body>

</html>