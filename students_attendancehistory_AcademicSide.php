<?php $ID=$_GET['e_learning_id'];?>
<?php 
include ('include/config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
<head><link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'></head>
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
		include 'include/Academics_menue.php';
		?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i> Attendance</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Academics_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Attendance/Attendance History</li>
            </ol>
          </div>
        </div>

        <div class="row">
         
          
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              
			  
			
			  
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li style="font-family: 'Lato', sans-serif;">
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          REVIEW ATTENDANCE
                                      </a>
                  </li>
                  <li class="" style="font-family: 'Lato', sans-serif;">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                         EDIT RECORDED ATTENDANCE
                                      </a>
                  </li>
                </ul>
              </header>
			  
			  
			   
			  <br><br>
			  
			  
			  
              <div class="panel-body">
                <div class="tab-content">
				
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
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
		
		

$sql = "SELECT * FROM `e_learning_rollcall_attendance` WHERE e_learning_id = '$ID' and todate = '$datesearch'";

					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$USER_ID=$row["e_learning_id"];
								$datee=$row["todate"];
								$arrivedat=$row["arrived_at"];
								$arrivalstatus=$row["arrival_status"];
								$left_att=$row["left_at"];
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  



<?php $ID=$_GET['e_learning_id'];?>
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

$sql = "SELECT * FROM  e_learning_students_registration WHERE e_learning_id = $ID"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["e_learning_id"];
								$FIRST=$row["fname"];
								$LAST=$row["lname"];
								$POSITION=$row["DOB"];
								$DEPARTMENT=$row["gdates"];
								$companyrecommended=$row["companyrecommended"];
								$employmentstatus=$row["employmentstatus"];
								$comments=$row["comments"];
								$email=$row["email"];?>
								<br><br>
								
								
								
								
							
	

  
  
  <div class="tbl-header2">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <tr><th style=" font-size:15px;font-family: 'Lato', sans-serif; font-weight:lighter;">Names:&nbsp;&nbsp; &nbsp;&nbsp;<span style="font-family: 'Lato', sans-serif;"><?php  echo $FIRST." ".$LAST  ?></span></th>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>
 
  
  
  
  <br><br><br><br>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
  
  
  
  
  
  
  
  

  
  
<div class="col-sm-12" id= "printinga">
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
                </thead>  
  
  
  
 
<?php
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }

	$total_records_per_page = 3;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `e_learning_rollcall_attendance`");
	echo mysqli_error($conn);
	$total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($conn,"SELECT * FROM `e_learning_rollcall_attendance` WHERE e_learning_id = $ID LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
		
		
		$USER_ID=$row["e_learning_id"];
								$datee=$row["todate"];
								$arrivedat=$row["arrived_at"];
								$arrivalstatus=$row["arrival_status"];
								$left_att=$row["left_at"];
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
				  
			<?php }
			
			

 ?>
</tbody>
              </table>        
            </section>
			</form>
			
          </div>						
				
	
	<br>
	
	
	
	
	
	

<center><div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
	}
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
		} ?>
</ul></center>

                				
  
<center>
             <button class="btn btn-primary hidden-print" onclick="printDiv('printinga')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
             <button class="btn btn-primary hidden-download" type="button" id="btnExport" value="Export" onclick="Export()"><i class="fa fa-download"></i> Export PDF</button>
			 
	    </center>
						
						
						
						
			
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						

						
						
						
						
						
						
						
						
						
						
						
						
					








































					
						
						
					
                    </section>
                  </div>
                  <!-- edit-Attendance -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      
                      </div><br><br>






<?php $ID=$_GET['e_learning_id'];?>

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
  margin-top:-40px;
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
  
  <?php
 $ID=$_GET['e_learning_id'];
$sql = "SELECT * FROM  e_learning_students_registration WHERE e_learning_id = $ID"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["e_learning_id"];
								$FIRST=$row["fname"];
								$LAST=$row["lname"];
								$POSITION=$row["DOB"];
								$DEPARTMENT=$row["gdates"];
								$companyrecommended=$row["companyrecommended"];
								$employmentstatus=$row["employmentstatus"];
								$comments=$row["comments"];
								$email=$row["email"];
								
								?>
								
								
							
																			
  
  <div class="tbl-header2">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <tr><th style=" font-size:14px;font-family: 'Lato', sans-serif; font-weight:lighter;">Student Name:&nbsp;&nbsp; &nbsp;&nbsp;<span style="color:blue;font-family: 'Lato', sans-serif;font-weight:lighter;"><?php  echo $FIRST." ".$LAST  ?></span></th>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>
  
  
  
  
	
	
	
	 <?php
	 
	  
		date_default_timezone_set('US/Pacific');
		
		
 
		
