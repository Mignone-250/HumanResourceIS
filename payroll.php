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
                PAYROLL STATEMENT
              </header>
              <div class="panel-body">
                <div class="form">				
          <div class="col-sm-12">
            <section class="panel" id="tblCustomers">
			
			
			 <table border="1" class="table"> <caption>SALARY STATEMENT</caption> 
			  <tr>
			   <?php
            $sql = "SELECT * FROM user_registration where USER_ID= '".$_SESSION['user']."'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["FIRST_NAME"];  
                  $last=$row["LAST_NAME"]; 
				    $phone=$row["PHONE_NUMBER"]; 
					  $position=$row["POSITION"]; 
					    $department=$row["DEPARTMENT"]; 
            ?>  
			  <td  style="background-color:Lavender" > <strong>EMPLOYEE INFO</strong>
			  <br>NAMES: <?php echo $first. " ". $last;  ?><br> PHONE: <?php echo $phone;  ?>
			   <br> POSITION: <?php echo $position;  ?><br> DEPARTMENT: <?php echo $department;  ?><br></td> 
			   <td style="background-color:Lavender"> <strong> MVEND ORGANIZATION</strong></td>
			 
			 
			  </tr>
			  <?php }} else {
    echo "0 results";
}


 ?>
			  </thead> <tbody> <tr>
			 
			  
			  <th>NAME</th> 
			   <th>AMOUNT</th> </tr>
			   <tr> 
			     <?php
            $sql = "SELECT * FROM payroll where POSITION= '".$_SESSION['Position']."'"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $first=$row["GROSS_SALARY"];  
                  $last=$row["TOTAL_SUPPLEMENTS"]; 
				  $phone=$row["TOTAL_DEDUCTIONS"];
				   $subtotal=$first+ $last;
				     $net=$subtotal- $phone;
					
					  
					    $department=$row["NET_SALARY"]; 
            ?>  <td>GROSS_SALARY</td> 
			  <td><?php echo $first;  ?></td>
			  
			  </tr> 
			  <tr> <th >SUPPLEMENTS</th>  <td><?php echo $last;  ?></td> 
			  </tr> 
			  
			   </tbody> <tfoot>
			  <tr style="background-color:Lavender  "> <th style="color:black;">SUBTOTAL</th> <td style="color:black;"><?php echo $subtotal;  ?> </td> 
			  </tr> <tr> <th >DEDUCTIONS</th>  <td><?php echo $phone;  ?></td> 
			  </tr> <tr style="background-color:Lavender "> <th style="color:black;" >NET_SALARY</th> <td style="color:black;"><?php echo $net;  ?></td> 
			  </tr> 
			  
			  <?php }} else {
    echo "0 results";
}

 ?></tfoot> </table>
			  <br><br>
			  
			  
			  
			  
			  
			  
              <table border="1" class="table"> <caption>PAY SLIP</caption> 
			  <thead> <tr> <th colspan="3">Invoice #123456789</th> 
			  <th>14 January 2025 </tr> <tr> 
			  <td colspan="2"> <strong>Pay to:</strong>
			  <br> Acme Billing Co.<br> 123 Main St.<br> Cityville, NA 12345 </td> 
			  <td colspan="2"> <strong>Customer:</strong><br> John Smith<br> 321 Willow Way<br> Southeast Northwestershire, MA 54321 </td> </tr>
			  </thead> <tbody> <tr> 
			  <th>Name / Description</th> <th>Qty.</th> 
			  <th>@</th> <th>Cost</th> </tr> <tr> <td>Paperclips</td> 
			  <td>1000</td> <td>0.01</td> <td>10.00</td> </tr> <tr> <td>Staples (box)</td>
			  <td>100</td> <td>1.00</td> <td>100.00</td> </tr> </tbody> <tfoot>
			  <tr> <th colspan="3">Subtotal</th> <td> 110.00</td> 
			  </tr> <tr> <th colspan="2">Tax</th> <td> 8% </td> <td>8.80</td> 
			  </tr> <tr> <th colspan="3">Grand Total</th> <td>$ 118.80</td> 
			  </tr> </tfoot> </table>

            </section>
			 <br><br>
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
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">DEDUCTION</th>
          <th style="background-color:Lavender ">AMOUNT</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <?php
            $sql = "SELECT * FROM deductions where DID !=4"; 
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

<td style="background-color:Lavender "><strong>TOTAL</strong></td><td style="background-color:Lavender ">Rwf &nbsp;
<?php
            $sql = "SELECT * FROM deductions where DID =4"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $amount=$row["DEDUCTION_AMOUNT"];
					echo $amount;
			}}
            ?>  


</td>
                </tbody>
              </table>        
            </section>
          </div>
                  
          <!-- page end-->
          
          
                </div>

              </div>
            </section>
          </div>
		  
		  <div class="col-lg-3">
            <section class="panel">
              <header class="panel-heading">
                <b>SUPPLEMENTS</b>
              </header>
              <div class="panel-body">
                <div class="form">        
          <div class="col-sm-12">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">SUPPLEMENTS</th>
          <th style="background-color:Lavender ">AMOUNT</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <?php
            $sql = "SELECT * FROM supplements where SUPPLEMENTS_ID !=2"; 
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $deduction=$row["SUPPLEMENTS_NAME"];  
                  $amount=$row["SUPPLEMENTS_AMOUNT"]; 
            ?>  
             <td><?php echo $deduction;  ?></td>
                    <td>Rwf &nbsp;<?php echo $amount;  ?></td> 

                  </tr>
                                    <?php }} else {
    echo "0 results";
}


 ?>

<td style="background-color:Lavender "><strong>TOTAL</strong></td><td style="background-color:Lavender ">Rwf &nbsp;
<?php
            $sql = "SELECT * FROM supplements where SUPPLEMENTS_ID =2";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
                   
                  $amount=$row["SUPPLEMENTS_AMOUNT"];
					echo $amount;
			}}
            ?>  


</td>
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