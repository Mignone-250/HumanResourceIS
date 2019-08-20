 <?php
  include"include/config.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include"include/stylings.php";
?>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  <?php
  include"include/bannermenu.php";
  ?>
  <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Payroll</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Payroll</li>
            </ol>
          </div>
        </div>
		
		
		
		
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Payroll Statements
              </header>
              <div class="panel-body">
                <div class="form">
				
				
				
          <div class="col-sm-12">
            <section class="panel">
              
              <table class="table">
                <thead>
                  <tr>
					<th>GROSS_SALARY</th>
                    <th>EXPENSES</th>
                    <th>NET_SALARY</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
				  <?php
						$sql = "SELECT * FROM Payroll";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$GROSS_SALARY=$row["GROSS_SALARY"];  
									$EXPENSES=$row["EXPENSES"];  
									$NET_SALARY=$row["NET_SALARY"];
						?>			
                    <td><?php echo $GROSS_SALARY;  ?></td>
                    <td><?php echo $EXPENSES;  ?></td>
                    <td><?php echo $NET_SALARY;  ?></td>
                    
                  </tr>
						<?php }} else {
    echo "0 results";
}

$conn->close(); ?>
                </tbody>
              </table>
			  
			  <center>
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
	    </center>
		<script>
		function myFunction() {
    window.print();
}</script>
			  
            </section>
          </div>
                  
				  
				  
				  
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section> 
    </section>
	
  </section>
 <?php
  include"include/scripts.php";
  ?>
  

</body>

</html>