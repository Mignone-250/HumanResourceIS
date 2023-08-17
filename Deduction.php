<!DOCTYPE html>
<html lang="en">

<?php
		include('include/stylings.php');
	?>
<?php
		include 'include/config.php';
		?>
<body>
  <!-- container section start -->
  <section id="container" class="">
	<?php
		include 'include/header.php';
		?>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
		<?php
		include 'include/menue.php';
		?>
        
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-money"></i> Salaries</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Admin_dashboard.php">Home</a></li>
			  <li><i class="fa fa-money"></i>Deductions On Salaries </li>
              <li><i class="icon_document_alt"></i>Add Deductions</li>
            </ol>
          </div>
        </div>
	<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>DEDUCTIONS</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>	
		<br>
		
		<?php
    include 'include/DeductionForm.php';
    ?>
	
	
            
              
              <div class="panel-body">
                <table class="table bootstrap-datatable countries" border="1">
                  <thead>
                    <tr>
                      
                      <th style="background-color: #152E48;color: white;">Deduction Name</th>
                      <th style="background-color: #152E48;color: white;">Deduction Amount</th>
                      <th style="background-color: #152E48;color: white;">Delete</th>
                      
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      	  <?php
						$sql = "SELECT * FROM deductions where DEDUCTION_TYPE !='TOTAL'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 $ID=$row["DID"];
									$DEDUCTION=$row["DEDUCTION_TYPE"];  
									$AMOUNT=$row["DEDUCTION_AMOUNT"];  
									  
									//$EXPENSES=$row["EXPENSES"];  
									//$NET_SALARY=$row["NET_SALARY"];
									
									
											
										
						?>			
                    
                    <td><?php echo $DEDUCTION;  ?></td>
                    <td>Rwf&nbsp;<?php echo $AMOUNT;  ?></td>
                    <td><form action="deletededuction.php?del=<?php echo $ID ?>" method="post" ><button class="btn" name="delete" style="background-color:lavender;color:red;"><i class="fa fa-trash-o" style="font-size:20px;"></i></button></form></td>
 
                  </tr>
				  
						<?php }} else {
    echo " ";
						
}?>
<tr><td>TOTAL</td><td>
				  <?php
						$sql = "SELECT * FROM deductions where DEDUCTION_TYPE ='TOTAL'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									   
									$AMOUNT=$row["DEDUCTION_AMOUNT"];  
									 echo "Rwf"." ".$AMOUNT;
						}}
				
						?>			</td><td></td></tr>
                  </tbody>
                </table><br>
				
              </div>

            </div>
</div>

<br><br>


                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
             
          
        <!-- project team & activity end -->

      </section>
      <div class="text-center">
        <div class="credits">

          Copyright &copy Mignone Unguyeneza 2019
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <?php
 include("include/scripting.php")
 ?>

</body>

</html>
