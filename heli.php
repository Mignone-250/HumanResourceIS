<?php 
include ('include/config.php');
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
		include 'include/bannermenu.php';
		?>

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i> Schedule</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-list"></i><a href="receptionist_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>SCHEDULE/MY SCHEDULE</li>
              <li><i class="fa fa-list">   My Schedule</i></li>
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
                                       MY  SCHEDULE
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


<?php
		date_default_timezone_set('US/Pacific');
//$dateeee = date('Y/m/d');
//$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules WHERE USER_ID = '".$_SESSION['user']."'  and day = 'Wednesday'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$title=$row["title"];
								$task1=$row["task1"];
								$task2=$row["task2"];
								$task3=$row["task3"];
								$task4=$row["task4"];
								$task5=$row["task5"];
								$date=$row["date"];
								$statusw=$row["status"];
								
								if($statusw=='pending'){

									$statusw = '<p style="background-color:red; color:white;" >'.$statusw.'</p>';
								}
								else{
									$statusw = '<p style="background-color:blue;">'.$statusw.'</p>';
									
								}
					
					
					
					

								?>		<?php }}?>
								
								
								
								
								<?php
		date_default_timezone_set('US/Pacific');
//$dateeee = date('Y/m/d');
//$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules WHERE USER_ID = '".$_SESSION['user']."'  and day = 'Thursday'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$title=$row["title"];
								$task12=$row["task1"];
								$task22=$row["task2"];
								$task32=$row["task3"];
								$task42=$row["task4"];
								$task52=$row["task5"];
								$statust=$row["status"];
								$date4=$row["date"];
								
								if($statust=='pending'){

									$statust = '<p style="background-color:red; color:white;" >'.$statust.'</p>';
								}
								else{
									$statust = '<p style="background-color:blue;">'.$statust.'</p>';
									
								}
					
					
					
					
				


								?>		<?php }}?>




<?php
		date_default_timezone_set('US/Pacific');
//$dateeee = date('Y/m/d');
//$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules WHERE USER_ID = '".$_SESSION['user']."'  and day = 'Friday'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$title=$row["title"];
								$task13=$row["task1"];
								$task23=$row["task2"];
								$task33=$row["task3"];
								$task43=$row["task4"];
								$task53=$row["task5"];
								$statusf=$row["status"];
								$date5=$row["date"];
								
								
								if($statusf=='pending'){

									$statusf = '<p style="background-color:red; color:white;" >'.$statusf.'</p>';
								}
								else{
									$statusf = '<p style="background-color:blue;">'.$statusf.'</p>';
									
								}
					
					
					
					
				


								?>		<?php }}?>
								
								
								
								
								
								<?php
		date_default_timezone_set('US/Pacific');
//$dateeee = date('Y/m/d');
//$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules WHERE USER_ID = '".$_SESSION['user']."'  and day = 'Monday'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$title=$row["title"];
								$task14=$row["task1"];
								$task24=$row["task2"];
								$task34=$row["task3"];
								$task44=$row["task4"];
								$task54=$row["task5"];
								$statusm=$row["status"];
								$date1=$row["date"];
								
								if($statusm=='pending'){

									$statusm = '<p style="background-color:red; color:white;" >'.$statusm.'</p>';
								}
								else{
									$statusm = '<p style="background-color:blue;">'.$statusm.'</p>';
									
								}
					
					
					
					
				


								?>		<?php }}?>
								
								
								
								
								<?php
		date_default_timezone_set('US/Pacific');
