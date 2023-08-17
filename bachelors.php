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

	<?php
		include 'include/Academics_menue.php';
		?>
    

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fas fa-list"></i> STUDENTS REGISTRATION</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-list"></i><a href="Academics_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Students&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;BA students</li>
              <li><i class="fa fa-list"></i>View and Register Students</i></li>
            </ol>
          </div>
        </div>

        <div class="row">
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="" style='border:none;'>
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                       E_LEARNING STUDENTS
                                      </a>
                  </li>
				  
				                    <li class="">
                    <a data-toggle="tab" href="#add_new_students">
                                          <i class="icon-envelope"></i>
                                       ADD NEW STUDENTS
                                      </a>
                  </li>
				  
				  
                </ul>
              </header>
			  <br><br>
			  

<?php

    if(isset($_POST['register']))
        {
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$dob = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$gdates = mysqli_real_escape_string($conn, $_REQUEST['gdates']);
$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
$companyrecommended = mysqli_real_escape_string($conn, $_REQUEST['companyrecommended']);
$employmentstatus = mysqli_real_escape_string($conn, $_REQUEST['employmentstatus']);
$comments = mysqli_real_escape_string($conn, $_REQUEST['comments']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

	$sql_t = "SELECT * FROM   bachelor_students_registration WHERE sid='$sid'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> Person with this ID  $sid &nbsp; already exists, try a different person!</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";
	
		}
		else{


// Attempt insert query execution
$sql = "INSERT INTO  bachelor_students_registration (fname,lname,dob,gdates,sid,companyrecommended,employmentstatus,comments,email)
VALUES ('$fname','$lname','$dob','$gdates','$sid','$companyrecommended','$employmentstatus','$comments','$email')";

if(mysqli_query($conn, $sql)){
   
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> You successfully added $fname &nbsp;&nbsp;&nbsp;.</div></div><br><br><br>";
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
	
<div class="col-sm-12">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers">
                <thead>
                  <tr>
				  
          <th style="background-color:Lavender; font-size:12px; ">STUDENT DESCRIPTION</th>
          <th style="background-color:Lavender; font-size:12px; ">GRADUATED/WILL GRADUATE ON</th>
          <th style="background-color:Lavender; font-size:12px;">EMPLOYMENT DESCRIPTION</th>
		  <th style="background-color:Lavender; font-size:12px; ">COMMENTS</th>
		  </tr></thead><tbody>
		  <?php 
$sql ="SELECT * FROM   bachelor_students_registration"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$fname=$row["fname"];
								$lname=$row["lname"];
								$dob=$row["DOB"];
								$gdates=$row["gdates"];
								$sid=$row["sid"];
								$companyrecommended=$row["companyrecommended"];
								$employmentstatus=$row["employmentstatus"];
								$comments=$row["comments"];
								$email=$row["email"];
								
								?>	
		  
            <tr>          
            <td style='font-size:19px;'> <?php echo 'First Name:'.'&nbsp;&nbsp;&nbsp;'.$fname.'<br>'.'Last Name:&nbsp;&nbsp;&nbsp;'.$lname.'<br>'.'Date Of Birth: &nbsp;&nbsp;&nbsp;'.$dob.'<br>'.'Student ID: &nbsp;&nbsp;&nbsp;'.$sid.'<br>'.'Email: &nbsp;&nbsp;&nbsp;'.$email;  ?></td>
			<td style='font-size:19px;'> <?php echo $gdates;  ?></td>
			<td style='font-size:19px;'> <?php echo 'Employment status:&nbsp;&nbsp;&nbsp;'.$employmentstatus.'<br>'.'Company recommended:&nbsp;&nbsp;&nbsp;'.$companyrecommended; ?></td>
			<td style='font-size:19px;'> <?php echo $comments ?></td>
			 
			</tr>						
	<?php }}
	else{
		echo'no records found';
	}
	
	
	?>
	<tr>          
			
			</tr>
			
			
			

			<tr>
			<!--<td><button type="submit" class="btn" name="savechanges" style="width:100%; height:100%;  font-size:18px; background-color:#072f5f;color:white;">Update Status</button></td>-->
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
<div id="add_new_students" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
					  <h3  style='font-family:Candara;color:blue; margin-left:0%; border-bottom:1px solid blue;'>New students registration form</a></h3><br />
						<div class="panel-body bio-graph-info">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">FIRST NAME</label>
                            <div class="col-lg-6">
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="fname">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">LAST NAME</label>
                            <div class="col-lg-6">
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="lname">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">DOB</label>
                            <div class="col-lg-6">
                              <input type="date" required class="form-control" id="l-name" placeholder=" " name="dob">
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">GRADUATION DATES </label>
                            <div class="col-lg-6">
                              <input type="date" required class="form-control" id="l-name" placeholder=" " name="gdates">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">STUDENT ID</label>
                            <div class="col-lg-6">
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="sid">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">COMPANY RECOMMENDED</label>
                            <div class="col-lg-6">
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="companyrecommended">
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">EMAIL</label>
                            <div class="col-lg-6">
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="email">
                            </div>
                          </div>
						  <div class="form-group">
                            <label class="col-lg-2 control-label">EMPLOYMENT STATUS</label>
                            <div class="col-lg-6">
                              
							  <select class="form-control" name="employmentstatus" required>
						<option value="">--Select--</option>
                            
						<option>
						Employed
						</option>
						<option>
						Self-employed
						</option>
						<option>
						Not Employed
						</option>
						<option>
						Student 
						</option>
					  </select>
							  
                            </div>
                          </div>
						  
						  
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">COMMENTS</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="comments" required></textarea>
                            </div>
                          </div>
                          

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="register">ADD</button>
                              <button type="button" class="btn btn-danger">CANCEL</button>
                            </div>
                          </div>
                        </form>
                    </section>
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
