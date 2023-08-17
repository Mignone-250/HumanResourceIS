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
  
  <style>
</style>  

</head>



<body>
	
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
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
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i>MY PERFORMANCE EVALUATION</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-list"></i><a href="receptionist_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>PERFORMANCE EVALUATION/MY EVALUATION</li>
              <li><i class="fa fa-list">   MY EVALUATION</i></li>
            </ol>
          </div>
        </div>

        <div class="row">
         
          <br>
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                      EVALUATE
                                      </a>
                  </li>


                  <li class="">
                    <a data-toggle="tab" href="#review">
                                          <i class="icon-envelope"></i>
                                       REVIEW
                                      </a>
                  </li>

                </ul>
              </header>
			  <br><br>
			  
			  <br><br><br><br>
			  
              <div class="panel-body">
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
  font-size: 20px;
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
<table style='font-size:20px; background-color:lavender; color:blue;'>
								
								
								<?php 
								$sql ="SELECT * FROM user_registration WHERE USER_ID = $ID"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$FIRST_NAME=$row["FIRST_NAME"];
								$POSITION=$row["POSITION"];
					$LAST_NAME=$row["LAST_NAME"];}}
								?>


                                <?php 
								$sql ="SELECT * FROM performance_review WHERE USER_ID = $ID order by p_id desc limit 1"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								@$accomplishments=$row["accomplishments"];

								@$employee_score1=$row["employee_score1"];
					            @$comment1=$row["comment1"];
					            @$communication = $row['communication'];

                                @$urgency= $row['urgency'];
                                @$employee_score2 = $row['employee_score2'];
                                //$manager_score2 = $row['manager_score2'];
                                @$comment2= $row['comment2'];

                                @$attitude = $row['attitude'];
                                @$employee_score3 = $row['employee_score3'];
                                //$manager_score3 = $row['manager_score3'];
                                @$comment3 = $row['comment3'];

                                @$ownership= $row['ownership'];
                                @$employee_score4 = $row['employee_score4'];
                                //$manager_score4 = $row['manager_score4'];
                                @$comment4 = $row['comment4'];

                                @$productivity = $row['Productivity'];
                                @$employee_score5 =$row['employee_score5'];
                                //$manager_score5= $row['manager_score5'];
                                @$comment5= $row['comment5'];

                                @$qualitywork = $row['QualityWork'];
                                @$employee_score6 = $row['employee_score6'];
                                //$manager_score6 =$row['manager_score6'];
                                @$comment6 = $row['comment6'];

                                @$cost = $row['cost'];
                                @$employee_score7 =$row['employee_score7'];
                                //$manager_score7 = $row['manager_score7'];
                                @$comment7 = $row['comment7'];

                                @$employeesfeedback = $row['employeesfeedback'];
                                //$managersfeedback = $row['ManagersFeedback'];

                                @$proactivity= $row['proactivity'];
                                @$employee_score8 =$row['employee_score8'];
                                //$manager_score8 = $row['manager_score8'];
                                @$comment8=$row['comment8'];


                                @$teamwork= $row['teamwork'];
                                @$employee_score9 =$row['employee_score9'];
                                //$manager_score8 = $row['manager_score8'];
                                @$comment9=$row['comment9'];
                                }}
								?>


