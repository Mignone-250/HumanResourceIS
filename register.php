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
</head>
<body>

<?php include 'include/config.php'; ?>
<?php

    if(isset($_POST['save']))
        {
$first_name = mysqli_real_escape_string($conn, $_REQUEST['Fname']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['Lname']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$NationalID= mysqli_real_escape_string($conn, $_REQUEST['NationalID']);
$phone= mysqli_real_escape_string($conn, $_REQUEST['PhoneNumber']);
$district= mysqli_real_escape_string($conn, $_REQUEST['district']);
$position= mysqli_real_escape_string($conn, $_REQUEST['position']);
$department= mysqli_real_escape_string($conn, $_REQUEST['department']);
$username= mysqli_real_escape_string($conn, $_REQUEST['username']);
$user_type= mysqli_real_escape_string($conn, $_REQUEST['user_type']);
$password= md5(mysqli_real_escape_string($conn, $_REQUEST['password']));
$re_password= md5(mysqli_real_escape_string($conn, $_REQUEST['re-password']));

$picture_tmp = $_FILES['picture']['tmp_name'];
    $picture_name = $_FILES['picture']['name'];
    $picture_type = $_FILES['picture']['type'];

    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
	if($password!=$re_password){
echo"<script> alert('passwords mismatch')</script>";
        
       echo "<script>history.back();</script>";
   return false;
}
else{

    if(in_array($picture_type, $allowed_type)) {
        $path = 'upload/'.$picture_name; //change this to your liking
    } else {
        $error[] = 'File type not allowed';
    }


    if(!empty($error)) {
        
		echo "Error: <font color='red'> " . $error . "<br>" . $conn->error."</font>";

    } else if(empty($error)) {

// Attempt insert query execution
$sql = "INSERT INTO account_request (FIRST_NAME, LAST_NAME, GENDER, NATIONAL_ID, PHONE_NUMBER, DISTRICT, POSITION, DEPARTMENT, PROFILE_PICTURE, USERNAME, USER_TYPE, PASSWORD)
VALUES ('$first_name', '$last_name', '$gender', '$NationalID', '$phone', '$district', '$position', '$department', '$path', '$username', '$user_type', '$password' )";

move_uploaded_file($picture_tmp, $path);

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}

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
				
				
				<div class="wrap-input100">
					<select class="form-control" name="gender" required>
						<option>- Choose Gender -</option>
						<option>Male</option>
						<option>Female</option>	
					  </select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="NationalID" placeholder="National ID"  required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="PhoneNumber" placeholder="Phone Number" required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100">
					<select class="form-control" name="district" required>
						<option disabled selected>- Choose a District -</option>
						<option>Gasabo</option>
						<option>Nyagatare</option>
						<option>Gatsibo</option>
						<option>Rusizi</option>
						<option>Rubavu</option>
						<option>Gicumbi</option>
						<option>Nyamasheke</option>
						<option>Musanze</option>
						<option>Bugesera</option>
						<option>Kayonza</option>
						<option>Kamonyi</option>
						
					  </select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 ">
					<select class="form-control" name="position" required>
						<option disabled selected>- Choose Position -</option>
						<option>Chief Executive Officer</option>
						<option>Chief Operation Manager</option>
						<option>Chief Technology Officer</option>
						<option>Techinical Support</option>
						<option>Chief Finance Manager</option>
						<option>Software Developers</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input">
					<select class="form-control" name="department" required>
						<option disabled selected>- Choose Department -</option>
						<option>Finance Department</option>
						<option>IT Department</option>
						<option>Operational Department</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100">
					<input id="profile" class="input100" type="file" name="picture" required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="username" placeholder="Username" required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<select class="form-control" name="user_type" required>
						<option disabled selected>- Choose Account Type -</option>
						<option>Admin</option>
						<option>User</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="password" class="input100" type="password" name="password" placeholder="Enter Password" required>
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100">
					<input id="confirmpass" class="input100" type="password" name="re-password" placeholder="Confirm Password" required>
					<span class="focus-input100"></span>
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
</body>
</html>
