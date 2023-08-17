<?php 
include ('include/config.php'); 
$ID=$_GET['USER_ID'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

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
  
<head><link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'></head>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
<?php
		include 'include/bannermenu.php';
		?>

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <div class="row" >
          <div class="col-lg-12" >
            <h3 class="page-header"><i class="fas fa-list"></i> Schedule</h3>
            <ol class="breadcrumb" style='background-color:lavender;'>
              <li><i class="fa fa-list"></i><a href="user_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Schedules/Schedule</li>
              <li><i class="fa fa-list"></i>Schedule</i></li>
            </ol>
          </div>
        </div>

        <div class="row">
         
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              
			 
              
                <div class="tab-content">

                  <!-- edit-Attendance -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      
                      </div>



<style>
h1{
  font-size: 30px;
  color: #06389d;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  border:1px;
 
}

.tbl-content{
  
  overflow-x:auto;
  margin-top: 0px;
  
  
}
th{
  padding: 20px 15px;
  text-align: left;
  font-size: 20px;
  color: white;
  
  text-transform: Capitalise;
  
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 14px;
  color: black;
  height:80px;
 
}



.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
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
<table>
<?php 
$sql ="SELECT * FROM admin_created_schedules ORDER BY sch_id DESC limit 1"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$week=$row["week"];
					$dates=$row["dates"];}}
								?>
								
								
								<?php 
								$sql ="SELECT * FROM user_registration WHERE USER_ID = '$ID'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$DEPARTMENT=$row["DEPARTMENT"];
					$POSITION=$row["POSITION"];}}
								?>


<tr><td style="color:gray; font-size:16px;font-family: 'Lato', sans-serif;">Department&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $DEPARTMENT ?></td>
<td style="color:gray;font-size:16px;font-family: 'Lato', sans-serif;">On&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dates ?></td></tr>

</table>


<?php 
		date_default_timezone_set('US/Pacific');
//$dateeee = date('Y/m/d');
//$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules2 WHERE USER_ID = '$ID' ORDER BY id DESC limit 1"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$task1=$row["task1"];
								$status_task1=$row["status_task1"];
								$deadline_task1=$row["deadline_task1"];
								$challenge_task11=$row["challenge_task1"];
								$task2=$row["task2"];
								$status_task2=$row["status_task2"];
								$deadline_task2=$row["deadline_task2"];
								$challenge_task21=$row["challenge_task2"];
								$task3=$row["task3"];
								$status_task3=$row["status_task3"];
								$deadline_task3=$row["deadline_task3"];
								$challenge_task31=$row["challenge_task3"];
								$task4=$row["task4"];
								$status_task4=$row["status_task4"];
								$deadline_task4=$row["deadline_task4"];
								$challenge_task41=$row["challenge_task4"];
								$task5=$row["task5"];
								$status_task5=$row["status_task5"];
								$deadline_task5=$row["deadline_task5"];
								$challenge_task51=$row["challenge_task5"];
								$date=$row["todaysdate"];
								
								?>		<?php }}?>
