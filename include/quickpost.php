<?php include 'config.php'; ?>
<?php

    if(isset($_POST['publish']))
        {
$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$content = mysqli_real_escape_string($conn, $_REQUEST['content']);
$category= mysqli_real_escape_string($conn, $_REQUEST['category']);
$date= mysqli_real_escape_string($conn, $_REQUEST['date']);


$fileinfo=PATHINFO($_FILES["picture"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["picture"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;


// Attempt insert query execution
$sql = "INSERT INTO post (TITLE, CONTENT, CATEGORY,PICTURE,DATE)
VALUES ('$title', '$content', '$category','$location','$date')";


if(mysqli_query($conn, $sql)){
    echo "<div  id='helpdiv'><div class='col-lg-9'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Post published successfully.</div></div></div><br><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}
if(isset($_POST['draft']))
        {
$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
$content = mysqli_real_escape_string($conn, $_REQUEST['content']);
$category= mysqli_real_escape_string($conn, $_REQUEST['category']);
$date= mysqli_real_escape_string($conn, $_REQUEST['date']);


$fileinfo=PATHINFO($_FILES["picture"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["picture"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;


// Attempt insert query execution
$sql = "INSERT INTO post_draft (TITLE, CONTENT, CATEGORY,PICTURE,DATE)
VALUES ('$title', '$content', '$category','$location','$date')";


if(mysqli_query($conn, $sql)){
    echo "<div  id='helpdiv'><div class='col-lg-9'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Draft saved successfully.</div></div></div><br><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}


    ?>

<div class="col-md-9 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
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
                    <form class="form-horizontal" action="" id="register_form" method="post" enctype="multipart/form-data">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content" name="content" required></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="category" required>
                                                  <option disabled>- Choose Cateogry -</option>
                                                  <option>General</option>
                                                  <option>News</option>
                                                  <option>Media</option>
                                                  <option>Funny</option>
                                                </select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Picture</label>
                        <div class="col-lg-10">
                          <input type="file" class="form-control" id="tags" name="picture" required>
                        </div>

                      </div>
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Date</label>
                        <div class="col-lg-10">
                          <input type="date" class="form-control" id="tags" name="date" required>
                        </div>

                      </div>
                      <!-- Tags -->
                      

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" name="publish" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger" name="draft">Save Draft</button>
                          <button type="reset" class="btn btn-default" onclick="resetForm('register_form'); return false;">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
		<script type="text/javascript">
   function resetForm(register_form)
   {
       var myForm = document.getElementById(register_form);

       for (var i = 0; i < myForm.elements.length; i++)
       {
           if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type)
           {
               myForm.elements[i].checked = false;
               myForm.elements[i].value = '';
               myForm.elements[i].selectedIndex = 0;
           }
       }
   }
</script>