<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
.alertO {
  padding: 10px;
  background-color: #13CE5E;
  color: white;
}
.alerte {
  padding: 10px;
  background-color: #f44336;;
  color: white;
}
</style>
</head>
<body>

<script>


</script>

<?php include 'include/config.php'; ?>
<?php

    if(isset($_POST['save']))
        {
$first_name = mysqli_real_escape_string($conn, $_REQUEST['Fname']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['Lname']);
$username= mysqli_real_escape_string($conn, $_REQUEST['username']);
$rssb= mysqli_real_escape_string($conn, $_REQUEST['rssb']);
$email=mysqli_real_escape_string($conn,$_REQUEST['email']);
$password= mysqli_real_escape_string($conn, $_REQUEST['password']);
$re_password= mysqli_real_escape_string($conn, $_REQUEST['re-password']);



// Include library file
require_once 'verifyEmail.class.php'; 

// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(20);

// Set debug output mode
$mail->Debug= FALSE; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('mignoneunguyeneza250@gmail.com');

// Email to check
$emaill = $email; 

// Check if email is valid and exist
if($mail->check($emaill)){






	if($password!=$re_password){
echo "<div class='alerte' id='helpdiv'> 
  <center>The passwords are not matching!<strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
}
elseif ($first_name==$last_name){
	
	echo "<div class='alerte' id='helpdiv'> 
  <center>firstname and lastname must be different!<strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
	
	
}
else{
	$sql_t = "SELECT * FROM user_registration WHERE USERNAME='$username' or EMAIL='$email' or RSSB = '$rssb'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
		echo "<div class='alerte' id='helpdiv'> 
  <center> It seems like we already have you in the system,<br>Double Check Your Username,Email or RSSB number and try again!<strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 6000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
	
		}
		else{


// Attempt insert query execution
$sql = "INSERT INTO create_account (FIRST_NAME, LAST_NAME,USERNAME,RSSB,EMAIL,PASSWORD)
VALUES ('$first_name', '$last_name','$username','$rssb','$email',PASSWORD('$password'))";

if(mysqli_query($conn, $sql)){
   
	echo "<div class='alertO' id='helpdiv'> 
  <center> Account created successfully <strong>&#10004</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
	
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}


	
    //echo 'Email &lt;'.$emaill.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){
	echo "<div class='alerte' id='helpdiv'> 
  <center>The email you entered is valid, but not exist!<strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
    //echo 'Email &lt;'.$emaill.'&gt; is valid, but not exist!'; 
}else{
	
	echo "<div class='alerte' id='helpdiv'> 
  <center>The email you entered is not valid and not exist!<strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";

    //echo 'Email &lt;'.$emaill.'&gt; is not valid and not exist!'; 
} 
}

    ?>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
				<span class="contact100-form-title">
					Create an account
				</span>

				
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="Fname" placeholder="First name"  pattern="[a-zA-Z]{1,}" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="Lname" placeholder="Last name"  pattern="[a-zA-Z]{1,}" required>
					<span class="focus-input100"></span>
				</div>
				

				
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="username" pattern="[a-zA-Z]{1,}"  placeholder="Username" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input">
					<input id="RSSB_number" class="input100" type="text" name="rssb" maxlength="9"   placeholder="RSSB Number (Only 9 charcters)" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<input id="mail" class="input100" type="text" name="email" placeholder="Email" required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="password" class="input100" type="password" name="password" placeholder="Enter Password" required pattern=".{6,10}" title="6 to 10 characters">
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100">
					<input id="confirmpass" class="input100" type="password" name="re-password" placeholder="Confirm Password" required>
					<span class="focus-input100"></span>
				</div>
				<div class="">
					<input  type="checkbox" onclick="myFunction()">
					<span >Show Password</span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" style="background-color:#1e90ff" name="save">
						Create An Account
					</button>
					
				</div>
				
				
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class=""></span>
					</div>

					<div class=" ">
						<span class="txt1">
							Already a member ?
						</span>

						<span class="txt2">
							<a href="index.php" style="color:white;"><button class="contact100-form-btn" style="background-color:#1e90ff" >
								Login 
							</button></a>
					</div>
				</div>
			</div>
				
		</div>
	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	
	
	<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>
