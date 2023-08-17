<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
		include('include/stylings.php');
	?>

<body>
  <!-- container section start -->
  <section id="container" class="">
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
            <h3 class="page-header"><i class="fa fa-users"></i> EMPLOYEES ATTENDANCE</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="Admin_dashboard.php">Home</a></li>
			  <li><i class="fa fa-users"></i>Attendance</li>
              <li><i class="fa fa-users"></i>Recorded Attendance</li>
            </ol>
          </div>
        </div>
		
		<?php
		include 'include/registeredreceptionist2.php';
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
