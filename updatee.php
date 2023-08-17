 <?php  
//if(isset($_POST['go'])){
		include('include/config.php');
		$ID=$_GET['ido'];
		$status2=$_POST['status'];
		//echo $status2;
		//echo $ID;


 //$user_type=$_POST['user_type'];
$sql = "SELECT * FROM onboarding WHERE on_id='$ID'";
					$result = $conn->query($sql);
					// echo $result->num_rows; die;
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
								$task1=$row["first_name"];
								$when1=$row["last_name"];
								$notes1=$row["age"];
								$resources1=$row["year"];
								$status1=$row["status"];
							
										$sqle = "UPDATE onboarding SET status='$status2' WHERE on_id ='$ID'"; ;
										if ($conn->query($sqle) === TRUE) {
											//echo ($sqle);
											
										
										echo "<div class='row' id='helpdiv'><div class='col-lg-12'>
										<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
										<strong>Success!</strong> Status updated successfully.</div></div></div><br>";
										echo "<script type='text/javascript'>
										window.setTimeout('closeHelpDiv();', 3000);
										function closeHelpDiv(){
										document.getElementById('helpdiv').style.display=' none';
										}
										</script>";
											echo "<script>window.open('mytasks.php?status=status has been updated','_self')</script>";
									}
									else{echo "Error: " . $sqle . "<br>" . $conn->error;}
									
											
					}}
									else{
echo "Error: " . $sql . "<br>" . $conn->error;}
					

?>  