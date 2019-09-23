
<!DOCTYPE html>
<html lang="en">

<head>
<?php
include"include/stylings.php";
?>
<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
 
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius:10px;
  width: 80%; /* Could be more or less, depending on screen size */
  color:black;
}

/* The Close Button (x) */
.close {

  color: black;
  margin-top:-10px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

</style> 
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

      <!-- include header and menubar start -->
        <?php
            include 'include/bannermenu.php';
        ?>
        <!-- include header and menubar end -->

    <!--sidebar end-->

    <!--main content start-->
	
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
		
		<?php include"include/config.php";?>
		<?php

														if(isset($_POST['upload']))
															{
											
													$fileinfo=PATHINFO($_FILES["picture"]["name"]);
														$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
														move_uploaded_file($_FILES["picture"]["tmp_name"],"upload/" . $newFilename);
														$location="upload/" . $newFilename;


													// Attempt insert query execution

													 $sql="UPDATE user_registration SET PROFILE_PICTURE='$location' WHERE USER_ID ='".$_SESSION['user']."' ";

													if ($conn->query($sql) === TRUE) {
														echo "<script>window.open('Admin_profile.php?deleted=user has been deleted','_self')</script>";
														} else {
														echo "Error: " . $sql . "<br>" . $conn->error;
															}}
															?>
<?php

    if(isset($_POST['editprofile']))
        {
  
$first_name = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$NationalID= mysqli_real_escape_string($conn, $_REQUEST['NationalID']);
$phone= mysqli_real_escape_string($conn, $_REQUEST['PhoneNumber']);
$district= mysqli_real_escape_string($conn, $_REQUEST['district']);
$position= mysqli_real_escape_string($conn, $_REQUEST['position']);
$department= mysqli_real_escape_string($conn, $_REQUEST['department']);
$username= mysqli_real_escape_string($conn, $_REQUEST['username']);

$sql_t = "SELECT * FROM user_registration WHERE USERNAME='$username'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
		echo "<div class='alerte' id='helpdiv'> 
  <div class='col-lg-9'>
	<div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong> Username already exist <strong>&#10008</strong></div></div></div><br>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
	
		}
		else{


$sql = "SELECT * FROM user_registration WHERE USER_ID = '".$_SESSION['user']."'"; 
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$USER_ID=$row["USER_ID"];
																

$sql = "INSERT INTO account_request (USER_ID,FIRST_NAME, LAST_NAME, GENDER, NATIONAL_ID, PHONE_NUMBER, DISTRICT, POSITION, DEPARTMENT,USERNAME)
VALUES ('$USER_ID','$first_name', '$last_name', '$gender', '$NationalID', '$phone', '$district', '$position', '$department','$username')";

if(mysqli_query($conn, $sql)){
    echo "<div class='col-lg-9' id='helpdiv'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Records inserted successfully.</div></div><br><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}}}

    ?><br>
        <div class="col-lg-9">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-3 col-sm-3">
                  <h4><?php  echo $_SESSION['name'];  ?></h4>
				  <h6><?php  echo 'TYPE:'.' '.$_SESSION['type'];  ?></h6><br>
                  <div>
                    <?php
		$query=mysqli_query($conn,"select * from user_registration where USER_ID='".$_SESSION['user']."'");
		while($row=mysqli_fetch_array($query)){
			$picture  =$row['PROFILE_PICTURE']; 
			echo "<img src='".$picture."' style='border-radius:50%;width:70%;height:100px;'>";
			}
			?>
                  
				  				  <b><i class="fa fa-edit" onclick="document.getElementById('id02').style.display='block'" style="margin-top:-50px;margin-left:60px;font-size:30px;color:white"></i></b>
				  </div>
				  <div id="id02" class="modal">
						  
												  <div style="width:50%;" class="modal-content animate">
													<div class="imgcontainer">
														<center><h3 class="heading3" style="color:grey"><b>CHANGE PROFILE PICTURE </b><span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span></h3>
														<br>
														<form action="" method="post" enctype="multipart/form-data">
															<input type="file" name="picture"  style="width:50%" required><br><br>
															
															<button type="submit" class="btn btn-primary" name="upload">UPLOAD</button><br><br>	
														</form></center>
														</div></div>
														

													</div>
                </div>
              </div>
            </div>
          </div>
        </div>
                 
              <div class="col-lg-9">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active"> 
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>: <?php  echo $_SESSION['firstname'];  ?> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>: <?php  echo $_SESSION['lastname'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Department</span>: <?php  echo $_SESSION['department'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Gender </span>: <?php  echo $_SESSION['gender'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Position </span>: <?php  echo $_SESSION['Position'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>District </span>:<?php  echo $_SESSION['district'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>: <?php  echo $_SESSION['mobile'];  ?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>National Id/Passport </span>: <?php  echo $_SESSION['nda'];  ?></p> 
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
											
                        <form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text"  class="form-control" id="f-name" name="fname" value="<?php  echo $_SESSION['firstname'];  ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text"   class="form-control" id="l-name" name="lname" value="<?php  echo $_SESSION['lastname'];  ?>">
                            </div>
                          </div>
						  
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="gender">
                                                  <option><?php  echo $_SESSION['gender'];  ?></option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                                  
                                                </select>
                        </div>
                      </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">National Id/Passport</label>
                            <div class="col-lg-6">
                              <input type="number" class="form-control" id="nda" name="NationalID"  value="<?php  echo $_SESSION['nda'];  ?>">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input type="number" class="form-control" id="mobile" name="PhoneNumber" value="<?php  echo $_SESSION['mobile'];  ?>">
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label">District</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="district">
                                                  <option><?php  echo $_SESSION['district'];  ?></option>
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
                        </div>
                      </div>
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label">Position</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="position">
                                                  <option><?php  echo $_SESSION['Position'];  ?></option>
                                                  <option>Chief Executive Officer</option>
                                                  <option>Chief Operation Manager</option>
                                                  <option>Chief Technology Officer</option>
                                                  <option>Techinical Support</option>
                                                  <option>Chief Finance Manager</option>
                                                  <option>Software Developers</option>
                                                </select>
                        </div>
                      </div>
	  
						 <div class="form-group">
                        <label class="col-lg-2 control-label">department</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="department">
                                                  <option><?php  echo $_SESSION['department'];  ?></option>
                                                  <option>Finance Department</option>
                                                  <option>IT Department</option>
                                                  <option>Operational Department</option>
                                                </select>
                        </div>
                      </div>
				  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-6">
                              <input type="text"  class="form-control" id="l-name" name="username" value="<?php  echo $_SESSION['username'];  ?>">
                            </div>
                          </div>
						 


                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="editprofile">Update</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
					
                  </div>
                </div>
              </div>
                </div>
            </div>
            </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
