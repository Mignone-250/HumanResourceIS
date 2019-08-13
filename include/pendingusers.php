 <?php
		include('include/config.php');
	?>          
 <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>PENDING ACCOUNTS</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th style="background-color: #57b846;color: white;">SN</th>
                      <th style="background-color: #57b846;color: white;">NAMES</th>
                      <th style="background-color: #57b846;color: white;">GENDER</th>
                      <th style="background-color: #57b846;color: white;">NATIONAL_ID</th>
                      <th style="background-color: #57b846;color: white;">PHONE_NUMBER</th>
                      <th style="background-color: #57b846;color: white;">POSITION</th>
                      <th style="background-color: #57b846;color: white;">DEPARTMENT</th>
                      <th style="background-color: #57b846;color: white;">USER_TYPE</th>
                      <th style="background-color: #57b846;color: white;">USERNAME</th>
                      <th style="background-color: #57b846;color: white;">ACTION</th>
                      <th style="background-color: #57b846;color: white;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
						$sql = "SELECT * FROM account_request ORDER BY USER_ID ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$user_id=$row["USER_ID"];  
									$user_Fname=$row["FIRST_NAME"];  
									$user_Lname=$row["LAST_NAME"];  
									$user_gender=$row["GENDER"];  
									$user_national=$row["NATIONAL_ID"];
									$user_phone=$row["PHONE_NUMBER"];
									$user_position=$row["POSITION"];
									$user_department=$row["DEPARTMENT"];
									$user_type=$row["USER_TYPE"];
									$user_name=$row["USERNAME"];
						?>			
						 
						  

						<!--here showing results in the table -->  
						<td><?php echo $user_id;  ?></td>
						<td><?php echo $user_Fname." ".$user_Lname  ?></td>
						<td><?php echo $user_gender  ?></td>
						<td><?php echo $user_national  ?></td>
						<td><?php echo $user_phone  ?></td> 
						<td><?php echo $user_position  ?></td> 
						<td><?php echo $user_department  ?></td> 
						<td><?php echo $user_type  ?></td> 
						<td><?php echo $user_name  ?></td> 
						<td><form action="approve.php?del=<?php echo $user_national ?>&userid=<?php echo $user_id; ?>" method="post" ><button class="btn" name="submit" style="background-color:Green;color:white;">APPROVE</button></form></td> 
						<td><a href="deny.php?del=<?php echo $user_id ?>"><button class="btn" style="background-color:Red;color:white;">DENY</button></a></td> 
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
