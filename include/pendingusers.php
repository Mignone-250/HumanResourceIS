<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
 
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {

  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

</style> 
 
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
                      <th style="background-color: #152E48;color: white;">SN</th>
                      <th style="background-color: #152E48;color: white;">NAMES</th>
                      <th style="background-color: #152E48;color: white;">USERNAME</th>
                      <th style="background-color: #152E48;color: white;">ACTION</th>
                      <th style="background-color: #152E48;color: white;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
						$sql = "SELECT * FROM create_account ORDER BY USER_ID ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$user_id=$row["USER_ID"];  
									$user_Fname=$row["FIRST_NAME"];  
									$user_Lname=$row["LAST_NAME"];  
									$user_name=$row["USERNAME"];
						?>			
						 
						  

						<!--here showing results in the table -->  
						<td><?php echo $user_id;  ?></td>
						<td><?php echo $user_Fname." ".$user_Lname  ?></td> 
						<td><?php echo $user_name  ?></td> 
						<td><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" style="background-color:Green;color:white;">APPROVE</button></td> 
						<div id="id02" class="modal">
  
						  <div style="width:50%;" class="modal-content animate">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
								<center><h3 class="heading3">ASSIGN USER TYPE</h3>
								<form action="approve.php<?php echo '?USER_ID='.$user_id; ?>" method="post">
									
									<select  name="user_type" style="width:50%" required>
                                                  <option disabled selected>- Choose Type -</option>
                                                  <option>User</option>
                                                  <option>Admin</option>
                                                </select><br><br>
									<button type="submit" class="btn btn-primary" name="assign">ASSIGN</button><br><br>	
								</form></center>
													

						</div>
						</div>
						</div>
						
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
