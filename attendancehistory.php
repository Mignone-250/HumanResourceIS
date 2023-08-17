<?php $ID=$_GET['USER_ID'];?>
<?php 
include ('include/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>HRMS</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  
  <style>
</style>  

</head>


<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
<?php
		include 'include/receptionsitbannermenue.php';
		?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i> Attendance</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="receptionist_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Attendance/Attendance History</li>
            </ol>
          </div>
        </div>

        <div class="row">
         
          <br>
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              
			  <div id='absences' style="background-color:red; width:10%; height:8%; position:absolute; left:75%; top:2%; 
			  font-family: 'Lato', sans-serif; font-size:18px; color:white; text-align:center;"><strong>Absences<strong><br>
			  <?php
			  $abc="SELECT count(day_status) as total FROM roll_call_attendance where day_status = 'Absent' AND USER_ID ='$ID'";
									$result=mysqli_query($conn,$abc);
									if($result)
									{
									while($row=mysqli_fetch_assoc($result))
									{
									$absences=$row["total"];
									
									echo $absences;}}
									else{
										
										
										echo 'No data found';
									}
			  
			  ?>
			  
			  </div>
              <div class="panel-body">
                <div class="tab-content">

                  <!-- edit-Attendance -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      
					  
					  
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal" style='margin-left:1.5%;' >
  <div class="form-group">
  <div class="col-lg-5" style='background-color:lavender;'>
  
  <table><tr><td style="background-color:lavender; border:none;  color:black;font-family: 'Lato', sans-serif;font-size:16px; font-weight:bold; width:40%;">
  Search By Date</td>
  <td style='border-left:1px solid white'><input type="date"  required class="form-control" id="l-name" name="seacrchdate" style="background-color:lavender; border:none;  color:black;font-family: 'Lato', sans-serif;font-size:16px; font-weight:bold;"></td>
  <td style='background-color:#518acb;width:11%;'>
<div style="background-color:#518acb;;height:100%; width:11%; position:absolute; top:0px;left:89%;">
<button type="submit" class="fa fa-search" name="search" style = "color: white !important;  background-color:#518acb;; border:none;
margin-top:20px;margin-left:20px; margin-bottom:20px; margin-right:20px;"></button>
</div>

</td>
  <tr></table>
</div>
  
  </div>
  </form>












<?php
  
  
   if(isset($_POST['search']))
        {
			echo '<br>';
			   echo '<div class="col-sm-12" id= "printinga">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblattendance">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">DATE</th>
          
		  <th style="background-color:Lavender ">ARRIVED AT</th>
		  <th style="background-color:Lavender ">ARRIVAL STATUS</th>
		  <th style="background-color:Lavender ">LEFT AT</th>
		  <th style="background-color:Lavender ">LEAVING STATUS</th>
		  <th style="background-color:Lavender ">DAY STATUS</th>
                  </tr>
                </thead>' ;
				date_default_timezone_set('US/Pacific');
				
				
			
			
		$datesearch= mysqli_real_escape_string($conn, $_REQUEST['seacrchdate']);
		
		

$sql = "SELECT * FROM `roll_call_attendance` WHERE USER_ID = '$ID' and todate = '$datesearch'";

					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$USER_ID=$row["USER_ID"];
								$datee=$row["todate"];
								$arrivedate=$row["arrived_at"];
								$arrivedat = date("g:i A", strtotime($arrivedate));
								$arrivalstatus=$row["arrival_status"];
								$left_atte=$row["left_at"];
								$left_att = date("g:i A", strtotime($left_atte));
								$laevingstatus=$row["leaving_status"];
								$daystatus=$row["day_status"];	
								
								?>
								
								
							
																			
  
 <?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>

								
		
                <tbody>
                  <tr>
                      
             <td> <input type="text" name="CurrentDate"  readonly value=" <?php echo $datee;?>"style="border:none;"></td>
			
                    <td><input type="text" name="arrivedat" readonly value=" <?php echo $arrivedat;?>" readonly style="border:none;"> % &nbsp;</td>
<td>
					<input type="text" name="arrival_status" readonly  value=" <?php echo $arrivalstatus;?>" style="border:none;">
					
					</td>					
					<td>
					<input type="text" name="leftat" readonly  value=" <?php echo $left_att;?>" style="border:none;">
					
					</td>
					
					<td>
					<input type="text" name="leaving_status" readonly value=" <?php echo $laevingstatus?>" style="border:none;">
					
					</td>
					<td><input type="text" readonly value=" <?php echo $daystatus;?>"  style="border:none;"></td>
					
					

                  </tr>
				  
					<?php }}
					
					else{
						echo $datesearch;
					}
 ?>
</tbody>
              </table>        
            </section>
			</form>
			
		</div><?php }?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  



<?php $ID=$_GET['USER_ID'];?>
<style>
h1{
  font-size: 30px;
  color: #06389d;
  
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  border:1px;
}
.tbl-header{
  background-color:black;
  border:1px;
 }
 .tbl-header2{
  background-color:#fff;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  background-color:#1c4966;
  
}
th{
  padding: 20px 15px;
  text-align: left;
  font-size: 12px;
  color: white;
  
  font-weight:bolder;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
 
}



/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

</style>

  <!--for demo wrap-->
  
  
  <?php

