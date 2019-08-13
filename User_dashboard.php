<!DOCTYPE html>
<html lang="en">

<head>
<?php
include"include/stylings.php";
?>
  
</head>
<body>
  <!-- container section start -->
  <section id="container" class="">

      <!-- include header and menubar start -->
       
	   		  <?php
  include"include/bannermenu.php";
  ?>
        <!-- include header and menubar end -->

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
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="icon_desktop"></i>
              <div class="count">6.674</div>
              <div class="title">Remaining &nbsp;&nbsp;&nbsp;Leave &nbsp;&nbsp;&nbsp; Applications</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-money"></i>
              <div class="count">7.538</div>
              <div class="title">Monthly &nbsp;&nbsp;&nbsp;Salary </div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-bullhorn" style="font-size:48px"></i>
              <div class="count">4.362</div>
              <div class="title">Announcement</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->
        <div class="row">
          
          <div class="col-md-12 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>

              </div><br><br><br>
              <div class="panel-body">
                <!-- Widget content -->

                <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                <div id="calendar"></div>

              </div>
            </div>
        </div>
        
                </div>
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
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          &copy2019 Imaginet
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