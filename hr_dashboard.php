<!--including the connection page-->
	<?php include 'include/config.php'; ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	
<!--including all the stylings-->
	<?php
	include('include/stylings.php');
	?>
	<style>
	
<!--Registered employees pagination stylings-->

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
	
	
<!--Post Pagination stylings-->
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
	</head>
	<body>
	
	
<!-- container section start -->
  <section id="container" class="" >
  <!--header start-->
  <?php
  include 'include/header.php';
  ?>
  
<!--sidebar start-->
   <aside>
   <div id="sidebar" class="nav-collapse">
	
<!-- sidebar menu start-->
	<?php
	include 'include/menue.php';
	?>
	</div>
    </aside>
<!--sidebar end-->

<!--main content start-->
	<section id="main-content">
	<section class="wrapper">
	
<!--overview start-->
	<div class="row">
	<div class="col-lg-12">
	<h3 class="page-header"><i class="fa fa-laptop"></i>DASHBOARD</h3>
	<ol class="breadcrumb">
	<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
	<li><i class="fa fa-laptop"></i>DASHBOARD</li>
	</ol>
	</div>
	</div>

	<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="pendingleave.php" style="text-decoration:none;color:white"><div id="/example" class="info-box blue-bg">
    <i class="fa fa-clock-o" aria-hidden="true"></i>
    <div class="count">
	<?php 
	$abc="SELECT count(*) as total FROM leave_application where STATUS='PENDING'";
	$result=mysqli_query($conn,$abc);
	if($result)
	{
	while($row=mysqli_fetch_assoc($result))
	{
	echo $row['total'];
	}     
	}
	?>
	</div>
    <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">Pending leave(s)</div>
    </div></a>
	
<!--/.info-box-->
    </div>
