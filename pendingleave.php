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

	.modal {
	  display: none;
	  position: fixed;
	  z-index: 1;
	  left: 0;
	  top: 0;
	  width: 100%;
	  height: 100%;
	  overflow: auto;
	  background-color: rgb(0,0,0);
	  background-color: rgba(0,0,0,0.4);
	  padding-top: 0px;
	 
	}

	.modal-content {
	  background-color: white;
	  margin: 5% auto 15% auto;
	  border: 1px solid #888;
	  border-radius:10px;
	  width: 80%;
	  color:black;
	}
	
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
	<section id="container" class="" style="font-family: 'Lato', sans-serif;" >
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
            <h3 class="page-header"><i class="fa fa-user-md"></i> LEAVE(S)</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Admin_dashboard.php">Home</a></li>
              <li><i class="fa fa-user"></i>LEAVE(S)</li>
              <li><i class="fa fa-user-md"></i>LEAVE(S) HISTORY</li>
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
                  
                  <li>
                    <a data-toggle="tab" href="#profile" >
                                          <i class="icon-user"></i>
                                          PENDING LEAVE APPLICATION(S)
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          CONFIRMED LEAVE APPLICATION(S)
                                      </a>
                  </li>
				  <li class="">
                    <a data-toggle="tab" href="#cancelled">
                                          <i class="icon-envelope"></i>
                                          CANCELLED LEAVE APPLICATION(S)
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
			<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM leave_application,user_registration where STATUS='PENDING' and leave_application.USER_ID = user_registration.USER_ID")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM leave_application,user_registration where STATUS='PENDING' and leave_application.USER_ID = user_registration.USER_ID ORDER BY LEAVE_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;

			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
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
		
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION(S) / PENDING</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					<th style="background-color: #152E48;color: white;font-family: 'Lato', sans-serif; font-size:12px;">Employee Id</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Names</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Requested</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave requested On</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Will Start From</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">To</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Reason(s)</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Days Requested</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Person To Take Your Responsibilities </th>
                      
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Approve</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Reject</th>
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];
									$fname=$row["FIRST_NAME"]; 
									$lname=$row["LAST_NAME"]; 
									$to=$row["TOOO"]; 
									$leave=$row["LEAVE_TYPE"];  
									$date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["REASON"];
									$requested_days=$row["REQUESTED_DAYS"];
									$rleave_days=$row["RLEAVE_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
									$replacement=$row["REPLACEMENT"];
									
									 
				?>
				<tr>
				
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $user_id;  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $fname." ".$lname;  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $date ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave_date ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $to ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $reason ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $requested_days ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $replacement ?></td> 
						
						<td><form action="approveleave.php?leaveid=<?php echo $leave_id; ?>" method="post" ><button class="btn" name="approve" style="background-color:Green;color:white;"><i class="fa fa-check-circle" style="font-size:28px;"></i></button></form></td> 

						<td><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" style="background-color:red;color:white;"> <strong style="font-size:20px">&#10006 </strong> </button></td>
						<div id="id02" class="modal">
  
						  <div style="width:50%;" class="modal-content animate">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
								<center><h3 class="heading3">MESSAGE</h3>
								<form action="Admincancelpendingleave.php?del=<?php echo $leave_id ?>" method="post">
									<label>TITLE</label><br>
									<input type="text" name="title"  style="width:50%" required><br><br>
									<label>DESCRIPTION</label><br>
									<textarea style="width:50%" name="message" required></textarea>
                                                  
                                                <br><br>
									<button type="submit" class="btn btn-primary" name="assign">SEND</button><br><br>	
								</form></center> 
						<script>
						function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
						</script>
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="pendingleave.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="pendingleave.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="pendingleave.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="pendingleave.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="pendingleave.php?page=<?php echo $page+1 ?>">Next</a></li>
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
                      
                    </section>
                    <section>
                      
                    </section>
                  </div>
				  
	  <div id="cancelled" class="tab-pane " >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM ((user_registration inner join cancelled_leave on user_registration.USER_ID = cancelled_leave.USER_ID)inner join leave_application on user_registration.USER_ID = leave_application.USER_ID) where Cancelled_leave.STATUS='PENDING'")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM ((user_registration inner join cancelled_leave on user_registration.USER_ID = cancelled_leave.USER_ID)inner join leave_application on user_registration.USER_ID = leave_application.USER_ID) where Cancelled_leave.STATUS='PENDING' ORDER BY C_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
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
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION(S) / Cancelled</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries">
				<tr>
					<th style="background-color: #152E48;color: white;font-family: 'Lato', sans-serif; font-size:12px;">Employee Id</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Names</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Requested</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Requested On</th>
					  <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Days Requested </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Person who replaced employee</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Started From</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave had to end on</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Reason For cancelling the leave</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Approve </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Delete </th>
					   
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];
									$fname=$row["FIRST_NAME"]; 
									$lname=$row["LAST_NAME"]; 
									$to=$row["TOOO"]; 
									$leave=$row["LEAVE_TYPE"];  
									$date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["DESCRIPTION"];
									$requested_days=$row["REQUESTED_DAYS"];
									$rleave_days=$row["RLEAVE_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
									$replacement=$row["REPLACEMENT"];
				?>
				<tr>
				<td><?php echo $user_id;  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $fname." ".$lname;  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $date ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $requested_days ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $replacement ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave_date ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $to ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $reason ?></td>  
						 
						 
						<td><form action="approve_cancelling_leave.php?leaveid=<?php echo $leave_id; ?>" method="post" ><button class="btn" name="approve_cancelling" style="background-color:Green;color:white;"><i class="fa fa-check-circle" style="font-size:28px;"></i></button></form></td> 

						<td><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" style="background-color:red;color:white;"> <strong style="font-size:20px">&#10006 </strong> </button></td>
						<div id="id02" class="modal">
  
						  <div style="width:50%;" class="modal-content animate">
							<div class="imgcontainer">
							  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
								<center><h3 class="heading3">MESSAGE</h3>
								<form action="Admincancelpendingleave.php?del=<?php echo $leave_id ?>" method="post">
									<label>TITLE</label><br>
									<input type="text" name="title"  style="width:50%" required><br><br>
									<label>DESCRIPTION</label><br>
									<textarea style="width:50%" name="message" required></textarea>
                                                  
                                                <br><br>
									<button type="submit" class="btn btn-primary" name="assign">SEND</button><br><br>	
								</form></center> 
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="pendingleave.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="pendingleave.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="pendingleave.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="pendingleave.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="pendingleave.php?page=<?php echo $page+1 ?>">Next</a></li>
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
						
                    </section>
                    <section>
                      
                    </section>
                  </div>			  
				  
				  
				  
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info" style="background-color:Lavender">
					  <?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
$total_pages = $mysqli->query("SELECT * FROM leave_application,user_registration where STATUS='CONFIRMED' and leave_application.USER_ID = user_registration.USER_ID")->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 4;

if ($stmt = $mysqli->prepare("SELECT * FROM leave_application,user_registration where STATUS='CONFIRMED' and leave_application.USER_ID = user_registration.USER_ID ORDER BY LEAVE_ID LIMIT ?,?")) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	
			<style>
			
			table {
				border-collapse: collapse;
				width: 500px;
			}
			td, th {
				padding: 10px;
			}
			th {
				background-color: #54585d;
				color: #ffffff;
				font-weight: bold;
				font-size: 13px;
				border: 1px solid #54585d;
			}
			td {
				color: #636363;
				border: 1px solid #dddfe1;
			}
			tr {
				background-color: #f9fafb;
			}
			tr:nth-child(odd) {
				background-color: #ffffff;
			}
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
		
		<div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>LEAVE APPLICATION(S) / CONFIRMED</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
			   <div class="panel-body">
			<table border="1"class="table bootstrap-datatable countries" style='width:100%;'>
				<tr>
					<th style="background-color: #152E48;color: white;font-family: 'Lato', sans-serif; font-size:12px;">Employee Id </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Names</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Requested</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Requested On</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Leave Will Start From</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">To</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Reason(s)</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Days Requested</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Remaing Days On This Leave</th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;"> Total Leave Days </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;"> Remaining Days On Total </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Person To Take Your Responsibilities </th>
                      <th style="background-color: #152E48;color: white; font-family: 'Lato', sans-serif; font-size:12px;">Cancel</th>
                      
					   
                      
                      
				</tr>
				<?php while ($row = $result->fetch_assoc()):
				$leave_id=$row["LEAVE_ID"];  
									$user_id=$row["USER_ID"];
									$fname=$row["FIRST_NAME"]; 
									$lname=$row["LAST_NAME"]; 
									$to=$row["TOOO"]; 
									$leave=$row["LEAVE_TYPE"];  
									$date=$row["DATE"];  
									$leave_date=$row["LEAVE_DATE"];  
									$reason=$row["REASON"];
									$requested_days=$row["REQUESTED_DAYS"];
									$rleave_days=$row["RLEAVE_DAYS"];
									$total_days=$row["TOTAL_DAYS"];
									$remaing_days=$row["REMAINING_DAYS"];
									$replacement=$row["REPLACEMENT"];
				?>
				<tr>
				<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $user_id;  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $fname." ".$lname  ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $date ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $leave_date ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $to ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $reason ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $requested_days ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $rleave_days ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $total_days ?></td> 
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $remaing_days ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><?php echo $replacement ?></td>
						<td style="font-family: 'Lato', sans-serif; font-size:12px;"><button onclick="document.getElementById('id02').style.display='block'"type="submit" class="btn" 
						style="background-color:red;color:white;"><strong style="font-size:20px">&#10006 </strong></button></td>
												<div id="id02" class="modal">
						  
												  <div style="width:50%;" class="modal-content animate">
													<div class="imgcontainer">
													  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
														<center><h3 class="heading3">MESSAGE</h3>
														<form action="Admincancelconfirmedleave.php?del=<?php echo $leave_id ?>" method="post">
															<label>TITLE</label><br>
															<input type="text" name="title"  style="width:50%" required><br><br>
															<label>DESCRIPTION</label><br>
															<textarea style="width:50%" name="message" required></textarea>
																		  
																		<br><br>
															<button type="submit" class="btn btn-primary" name="assign">SEND</button><br><br>	
														</form></center> 						
					 
						
				</tr>
				<?php endwhile; ?>
			</table>
			 </div>
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<CENTER>
			<ul class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="pendingleave.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="pendingleave.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="pendingleave.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="pendingleave.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="pendingleave.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="pendingleave.php?page=<?php echo $page+1 ?>">Next</a></li>
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
