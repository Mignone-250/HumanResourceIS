 <?php
		include('include/config.php');
	?> 
<?php  
if(isset($_POST['delete'])){
$delete_id=$_GET['del'];  
$delete_query="delete  from departments WHERE department_id='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{ 
	echo "<script>window.open('adddepartments.php?deleted=Department has been deleted','_self')
															</script>";
				
				} else{
						echo "ERROR: Could not able to execute $run. " . mysqli_error($conn);
					}
} 
//javascript function to open in the same window      

  
?>  