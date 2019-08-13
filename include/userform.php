<?php include 'config.php'; ?>
<?php

    if(isset($_POST['save']))
        {
$first_name = mysqli_real_escape_string($conn, $_REQUEST['Fname']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['Lname']);
$gender= mysqli_real_escape_string($conn, $_REQUEST['gender']);
$NationalID= mysqli_real_escape_string($conn, $_REQUEST['NationalID']);
$phone= mysqli_real_escape_string($conn, $_REQUEST['PhoneNumber']);
$district= mysqli_real_escape_string($conn, $_REQUEST['district']);
$position= mysqli_real_escape_string($conn, $_REQUEST['position']);
$department= mysqli_real_escape_string($conn, $_REQUEST['department']);
$username= mysqli_real_escape_string($conn, $_REQUEST['username']);
$user_type= mysqli_real_escape_string($conn, $_REQUEST['user_type']);
$password= md5(mysqli_real_escape_string($conn, $_REQUEST['password']));
$re_password= md5(mysqli_real_escape_string($conn, $_REQUEST['re-password']));

$picture_tmp = $_FILES['picture']['tmp_name'];
    $picture_name = $_FILES['picture']['name'];
    $picture_type = $_FILES['picture']['type'];

    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
	
if($password!=$re_password){
echo"<script> alert('passwords mismatch')</script>";
        
       echo "<script>history.back();</script>";
   return false;
}
else{

    if(in_array($picture_type, $allowed_type)) {
        $path = 'upload/'.$picture_name; //change this to your liking
    } else {
        $error[] = 'File type not allowed';
    }


    if(!empty($error)) {
        echo '<font color="red">'.output_errors($error).'</font>';

    } else if(empty($error)) {
		
		$sql_t = "SELECT * FROM user_registration WHERE USERNAME='$username'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
		echo "<br></br><center><span id='helpdiv'>already exist</center></span>";
	
		}
		else{

// Attempt insert query execution
$sql = "INSERT INTO user_registration (FIRST_NAME, LAST_NAME, GENDER, NATIONAL_ID, PHONE_NUMBER, DISTRICT, POSITION, DEPARTMENT, PROFILE_PICTURE, USERNAME, USER_TYPE, PASSWORD)
VALUES ('$first_name', '$last_name', '$gender', '$NationalID', '$phone', '$district', '$position', '$department', '$path', '$username', '$user_type', '$password' )";

move_uploaded_file($picture_tmp, $path);

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}}}

    ?>
		  
		  <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Register Users</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">FirstName</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="Fname" required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="title">LastName</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="Lname" required>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-lg-2">Gender</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="gender" required>
                                                  <option disabled selected>- Choose Gender -</option>
                                                  <option>Male</option>
                                                  <option>Female</option>
                                                  
                                                </select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="title">National ID</label>
                        <div class="col-lg-10">
                          <input type="number" class="form-control" id="title" name="NationalID" required>
                        </div>
                      </div>
                      
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="title">PhoneNumber</label>
                        <div class="col-lg-10">
                          <input type="number" class="form-control" id="title" name="PhoneNumber" required>
                        </div>
                      </div>
					   <!-- Current District -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Current District</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="district" required>
                                                  <option disabled selected>- Choose a District -</option>
                                                  <option>Gasabo</option>
                                                  <option>Nyagatare</option>
                                                  <option>Gatsibo</option>
                                                  <option>Rusizi</option>
												  <option>Rubavu</option>
												  <option>Gicumbi</option>
												  <option>Nyamasheke</option>
												  <option>Musanze</option>
												  <option>Bugesera</option>
												  <option>Kayonza</option>
												  <option>Kamonyi</option>
												  
                                                </select>
                        </div>
                      </div>

                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Positions</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="position" required>
                                                  <option disabled selected>-Choose Position -</option>
                                                  <option>Chief Executive Officer</option>
                                                  <option>Chief Operation Manager</option>
                                                  <option>Chief Technology Officer</option>
                                                  <option>Techinical Support</option>
                                                  <option>Chief Finance Manager</option>
                                                  <option>Software Developers</option>
                                                </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2">Departments</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="department" required>
                                                  <option disabled selected>- Choose Department -</option>
                                                  <option>Finance Department</option>
                                                  <option>IT Department</option>
                                                  <option>Operational Department</option>
                                                </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Profile Picture</label>
                        <div class="col-lg-10">
                          <input type="file" class="form-control" id="tags" name="picture" required>
                        </div>

                      </div>
					  
					  
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Username</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags" name="username" required>
                        </div>

                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2">Type</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="user_type" required>
                                                  <option disabled selected>- Choose Type -</option>
                                                  <option>User</option>
                                                  <option>Admin</option>
                                                </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Enter Password</label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" id="tags" name="password" required>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Confirm Password</label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" id="tags" name="re-password" required>
                        </div>
                      </div>
					  

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="save">Create</button>
                          <button type="submit" class="btn btn-danger" name="cancel">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div></div></div></div>
	