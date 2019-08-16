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

$sql="UPDATE user_registration SET FIRST_NAME='$first_name',LAST_NAME='$last_name',GENDER='$gender',NATIONAL_ID='$NationalID',
											PHONE_NUMBER='$phone',DISTRICT='$district',POSITION = '$position',DEPARTMENT='$department'
											WHERE USERNAME='$username'";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Profile | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
<?php
		include 'include/header.php';
		?>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <?php
		include 'include/menue.php';
		?>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Admin_dashboard.php">Home</a></li>
              <li><i class="fa fa-user"></i>Manage Admin</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php  echo $_SESSION['name'];  ?></h4>
                  <div class="follow-ava">
                    <img src="img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6><?php  echo 'TYPE:'.' '.$_SESSION['type'];  ?></h6>
                </div>
               
              </div>
            </div>
          </div>
        </div><br>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Daily Activity
                                      </a>
                  </li>
                  <li>
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
                  <div id="recent-activity" class="tab-pane active">
                    <div class="profile-activity">
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jonatanh Doe</a> at 4:25pm, 30th Octmber 2014</p>
                            <p>It is a long established fact that a reader will be distracted layout</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jhon Loves </a> at 5:25am, 30th Octmber 2014</p>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Rose Crack</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                              condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                              eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Knowledge speaks, but wisdom listens.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                          </div>
                        </div>
                      </div>
                      <div class="act-time">
                        <div class="activity-body act-in">
                          <span class="arrow"></span>
                          <div class="text">
                            <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                            <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                              ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                              condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                              eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <!-- profile -->
                  <div id="profile" class="tab-pane">
                    <section class="panel">
                      <div class="bio-graph-heading">
                       <h1>Bio Graph</h1>
                      </div>
                      <div class="panel-body bio-graph-info">
                        
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
					  <div class="bio-graph-heading">
                       <h1> Profile Info</h1>
                      </div><br><br>
                        
                                                <form class="form-horizontal" role="form" action="#" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                              <input type="text"    class="form-control" id="f-name" name="fname" value="<?php  echo $_SESSION['firstname'];  ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                              <input type="text"    class="form-control" id="l-name" name="lname" value="<?php  echo $_SESSION['lastname'];  ?>">
                            </div>
                          </div>
						  
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="gender">
                                                  <option value=""><?php  echo $_SESSION['gender'];  ?></option>
                                                  <option>Female</option>
                                                  <option>Male</option>
                                                  
                                                </select>
                        </div>
                      </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">National Id/Passport</label>
                            <div class="col-lg-6">
                              <input type="number"  class="form-control" id="nda" name="NationalID"  value="<?php  echo $_SESSION['nda'];  ?>">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                              <input type="number"  class="form-control" id="mobile" name="PhoneNumber" value="<?php  echo $_SESSION['mobile'];  ?>">
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label">District</label>
                        <div class="col-lg-6">
                          <select class="form-control" name="district">
                                                  <option value=""><?php  echo $_SESSION['district'];  ?></option>
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
                                                  <option value=""><?php  echo $_SESSION['Position'];  ?></option>
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
                                                  <option value=""><?php  echo $_SESSION['department'];  ?></option>
                                                  <option>Finance Department</option>
                                                  <option>IT Department</option>
                                                  <option>Operational Department</option>
                                                </select>
                        </div>
                      </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="l-name" name="username" value="<?php  echo $_SESSION['username'];  ?>">
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
            </section>
          </div>
        </div>

        <!-- page end-->
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
