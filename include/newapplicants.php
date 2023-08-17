<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              
              <div class="panel-body">
                <div class="tab-content">
                  
                  
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info" style="background-color:Lavender">
					  <br><br>
					<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query('SELECT * FROM applicants')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM applicants ORDER BY applicant_id LIMIT ?,?')) {
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
		
		
            <div class="panel panel-default">
              
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					<th  style="background-color: #152E48;color: white;">FIRST NAME</th>
                      <th  style="background-color: #152E48;color: white;">LAST NAME</th>
					 
                      <th  style="background-color: #152E48;color: white;">DATE OF BIRTH</th>
                      <th  style="background-color: #152E48;color: white;">EMAIL</th>
                      <th  style="background-color: #152E48;color: white;">CV</th>
                      <th  style="background-color: #152E48;color: white;">COVER LETTER</th>
                      <th  style="background-color: #152E48;color: white;">POSITION</th>
					  <th  style="background-color: #152E48;color: white;">APPLICATION DATES</th>
                      <th  style="background-color: #152E48;color: white;">RESPOND</th>
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$fname=$row["fname"];
								$applicant_id=$row["applicant_id"];
								$lname=$row["lname"];
								$dob=$row["dob"];
								$email=$row["email"];
								$cv=$row["cv"];
								$coverletter=$row["coverletter"];
								$position=$row["position"];
								$application_date=$row["application_date"]; 									
				?>
				<tr>
					<td style='font-size:19px;'> <?php echo $fname?></td>
			<td> <?php echo $lname;  ?></td>
			<td> <?php echo $dob;?></td>
			<td> <?php echo $email ?></td>
			<td> <?php echo $cv ?></td>
			<td> <?php echo $coverletter ?></td>
			<td> <?php echo $position ?></td>
			<td> <?php echo $application_date ?></td>
						
						
						<td><a href="email.php<?php echo '?applicant_id='.$applicant_id; ?>"><button class="btn" style="background-color: green;color:white;">Email</button></a></td>
			
			
												
						
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
				<li class="prev"><a href="applicants.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="applicants.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="applicants.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="applicants.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="applicants.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="applicants.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="applicants.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="applicants.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="applicants.php?page=<?php echo $page+1 ?>">Next</a></li>
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