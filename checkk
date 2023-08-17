<?php
            include 'include/config.php';
        ?>
	

<?php
		   if(isset($_POST['request']))
        {
$leave = mysqli_real_escape_string($conn, $_REQUEST['leave']);
$days = mysqli_real_escape_string($conn, $_REQUEST['days']);
$reason= mysqli_real_escape_string($conn, $_REQUEST['reason']);
$date= mysqli_real_escape_string($conn, $_REQUEST['date']);
$todays_date=date('Y-m-d');


$dateTimestamp1 = strtotime($date); 
$dateTimestamp2 = strtotime($todays_date); 
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
else{
$check_user = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='PENDING'";
		if ($conn->query($check_user) ==TRUE) {
		$result = mysqli_query($conn,$check_user) or die(mysql_error());
		$rows = mysqli_num_rows($result);
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
				else{

$check = "SELECT * FROM leave_application WHERE LEAVE_DATE='$date'";
				if ($conn->query($check) ==TRUE) {
				$result = mysqli_query($conn,$check) or die(mysql_error());
				$rows = mysqli_num_rows($result);
				if($rows>0){
					echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> Date has been taken.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
				
				else{
$sql_t = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' ORDER BY LEAVE_ID DESC LIMIT 1";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			while($row = $result->fetch_assoc()) {
			$total_days=$row["REMAINING_DAYS"];
			$remaining_days=$total_days-$days;
						$sql_te = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
						if ($conn->query($sql_te) ==TRUE) {
						$result = mysqli_query($conn,$sql_te) or die(mysql_error());
						$rows = mysqli_num_rows($result);
						if($rows>0){
							while($row = $result->fetch_assoc()) {
							$leave_days=$row["LEAVE_DAYS"];
							$leavetype_days=$leave_days-$days;
							
							
							$sql_t2 = "SELECT RLEAVE_DAYS FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and LEAVE_TYPE='$leave' ORDER BY LEAVE_ID DESC LIMIT 1";
							if ($conn->query($sql_t2) ==TRUE) {
								$result = mysqli_query($conn,$sql_t2) or die(mysql_error());
								$rows = mysqli_num_rows($result);
								if($rows>0){
									while($row = $result->fetch_assoc()) {
										$remained=$row["RLEAVE_DAYS"];
										$newremained=$remained-$days;
										if($days>$remained){
											
											echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> have requested days that are greater than the days you are remaining with on this leave , try again.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";	
											
										}
										else{
										
										
										
										
							
							
							
							
							
							
							
							
							
							
							
							
				
			$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS)
								VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$newremained', '$total_days','$remaining_days','PENDING')";
							if(mysqli_query($conn, $sql)){
								 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Leave requested successfully, wait for the response from HR.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
		
	
		}}}}
	else{
if($_SESSION['gender']=="Male"){
								 $abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where LEAVE_TYPE!='Normal/Annual' and LEAVE_TYPE !='Maternity'";
									$result=mysqli_query($conn,$abc);
									if($result)
									{
									while($row=mysqli_fetch_assoc($result))
									{
									$todays=$row["total"];
									$remaining_days=$todays-$days;
									
												$sql_te = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
												if ($conn->query($sql_te) ==TRUE) {
												$result = mysqli_query($conn,$sql_te) or die(mysql_error());
												$rows = mysqli_num_rows($result);
												if($rows>0){
													while($row = $result->fetch_assoc()) {
													$leave_days=$row["LEAVE_DAYS"];
													$leavetype_days=$leave_days-$days;
									
									$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS)
									VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$newremained', '$todays','$remaining_days','PENDING')";
									
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
}}}}}}
else{							 
$sql = "SELECT * FROM leave_types where LEAVE_TYPE='Normal/Annual'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								$total_days=$row["LEAVE_DAYS"];
								$remaining_days=$total_days-$days;
								
										$sql_te = "SELECT LEAVE_DAYS FROM leave_types WHERE LEAVE_TYPE='$leave'";
										if ($conn->query($sql_te) ==TRUE) {
										$result = mysqli_query($conn,$sql_te) or die(mysql_error());
										$rows = mysqli_num_rows($result);
										if($rows>0){
											while($row = $result->fetch_assoc()) {
											$leave_days=$row["LEAVE_DAYS"];
											$leavetype_days=$leave_days-$days;
								
							$sql = "INSERT INTO leave_application (USER_ID,LEAVE_TYPE,REASON,LEAVE_DATE, REQUESTED_DAYS,RLEAVE_DAYS, TOTAL_DAYS, REMAINING_DAYS,STATUS)
							VALUES ('".$_SESSION['user']."','$leave', '$reason','$date', '$days','$newremained', '$total_days','$remaining_days','PENDING')";


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
						} }}}}}else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}
}}}}}}
		
				}}}}}
	
		}}}

    ?>