<!--/.col-->

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="pendingleave.php" style="text-decoration:none;color:white"><div  class="info-box brown-bg">
    <i class="fa fa-check-circle" style="font-size:48px;color:white"></i>
    <div class="count">
	<?php 
	$abc="SELECT count(*) as total FROM leave_application where STATUS='CONFIRMED'";
	$result=mysqli_query($conn,$abc);
	if($result)
	{
	while($row=mysqli_fetch_assoc($result))
	{
	echo $row['total'];
	}     
	}
	?>
	</div>
    <div class="title" style="font-family: 'Lato', sans-serif;; font-size:12px;">Confirmed leave</div>
    </div></a>
    <!--/.info-box-->
    </div>
    <!--/.col-->

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="pendingusers.php" style="text-decoration:none;color:white"> <div id="/example" class="info-box dark-bg">
    <i class="fa fa-sign-in" style="font-size:48px"></i>
    <div class="count">
	<?php 
	$abc="SELECT count(*) as total FROM create_account";
	$result=mysqli_query($conn,$abc);
	if($result)
	{
	while($row=mysqli_fetch_assoc($result))
	{
	echo $row['total'];
	}     
	}
	?>

	</div>
    <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">ACCOUNTS REQUESTED</div>
    </div></a>
    <!--/.info-box-->
    </div>
    <!--/.col-->

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <a href="paidusers.php" style="text-decoration:none;color:white"><div class="info-box green-bg">
    <i class="fa fa-money" aria-hidden="true"></i>
    <div class="count"><?php 
	$abc="SELECT count(*) as total FROM paid_users";
	$result=mysqli_query($conn,$abc);
	if($result)
	{
	while($row=mysqli_fetch_assoc($result))
	{
	echo $row['total'];
	}     
	}
	?></div>
    <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">Payment made</div>
    </div></a>
    <!--/.info-box-->
    </div>
    <!--/.col-->

    </div>
    <!--/.row-->




    <div class="row">

	<?php
	// Below is optional, remove if you have already connected to your database.
	$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

	// Get the total number of records from our table "user-registration".
	$total_pages = $mysqli->query('SELECT * FROM user_registration')->num_rows;

	// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
	$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

	// Number of results to show on each page.
	$num_results_on_page = 5;

	if ($stmt = $mysqli->prepare('SELECT * FROM user_registration ORDER BY USER_ID LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
			
	<div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h2><i class="fa fa-flag-o red"></i><strong>REGISTERED EMPLOYEES</strong></h2>
    <div class="panel-actions">
    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
    </div>
    </div>
	<div class="panel-body">
	<table border="1"class="table bootstrap-datatable countries" style="font-family: 'Lato', sans-serif; font-size:12px;">
	<tr>
    <th  style="background-color: #152E48;color: white;">Names</th>
					 
    <th  style="background-color: #152E48;color: white;">Gender</th>
    <th  style="background-color: #152E48;color: white;">Phone Number</th>
    <th  style="background-color: #152E48;color: white;">Position</th>
    <th  style="background-color: #152E48;color: white;">Department</th>
    <th  style="background-color: #152E48;color: white;">User Type</th>
    </tr>
	<?php while ($row = $result->fetch_assoc()):  
	$user_Fname=$row["FIRST_NAME"];  
	$user_Lname=$row["LAST_NAME"];
    $user_gender=$row["GENDER"];  
	$user_national=$row["NATIONAL_ID"];
	$user_phone=$row["PHONE_NUMBER"];
	$user_position=$row["POSITION"];
	$user_department=$row["DEPARTMENT"];
	$user_type=$row["USER_TYPE"];
	?>
	<tr>
	
	<td><?php echo $user_Fname." ".$user_Lname;  ?></td>
    <td><?php echo $user_gender;  ?></td>
	<td><?php echo $user_phone;  ?></td> 
	<td><?php echo $user_position;  ?></td> 
	<td><?php echo $user_department;  ?></td> 
	<td><?php echo $user_type;  ?></td> 
	</tr>
	<?php endwhile; ?>
	</table>
	</div>
	<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
	<CENTER>
	<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="Admin_dashboard.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>
	<?php if ($page > 3): ?>
	<li class="start"><a href="Admin_dashboard.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="Admin_dashboard.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="Admin_dashboard.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="Admin_dashboard.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
	</ul>
	</CENTER>
	<?php endif; ?>
		
	<?php
	$stmt->close();
	}
	?>
	</div>
	<br><br>

	<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');
	$total_pages = $mysqli->query('select * from post ORDER BY POST_ID DESC')->num_rows;

	// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
	$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

	// Number of results to show on each page.
	$num_results_on_page = 2;

	if ($stmt = $mysqli->prepare('select * from post  ORDER BY POST_ID LIMIT ?,?')) {
	// Calculate the page to get the results we need from our table.
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Get the results...
	$result = $stmt->get_result();
	?>
	<div class="col-lg-12 col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h2><i class="fa fa-flag-o red"></i><strong>POSTS</strong></h2>
    <div class="panel-actions">
    <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
    <a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
    <a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
    </div>
    </div>
	<div class="panel-body">
	<table border="1"class="table bootstrap-datatable countries" style="">
				
	<?php while ($row = $result->fetch_assoc()):
	$picture  =$row['PICTURE']; 
	$title=$row['TITLE'];
	$content=$row['CONTENT'];
	$category=$row['CATEGORY'];
	$date=$row['DATE'];
	$post=$row['POST_DATE'];
	echo "<div class='panel-body' id='change'><div class='col-lg-6'><img src='".$picture."' style='width:80%;height:400px;border-radius:5px;'></div>
	<div class='col-lg-6'><span style='text-transform:capitalise; font-size:16px; font-weight:bold;  color: #394a59;  font-family: 'Lato', sans-serif; '>".$title."</span><br><br>
	<p style='text-align:justify;font-family:'Lato', sans-serif; font-size:12px;'>".$content."</p><br><br>
	<p style='font-family: 'Lato', sans-serif;font-size:16px;'>CATEGORY:&nbsp;&nbsp;&nbsp;".$category."</p>
	<p style='font-family: 'Lato', sans-serif;font-size:16px;>EVENT DATE:&nbsp;&nbsp;&nbsp;".$date."</p>
	<br><br>
	<p style='font-family: 'Lato', sans-serif;font-size:16px;>PUBLISHED ON:&nbsp;&nbsp;&nbsp; ".$post."</p></div></div><br><br>";
	?>
	<?php endwhile; ?>
	</table>
	</div>
	<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
	<CENTER>
	<ul class="pagination">
	<?php if ($page > 1): ?>
	<li class="prev"><a href="Admin_dashboard.php?page=<?php echo $page-1 ?>">Prev</a></li>
	<?php endif; ?>

	<?php if ($page > 3): ?>
	<li class="start"><a href="Admin_dashboard.php?page=1">1</a></li>
	<li class="dots">...</li>
	<?php endif; ?>

	<?php if ($page-2 > 0): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
	<?php if ($page-1 > 0): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

	<li class="currentpage"><a href="Admin_dashboard.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

	<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
	<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="Admin_dashboard.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
	<li class="dots">...</li>
	<li class="end"><a href="Admin_dashboard.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
	<?php endif; ?>

	<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
	<li class="next"><a href="Admin_dashboard.php?page=<?php echo $page+1 ?>">Next</a></li>
	<?php endif; ?>
	</ul>
	</CENTER>
	<?php endif; ?>
		
	<?php
	$stmt->close();
	}
	?>	
<!-- project team & activity end -->

    </section>
    <div class="text-center">
    <div class="credits" style="font-family: 'Lato', sans-serif;">

    Copyright &copy Mignone Unguyeneza 2019
    </div>
    </div>
    </section>
<!--main content end-->
	</section>
	<?php
	include("include/scripting.php")
	?>
	</body>

	</html>
