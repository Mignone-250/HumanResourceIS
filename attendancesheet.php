<?php $ID=$_GET['USER_ID'];?>
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
		include 'include/receptionsitbannermenue.php';
		?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i> Attendance</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-list"></i><a href="receptionist_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Attendance/Take attendance</li>
              <li><i class="fa fa-list"></i>Take Attendance</i></li>
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
                                          TAKE ATTENDANCE
                                      </a>
                  </li>
                  <li class="" style="font-family: 'Lato', sans-serif;">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                         EDIT ATTENDANCE RECORDED
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
								
							
																			
  
  <div class="tbl-header2" style='background-color:#F8F8FF;'>
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <tr><th style=" font-size:14px;font-family: 'Lato', sans-serif;">Names:&nbsp;&nbsp; &nbsp;&nbsp;<p style="font-family: 'Lato', sans-serif;"><?php  echo $FIRST." ".$LAST  ?></p></th>
          <th style=" font-size:14px;font-family: 'Lato', sans-serif;">Position:&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-family: 'Lato', sans-serif;"><?php  echo $POSITION ?></p></th></tr>
          <tr><th style=" font-size:14px;font-family: 'Lato', sans-serif;">Department:&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-family: 'Lato', sans-serif;"><?php  echo $DEPARTMENT ?></p></th>
          <th style=" font-size:14px;font-family: 'Lato', sans-serif;">Supervisor:&nbsp;&nbsp;&nbsp;&nbsp;<p style="font-family: 'Lato', sans-serif;">Liliane Uwimana</p></th></tr>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>

  
  <?php
  
    if(isset($_POST['record']))
        {
		$date= mysqli_real_escape_string($conn, $_REQUEST['CurrentDate']);
		$arrivedat= mysqli_real_escape_string($conn, $_REQUEST['arrivedat']);
		$leftat= mysqli_real_escape_string($conn, $_REQUEST['leftat']);
$arrival_status= mysqli_real_escape_string($conn, $_REQUEST['arrival_status']);
$leaving_status=mysqli_real_escape_string($conn,$_REQUEST['leaving_status']);
$day_status= mysqli_real_escape_string($conn, $_REQUEST['day_status']);


$sql_t = "SELECT * FROM roll_call_attendance WHERE USER_ID = '$ID' and todate='$date'";
	if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
		 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong>You finished taking attendance for today.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
	
	}
	else{
	
	

		
		

// Attempt insert query execution
$sql = "INSERT INTO roll_call_attendance (USER_ID,todate,arrived_at,arrival_status,left_at,leaving_status,day_status)
VALUES ('$ID','$date','$arrivedat','$arrival_status','$leftat','$leaving_status','$day_status')";

if(mysqli_query($conn, $sql)){
   
	 echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Attendance recorded successfully.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
		}}}

    ?>	
	
	
	
	<div class="panel-body bio-graph-info" style="background-color:Lavender">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off" >
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Date</label>
                            <div class="col-lg-6">
                              
							  
							  <input type="text" name="CurrentDate" class="form-control"  readonly value=" <?php echo date('Y/m/d');?>" autofocus="autofocus" style=" cursor:default;">
							
							  
                            </div>
                          </div>
						  
                          <div class="form-group">
                            <label class="col-lg-2 control-label" >Time In</label>
                            <div class="col-lg-6">
                               <select class="form-control" name="arrivedat" required>
                                                  <?php
