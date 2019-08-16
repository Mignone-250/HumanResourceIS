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
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> LEAVE REQUEST APPLICATION</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Leave Request</li>
            </ol>
          </div>
        </div>
  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Request A Leave Application Form</h1>
                        <form class="form-horizontal" role="form" autocomplete="off">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Type Of Leave </label>
                            <div class="col-lg-6">
                              
							  <select class="form-control" name="gender">
						<option>- Choose The Type Of Leave</option>
						<option></option>
						<option></option>	
						<option></option>	
						<option></option>	
					  </select>
							  
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Number Of Days</label>
                            <div class="col-lg-6">
                              <input type="number" required class="form-control" id="l-name" placeholder=" ">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Reason</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" required></textarea>
                            </div>
                          </div>
                          

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary">Send</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
				  </section>
				  </section>
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