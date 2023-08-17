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
            <h3 class="page-header"><i class="fas fa-list"></i>OnBoarding</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-list"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="fa fa-list"></i>Onboarding/Assigned Tasks</li>
              <li><i class="fa fa-list"></i>My Tasks</li>
            </ol>
          </div>
        </div>
		
		
		

	
	
	

        <div class="row">
         
          <br>
        <!-- page start-->
        
		
          <div class="col-lg-12">
            <section class="panel">
             
			 
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
  color: black;
  
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
		
            <section class="panel">
              
              <table border="1" class="table" id="tblCustomers" style='font-size:20px;font-family:Calibri;'>
                <thead>
                  <tr>
				  
          <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Task</th>
          <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">When</th>
		  <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Notes<br></th>
		  <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Rerevant Reaources<br></th>
		  <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Status&nbsp;(Update Status When Your Done)<br></th>
		  <th style="background-color:lavender; color:black;font-size:12px;font-family: 'Lato', sans-serif; border:none;font-weight: lighter; ">Action<br></th>
		  </tr></thead><tbody>
		  <?php 
$sql ="SELECT * FROM onboarding WHERE USER_ID = '".$_SESSION['user']."'"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$task=$row["first_name"];
								$when=$row["last_name"];
								$notes=$row["age"];
								$resources=$row["year"];
								$status=$row["status"];
								//$id=$row["on_id"];
								$ON_ID=$row['on_id'];
								?>	
							
								
		  
            <tr > 
			
			<form action="updatee.php<?php echo '?ido='.$ON_ID; ?>" method="post" enctype="multipart/form-data" id="form1">	
			
			
            <td style='font-size:20px;'><input type='hidden' name='task' style='border:none; font-weight:bold; background-color:#FF6347; color:black;' value='<?php echo $task ?>'> <?php echo @$task ?></td>
			
			<td style=' font-size:20px; color:black; font-weight:bold; background-color:#FAEBD7;'><p style='background-color:blue; border-radius:50px;text-align:center; width:80%;'> <?php echo @$when ?></p></td>
			 <td style='font-size:20px;'> <?php echo @$notes ?></td>
			 <td style='font-size:20px;'> <p style='background-color:lavender;border-radius:10px; text-align:center;'><?php echo @$resources ?></p></td>
			 
			 <td style='font-size:20px;'>
			 <select  name="status" style=' font-weight:bold; border:none; color:gray; font-family:Calibri;width:50%;'>
			 <option  ><?php  echo @$status  ?></option>
			 <option>Pending</option>
			 <option>Done</option>
			 </select>
			 
			
			 </td>
			 
			  <td><button type="submit" class="btn" style="color:gray;">Save Chnages</button></td> 
			  
			  
			</tr>
			</form>
			
<?php }}

else{
	echo'No tasks found for you';
}
?>

			
	


			
			
			
			
			
			
			

			<tr>
			
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


		<?php

   /* if(isset($_POST['savechanges']))
        {
			
			
$status= mysqli_real_escape_string($conn, $_REQUEST['status']);
$taskk= mysqli_real_escape_string($conn, $_REQUEST['task']);
$idd= mysqli_real_escape_string($conn, $_REQUEST['oni']);





$sql="UPDATE onboarding SET status='$status' WHERE USER_ID = '".$_SESSION['user']."' and on_id ='$idd'"; 
echo($sql);
if(mysqli_query($conn, $sql)){
    echo "<div class='row' id='helpdiv'><div class='col-lg-12'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Status updated successfully.</div></div></div><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}*/

    ?>



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
