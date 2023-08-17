 <?php
		include('include/config.php');
	?> 
<?php  
if(isset($_POST['delete'])){
$delete_id=$_GET['del'];  
$delete_query="delete  from leave_types WHERE TYPE_ID='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{ 

							
							
								echo "<script>window.open('addnumber.php?deleted=user has been deleted','_self')
															</script>";
				
				
}} 
//javascript function to open in the same window      

  
?>  