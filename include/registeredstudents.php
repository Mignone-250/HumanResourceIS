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

 
 <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              
              <div class="panel-body">
                <div class="tab-content">
                  
                  
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      
					<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM bachelor_students_registration')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM bachelor_students_registration ORDER BY tbl_id LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
			
		<br><br>
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
				<th  style="background-color: #152E48;color: white; text-align:center;font-weight:lighter; border:none;">Student ID</th>
                      <th  style="background-color: #152E48;color: white; font-weight:lighter;border:none;">Names</th>
					 
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">DOB</th>
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter;border:none;">Graduation Dates</th>
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Company Recommended</th>
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Employment Status</th>
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Comments</th>
					  <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Email</th>
                      <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Attendance</th>
					  <th  style="background-color: #152E48;color: white; text-align:center; font-weight:lighter; border:none;">Review</th>
                
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$user_id=$row["tbl_id"];  
									$user_Fname=$row["fname"];  
									$user_Lname=$row["lname"];
                    
									$user_gender=$row["DOB"];  
									$user_national=$row["gdates"];
									$user_phone=$row["companyrecommended"];
									$user_position=$row["employmentstatus"];
									$user_department=$row["comments"];
									$user_type=$row["email"];
																		
				?>
				<tr>
					<td><?php echo $user_id;  ?></td>
						<td><?php echo $user_Fname." ".$user_Lname;  ?></td>
            
						<td><?php echo $user_gender;  ?></td>
						<td><?php echo $user_national;  ?></td>
						<td><?php echo $user_phone;  ?></td> 
						<td><?php echo $user_position;  ?></td> 
						<td><?php echo $user_department;  ?></td> 
						<td><?php echo $user_type;  ?></td> 
						
						
						
						
						<td><a href="students_attendance_sheet.php<?php echo '?tbl_id='.$user_id; ?>"><button class="btn" style="background-color:lavender;color:black;font-size:12px;margin-left:20px;">Take Attendance</button></a></td>
						<td><a href="students_attendancehistory.php<?php echo '?tbl_id='.$user_id; ?>"><button class="btn" style="background-color:lavender;color:black;font-size:12px;margin-left:20px;">Attendance History</button></a></td>
			

				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="students_attendance.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="students_attendance.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="students_attendance.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="students_attendance.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="students_attendance.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="students_attendance.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="students_attendance.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="students_attendance.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="students_attendance.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			</CENTER>
			<?php endif; ?>
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