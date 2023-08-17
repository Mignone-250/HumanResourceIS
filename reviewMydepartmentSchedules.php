<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
		include('include/stylings.php');
	?>

<body>
  <!-- container section start -->
  <section id="container" class="">
	<?php
		include 'include/bannermenu.php';
		?>
   
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-users"></i> Schedules</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
			  <li><i class="fa fa-users"></i>Employees Schedules</li>
              <li><i class="fa fa-users"></i>My department's</li>
            </ol>
          </div>
        </div>
		
		<?php
		include 'include/MyDepartmentAllSchedules.php';
		?>


<br><br>


                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
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
    <!--main content end-->
  </section>
  <?php
 include("include/scripting.php")
 ?>
</body>

</html>
