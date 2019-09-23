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
            <h3 class="page-header"><i class="fa fa-users"></i> Leaves</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
			  <li><i class="fa fa-long-arrow-right"> </i>Manage Leaves</li>
              
            </ol>
          </div>
        </div>
		
		<?php
		include 'include/leaveinformation.php';
		?>


		<br>
		<?php
		include 'include/leaveremaining.php';
		?>
		<br>
		<?php
		include 'include/leaveconfirmed.php';
		?>
		
		<?php
		include 'include/users_leave_cancelled.php';
		?>


                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
