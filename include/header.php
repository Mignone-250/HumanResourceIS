<?php
if(!isset($_SESSION)) { session_start(); }
?> 
<?php   
if(!$_SESSION['name'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>
<?php include ('config.php');?>
<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">HRMS <span class="lite">Admin Dashboard</span></a><a href="developer.php"><span  style='color:blue; margin-left:10%; font-weight:lighter' >.</span></a>
	  
	
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important"><?php 
				$abc="SELECT count(*) as total FROM cancelled_leave where USER_TYPE='User' and STATUS='PENDING'";
				$result=mysqli_query($conn,$abc);
				if($result)
				{
				while($row=mysqli_fetch_assoc($result))
				{
				echo $row['total'];
				}     
				}
				?></span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">
				<?php 
				$abc="SELECT count(*) as total FROM cancelled_leave where USER_TYPE='User' and STATUS='PENDING'";
				$result=mysqli_query($conn,$abc);
				if($result)
				{
				while($row=mysqli_fetch_assoc($result))
				{
				echo "You have ".$row['total']. " 
				messages";
				}     
				}
				?>
				
				</p>
              </li>
              <li>
			  <?php
									$query=mysqli_query($conn,"select * from cancelled_leave where USER_TYPE='User' and STATUS='PENDING' ORDER BY LEAVE_ID DESC");
									while($row=mysqli_fetch_array($query)){
										$title  =$row['LEAVE_TYPE']; 
										$description  =$row['DESCRIPTION'];
										
										
										?>
			  
			  
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from"></span><?php echo $title?>
                                    <!-- <span class="time">1 min</span>-->
                                    </span>
                                    
                                        <?php echo $description?>
                                    
                                </a><?php
									}
										
										?>
								
								
              </li>
              
              
            </ul>
          </li>
          
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <i class="fa fa-user" style="font-size:30px"></i>
                            </span>
                            <span class="username"><?php  
		echo $_SESSION['name'];  
		?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="Admin_profile.php"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="changepassword.php"><i class="fa fa-lock"></i> Change Password</a>
              </li>

              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>