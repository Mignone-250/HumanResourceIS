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


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
 
}

/* Modal Content/Box */
.modal-content {
  background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  border-radius:10px;
  width: 80%; /* Could be more or less, depending on screen size */
  color:black;
}

/* The Close Button (x) */
.close {

  color: black;
  margin-top:-10px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Employees Positions/Departments</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Admin_dashboard.php">Home</a></li>
              <li><i class="fa fa-user"></i>Positions And Departments</li>
              <li><i class="fa fa-user-md"></i>Add position and assign its department</li>
            </ol>
          </div>
        </div>
		
		
<?php

    if(isset($_POST['assign']))
        {
$position = mysqli_real_escape_string($conn, $_REQUEST['postt']);
$department = mysqli_real_escape_string($conn, $_REQUEST['departmentt']);

// Attempt insert query execution
$sql = "UPDATE positions set department_name='$department' WHERE position_name='$position'";

if(mysqli_query($conn, $sql)){
	
				//$sqle = "UPDATE leave_types set LEAVE_DAYS='$days' WHERE LEAVE_TYPE='Normal/Annual'";
				
				//if ($conn->query($sqle) === TRUE) {
								echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Department assigned successfully.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
															
														
									//}
									//else{echo "Error: " . $sqle . "<br>" . $conn->error;}
				
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}
if(isset($_POST['addpost']))
        {
$position = mysqli_real_escape_string($conn, $_REQUEST['postt_name']);
$sql_t = "SELECT * FROM positions WHERE position_name='$position'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> Department already exist, please try a different one.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";
	
		}
		else{


$sql= "INSERT INTO positions (position_name)VALUES ('$position')";
																	
if ($conn->query($sql) === TRUE) {
	echo "<div  id='helpdiv'><div class='col-lg-9'>
						<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
						<strong>Success!</strong> New position was  added successfully.</div></div></div><br><br><br>";
						
						echo "<script type='text/javascript'>
					window.setTimeout('closeHelpDiv();', 3000);

					function closeHelpDiv(){
					document.getElementById('helpdiv').style.display=' none';
					}
					</script>";
					} else{
						echo "Error: " . $sql . "<br>" . $conn->error;
		}}}
		}

    ?>										
        <div class="row">
         
          <br>
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          ADD NEW POSITION
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          ASSIGN DEPARTMENT
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
				
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" >
						<div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Add new position</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                      <!-- Title -->

                      <!-- Cateogry -->
                      
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags" name="number">Position Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags" name="postt_name" required>
                        </div>

                      </div>
					  
						
					  

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="addpost">Add</button>
                          <button type="submit" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
				<br><br>
				
				
                <br>
				
              </div>
				
				
				
				
				
				
				
				
				
				</div>
				
				
				<table class="table bootstrap-datatable countries" border="1">
                  <thead>
                    <tr>
                      
                      <th style="background-color: #152E48;color: white;">Position</th>
                      <th style="background-color: #152E48;color: white;">Department</th>
                      <th style="background-color: #152E48;color: white;">Delete</th>
                      
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      	  <?php
						$sql = "SELECT * FROM positions "; 
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 $ID=$row["position_id"];
									$position_namee=$row["position_name"];  
									$departmente=$row["department_name"];  
									  
									//$EXPENSES=$row["EXPENSES"];  
									//$NET_SALARY=$row["NET_SALARY"];
									
									
											
										
						?>			
                    
                    <td><?php echo $position_namee;  ?></td>
                    <td><?php echo $departmente;  ?></td>
                    <td><form action="deleteposition.php?del=<?php echo $ID ?>" method="post" ><button class="btn" name="delete" style="background-color:lavender;color:red;"><i class="fa fa-trash-o" style="font-size:20px;"></i></button></form></td>
 
                  </tr>
				  
						<?php }} else {
    echo " ";
						
}?>

                  </tbody>
                </table>
				
				
				
				
				
				
				
				
				
				</div></div>
				
				
				
				
				
						
            
              
              
			  
			  
			  
			  
			  
			  
				
				
				
				
				
				
				
						
					
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <div class="profile-widget profile-widget-info">
                      
                      </div><br><br>
					  
<div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Assign Department On  new positions</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                      <!-- Title -->

                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">POSITION</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="postt" required>
						<option value="">-- Choose Position--</option>
                            <?php $ret=mysqli_query($conn,"select * from positions");
                            while($row=mysqli_fetch_array($ret))
                            {
                           ?>
						<option>
						<?php echo htmlentities($row['position_name']);?>
						</option>
						<?php } ?>	
					  </select>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-lg-2">DEPARTMENT</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="departmentt" required>
						<option value="">-- Assign Department--</option>
                            <?php $ret=mysqli_query($conn,"select * from departments");
                            while($row=mysqli_fetch_array($ret))
                            {
                           ?>
						<option>
						<?php echo htmlentities($row['department_name']);?>
						</option>
						<?php } ?>	
					  </select>
                        </div>
                      </div>
					  
						
					  

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="assign">Assign</button>
                          <button type="submit" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div></div></div></div>



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
