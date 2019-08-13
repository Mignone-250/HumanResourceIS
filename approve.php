 <?php
		include('include/config.php');
	?> 
<?php  
if(isset($_POST['submit'])){
 $national=$_GET['del'];
 $userid=$_GET['userid'];
$sql = "SELECT * FROM account_request WHERE USER_ID='$userid'";
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$USER_ID=$row["USER_ID"];  
								$FIRST_NAME=$row["FIRST_NAME"];  
								$LAST_NAME=$row["LAST_NAME"];  
								$GENDER=$row["GENDER"];  
								$NATIONAL_ID=$row["NATIONAL_ID"];
								$PHONE_NUMBER=$row["PHONE_NUMBER"];
								$DISTRICT=$row["DISTRICT"];
								$POSITION=$row["POSITION"];
								$DEPARTMENT=$row["DEPARTMENT"];
								$PROFILE_PICTURE=$row["PROFILE_PICTURE"];
								$USER_NAME=$row["USERNAME"];
								$USER_TYPE=$row["USER_TYPE"];
								$PASSWORD=$row["PASSWORD"];
								
								$sql_t = "SELECT * FROM user_registration WHERE NATIONAL_ID='$national'";
									if ($conn->query($sql_t) ==TRUE) {
										$result = mysqli_query($conn,$sql_t) or die(mysql_error());
										$rows = mysqli_num_rows($result);
										if($rows>0){
											$update_query="UPDATE user_registration SET FIRST_NAME='$FIRST_NAME',LAST_NAME='$LAST_NAME',GENDER='$GENDER',
											PHONE_NUMBER='$PHONE_NUMBER',POSITION = '$POSITION',DEPARTMENT='$DEPARTMENT',
											PROFILE_PICTURE='$PROFILE_PICTURE',USERNAME='$USER_NAME',USER_TYPE='$USER_TYPE',PASSWORD='$PASSWORD'
											WHERE NATIONAL_ID='$national'";//
											
											if ($conn->query($update_query) ==TRUE) {
												$delete_query="delete  from account_request WHERE USER_ID='$userid'";//delete query 
															
															$run=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));  
															if($run)  
															{
												echo "<script>window.open('pendingusers.php?deleted=user has been deleted','_self')</script>";
											}
											else {
																					echo "Error: " . $delete_query . "<br>" . $conn->error;
																				}
											}
											else{
												echo "Error: " . $update_query . "<br>" . $conn->error;
											}
										}
										
									else{								
										$sqle = "INSERT INTO user_registration (FIRST_NAME, LAST_NAME, GENDER, NATIONAL_ID, PHONE_NUMBER, DISTRICT, POSITION, DEPARTMENT, PROFILE_PICTURE, USERNAME, USER_TYPE, PASSWORD)
										VALUES ('$FIRST_NAME', '$LAST_NAME', '$GENDER', '$NATIONAL_ID', '$PHONE_NUMBER', '$DISTRICT', '$POSITION', '$DEPARTMENT', '$PROFILE_PICTURE', '$USER_NAME', '$USER_TYPE', '$PASSWORD' )";
										if ($conn->query($sqle) === TRUE) {
										 
															$delete_query="delete  from account_request WHERE USER_ID='$userid'";//delete query 
															
															$run=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));  
															if($run)  
															{
																				
															echo "<script>window.open('pendingusers.php?deleted=user has been deleted','_self')</script>";
																							
																					
															} else {
																					echo "Error: " . $delete_query . "<br>" . $conn->error;
																				}
															//javascript function to open in the same window 
									}
									else{echo "Error: " . $sqle . "<br>" . $conn->error;}
									
											
					}}
									else{
echo "Error: " . $sql_t . "<br>" . $conn->error;}}}}
					

?>  