$sql = "SELECT * FROM user_registration WHERE USER_ID = $ID"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["USER_ID"];
								$FIRST=$row["FIRST_NAME"];
								$LAST=$row["LAST_NAME"];
								$POSITION=$row["POSITION"];
								$DEPARTMENT=$row["DEPARTMENT"];
								
								?>
								<br><br>
								
								
								
								
							
	

  
  
  <div class="tbl-header2">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <tr><th style=" font-size:15px;font-family: 'Lato', sans-serif; font-weight:lighter;">Names:&nbsp;&nbsp; &nbsp;&nbsp;<span style="font-family: 'Lato', sans-serif;"><?php  echo $FIRST." ".$LAST  ?></span></th>
          <th style=" font-size:15px;font-family: 'Lato', sans-serif;font-weight:lighter;">Position:&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Lato', sans-serif"><?php  echo $POSITION ?></span></th></tr>
          <tr><th style=" font-size:15px;font-family: 'Lato', sans-serif;font-weight:lighter;">Department:&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Lato', sans-serif"><?php  echo $DEPARTMENT ?></span></th>
          <th style=" font-size:15px;font-family: 'Lato', sans-serif;font-weight:lighter;">Supervisor:&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: 'Lato', sans-serif">Liliane Uwimana</span></th></tr>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>
 
  
  
  
  <br><br><br><br>
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
   
  
  
  
  
  
  
  
  

  
  
<div class="col-sm-12" id= "printinga">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
               
  
  
  
 

		<?php
		$ID=$_GET['USER_ID'];
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM roll_call_attendance WHERE USER_ID = '$ID' ")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare("SELECT * FROM roll_call_attendance WHERE USER_ID = '$ID' ORDER BY attendance_id LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
	
	<style>
			
			
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
			
			
			
			<table border="1" class="table" id="tblattendance">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">Date</th>
          
		  <th style="background-color:Lavender ">Time In</th>
		  <th style="background-color:Lavender ">Time In Status</th>
		  <th style="background-color:Lavender ">Time out</th>
		  <th style="background-color:Lavender ">Time Out Status</th>
		  <th style="background-color:Lavender ">Day Availability(Status)</th>
                  </tr>
                </thead> 
			
			
			<?php while ($row = $result->fetch_assoc()):
				$USER_ID=$row["USER_ID"];
								$datee=$row["todate"];
								$arrivedate=$row["arrived_at"];
								$arrivedat = date("g:i A", strtotime($arrivedate));
								$arrivalstatus=$row["arrival_status"];
								$left_atte=$row["left_at"];
								$left_att = date("g:i A", strtotime($left_atte));
								$laevingstatus=$row["leaving_status"];
								$daystatus=$row["day_status"];									
				?>

		
		
		
		
	
	
	
	
	
	
	
	<?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>

								
		
                <tbody>
                  <tr>
                      
             <td> <input type="text" name="CurrentDate"  readonly value=" <?php echo $datee;?>"style="border:none;"></td>
			
                    <td><input type="text" name="arrivedat" readonly value=" <?php echo $arrivedat;?>" readonly style="border:none;"> % &nbsp;</td>
<td>
					<input type="text" name="arrival_status" readonly  value=" <?php echo $arrivalstatus;?>" style="border:none;">
					
					</td>					
					<td>
					<input type="text" name="leftat" readonly  value=" <?php echo $left_att;?>" style="border:none;">
					
					</td>
					
					<td>
					<input type="text" name="leaving_status" readonly value=" <?php echo $laevingstatus?>" style="border:none;">
					
					</td>
					<td><input type="text" readonly value=" <?php echo $daystatus;?>"  style="border:none;"></td>
					
					

                  </tr>
				  
			

 
 
 
 
 
 
 <?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="attendancehistory.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="attendancehistory.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="attendancehistory.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="attendancehistory.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="attendancehistory.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="attendancehistory.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="attendancehistory.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="attendancehistory.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="attendancehistory.php?page=<?php echo $page+1 ?>">Next</a></li>
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
</tbody>
              </table>        
            </section>
			</form>
			
          </div>						
				
	
	<br>
	
	
	
	
	
	


                				
  
<center>
             <button class="btn btn-primary hidden-print" onclick="printDiv('printinga')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             <button class="btn btn-primary hidden-download" type="button" id="btnExport" value="Export" onclick="Export()"><i class="fa fa-download"></i> Export PDF</button>
			 
	    </center>

</div>





                      </div>		

					  
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        

        <!-- page end-->
      </section>
    </section>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
	
			<script>
		function printDiv(printinga) {
     var printContents = document.getElementById(printinga).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
function Export() {
            html2canvas(document.getElementById('tblattendance'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("attendance.pdf");
                }
            });
        }
        
</script>
	
	<script type="text/javascript">
   function resetForm(register_form)
   {
       var myForm = document.getElementById(register_form);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>
    <!--main content end-->
    <div class="text-center">
        <div class="credits">

            <?php
		$select111="select * from dev ";
//echo ($select);
$result111 = $conn->query($select111);
if ($result111->num_rows > 0) {
	while($row = $result111->fetch_assoc()) {
		$year=$row["year"]; ?>

Copyright &copy Mignone Unguyeneza <?php echo $year; ?><?php }}?> 
        </div>
      </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>
 

</body>

</html>
