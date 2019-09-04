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
            <h3 class="page-header"><i class="fa fa-user-md"></i> LEAVE REQUEST APPLICATION</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Leave Request</li>
            </ol>
          </div>
        </div>
		<?php
		   if(isset($_POST['request']))
        {
$leave = mysqli_real_escape_string($conn, $_REQUEST['leave']);
$days = mysqli_real_escape_string($conn, $_REQUEST['days']);
$reason= mysqli_real_escape_string($conn, $_REQUEST['reason']);
$date= mysqli_real_escape_string($conn, $_REQUEST['date']);

$check_user = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."'";
		if ($conn->query($check_user) ==TRUE) {
		$result = mysqli_query($conn,$check_user) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> you still have a pending leave.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
				else{

$check = "SELECT * FROM leave_application WHERE LEAVE_DATE='$date'";
				if ($conn->query($check) ==TRUE) {
				$result = mysqli_query($conn,$check) or die(mysql_error());
				$rows = mysqli_num_rows($result);
				if($rows>0){
					echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Date has been taken.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
				else{
					
					$check = "SELECT * FROM confirmed_leave WHERE LEAVE_DATE='$date'";
				if ($conn->query($check) ==TRUE) {
				$result = mysqli_query($conn,$check) or die(mysql_error());
				$rows = mysqli_num_rows($result);
				if($rows>0){
					echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Date has been taken.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
				else{

$sql_t = "SELECT * FROM confirmed_leave WHERE USER_ID='".$_SESSION['user']."' ORDER BY LEAVE_ID DESC LIMIT 1";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			while($row = $result->fetch_assoc()) {
			$total_days=$row["REMAINING_DAYS"];
			$remaining_days=$total_days-$days;
				
			$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS, TOTAL_DAYS, REMAINING_DAYS)
								VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days', '$total_days','$remaining_days')";


							if(mysqli_query($conn, $sql)){
								 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Records added successfully.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
		
	
		}}
	else{
if($_SESSION['gender']=="Male"){
								 $abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where TYPE_ID !=4 AND TYPE_ID !=1";
									$result=mysqli_query($conn,$abc);
									if($result)
									{
									while($row=mysqli_fetch_assoc($result))
									{
									$todays=$row["total"];
									$remaining_days=$todays-$days;
									
									$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS, TOTAL_DAYS, REMAINING_DAYS)
									VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days', '$todays','$remaining_days')";
									
									if(mysqli_query($conn, $sql)){
										 echo "<div class='col-lg-9' id='helpdiv'>
										 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
										 <strong>Success!</strong> Records added successfully.</div></div><br><br><br>";
										 
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
else{							 
$sql = "SELECT * FROM leave_types where LEAVE_TYPE='Normal/Annual'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								$total_days=$row["LEAVE_DAYS"];
								$remaining_days=$total_days-$days;
								
							$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS, TOTAL_DAYS, REMAINING_DAYS)
							VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days', '$total_days','$remaining_days')";


							if(mysqli_query($conn, $sql)){
								 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Records added successfully.</div></div><br><br><br>";
								 
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
		
		}}}}
	
		}}}}}

    ?>
  <div id="edit-profile"  class='col-lg-9'>
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1>Leave Application Form</h1>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Type Of Leave </label>
                            <div class="col-lg-6">
                              
							  <select class="form-control" name="leave" required>
						<option value="">-- Choose Type Of Leave</option>
                            <?php $ret=mysqli_query($conn,"select * from leave_types");
                            while($row=mysqli_fetch_array($ret))
                            {
                           ?>
						<option>
						<?php echo htmlentities($row['LEAVE_TYPE']);?>
						</option>
						<?php } ?>	
					  </select>
							  
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Number Of Days</label>
                            <div class="col-lg-6">
                              <input type="number" required class="form-control" id="l-name" placeholder=" " name="days">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Reason</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="reason" required></textarea>
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">Leave Date</label>
                            <div class="col-lg-6">
                              <input type="date" required class="form-control" id="l-name" placeholder=" " name="date">
                            </div>
                          </div>
                          

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="request">Send</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
						
                  </div>
				  </section>
				  </section>
				  </section>
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