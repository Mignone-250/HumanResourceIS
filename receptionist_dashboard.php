<?php
  include"include/config.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<?php
include"include/stylings.php";
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
	</head>
	<body>
	<section id="container" class="">
       
	   		  <?php
  include"include/receptionsitbannermenue.php";
  ?>
       <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="leaveinfor_reception.php"><div class="info-box blue-bg">
              <i class="icon_desktop"></i>
              <div class="count">
			  <?php
						$sql = "SELECT * FROM leave_application WHERE USER_ID='".$_SESSION['user']."' and STATUS='CONFIRMED' ORDER BY LEAVE_ID DESC LIMIT 1";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$REMAINING_DAYS=$row["REMAINING_DAYS"];  
									
						 echo $REMAINING_DAYS; 
                    
						 }} else {
							 if($_SESSION['gender']=="Male"){
								 $abc="SELECT SUM(LEAVE_DAYS) as total FROM leave_types where LEAVE_TYPE !='Normal/Annual' AND LEAVE_TYPE !='Maternity'";
									$result=mysqli_query($conn,$abc);
									if($result)
									{
									while($row=mysqli_fetch_assoc($result))
									{
									$days=$row["total"];
							 echo $days;}}}
							 
							 
							 else{
									 
							 $sql = "SELECT * FROM leave_types where LEAVE_TYPE='Normal/Annual'";
							 $result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$TOTAL_DAYS=$row["LEAVE_DAYS"];
							 
							echo $TOTAL_DAYS;
						 }}}}

					 ?>
			  
  
			  </div>
              <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">Remaining &nbsp;&nbsp;&nbsp;Leaves &nbsp;&nbsp;&nbsp;</div>
            </div></a>
           
          </div>
		  
		  
		  
		  
		  
		  
		  
		            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="schedules_reception.php" style="color:white"><div class="info-box brown-bg">
              <i class="fa fa-list"></i>
              <div class="count">
			  
			  <?php
						//$sql ="SELECT count(*) as total FROM schedules2  WHERE status_task1 = 'Done' and status_task2 = 'Done' and USER_ID = '".$_SESSION['user']."' ORDER BY id DESC limit 1"; 
						
						
						$sql = "SELECT count(*) as total FROM schedules2 where status_task1 = 'Pending' and USER_ID='".$_SESSION['user']."'";
						$sql1 = "SELECT count(*) as tota FROM schedules2 where status_task2 = 'Pending' and USER_ID='".$_SESSION['user']."'";
						$sql2 = "SELECT count(*) as tot FROM schedules2 where status_task3 = 'Pending' and USER_ID='".$_SESSION['user']."'";
						$sql3 = "SELECT count(*) as too FROM schedules2 where status_task4 = 'Pending' and USER_ID='".$_SESSION['user']."'";
						$sql4 = "SELECT count(*) as t FROM schedules2 where status_task5 = 'Pending' and USER_ID='".$_SESSION['user']."'";
						
						
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$total = $row['total'];


									
						
						$result1 = $conn->query($sql1);

						if ($result1->num_rows > 0) {
							// output data of each row
							while($row = $result1->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$tota = $row['tota']; 
									
									
                    
						}}
						$result2 = $conn->query($sql2);

						if ($result2->num_rows > 0) {
							// output data of each row
							while($row = $result2->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$tot = $row['tot']; 
									
									
                    
						}}
						
						

						
						
						$result4 = $conn->query($sql4);

						if ($result4->num_rows > 0) {
							// output data of each row
							while($row = $result4->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$t = $row['t']; 
									//echo $total + $tota+ $tot+$t;
									
                    
						}}
						
						
						$result3 = $conn->query($sql3);

						if ($result3->num_rows > 0) {
							// output data of each row
							while($row = $result3->fetch_assoc()) {
								//echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
									 
									$too = $row['too']; 
									echo $total + $tota+ $tot+$too+$t;
									
                    
						}}
						
						
						
						
						}} else {
    echo "Unavailable";
}



 ?>
			  
			  </div></a>
              <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">&nbsp; PENDING TASKS</div>
            </div>
          </div>
          




























          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="#announcements"><div class="info-box dark-bg">
              <i class="fa fa-bullhorn" style="font-size:48px"></i>
              <div class="count">
			  <?php 
				$abc="SELECT count(*) as total FROM post";
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
              <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">Posts</div>
            </div></a>
          </div>
		  
		  
		  
		         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="attendance.php"><div class="info-box green-bg">
              <i class="fa fa-list" style="font-size:48px"></i>
              <div class="count">
			  <?php 
				$abc="SELECT count(*) as total FROM  roll_call_attendance where day_status = 'Absent'";
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
              <div class="title" style="font-family: 'Lato', sans-serif; font-size:12px;">TOTAL ABSENCES</div>
            </div></a>
          </div>
          </div>
		
		
		
		<?php
// Below is optional, remove if you have already connected to your database.
$mysqli = mysqli_connect('localhost', 'root', '', 'hrms');

// Get the total number of records from our table "students".
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
	
	
	<div class="col-lg-12 col-md-12" id="announcements">
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
			<table border="1"class="table bootstrap-datatable countries">
			
			<?php while ($row = $result->fetch_assoc()):
				$picture  =$row['PICTURE']; 
			$title=$row['TITLE'];
			$content=$row['CONTENT'];
			$category=$row['CATEGORY'];
			$date=$row['DATE'];
			$post=$row['POST_DATE'];
			echo "<div class='panel-body'><div class='col-lg-5'><img src='".$picture."' style='width:80%;height:350px;border-radius:5px;'></div>
			<div class='col-lg-6'><div style='text-transform:capitalise;font-size:15px; color:white; background-color:#5F9EA0;font-family: 'Lato', sans-serif;  '>".$title."</div><br><br>
			<p style='font-size:16px;text-align:justify;font-family: 'Lato', sans-serif; font-size:12px;'>".$content."</p><br><br>
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
}?>

        
       
		
































                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              
            

          

       
        <!-- project team & activity end -->

      </section>
      <div class="text-center">
        <div class="credits">

          Copyright &copy Mignone Unguyeneza 2019
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
<?php
  include"include/scripts.php";
  ?>
  
</body>

</html>