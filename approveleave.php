 <?php
		include('include/config.php');
	?> 
<?php  
if(isset($_POST['approve'])){
 $user_id=$_GET['del'];
 $leave_id=$_GET['transferid'];
$sql = "SELECT * FROM leave_application WHERE LEAVE_ID='$leave_id'";
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$leave_id=$row["LEAVE_ID"];  
								$user_id=$row["USER_ID"];  
								$leave_type=$row["LEAVE_TYPE"];  
								$date=$row["DATE"];  
								$reason=$row["REASON"];
								$leave_date=$row["LEAVE_DATE"];
								$requested_days=$row["REQUESTED_DAYS"];
								$total_days=$row["TOTAL_DAYS"];
								$remaining_days=$row["REMAINING_DAYS"];
								
										$sql = "INSERT INTO confirmed_leave (USER_ID,LEAVE_TYPE,DATE,REASON,LEAVE_DATE,REQUESTED_DAYS,TOTAL_DAYS,REMAINING_DAYS)
											VALUES ('$user_id','$leave_type', '$date', '$reason','$leave_date', '$requested_days','$total_days','$remaining_days')";
													if ($conn->query($sql) === TRUE) {
										 
															$delete_query="delete  from leave_application WHERE USER_ID='$user_id'";//delete query 
															
															$run=mysqli_query($conn,$delete_query) or die(mysqli_error($conn));  
															if($run)  
															{
																				
															echo "<script>window.open('pendingleave.php?deleted=user has been deleted','_self')</script>";
																							
																					
															} else {
																					echo "Error: " . $delete_query . "<br>" . $conn->error;
																				}
															//javascript function to open in the same window 
									}
									else{echo "Error: " . $sql . "<br>" . $conn->error;}
									}
									
											
					}
								
					}


?>  