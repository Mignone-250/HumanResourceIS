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
            include 'include/Academics_menue.php';
        ?>
		<?php
            include 'include/config.php';
        ?>
	
		
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> LEAVE APPLICATION FORM</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Academics_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Leave</li>
              <li><i class="fa fa-user-md"></i>Leave Application</li>
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
$to= mysqli_real_escape_string($conn, $_REQUEST['to']); 
$replacement= mysqli_real_escape_string($conn, $_REQUEST['replacement']); 
$todays_date=date('Y-m-d');


$select="select * from leave_application where USER_ID='".$_SESSION['user']."' and LEAVE_TYPE ='$leave' order by LEAVE_ID DESC limit 1";
$result = $conn->query($select);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$remained=$row["RLEAVE_DAYS"];
		$retype=$row["LEAVE_TYPE"];
		$status=$row["STATUS"];
		if($remained<$days){
			echo "<div class='col-lg-9' id='helpdiv'>
			<div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
			<strong>Sorry!</strong> You are requesting many days than that you are remaining with on &nbsp; $retype.</div></div><br><br><br>";
			echo "<script type='text/javascript'>
			window.setTimeout('closeHelpDiv();', 3000);
			function closeHelpDiv(){
				document.getElementById('helpdiv').style.display=' none';
				}
				</script>";
				}
				
				else if ($status = 'PENDING'){
				echo "<div class='col-lg-9' id='helpdiv'>
			<div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
			<strong>Sorry!</strong> You already requested for the same leave which is &nbsp; $retype. and it is still pending</div></div><br><br><br>";
			echo "<script type='text/javascript'>
			window.setTimeout('closeHelpDiv();', 3000);
			function closeHelpDiv(){
				document.getElementById('helpdiv').style.display=' none';
				}
				</script>";	
					
				}
}}	
else{




$select111="select * from leave_types where LEAVE_TYPE='$leave'";
//echo ($select);
$result111 = $conn->query($select111);
if ($result111->num_rows > 0) {
	while($row = $result111->fetch_assoc()) {
		$LeaveDays111=$row["LEAVE_DAYS"];
		$LeaveType111=$row["LEAVE_TYPE"];
		//echo $LeaveType;
		
		//echo $days;
		if($LeaveDays111<$days){
			echo "<div class='col-lg-9' id='helpdiv'>
			<div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
			<strong>Sorry!</strong> You are requesting many days than that you are supposed to request on &nbsp; $LeaveType111.</div></div><br><br><br>";
			echo "<script type='text/javascript'>
			window.setTimeout('closeHelpDiv();', 3000);
			function closeHelpDiv(){
				document.getElementById('helpdiv').style.display=' none';
				}
				</script>";	}
				else{

//else{



									
								
								
	
$dateTimestamp1 = strtotime($date); 
$dateTimestamp2 = strtotime($todays_date); 
$dateTimestamp3 = strtotime($to); 
if ($dateTimestamp1 < $dateTimestamp2) {
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> You have chosen an Invalid Date, try again.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";	
	
	
	
	
}

else if ($dateTimestamp3<$dateTimestamp1) {
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> You have chosen an Invalid Date, try againo.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";	
	
	
	
	
}
else{

$check_user = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='PENDING'";
		if ($conn->query($check_user) ==TRUE) {
		$result112 = mysqli_query($conn,$check_user) or die(mysql_error());
		$rows = mysqli_num_rows($result112);
		if($rows>0){
			echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> you still have a pending leave.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
				//else{

/*$check = "SELECT * FROM leave_application WHERE LEAVE_DATE='$date'";
				if ($conn->query($check) ==TRUE) {
				$result113 = mysqli_query($conn,$check) or die(mysql_error());
				$rows = mysqli_num_rows($result113);
				if($rows>0){
					echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> Date has been taken.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}*/
				
				else{
$sql_t = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' ORDER BY LEAVE_ID DESC LIMIT 1";
		if ($conn->query($sql_t) ==TRUE) {
		$result114 = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result114);
		if($rows>0){
			while($row = $result114->fetch_assoc()) {
			$total_days=$row["REMAINING_DAYS"];
			$remaining_days=$total_days-$days;
						$sql_te = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
						if ($conn->query($sql_te) ==TRUE) {
						$result115 = mysqli_query($conn,$sql_te) or die(mysql_error());
						$rows = mysqli_num_rows($result115);
						if($rows>0){
							while($row = $result115->fetch_assoc()) {
							$leave_days=$row["LEAVE_DAYS"];
							$leavetype_days=$leave_days-$days;
				
			$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS,TOOO,REPLACEMENT)
								VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$leavetype_days', '$total_days','$remaining_days','PENDING','$to','$replacement')";
							if(mysqli_query($conn, $sql)){
								 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Leave requested successfully,Please wait for HR confirmation message.</div></div><br><br><br>";
								 
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
	else{
if($_SESSION['gender']=="Male"){
								 $abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where LEAVE_TYPE!='Normal/Annual' and LEAVE_TYPE !='Maternity'";
									$result116=mysqli_query($conn,$abc);
									if($result116)
									{
									while($row=mysqli_fetch_assoc($result116))
									{
									$todays=$row["total"];
									$remaining_days=$todays-$days;
									
												$sql_tee = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
												if ($conn->query($sql_tee) ==TRUE) {
												$result117 = mysqli_query($conn,$sql_tee) or die(mysql_error());
												$rows = mysqli_num_rows($result117);
												if($rows>0){
													while($row = $result117->fetch_assoc()) {
													$leave_days=$row["LEAVE_DAYS"];
													$leavetype_days=$leave_days-$days;
									
									$sqla = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS,TOOO,REPLACEMENT)
									VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$leavetype_days', '$todays','$remaining_days','PENDING','$to','$replacement' bzag)";
									
									if(mysqli_query($conn, $sqla)){
										 echo "<div class='col-lg-9' id='helpdiv'>
										 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
										 <strong>Success!</strong> Leave requested successfully,Please wait for HR confirmation message.</div></div><br><br><br>";
										 
										 echo "<script type='text/javascript'>
										window.setTimeout('closeHelpDiv();', 3000);

										function closeHelpDiv(){
										document.getElementById('helpdiv').style.display=' none';
										}
										</script>";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
}}}}}}
else{							 
$sqlu = "SELECT * FROM leave_types where LEAVE_TYPE='Normal/Annual'";
						$result118 = $conn->query($sqlu);

						if ($result118->num_rows > 0) {
							while($row = $result118->fetch_assoc()) {
								$total_days=$row["LEAVE_DAYS"];
								$remaining_days=$total_days-$days;
								
										$sql_teee = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
										if ($conn->query($sql_teee) ==TRUE) {
										$result119 = mysqli_query($conn,$sql_teee) or die(mysql_error());
										$rows = mysqli_num_rows($result119);
										if($rows>0){
											while($row = $result119->fetch_assoc()) {
											$leave_days=$row["LEAVE_DAYS"];
											$leavetype_days=$leave_days-$days;
								
							$sqli = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS,TOOO,REPLACEMENT)
							VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$leavetype_days', '$total_days','$remaining_days','PENDING','$to','$replacement')";


							if(mysqli_query($conn, $sqli)){
								 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Leave requested successfully,Please wait for HR confirmation message.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
}}}}}}
		
		}}}
	
	}}}}}	}
		}
		
		
		

    ?>
	
	
					   <?php $ret=mysqli_query($conn,"select * from user_registration where USER_ID = '".$_SESSION['user']."'");
                            while($row=mysqli_fetch_array($ret))
                            {
								$fnamee = $row['FIRST_NAME'];
							$lnamee= $row['LAST_NAME'];
							$post = $row['POSITION'];
							$user_id = $row['USER_ID'];}
                           ?>
	
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">	
<table >
<tr><td style='padding: 20px;font-family:Gill Sans MT;'>NAMES</td><td style='padding: 20px;'><input type='text' name='names' value='<?php echo $fnamee." ".$lnamee ?>' style='width:485px; height:30px; background-color:#F5F5F5; border-right:none;border-top:none;border-left:none;border-bottom:1px solid gray;'></td><td style='padding: 20px; font-family:Gill Sans MT;'>POSITION</td><td style='padding: 30px;'><input type='text' value='<?php echo $post ?>' name='department' style='width:485px; height:30px;border-right:none;border-top:none;border-left:none;border-bottom:1px solid gray;background-color:#F5F5F5;'></td></tr>
<tr><td style='padding: 20px; font-family:Gill Sans MT;'>EMPLOYEES'ID</td><td style='padding: 20px;'><input type='text' value='<?php echo $user_id; ?>' name='department' style='width:485px; background-color:#F5F5F5; height:30px;border-right:none;border-top:none;border-left:none;border-bottom:1px solid gray;'></td><td style='padding: 20px; font-family:Gill Sans MT;'>DATE</td><td style='padding: 30px;'><input type='text' value='<?php $t=date('Y-m-d');echo $t;?>' name='department' style='width:485px; background-color:#F5F5F5; height:30px;border-right:none;border-top:none;border-left:none;border-bottom:1px solid gray;background-color'></td></tr>

</table><br><br>

<div class="form-group">


                            <label style='font-family:Gill Sans MT;margin-left:20%;'>PERSON RESPONSIBLE FOR PERFORMING USUAL DUTIES DURING YOUR ABSENCE </label><br>
                            <div class="col-lg-9" style='margin-left:1%;'>
							<select class="form-control" name="replacement" style='background-color:#F5F5F5;
							  border-right:none;border-top:none;border-left:none;border-bottom:1px solid;' required>
							  <option selected disabled value=""> Choose From The List</option>
                                                  
							<?php $ret=mysqli_query($conn,"select * from user_registration where USER_ID != '".$_SESSION['user']."'");
                            while($row=mysqli_fetch_array($ret))
                            {
								$fname = $row['FIRST_NAME'];
								$lname = $row['LAST_NAME'];
                           ?>
						   
						   <option>
						   <?php echo htmlentities($fname." ".$lname);?>
												 </option>
												 <?php } ?>
                                                  
                                                  
                                                </select>
                              
                            </div>
                          </div>
                         
			
	
	
	
 <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						
                          <div class="form-group">
                            <label class="col-lg-2 control-label">TYPE OF LEAVE</label>
                            <div class="col-lg-6">
                              
							  <select class="form-control" name="leave" required>
						<option value="">-- Choose Type Of Leave</option>
                            <?php 
							if($_SESSION['gender']=='Female'){
							$ret=mysqli_query($conn,"select * from leave_types where LEAVE_TYPE!='Normal/Annual'");
							}
							else{
							$ret=mysqli_query($conn,"select * from leave_types where LEAVE_TYPE!='Normal/Annual' and LEAVE_TYPE!='Maternity'");	
							}
							
                            while($row=mysqli_fetch_array($ret))
                            {
                           ?>
						<option>
						<?php echo ($row['LEAVE_TYPE']);?>
						</option>
							<?php } ?>	
					  </select>
							  
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">NUMBER OF DAYS</label>
                            <div class="col-lg-6">
                              <input type="number" required class="form-control" id="l-name" placeholder=" " name="days">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">REASON</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="reason" required></textarea>
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">FROM</label>
                            <div class="col-lg-6">
                              <input type="date" required class="form-control" id="l-name" placeholder=" " name="date">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">TO</label>
                            <div class="col-lg-6">
                              <input type="date" required class="form-control" id="to" placeholder=" " name="to">
                            </div>
                          </div>
						  
						  
						  
                          

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="request">APPLY</button>
                              <button type="button" class="btn btn-danger">CANCEL</button>
                            </div>
                          </div>
                        </form>
                    </section>
                    <section>
					
                      
                    </section>
					
					<table >

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