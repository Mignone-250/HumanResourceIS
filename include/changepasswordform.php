<?php include 'config.php'; ?>
<?php

if(isset($_POST['change']))
{
$sql=mysqli_query($conn,"SELECT PASSWORD FROM  user_registration where PASSWORD=PASSWORD('".$_POST['current']."') && USERNAME='".$_SESSION['username']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($conn,"update user_registration set PASSWORD=PASSWORD('".$_POST['new']."') where USERNAME='".$_SESSION['username']."'");
echo "<div  id='helpdiv'><div class='col-lg-9'>
	<div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
	<strong>Success!</strong> Password changed successfully.</div></div></div><br><br>";
	
	echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
}
else
{
echo "Old Password not match !!";
}
}
?>

		  <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Change Password</div>
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
                    <form class="form-horizontal" action="" id="register_form" name="chngpwd" method="post" enctype="multipart/form-data" autocomplete="off" onSubmit="return valid();">
                      <!-- Title -->
 
                      <!-- Cateogry -->
                      
					<div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Current password: </label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" id="tags" name="current">
                        </div>

                      </div>
					  
					  
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">New Password: </label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" id="tags" name="new" required pattern=".{6,10}" title="6 to 10 characters">
                        </div>

                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Confirm Password: </label>
                        <div class="col-lg-10">
                          <input type="password" class="form-control" id="tags" name="confirm">
                        </div>
                      </div>
					
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="change">Change</button>
                          <button type="submit" class="btn btn-danger" onclick="resetForm('register_form'); return false;">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div></div></div></div>

<script type="text/javascript">
function valid()
{
if(document.chngpwd.current.value=="")
{
alert("Current Password Field is Empty !!");
document.chngpwd.current.focus();
return false;
}
else if(document.chngpwd.new.value=="")
{
alert("New Password Field is Empty !!");
document.chngpwd.new.focus();
return false;
}
else if(document.chngpwd.confirm.value=="")
{
alert("Confirm Password Field is Empty !!");
document.chngpwd.confirm.focus();
return false;
}
else if(document.chngpwd.new.value!= document.chngpwd.confirm.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirm.focus();
return false;
}
return true;
}
</script>

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