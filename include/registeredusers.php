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
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
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
                      <th  style="background-color: #152E48;color: white;">SN</th>
                      <th  style="background-color: #152E48;color: white;">NAMES</th>
                      <th  style="background-color: #152E48;color: white;">GENDER</th>
                      <th  style="background-color: #152E48;color: white;">NATIONAL_ID</th>
                      <th  style="background-color: #152E48;color: white;">PHONE_NUMBER</th>
                      <th  style="background-color: #152E48;color: white;">POSITION</th>
                      <th  style="background-color: #152E48;color: white;">DEPARTMENT</th>
                      <th  style="background-color: #152E48;color: white;">USER_TYPE</th>
                      <th  style="background-color: #152E48;color: white;">USERNAME</th>
                      <th  style="background-color: #152E48;color: white;">ACTION</th>
                      <th  style="background-color: #152E48;color: white;">PAY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
						$sql = "SELECT * FROM user_registration ORDER BY USER_ID ASC";
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
						<td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete.php?del=<?php echo $user_id ?>"><button class="btn" style="background-color:red;color:white;">DELETE</button></a></td>
			<td><button onclick="document.getElementById('id02').style.display='block'" class="btn" style="background-color: #152E48;color:white;">PAY</button></td>
												<div id="id02" class="modal">
						  
												  <div style="width:50%;" class="modal-content animate">
													<div class="imgcontainer">
													  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
														<center><h3 class="heading3">TIME PAID</h3>
														<form action="pay.php?del=<?php echo $user_id ?>" method="post">
															<label>SELECT DATE</label><br>
															<input type="date" name="date"  style="width:50%" required><br><br>
															
															<button type="submit" class="btn btn-primary" name="assign">PAY</button><br><br>	
														</form></center>
						
						<script>
						function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
						</script>
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