<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data" >
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers" style="font-size:14px;font-family: 'Lato', sans-serif;">
                <thead>
                  <tr>
				  
          <th style="background-color:lavender; color:black;font-size:14px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Task</th>
          <th style="background-color:lavender;font-size:14px;color:black;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Deadline</th>
		  <th style="background-color:lavender; font-size:14px;color:black;font-family: 'Lato', sans-serif; border:none;font-weight: lighter;">Status&nbsp;(You can change the status accordingly)<br></th>
		  <th style="background-color:lavender;font-size:14px;color:black;font-family: 'Lato', sans-serif; border:none;font-weight: lighter;">Challenge/Comment<br></th>
		  </tr></thead><tbody>
		  
            <tr>          
            <td style="font-size:14px;font-family: 'Lato', sans-serif;"> <?php echo @$task1 ?></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif; "> <center> <span style=' text-align:center; border-radius:25%;'><?php echo @$deadline_task1 ?></span></center></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;">
			 <select  name="Status_task12" style='  color:gray; width:100%; border:none;'>
			 <option  ><?php  echo @$status_task1  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 </td>
			
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><textarea style='border:none; width:100%;' name='challenge_task1' value=''><?php echo @$challenge_task11 ?></textarea></td>
			</tr>
			
			<tr>          
            <td style="font-size:14px;font-family: 'Lato', sans-serif;"> <?php echo @$task2 ?></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif; "><center> <span style=' text-align:center; border-radius:25%;'> <?php echo @$deadline_task2 ?></span></center></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;">
			 <select  name="Status_task22" style=' color:gray; width:100%; border:none;'>
			 <option  ><?php  echo @$status_task2  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 </td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><textarea style='border:none;width:100%;' name='challenge_task2' value='' ><?php echo @$challenge_task21 ?></textarea></td>
			</tr>
			
			
			<tr>          
            <td style="font-size:14px;font-family: 'Lato', sans-serif;"> <?php echo @$task3 ?></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif; "><center> <span style=" text-align:center; border-radius:25%;"> <?php echo @$deadline_task3 ?></span></center></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;">
			 <select  name="Status_task32" style='color:gray; width:100%; border:none;'>
			 <option ><?php  echo @$status_task3  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 </td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><textarea style='border:none;width:100%;' name='challenge_task3' value=''><?php echo @$challenge_task31 ?></textarea></td>
			</tr>
			
			
			<tr>          
            <td style="font-size:14px;font-family: 'Lato', sans-serif;"> <?php echo @$task4 ?></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"> <center> <span style=' text-align:center; border-radius:25%;'><?php echo @$deadline_task4 ?></span></center></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;">
			 <select  name="Status_task42" style=' color:gray; width:100%; border:none;'>
			 <option ><?php  echo @$status_task4  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 </td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><textarea style='border:none;width:100%;' name='challenge_task4' value=''><?php echo @$challenge_task41 ?></textarea></td>
			</tr>
			
			
			<tr>          
            <td style="font-size:14px;font-family: 'Lato', sans-serif;"> <?php echo @$task5 ?></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><center> <span style=' width:100px;  text-align:center; border-radius:25%;'><?php echo @$deadline_task5 ?></span></center></td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;">
			 <select  name="Status_task52" style=' color:gray; width:100%; border:none;'>
			 <option  ><?php  echo @$status_task5  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 </td>
			<td style="font-size:14px;font-family: 'Lato', sans-serif;"><textarea style='border:none; width:100%;' name='challenge_task5' value=''><?php echo @$challenge_task51 ?></textarea></td>
			</tr>
			
			
			

			<tr>
			<td><button type="submit" class="btn" name="savechanges" style="width:100%; height:100%;  font-size:18px; background-color:lavender;color:black;">Save</button></td>
			</tr>
			</tbody>
            </table>        
            </section>
			</form>
			</div>						
								
	
	
	<?php 
	if(isset($_POST['savechanges']))
        {
$status_task122 = mysqli_real_escape_string($conn, $_REQUEST['Status_task12']);
$status_task222 = mysqli_real_escape_string($conn, $_REQUEST['Status_task22']);
$status_task322= mysqli_real_escape_string($conn, $_REQUEST['Status_task32']);
$status_task422 = mysqli_real_escape_string($conn, $_REQUEST['Status_task42']);
$status_task522= mysqli_real_escape_string($conn, $_REQUEST['Status_task52']);
$challenge_task111 = mysqli_real_escape_string($conn, $_REQUEST['challenge_task1']);
$challenge_task21 = mysqli_real_escape_string($conn, $_REQUEST['challenge_task2']);
$challenge_task31 = mysqli_real_escape_string($conn, $_REQUEST['challenge_task3']);
$challenge_task41 = mysqli_real_escape_string($conn, $_REQUEST['challenge_task4']);
$challenge_task51 = mysqli_real_escape_string($conn, $_REQUEST['challenge_task5']);
		date_default_timezone_set('US/Pacific');
$dateeee = date('Y/m/d');
$day = date('l',strtotime($dateeee));

$sql="UPDATE schedules2 SET challenge_task1='$challenge_task111',challenge_task2='$challenge_task21',challenge_task3='$challenge_task31', challenge_task4='$challenge_task41',challenge_task5='$challenge_task51',status_task1='$status_task122',status_task2='$status_task222',status_task3='$status_task322',status_task4='$status_task422',status_task5='$status_task522' WHERE USER_ID = '$ID' and todaysdate ='$date'"; 
if(mysqli_query($conn, $sql)){
    echo "<div class='row' id='helpdiv'><div class='col-lg-12'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Your Schedule Has Been Updated Successfully.</div></div></div><br>";
	
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

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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
