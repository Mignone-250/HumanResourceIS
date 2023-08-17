<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include"include/stylings.php";
?>
</head>

<body>

  <section id="container" class="">

      <!-- include header and menubar start -->
         <!--header start-->
	<?php
		include 'include/header.php';
		?>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
		<?php
		include 'include/menue.php';
		?>
        
      </div>
    </aside>
		<?php
            include 'include/config.php';
        ?>
	
		
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> MY SCHEDULE </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>MY SCHEDULE</li>
              <li><i class="fa fa-user-md"></i>ADD TO MY SCHEDULE</li>
            </ol>
          </div>
        </div>
		
	  
				  
				<?php

    if(isset($_POST['createschedule']))
        {
//$dayname = mysqli_real_escape_string($conn, $_REQUEST['dayname']);
$week = mysqli_real_escape_string($conn, $_REQUEST['weekno']);
//$title = //mysqli_real_escape_string($conn, $_REQUEST['title']);
$datess = mysqli_real_escape_string($conn, $_REQUEST['dates']);

	$sql_t = "SELECT * FROM admin_created_schedules WHERE dates='$datess'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			date_default_timezone_set('US/Pacific');
			$t=date('Y-m-d');$day = date('l',strtotime($t));
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> You finished Scheduling for this week.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";
	
		}
		else{


// Attempt insert query execution
$sql = "INSERT INTO admin_created_schedules (week,dates)
VALUES ('$week','$datess')";

if(mysqli_query($conn, $sql)){
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Schedule For &nbsp; $week
						 &nbsp;&nbsp;&nbsp;was successfully created.</div></div><br><br><br>";
								 
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

    ?>	
 <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          CREATE A SCHEDULE
                                      </a>
                 
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
						<div class="form-group">
                            <label class="col-lg-2 control-label" >WEEK</label>
                            <div class="col-lg-6">
                              <input type="text"  required class="form-control" id="l-name" name="weekno" placeholder='eg: WEEK1'>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">DATE</label>
                            <div class="col-lg-6">
							  <input type="date" required class="form-control" id="l-name" name="dates"  style=';'>
                            </div>
                          </div>
						  
						  
						  
						
						  
						 
						 
						 

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="createschedule">SAVE </button>
                              <button type="button" class="btn btn-danger">CANCEL</button>
                            </div>
                          </div>
                        </form>
                    </section>
                    <section>
                      
                    </section>
                  </div>
				  </section>
				  </section>
				  </section>	  
		<div class="text-center">
        <div class="credits">

          Copyright &copy Mignone Unguyeneza 2019
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