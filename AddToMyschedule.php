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
        <?php
            include 'include/bannermenu.php';
        ?>
		<?php
            include 'include/config.php';
        ?>
	
		
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> schedule </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>My Schedule</li>
              <li><i class="fa fa-user-md"></i>Create a schedule</li>
            </ol>
          </div>
        </div>
		
	  
				  
				<?php

    if(isset($_POST['SaveSchedule']))
        {
//$dayname = mysqli_real_escape_string($conn, $_REQUEST['dayname']);
$todaysdate = mysqli_real_escape_string($conn, $_REQUEST['TodaysDate']);
//$title = //mysqli_real_escape_string($conn, $_REQUEST['title']);
$task1 = mysqli_real_escape_string($conn, $_REQUEST['task1']);
$status_task1 = mysqli_real_escape_string($conn, $_REQUEST['status_task1']);
$deadline_task1 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task1']);

$task2 = mysqli_real_escape_string($conn, $_REQUEST['task2']);
$status_task2 = mysqli_real_escape_string($conn, $_REQUEST['status_task2']);
$deadline_task2 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task2']);

$task3 = mysqli_real_escape_string($conn, $_REQUEST['task3']);
$status_task3 = mysqli_real_escape_string($conn, $_REQUEST['status_task3']);
$deadline_task3 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task3']);


$task4 = mysqli_real_escape_string($conn, $_REQUEST['task4']);
$status_task4 = mysqli_real_escape_string($conn, $_REQUEST['status_task4']);
$deadline_task4 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task4']);

$task5 = mysqli_real_escape_string($conn, $_REQUEST['task5']);
$status_task5 = mysqli_real_escape_string($conn, $_REQUEST['status_task5']);
$deadline_task5 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task5']);

	$sql_t = "SELECT * FROM schedules2 WHERE todaysdate='$todaysdate'";
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
$sql = "INSERT INTO schedules2 (,todaysdate,task1,status_task1,deadline_task1,challenge_task1,task2,status_task2,deadline_task2,challenge_task2,task3,status_task3,deadline_task3,challenge_task3,task4,status_task4,deadline_task4,challenge_task4,task5,status_task5,deadline_task5,challenge_task5)
VALUES ('".$_SESSION['user']."','$todaysdate','$task1','$status_task1','$deadline_task1','','$task2','$status_task2','$deadline_task2','','$task3','$status_task3','$deadline_task3','','$task4','$status_task4','$deadline_task4','','$task5','$status_task5','$deadline_task5','')";

if(mysqli_query($conn, $sql)){
	$t=date('Y-m-d');$day = date('l',strtotime($t));
   
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Schedule For &nbsp; $todaysdate
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
                
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
						<div class="form-group">
                            <label class="col-lg-2 control-label" >DATE</label>
                            <div class="col-lg-6">
                              <input type="text" readonly class="form-control" id="l-name" name="TodaysDate" value='<?php
						$t=date('Y-m-d');echo $t;?>'>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">TASK 1</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="task1"></textarea>
							  <input type="hidden" readonly class="form-control" id="l-name" name="status_task1" value='Pending' style='border:none;'>
                            </div>
                          </div>
						  
						  
						  
						<div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Deadline</label>
                        <div class="col-lg-6">
						<input type="date"  class="form-control" id="l-name" name="deadline_task1" value='Pending' style=''>
                        </div>
                        </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">TASK 2</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="task2"></textarea>
							  <input type="hidden" readonly class="form-control" id="l-name" name="status_task2" value='Pending' style='border:none;'>
							  
                            </div>
                          </div>
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Deadline</label>
                        <div class="col-lg-6">
						<input type="date"  class="form-control" id="l-name" name="deadline_task2" value='Pending' style=''>
                        </div>
                        </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">TASK 3</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="task3" ></textarea>
							  <input type="hidden" readonly class="form-control" id="l-name" name="status_task3" value='Pending' style='border:none;'>
                            </div>
                          </div>
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Deadline</label>
                        <div class="col-lg-6">
						<input type="date"  class="form-control" id="l-name" name="deadline_task3" value='Pending' style=''>
                        </div>
                        </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">TASK 4</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="task4" ></textarea>
							  <input type="hidden" readonly class="form-control" id="l-name" name="status_task4" value='Pending' style='border:none;'>
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Deadline</label>
                        <div class="col-lg-6">
						<input type="date"  class="form-control" id="l-name" name="deadline_task4" value='Pending' style=''>
                        </div>
                        </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">TASK 5</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="task5" ></textarea>
							  <input type="hidden" readonly class="form-control" id="l-name" name="status_task5" value='Pending' style='border:none;'>
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Deadline</label>
                        <div class="col-lg-6">
						<input type="date"  class="form-control" id="l-name" name="deadline_task5" value='Pending' style=''>
                        </div>
                        </div>
						  
						 
						 
						 

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="SaveSchedule">SAVE </button>
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

           <?php
		$select111="select * from dev ";
//echo ($select);
$result111 = $conn->query($select111);
if ($result111->num_rows > 0) {
	while($row = $result111->fetch_assoc()) {
		$year=$row["year"]; ?>

Copyright &copy Mignone Unguyeneza <?php echo $year; ?><?php }}?> 
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