<?php include"include/config.php";?>
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

$sql = "SELECT * FROM user_registration WHERE USERNAME='$username'";
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$USER_ID=$row["USER_ID"];
																

$sql = "INSERT INTO account_request (USER_ID,FIRST_NAME, LAST_NAME, GENDER, NATIONAL_ID, PHONE_NUMBER, DISTRICT, POSITION, DEPARTMENT, USERNAME)
VALUES ('$USER_ID','$first_name', '$last_name', '$gender', '$NationalID', '$phone', '$district', '$position', '$department','$username')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
include"include/stylings.php";
?>
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
        <div class="col-lg-9">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-3 col-sm-3">
                  <h4><?php  echo $_SESSION['name'];  ?></h4>
                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6><?php  echo 'TYPE:'." ".$_SESSION['type'];  ?></h6>
				  
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