<tr><td style=''><b>Evaluation Dates &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $t=date('Y-m-d');echo $t;?></td><td style=''><b>Employee Name &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $FIRST_NAME ?></td>
<td style=''><b>Position &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $POSITION ?></td>
</tr>
</table>




    
<?php 
	if(isset($_POST['update']))
        {
//$accomplishments = mysqli_real_escape_string($conn, $_REQUEST['accomplishments']);

//$communication = mysqli_real_escape_string($conn, $_REQUEST['communication']);
//$employee_score1 = mysqli_real_escape_string($conn, $_REQUEST['employee_score1']);
$manager_score1 = mysqli_real_escape_string($conn, $_REQUEST['manager_score1']);
$comment1 = mysqli_real_escape_string($conn, $_REQUEST['comment1']);


//$urgency= mysqli_real_escape_string($conn, $_REQUEST['urgency']);
//$employee_score2 = mysqli_real_escape_string($conn, $_REQUEST['employee_score2']);
$manager_score2 = mysqli_real_escape_string($conn, $_REQUEST['manager_score2']);
$comment2= mysqli_real_escape_string($conn, $_REQUEST['comment2']);

//$attitude = mysqli_real_escape_string($conn, $_REQUEST['attitude']);
//$employee_score3 = mysqli_real_escape_string($conn, $_REQUEST['employee_score3']);
$manager_score3 = mysqli_real_escape_string($conn, $_REQUEST['manager_score3']);
$comment3 = mysqli_real_escape_string($conn, $_REQUEST['comment3']);

//$ownership= mysqli_real_escape_string($conn, $_REQUEST['ownership']);
//$employee_score4 = mysqli_real_escape_string($conn, $_REQUEST['employee_score4']);
$manager_score4 = mysqli_real_escape_string($conn, $_REQUEST['manager_score4']);
$comment4 = mysqli_real_escape_string($conn, $_REQUEST['comment4']);

//$productivity = mysqli_real_escape_string($conn, $_REQUEST['Productivity']);
//$employee_score5 = mysqli_real_escape_string($conn, $_REQUEST['employee_score5']);
$manager_score5= mysqli_real_escape_string($conn, $_REQUEST['manager_score5']);
$comment5= mysqli_real_escape_string($conn, $_REQUEST['comment5']);

//$qualitywork = mysqli_real_escape_string($conn, $_REQUEST['QualityWork']);
//$employee_score6 = mysqli_real_escape_string($conn, $_REQUEST['employee_score6']);
$manager_score6 = mysqli_real_escape_string($conn, $_REQUEST['manager_score6']);
$comment6 = mysqli_real_escape_string($conn, $_REQUEST['comment6']);

//$cost = mysqli_real_escape_string($conn, $_REQUEST['cost']);
//$employee_score7 = mysqli_real_escape_string($conn, $_REQUEST['employee_score7']);
$manager_score7 = mysqli_real_escape_string($conn, $_REQUEST['manager_score7']);
$comment7 = mysqli_real_escape_string($conn, $_REQUEST['comment7']);

//$employeesfeedback = mysqli_real_escape_string($conn, $_REQUEST['employeesfeedback']);
$managersfeedback = mysqli_real_escape_string($conn, $_REQUEST['ManagersFeedback']);

//$proactivity= mysqli_real_escape_string($conn, $_REQUEST['proactivity']);
//$employee_score8 = mysqli_real_escape_string($conn, $_REQUEST['employee_score8']);
$manager_score8 = mysqli_real_escape_string($conn, $_REQUEST['manager_score8']);
$comment8= mysqli_real_escape_string($conn, $_REQUEST['comment8']);


//$teamwork= mysqli_real_escape_string($conn, $_REQUEST['teamwork']);
//$employee_score9 = mysqli_real_escape_string($conn, $_REQUEST['employee_score9']);
$manager_score9 = mysqli_real_escape_string($conn, $_REQUEST['manager_score9']);
$comment9= mysqli_real_escape_string($conn, $_REQUEST['comment9']);


$sql="UPDATE performance_review SET manager_score1 = '$manager_score1',manager_score2 = '$manager_score2',manager_score3 ='$manager_score3',manager_score4 = '$manager_score4',manager_score5 = '$manager_score5',manager_score6 = '$manager_score6', manager_score7 = '$manager_score7',manager_score8 = '$manager_score8',manager_score9 = '$manager_score9',managerscomment='$comment1',managerscomment2='$comment2',managerscomment3='$comment3',managerscomment4='$comment4',
managersfeedback='$managersfeedback',managerscomment5='$comment5',managerscomment6='$comment6',managerscomment7='$comment7',managerscomment8 = '$comment8',managerscomment9='$comment9'WHERE USER_ID = '$ID' order by p_id desc limit 1"; 
if(mysqli_query($conn, $sql)){
	echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> You successfully evaluated this person's performance for the last 3 months.</div></div><br><br><br>";
								 
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


<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              <h3 style='font-weight:bold;'>Accomplishments</h3>
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style=" color:black;">Key Accomplishments(At least 3)&nbsp;&nbsp;&nbsp;<span style='color:red;'><i>from Your Last 3 Months</i></span></th>
		  </tr>
          </thead><tbody>




		  
            <tr>          
			<td style="background-color:Lavender;  "><?php echo @ nl2br ($accomplishments); ?></td>
			</tr>
			
			
			
			</tbody>
            </table>    

            
             <h3 style='font-weight:bold;'>Score Card</h3>
            <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black;">Focus Area</th>
          <th style="background-color:Lavender; color:black;">Employee Score</th>
          <th style="background-color:Lavender; color:black;">Manager Score</th>
          <th style="background-color:Lavender; color:black;">My Comment</th>
		  </tr>
          </thead><tbody>
          <tr>          
			<td style='color:black;'>Communication(10%)</td>
			<td style='background-color:lavender; '><?php echo @$employee_score1; ?></td>
			<td><input type='number' name='manager_score1' style='border:none; font-weight:bold; color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment1'></textarea></td>

			</tr>


            <tr>          
			<td style='color:black;'>Delivering tasks on time - Sense of urgency (30%)</td>
			<td style='background-color:lavender; '><?php echo @$employee_score2; ?></td>
			<td  ><input type='number' name='manager_score2' style='border:none; font-weight:bold;  color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment2'></textarea></td>
			</tr>


            <tr>
			<td style='color:black;'>Attitude and Behavior (2%)</td>
			<td style='background-color:lavender; '><?php echo @$employee_score3; ?></td>
			<td><input type='number' name='manager_score3'  style='border:none; font-weight:bold;  color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment3'></textarea></td>
			</tr>

            <tr>          
			<td style='color:black;'>Ownership/ Accountability (15%)</td>
			<td style='background-color:lavender; '><?php echo @$employee_score4; ?></td>
			<td><input type='number' name='manager_score4'  style='border:none; font-weight:bold;  color:black; width:100%;'></td>
			<td><textarea style='border:none; width:100%;' name='comment4'></textarea></td>
			</tr>

            
            <tr>          
			<td style='color:black;'>Productivity (2%)</td>
			<td style='background-color:lavender;'><?php echo @$employee_score5; ?></td>
			<td ><input type='number' name='manager_score5'  style='border:none; font-weight:bold;color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment5'></textarea></td>
			</tr>


            <tr>          
			<td style='color:black;'>Quality Work/ Attention to detail (15%)</td>
			<td style='background-color:lavender;'><?php echo @$employee_score6; ?></td>
			<td ><input type='number' name='manager_score6'   style='border:none; font-weight:bold; color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment6'></textarea></td>
			</tr>



            
             <tr>          
			<td style='color:black;'>Cost-Effectiveness (10%)</td>
			<td style='background-color:lavender;' ><?php echo @$employee_score7; ?></td>
			<td ><input type='number' name='manager_score7'  style='border:none; font-weight:bold;  light-gray;color:black; width:100%;'></td>
			<td><textarea style='border:none; width:100%;' name='comment7'></textarea></td>
			</tr>


            <tr>          
			<td style='color:black;'>Proactivity (8%)</td>
			<td style='background-color:lavender;' ><?php echo @$employee_score8; ?></td>
			<td ><input type='number' name='manager_score8' style='border:none; font-weight:bold; color:black; width:100%;'></td>
			<td><textarea style='border:none; width:100%;' name='comment8'></textarea></td>
			</tr>

            
            <tr>          
			<td style='color:black;'>Team Work (8%)</td>
			<td style='background-color:lavender;'><?php echo @$employee_score9; ?></td>
			<td ><input type='number' name='manager_score9' style='border:none; font-weight:bold;  color:black; width:100%; '></td>
			<td><textarea style='border:none; width:100%;' name='comment9'></textarea></td>
			</tr>

            
            
            

            </tbody></table>


            <p style='font-weight:bold; color:red; font-family:calibri; font-size:20px;'><span style='color:red;'>Note:</span> Rating Scale of 1- 5 - But the weighting should differ for each of the results 
The parts in brackets are the percentages 
Score Card - 50%
OKR’s - 50%
</p>




<table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black; font-size:20px; ">Employee’s General Feedback</th>
		  </tr>
          </thead><tbody>
          <br><br>



		  
            <tr>          
			<td style="background-color:Lavender; "><?php echo @$employeesfeedback; ?></td>
			</tr>
			
			
			
			</tbody>
            </table>


            <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black; font-size:20px; ">Manager’s General Feedback</th>
		  </tr>
          </thead><tbody>
          <br><br>



		  
            <tr>          
			<td><textarea   style=' width:100%;' name='ManagersFeedback'></textarea></td>
			</tr>


			
			
			
			</tbody>
            </table>



             <table border="1" class="table" id="tblCustomers">
             
			<tr>
			<td><button type="submit" class="btn" name="update" style="width:100%; height:100%;  font-size:18px; background-color:#072f5f;color:white;">Save</button></td>
			</tr>
            </table>


            </section>
			</form>
			</div>						
								
	
	
	
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



                      



                      <!-- edit-Attendance -->
                  <div id="review" class="tab-pane">
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
  font-size: 20px;
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
<table style='font-size:20px; background-color:lavender; color:blue;'>
								
								
								<?php 
								$sql ="SELECT * FROM user_registration WHERE USER_ID = $ID "; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$FIRST_NAME=$row["FIRST_NAME"];
								$POSITION=$row["POSITION"];
					$LAST_NAME=$row["LAST_NAME"];}}
								?>


