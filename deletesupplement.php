 <?php
		include('include/config.php');
	?> 
<?php  
if(isset($_POST['delete'])){
$delete_id=$_GET['del'];  
$delete_query="delete  from supplements WHERE SUPPLEMENTS_ID='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{ 

								echo "<script>window.open('sumplements.php?deleted=user has been deleted','_self')
															</script>";
						
				}
				else{
						echo "ERROR: Could not able to execute $delete_query. " . mysqli_error($conn);
					}
				} 
  
?>  