for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
    for($mins=0; $mins<60; $mins+=1) // the interval for mins is '30'
        echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';


												  ?>
                                                  
                                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-lg-6">
							<input type="hidden" name="arrival_status" class="form-control" readonly>
                              
                            </div>
                          </div>
						  <div class="form-group">
                            <!--<label class="col-lg-2 control-label" >Time Out </label>-->
                            <div class="col-lg-6">
                              <input type="hidden" name="leftat" class="form-control" readonly >
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <input type="hidden" name="leaving_status" class="form-control" readonly >
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                            <!--<label class="col-lg-2 control-label" >Whole Day Status </label>-->
                            <div class="col-lg-6">
                              <input type="hidden" name="day_status" class="form-control" readonly >
                            </div>
                          </div>
                          

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="record">RECORD</button>
                              <button type="button" class="btn btn-danger">CANCEL</button>
                            </div>
                          </div>
                        </form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						

						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
                    </section>
                  </div>
                  <!-- edit-Attendance -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      
                      </div><br><br>






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
								
								
							
																			
  
  <div class="tbl-header2">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <tr><th style=" font-size:14px;font-family: 'Lato', sans-serif; font-weight:lighter;">Employee Name:&nbsp;&nbsp; &nbsp;&nbsp;<span style="color:blue;font-family: 'Lato', sans-serif;font-weight:lighter;"><?php  echo $FIRST." ".$LAST  ?></span></th>
          <th style=" font-size:14px;font-family: 'Lato', sans-serif; font-weight:lighter;">Employee Post:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;font-family: 'Lato', sans-serif; font-weight:lighter;"><?php  echo $POSITION ?></span></th></tr>
          <tr><th style=" font-size:14px;font-family: 'Lato', sans-serif; font-weight:lighter;">Employee Department:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;font-family: 'Lato', sans-serif; font-weight:lighter;"><?php  echo $DEPARTMENT ?></span></th>
          <th style=" font-size:14px;font-family: 'Lato', sans-serif; font-weight:lighter;">Employee Supervisor:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;font-family: 'Lato', sans-serif; font-weight:lighter;">Liliane Uwimana</span></th></tr>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>
  
  
  
  
	
	
	
	 <?php
	 
	  
		date_default_timezone_set('US/Pacific');
		
		
 
		
$dateeee = date('Y/m/d');	

 //$select = mysqli_query($sql, "SELECT id FROM table WHERE DATE(time) = '$date' LIMIT 1");
$sql ="SELECT * FROM roll_call_attendance WHERE USER_ID = $ID and todate='$dateeee' ";

$timetoarrivee = '08:00:00';
$timetoleavee = '18:00:00';
$timetoarrive = date("g:i A", strtotime($timetoarrivee));
$timetoleave = 	date("g:i A", strtotime($timetoleavee));
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["USER_ID"];
								$datee=$row["todate"];
								$arrivedate=$row["arrived_at"];
								$arrivedat = date("g:i A", strtotime($arrivedate));
								
								$arrivalstatus=$row["arrival_status"];
								$left_atti=$row["left_at"];
								$left_att = date("g:i A", strtotime($left_atti));
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
          <th style="background-color:Lavender ">Date</th>
          
		  <th style="background-color:Lavender ">Time In</th>
		  <th style="background-color:Lavender ">Time In Status</th>
		  <th style="background-color:Lavender ">Time out</th>
		  <th style="background-color:Lavender ">Time Out Status</th>
		  <th style="background-color:Lavender ">Day Availability(Status)</th>
		  
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      
             <td> <input type="text" name="CurrentDate"  readonly value=" <?php echo $datee;?>"style="border:none;"></td>
			
                    <td><input type="text" name="arrivedat" value=" <?php echo $arrivedat;?>" readonly style="border:none;"> % &nbsp;</td>
<td>
					<input type="text" name="arrival_status"  value=" <?php echo $ArrivingStatus;?>" style="border:none;" readonly>
					
					
					
					
					</td>					
					<td>
					
					
					
					<select name="leftat" required style="border:none; width:100%;">
					<option><?php echo $left_att?></option>
					
                                                  <?php
for($hours=0; $hours<24; $hours++) // the interval for hours is '1'
    for($mins=0; $mins<60; $mins+=1) // the interval for mins is '30'
        echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';


												  ?>
                                                  
                                                </select>
					
					
					
					
					</td>
					
					<td>
					<input type="text" name="leaving_statuss" readonly value=" <?php echo $status ?>" style="border:none;">
					
					</td>
					
					
					<td>
					<select type="text" name="daystatus"   readonly  style="border:none; width:100%;">
<option><?php echo $daystatus;?></option>
<option>Present</option>
<option>Absent</option>
<option>Late</option></select>
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
		$newarrivedat = date("G:i", strtotime($arrivedat));
		$leftat= mysqli_real_escape_string($conn, $_REQUEST['leftat']);
		$newleftat = date("G:i", strtotime($leftat));
$arrival_status= mysqli_real_escape_string($conn, $_REQUEST['arrival_status']);
$leaving_status=mysqli_real_escape_string($conn,$_REQUEST['leaving_statuss']);
@$day_status= mysqli_real_escape_string($conn, $_REQUEST['daystatus']);

$sql="UPDATE roll_call_attendance SET todate='$date',arrived_at='$newarrivedat',arrival_status='$arrival_status',left_at='$newleftat',leaving_status='$leaving_status',day_status='$day_status' WHERE USER_ID = '$ID' and todate = '$date' "; 
if(mysqli_query($conn, $sql)){
    echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Attendance has been updated successfully.</div></div><br><br><br>";
								 
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