<tr><td style=''><b>Evaluation Dates &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $t=date('Y-m-d');echo $t;?></td><td style=''><b>Employee Name &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $FIRST_NAME ?></td>
<td style=''><b>Position &nbsp;:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $POSITION ?></td>
</tr>
</table>

<?php 
								$sql ="SELECT * FROM performance_review WHERE USER_ID = $ID order by p_id DESC limit  1"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								@$accomplishments=$row["accomplishments"];
					            @$employee_score1=$row["employee_score1"];
					            @$manager_score1=$row["manager_score1"];
					            @$comment1=$row["comment1"];
					            @$managerscomment=$row["managerscomment"];
					            @$urgency=$row["urgency"];
					            @$employee_score2=$row["employee_score2"];
					            @$manager_score2=$row["manager_score2"];
					            @$comment2=$row["comment2"];
					            @$managerscomment2=$row["managerscomment2"];

					            @$attitude=$row["attitude"];
					            @$employee_score3=$row["employee_score3"];
					            @$manager_score3=$row["manager_score3"];
					            @$comment3=$row["comment3"];
					            @$managerscomment3=$row["managerscomment3"];

					            @$ownership=$row["ownership"];
					            @$employee_score4=$row["employee_score4"];
					            @$manager_score4=$row["manager_score4"];
					            @$comment4=$row["comment4"];
					            @$managerscomment4=$row["managerscomment4"];


					            @$Productivity=$row["Productivity"];
					            @$employee_score5=$row["employee_score5"];
					            @$manager_score5=$row["manager_score5"];
					            @$comment5=$row["comment5"];
					            @$managerscomment5=$row["managerscomment5"];

					            @$QualityWork=$row["QualityWork"];
					            @$employee_score6=$row["employee_score6"];
					            @$manager_score6=$row["manager_score6"];
					            @$comment6=$row["comment6"];
					            @$managerscomment6=$row["managerscomment6"];

					            @$cost=$row["cost"];
					            @$employee_score7=$row["employee_score7"];
					            @$manager_score7=$row["manager_score7"];
					            @$comment7=$row["comment7"];
					            @$managerscomment7=$row["managerscomment7"];

                                
					            @$employeesfeedback=$row["employeesfeedback"];
					            @$managersfeedback=$row["managersfeedback"];

					            @$proactivity=$row["proactivity"];
					            @$employee_score8=$row["employee_score8"];
					            @$manager_score8=$row["manager_score8"];
					            @$comment8=$row["comment8"];
					            @$managerscomment8=$row["managerscomment8"];


                                @$teamwork=$row["teamwork"];
					            @$employee_score9=$row["employee_score9"];
					            @$manager_score9=$row["manager_score9"];
					            @$comment9=$row["comment9"];
					            @$managerscomment9=$row["managerscomment9"];


                                }}





								?>




    

	

