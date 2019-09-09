 <?php
include('include/config.php');
?>
<?php  
if(isset($_POST['assign'])){
$delete_id=$_GET['del'];
$date=$_POST['date'];


$sql = "SELECT * FROM user_registration where USER_ID='$delete_id'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$user_id=$row["USER_ID"];  
								$position=$row["POSITION"];  
								$name=$row["LAST_NAME"];  
								


								$sql= "INSERT INTO paid_users (USER_ID,DATE_PAID)
																	VALUES ('$user_id','$date')";
																			if ($conn->query($sql) === TRUE) {
																				
																					echo "<script>window.open('registeredusers.php?deleted=user has been deleted','_self')
																					
																					</script>";
																													
											
																					} else {
																											echo "Error: " . $sql . "<br>" . $conn->error;
																										}
																					//javascript function to open in the same window 
					}}else{echo "Error: " . $sql . "<br>" . $conn->error;}
}


?>  