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
                <h2><i class="fa fa-flag-o red"></i><strong>PAYROLL</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries" border="1">
                  <thead>
                    <tr>
                      <th style="background-color: #3C7792;color: white;">SN</th>
                      <th style="background-color: #3C7792;color: white;">POSITION</th>
                      <th style="background-color: #3C7792;color: white;">GROSS_SALARY</th>
                      <th style="background-color: #3C7792;color: white;">EXPENSES</th>
                      <th style="background-color: #3C7792;color: white;">NET_SALARY</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
						$sql = "SELECT * FROM payroll";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									$pay_id=$row["PAYROLL_ID"];  
									$position=$row["POSITION"];  
									$gross=$row["GROSS_SALARY"];  
									$expenses=$row["EXPENSES"];  
									$net=$row["NET_SALARY"];
									
									
									
									
						?>			
						 
						  

						<!--here showing results in the table -->  
						<td><?php echo $pay_id;  ?></td>
						<td><?php echo $position;  ?></td>
						<td><?php echo $gross;  ?></td>
						<td><?php echo $expenses; ?></td> 
						<td><?php echo $net ?></td> 
						
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