<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              <h3 style='font-weight:bold;'>Accomplishments</h3>
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black;">Key Accomplishments(At least 3)&nbsp;&nbsp;&nbsp;<span style='color:red;'><i>from Your Last 3 Months</i></span></th>
		  </tr>
          </thead><tbody>




		  
            <tr>          
			<td><?php echo @ nl2br ($accomplishments) ?></td>
			</tr>
			
			
			
			</tbody>
            </table>    

            
             <h3 style='font-weight:bold;'>Score Card</h3>
            <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black;">Focus Area</th>
          <th style="background-color:Lavender; color:black;">Employee Score</th>
          <th style="background-color:Lavender; color:black;">Manager Score</th>
          <th style="background-color:Lavender; color:black;">Employee Comments</th>
          <th style="background-color:Lavender; color:black;">My Comments</th>
		  </tr>
          </thead><tbody>
          <tr>          
			<td style='color:black;'>Communication(10%)</td>
			<td><?php echo @$employee_score1  ?></td>
			<td style='background-color:lavender;'><?php   echo @$manager_score1 ?></td>
			<td><?php  echo @$comment1 ?></td>
			<td><?php  echo @$managerscomment ?></td>

			</tr>


            <tr>          
			<td style='color:black;'>Delivering tasks on time - Sense of urgency (30%)</td>
			<td><?php echo @$employee_score2 ?></td>
			<td style='background-color:lavender;' > <?php echo @$manager_score2 ?> </td>
			<td><?php echo @$comment2 ?></td>
			<td><?php echo @$managerscomment2 ?></td>
			</tr>

           
            <tr>
			<td style='color:black;'>Attitude and Behavior (2%)</td>
			<td><?php echo @$employee_score3?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score3 ?></td>
            <td><?php echo @$comment3 ?></td>
			<td><?php echo @$managerscomment3 ?></td>
			</tr>


            <tr>          
			<td style='color:black;'>Ownership/ Accountability (15%)</td>
			<td><?php echo @$employee_score4 ?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score4 ?></td>
            <td><?php echo @$comment4 ?></td>
			<td><?php echo @$managerscomment4 ?></td>
			</tr>


             <tr>          
			<td style='color:black;'>Productivity (8%)</td>
			<td><?php echo @$employee_score5 ?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score5 ?></td>
            <td><?php echo @$comment5 ?></td>
			<td><?php echo @managerscomment5 ?></td>
			</tr>


             <tr>          
			<td style='color:black;'>Quality Work/ Attention to detail (15%)</td>
			<td><?php echo @$employee_score6?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score6 ?></td>
            <td><?php echo @$comment6 ?></td>
			<td><?php echo @$managerscomment6 ?></textarea></td>
			</tr>

            <tr>          
			<td style='color:black;'>Cost-Effectiveness (10%)</td>
			<td><?php echo @$employee_score7?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score7 ?></td>
            <td><?php echo @$comment7 ?></td>
			<td><?php echo @$managerscomment7 ?></textarea></td>
			</tr>

            <tr>          
			<td style='color:black;'>Proactivity (2%)</td>
			<td><?php echo @$employee_score8 ?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score8 ?></td>
            <td><?php echo @$comment8 ?></td>
			<td><?php echo @$managerscomment8 ?></td>
			</tr>


            

            <tr>          
			<td style='color:black;'>Team Work (8%)</td>
			<td><?php echo @$employee_score9 ?></td>
			<td style='background-color:lavender;'><?php echo @$manager_score9 ?></td>
            <td><?php echo @$comment9 ?></td>
			<td><?php echo @$managerscomment9 ?></td>
			</tr>

            
           

           



             
            </tbody></table>


            <p style='font-weight:bold; color:red; font-family:calibri; font-size:20px;'><span style='color:red;'>Note:</span> Rating Scale of 1- 5 - But the weighting should differ for each of the results 
The parts in brackets are the percentages 
Score Card - 50%
OKR’s - 50%
</p>




<table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black; font-size:20px; ">Employee’s General Feedback</th>
		  </tr>
          </thead><tbody>
          <br><br>



		  
            <tr>          
			<td><?php echo @$employeesfeedback  ?></td>
			</tr>
			
			
			
			</tbody>
            </table>


            <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; color:black; font-size:20px; ">Manager’s General Feedback</th>
		  </tr>
          </thead><tbody>
          <br><br>



		  
            <tr>          
			<td><?php echo @$managersfeedback ?></td>
			</tr>


			
			
			
			</tbody>
            </table>



             <table border="1" class="table" id="tblCustomers">
             
			<tr>
			<td><button type="submit" class="btn" name="record" style="width:100%; height:100%;  font-size:18px; background-color:#072f5f;color:white;">Save</button></td>
			</tr>
            </table>


            </section>
			</form>
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
