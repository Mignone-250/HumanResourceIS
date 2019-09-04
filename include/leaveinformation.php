
 <?php
		include('include/config.php');
	?>          
 <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE INFROMATION</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
			  <table class="table">
                <thead>
                  <tr>
					<th>LEAVE_TYPE</th>
					<th>TOTAL_DAYS</th>
                    <th>REMAING_DAYS</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
				  <?php
						$sql = "SELECT * FROM confirmed_leave WHERE USER_ID='".$_SESSION['user']."'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$leave=$row["LEAVE_TYPE"];  
									$requested=$row["REQUESTED_DAYS"];  
									
									
									
						?>			
                    <td><?php echo $leave;  ?></td>
                    
                    
                    
                  </tr>
						<?php }} else {
    echo "0 results";
}
						

$conn->close(); ?>
                </tbody>
              </table>
              
              </div>

            </div>

          </div>
