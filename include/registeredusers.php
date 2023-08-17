<head>
<style>


.tbl-header{
  background-color:black;
  border:1px;
 }
 .tbl-header2{
  background-color:#fff;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  background-color:#1c4966;
  
}
th{
  padding: 20px 15px;
  text-align: left;
  font-size: 12px;
  color: white;
  
  font-weight:bolder;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
 
}



/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

</style>
</head>
<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              
              <div class="panel-body">
                <div class="tab-content">
                  
                  
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
					
					
					
					 <form action="" method="post" enctype="multipart/form-data" class="form-horizontal" style='margin-left:1%;' >
  <div class="form-group">
  <div class="col-lg-5" style='background-color:lavender;'>
  
  <table><tr><td style="background-color:lavender; border:none; color:black;font-family: 'Lato', sans-serif;font-size:16px; width:60%;">
  Search By RSSB Number</td>
  <td style='border-left:1px solid white; border-top:none;border-bottom:none;background-color:lavender;'>
  <select class="form-control" name="rssb2" style="background-color:lavender;border:none;width:80%; color:black;font-family: 'Lato', sans-serif; font-size:16px;" required>
							  <option selected disabled value=""> Select</option>
                            <?php $ret=mysqli_query($conn,"select * from user_registration where USER_ID != '".$_SESSION['user']."'");
                            while($row=mysqli_fetch_array($ret))
                            {
								$rssb = $row['RSSB'];?>
						   <option>
						   <?php echo htmlentities($rssb);?></option><?php } ?></select></td>
						   
  
<div style="background-color:#518acb;height:100%; width:11%; position:absolute; top:0px;left:89%;">
<button type="submit" class="fa fa-search" name="search" style = "color: white !important;  background-color:#518acb; border:none;
margin-top:20px;margin-left:20px; margin-bottom:20px; margin-right:20px;"></button>
</div>


  <tr></table>
</div>
  
  </div>
  </form>
  
  <style>



</style>
  <?php
  
  
   if(isset($_POST['search']))
        {
			echo '<br>';
			echo '<br>';
			
			
			   echo '<div class="col-sm-12" id= "printinga">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblattendance">
                <thead>
                  <tr>
		  <th style="background-color:Lavender ">Firstname</th>
		  <th style="background-color:Lavender ">Lastname</th>
		  <th style="background-color:Lavender ">Email</th>
		  <th style="background-color:Lavender ">Gender</th>
		  <th style="background-color:Lavender ">Phone Number</th>
		  <th style="background-color:Lavender ">Position</th>
		  <th style="background-color:Lavender ">Department</th>
		  <th style="background-color:Lavender ">RSSB Number</th>
                  </tr>
                </thead>' ;
				date_default_timezone_set('US/Pacific');
				
				
			
			
		$rssbsearch= mysqli_real_escape_string($conn, $_REQUEST['rssb2']);
		
		

$sql = "SELECT * FROM `user_registration` WHERE RSSB = '$rssbsearch'";

					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$USER_ID=$row["USER_ID"];
								$user_Fname=$row["FIRST_NAME"];  
									$user_Lname=$row["LAST_NAME"];
									$user_email=$row["EMAIL"];
                    
									$user_gender=$row["GENDER"];  
									$user_phone=$row["PHONE_NUMBER"];
									$user_position=$row["POSITION"];
									$user_department=$row["DEPARTMENT"];
									$rssbb=$row["RSSB"];
                                    	
								
								?>
								
								
							
																			
  
 <?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>

								
		
                <tbody>
                  <tr>
                      
					
					<td><?php echo $user_Fname;?></td>
					<td><?php echo $user_Lname;?></td>					
					<td><?php echo $user_email;?></td>
					<td><?php echo $user_gender?></td>
					<td><?php echo $user_phone;?></td>
					<td><?php echo $user_position;?></td>
					<td><?php echo $user_department;?></td>
					<td><?php echo $rssbb;?></td>
					
					

                  </tr>
				  
					<?php }}
					
					else{
						echo 'Nothing Found On The Date You Entered';
					}
 ?>
</tbody>
              </table>        
            </section>
			</form>
			
		</div><?php }?>
  
  
  <br><br>
                      
					<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM user_registration')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM user_registration ORDER BY USER_ID LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>


			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box;
				
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
			</style>
		
		
            
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					<th  style="background-color: #152E48;color: white; text-align:center;">Employee ID</th>
                      <th  style="background-color: #152E48;color: white;">Names</th>
					 
                      <th  style="background-color: #152E48;color: white; text-align:center;">Gender</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Phone number</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Position</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Department</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">User Type</th>
					  <th  style="background-color: #152E48;color: white; text-align:center;">Email</th>
                      <th  style="background-color: #152E48;color: white;text-align:center;">Delete</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Edit</th>
                      <th  style="background-color: #152E48;color: white; text-align:center;">Pay</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$user_id=$row["USER_ID"];  
									$user_Fname=$row["FIRST_NAME"];  
									$user_Lname=$row["LAST_NAME"];
                    
									$user_gender=$row["GENDER"];  
									$user_phone=$row["PHONE_NUMBER"];
									$user_position=$row["POSITION"];
									$user_department=$row["DEPARTMENT"];
									$user_type=$row["USER_TYPE"];
                                    $email=$row["EMAIL"]; 									
				?>
				<tr>
					<td><?php echo $user_id;  ?></td>
						<td><?php echo $user_Fname." ".$user_Lname;  ?></td>
            
						<td><?php echo $user_gender;  ?></td>
						<td><?php echo $user_phone;  ?></td> 
						<td><?php echo $user_position;  ?></td> 
						<td><?php echo $user_department;  ?></td> 
						<td><?php echo $user_type;  ?></td> 
						<td><?php echo $email  ?></td>
						
						<td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete.php?del=<?php echo $user_id ?>"><button class="btn" style="background-color:lavender;color:red;"><i class="fa fa-trash-o" style="font-size:20px;"></i></button></a></td>
						<td><a href="editUsers.php<?php echo '?USER_ID='.$user_id; ?>"><button class="btn" name="edit" style="background-color:lavender;color:black;font-size:16px;">Edit</button></a></td>
						<td><a href="pay.php<?php echo '?USER_ID='.$user_id; ?>"><button class="btn" style="background-color:lavender;color:black;font-size:16px;">Pay</button></a></td>
			
			
												
						
						<script>
						function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
						</script>
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="registeredusers.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="registeredusers.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="registeredusers.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="registeredusers.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="registeredusers.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="registeredusers.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();
}
?>		



                      </div>				  
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div></div></div>