<?php 
include ('include/config.php'); 
$id=$_GET['applicant_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include"include/stylings.php";
?>
</head>

<body>

  <section id="container" class="">

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
        
      </div>
    </aside>
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> RESPOND APPLICANTS</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Applicants</li>
              <li><i class="fa fa-user-md"></i>Email Applicants</li>
            </ol>
          </div>
        </div>
		<?php
if(isset($_POST['send']))
{
	$to = mysqli_real_escape_string($conn, $_REQUEST['to']);
	$subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
	$message= mysqli_real_escape_string($conn, $_REQUEST['message']);
	$headers = "From: mignoneunguyeneza250gmail.com" . "\r\n" . "CC:ganzacynthia@gmail.com";
	if(mail($to, $subject, $message, $headers)){
		echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> You successfully sent the message.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
		}
		else
		{
		echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> DEmail Sending Has Failed.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";}
		}

	?>		
		
		
		
		
		
		
		
		
		
		
 <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          RESPOND APPLICANT FORM
                                      </a>
                 
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info" style="background-color:Lavender">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">TO</label>
                            <div class="col-lg-6">
							<?php
							$sql_t = "SELECT * FROM applicants WHERE applicant_id='$id'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			while($row = $result->fetch_assoc()) {
		$email=$row["email"];}}}?>
			
			
			
                              <input type="text" required class="form-control" id="l-name" placeholder=" " name="to" value='<?php echo $email ?>'>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="subject" required></textarea>
                            </div>
                          </div>
						  
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-6">
                              <textarea class="form-control" name="message" required></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="send">SEND</button>
                              <button type="button" class="btn btn-danger">CANCEL</button>
                            </div>
                          </div>
                        </form>
                    </section>
                    <section>
					
                      
                    </section>
                  </div>
				  </section>
				  </section>
				  </section>
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







<?php
/*$to = "ganzacynthia@gmail";
$subject = "My subject";
$txt = "Hello world";
$headers = "From: mignoneunguyeneza250gmail.com" . "\r\n" . "CC:ganzacynthia@gmail.com";
if(mail($to, $subject, $txt, $headers)){
	echo "Email sent";
}
else{
echo "Email sending failed";}*/
    
?>