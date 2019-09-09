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
          <div class="col-lg-9">
            <section class="panel">
              <header class="panel-heading">
                Payroll Statements
              </header>
              <div class="panel-body">
                <div class="form">				
          <div class="col-sm-12">
            <section class="panel">
              
              <table class="table" id="tblCustomers">
                <thead>
                  <tr>
					<th>POSITION</th>
					<th>GROSS_SALARY</th>
                    <th>DEDUCTIONS</th>
                    <th>NET_SALARY</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
				  <?php
						$sql = "SELECT * FROM Payroll WHERE POSITION='".$_SESSION['Position']."'"; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$POSITION=$row["POSITION"];  
									$GROSS_SALARY=$row["GROSS_SALARY"];  
									$TOTAL_DEDUCTIONS=$row["TOTAL_DEDUCTIONS"];  
									$NET_SALARY=$row["NET_SALARY"];  
									//$EXPENSES=$row["EXPENSES"];  
									//$NET_SALARY=$row["NET_SALARY"];
						?>			
                    <td><?php echo $POSITION;  ?></td>
                    <td>Rwf&nbsp;<?php echo $GROSS_SALARY;  ?></td>
                    <td>Rwf&nbsp;<?php echo $TOTAL_DEDUCTIONS;  ?></td>
                    <td>Rwf&nbsp;<?php echo $NET_SALARY;  ?></td>
                    
                  </tr>
						<?php }} else {
    echo "0 results";
}?>
                </tbody>
              </table>
			  
			  <center>
             <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             <button class="btn btn-primary hidden-download" type="button" id="btnExport" value="Export" onclick="Export()"><i class="fa fa-download"></i> Export PDF</button>
	    </center>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
		<script>
		function myFunction() {
    window.print();
}
 function Export() {
            html2canvas(document.getElementById('tblCustomers'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Payroll.pdf");
                }
            });
        }
        
</script>
			  
            </section>
          </div>
                  
				  
				  
				  
                </div>

              </div>
            </section>
          </div>
        <!-- page end-->
          <div class="col-lg-3">
            <section class="panel">
              <header class="panel-heading">
                <b>DEDUCTIONS</b>
              </header>
              <div class="panel-body">
                <div class="form">        
          <div class="col-sm-12">
            <section class="panel">
              
              <table class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th>DEDUCTION</th>
          <th>AMOUNT</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <?php
            $sql = "SELECT * FROM deductions"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $deduction=$row["DEDUCTION_TYPE"];  
                  $amount=$row["DEDUCTION_AMOUNT"]; 
            ?>  
             <td><?php echo $deduction;  ?></td>
                    <td>Rwf &nbsp;<?php echo $amount;  ?></td> 

                  </tr>
                                    <?php }} else {
    echo "0 results";
}


 ?>
 
<?php   $conn->close();?>
                </tbody>
              </table>        
            </section>
          </div>
                  
          <!-- page end-->
          
          
                </div>

              </div>
            </section>
          </div>
        </div>

    </section>
	
  </section>
 <?php
  include"include/scripts.php";
  ?>
  

</body>

</html>