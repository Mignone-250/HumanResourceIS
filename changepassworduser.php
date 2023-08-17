<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include"include/stylings.php";
?>
</head>

<body>

  <section id="container" class="">

      <!-- include header and menubar start -->
        <?php
            include 'include/bannermenu.php';
        ?>
		<?php
            include 'include/config.php';
        ?>
	
		
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-lock"></i> CHANGING PASSWORD</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="fa fa-lock"></i>change password</li>
             
            </ol>
          </div>
        </div>
 <?php
		include 'include/changepasswordform.php';
		?>
				  </section>
				  </section>
				  </section>
				  <div class="text-center">
        <div class="credits">
          Copyright &copy Mignone Unguyeneza 2020
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