$dateeee = date('Y/m/d');
$day = date('l',strtotime($dateeee));
$sql ="SELECT * FROM schedules WHERE USER_ID = '".$_SESSION['user']."'  and day = 'Tuesday"; 
					$result = $conn->query($sql);
					if (@$result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$title=$row["title"];
								$task15=$row["task1"];
								$task25=$row["task2"];
								$task35=$row["task3"];
								$task45=$row["task4"];
								$task55=$row["task5"];
								$statusu=$row["status"];
								$date2=$row["date"];
								if($statusu=='pending'){

									$statusu = '<p style="background-color:red; color:white;" >'.$statusu.'</p>';
								}
								else{
									$statusu = '<p style="background-color:blue;">'.$statusu.'</p>';
									
								}
					
					
								
					
					
				


								?>		<?php }}?>
  
  
	 	
		<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  <span style='font-size:20px;'>From  &nbsp; 8:30 &nbsp; To &nbsp; 17:30</span>
          <th style="background-color:Lavender ">Monday <br><span style='font-size:14px; color:blue; text-align:center;'> <?php echo @$date1;?></span>
		  
		  
		  </th>
          <th style="background-color:Lavender;font-size:15px; color:red; ">Status</th>
          
		  <th style="background-color:Lavender">Tuesday<br><span style='font-size:14px; color:blue; text-align:center;'> <?php echo @$date2;?></span></th>
		  <th style="background-color:Lavender;font-size:15px; color:red; ">Status</th>
		  <th style="background-color:Lavender">Wednesday<br><span style='font-size:14px; color:blue; text-align:center;'> <?php echo $date;?></span></th>
		  <th style="background-color:Lavender;font-size:15px; color:red; ">Status</th>
		  
		  <th style="background-color:Lavender">Thursday<br><span style='font-size:14px; color:blue; text-align:center;'> <?php echo $date4;?></span></th>
		  <th style="background-color:Lavender;font-size:15px; color:red; ">Status</th>
		  
		  <th style="background-color:Lavender;">Friday<br><span style='font-size:14px; color:blue; text-align:center;'> <?php echo @$date5;?></span></th>
		  <th style="background-color:Lavender;font-size:15px; color:red; ">Status</th>
		  
		
		  
		  
		  
		 
                  </tr>
                </thead>
                <tbody>
		

			 <!-- The Modal -->
<!--<div id="myModal" class="modal">


  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>-->
	
	

            <tr>          
            <td>  <?php echo @$task14 ?></td>
			<td><input type="text" name="status"  value = '<?php echo @$statusm ?>' style="border:none;"></td>
			 
			<td>  <?php echo @$task15 ?></td>
			<td> <input type="text" name="task2"  value = "<?php echo @$statusu ?>" style="border:none;"></td>
			 
			<td><?php echo $task1 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusw ?>" style="border:none;"></td>
			 
			<td> <?php echo $task12 ?></td>
			<td><input type="text" name="task2"  value=" <?php echo @$statust ?>" style="border:none;"></td>
			 
			<td> <?php echo @$task13 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusf?>" style="border:none;"></td>
			 
			</tr>
			
			<tr> 
			<td>  <?php echo @$task24 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusm?>" style="border:none;"></td>
			
			<td>  <?php echo @$task25 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusu?>" style="border:none;"></td>
			 
			<td><?php echo $task2 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusw?>" style="border:none;"></td>
			 
			<td> <?php echo $task22 ?></td>
			<td><input type="text" name="task2"  value=" <?php echo @$statust?>" style="border:none;"></td>
			 
			<td> <?php echo @$task23 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusf?>" style="border:none;"></td>
			
			</tr>
			
            <tr>
			
			<td> <?php echo @$task34 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusm?>" style="border:none;"></td>
							
			<td>  <?php echo @$task35 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusu?>" style="border:none;"></td>
			 
			<td><?php echo $task3 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusw?>" style="border:none;"></td>
			 
			<td> <?php echo $task32 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statust?>" style="border:none;"></td>
			 
			<td> <?php echo @$task33 ?></td>
			<td><input type="text" name="task2"  value=" <?php echo @$statusf?>" style="border:none;"></td>
			</tr>
					
					
			<tr>
			<td><?php echo @$task44 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusm?>" style="border:none;"></td>
					
			<td>  <?php echo @$task45 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusu?>" style="border:none;"></td>
			 
			<td><?php echo $task4?></td>
			<td><input type="text" name="task2"  value="<?php echo @$statusw?>" style="border:none;"> </td>
			 
			<td> <?php echo $task42 ?></td>
			<td><input type="text" name="task2"  value="<?php echo @$statust?>" style="border:none;"> </td>
			 
			<td> <?php echo @$task43 ?></td>
			<td><input type="text" name="task2"  value="<?php echo @$statusf?>" style="border:none;"> </td>
			</tr>
					
			<tr>
			<td><?php echo @$task54 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusm?>" style="border:none;"></td>
					
					
			<td>  <?php echo @$task55 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusu?>" style="border:none;"></td>
			 
			<td><?php echo $task5 ?></span> </td>
			<td><input type="text" name="task2"  value="<?php echo @$statusw?>" style="border:none;"> </td>
			 
			<td><?php echo $task52 ?></td>
			<td><input type="text" name="task2"  value=" <?php echo @$statust?>" style="border:none;"></td>
			 
			<td> <?php echo @$task53 ?></td>
			<td> <input type="text" name="task2"  value="<?php echo @$statusf?>" style="border:none;"></td>
			</tr>

			<tr>
			<td><button type="submit" class="btn" name="save" style="width:100%; height:100%;  font-size:18px; background-color:#072f5f;color:white;">Save</button></td>
			</tr>
			</tbody>
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