$dateeee = date('Y/m/d');	

 //$select = mysqli_query($sql, "SELECT id FROM table WHERE DATE(time) = '$date' LIMIT 1");
$sql ="SELECT * FROM  e_learning_rollcall_attendance WHERE e_learning_id = $ID and todate='$dateeee' "; 
$timetoarrive = '08:30:00';
$timetoleave = '05:30:00';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["e_learning_id"];
								$datee=$row["todate"];
								$arrivedat=$row["arrived_at"];
								$arrivalstatus=$row["arrival_status"];
								$left_att=$row["left_at"];
								$laevingstatus=$row["leaving_status"];
								$daystatus=$row["day_status"];
								
								
								if($arrivedat > $timetoarrive){
									
									$ArrivingStatus = "Late";
								}
								elseif($arrivedat < $timetoarrive){
									$ArrivingStatus = "Before Time";
								}
								elseif($arrivedat = $timetoarrive){
									$ArrivingStatus = "On Time";
								}
								else{
									echo"invalid time";
								}
								
								if($left_att < $timetoleave){
									
									$status = "Before Time";
								}
								
								elseif($left_att > $timetoleave){
									
									$status = "Late";
								}
								elseif($left_att = $timetoleave){
									
									$status = "On Time";
								}
								else{
									
									echo"0 results";
								}
								
								
	
								
								
								?>
								
								<?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>
								
		<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">DATE</th>
          
		  <th style="background-color:Lavender ">ARRIVED AT</th>
		  <th style="background-color:Lavender ">ARRIVAL STATUS</th>
		  <th style="background-color:Lavender ">LEFT AT</th>
		  <th style="background-color:Lavender ">LEAVING STATUS</th>
		  <th style="background-color:Lavender ">DAY STATUS</th>
		  <th style="background-color:Lavender "> CHANGE DAY STATUS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      
             <td> <input type="text" name="CurrentDate"  readonly value=" <?php echo $datee;?>"style="border:none;"></td>
			
                    <td><input type="text" name="arrivedat" value=" <?php echo $arrivedat;?>" readonly style="border:none;"> % &nbsp;</td>
<td>
					<input type="text" name="arrival_status"  value=" <?php echo $ArrivingStatus;?>" style="border:none;">
					
					</td>					
					<td>
					<input type="text" name="leftat"  value=" <?php echo $left_att;?>" style="border:none;">
					
					</td>
					
					<td>
					<input type="text" name="leaving_status" readonly value=" <?php echo $status?>" style="border:none;">
					
					</td>
					<td><input type="text" value=" <?php echo $daystatus;?>"  style="border:none;"></td>
					
					
<td>
<select type="text" name="daystatus"   readonly  style="border:none;">
<option disabled = "disabled" selected = "selected">Select</option>
<option>Present</option>
<option>Absent</option>
<option>Late</option></select>

					% &nbsp;
					</td>
					
					
					
					
					
					
                  </tr>
				  <tr>
						<td><button type="submit" class="btn" name="edit" style="width:200px; height:50px;  font-size:18px; background-color:#072f5f;color:white;">Edit</button></td>
				  
				  </tr>
			<?php }} else {
    echo "No data found in the database";
}


 ?>


                </tbody>
              </table>        
            </section>
			</form>
          </div>						
								
	






































	
								
  
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<?php

    if(isset($_POST['edit']))
        {
$date= mysqli_real_escape_string($conn, $_REQUEST['CurrentDate']);
		$arrivedat= mysqli_real_escape_string($conn, $_REQUEST['arrivedat']);
		$leftat= mysqli_real_escape_string($conn, $_REQUEST['leftat']);
$arrival_status= mysqli_real_escape_string($conn, $_REQUEST['arrival_status']);
$leaving_status=mysqli_real_escape_string($conn,$_REQUEST['leaving_status']);
$day_status= mysqli_real_escape_string($conn, $_REQUEST['daystatus']);

$sql="UPDATE  e_learning_rollcall_attendance SET todate='$date',arrived_at='$arrivedat',arrival_status='$arrival_status',left_at='$leftat',leaving_status='$leaving_status',day_status='$day_status' WHERE e_learning_id = '$ID' and todate = '$date' "; 
if(mysqli_query($conn, $sql)){
    echo "<div class='row' id='helpdiv'><div class='col-lg-12'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong>  Today's attendance was successfully taken.</div></div></div><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}

    ?>
					




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

          Copyright &copy Mignone Unguyeneza 2019
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
