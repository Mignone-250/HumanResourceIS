<!--
//index.php
!-->

<html>  
    <head>  
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="left" style='font-family:calibri; font-weight:bold;color:blue;'>Employee On Boarding</a></h3><br />
			<br />
			<br />
			<div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <br />
   <form method="post" id="user_form">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data">
      <tr>
       <th>Task</th>
       <th>When</th>
	   <th>Notes</th>
	   <th>Relevant Resources</th>
	   <th>Details</th>
       <th>Remove</th>
      </tr>
     </table>
    </div>
    <div align="center">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
    </div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group">
    <label>Enter Task</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Specify when to have the task done</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>
   
    <div class="form-group">
    <label>Add Notes</label>
    <input type="text" name="age" id="age" class="form-control" />
    <span id="error_age" class="text-danger"></span>
   </div>
   
   
   <div class="form-group">
    <label>Add Resources</label>
    <input type="text" name="year" id="year" class="form-control" />
    <span id="error_year" class="text-danger"></span>
   </div>
   
   
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Save</button>
   </div>
  </div>
  <div id="action_alert" title="Action">

  </div>
    </body>  
</html> 

<script>  
$(document).ready(function(){ 
 
 var count = 0;

 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');
  $('#first_name').val('');
  $('#last_name').val('');
  $('#age').val('');
  $('#year').val('');
  $('#error_first_name').text('');
  $('#error_last_name').text('');
  $('#error_age').text('');
  $('#error_year').text('');
  $('#first_name').css('border-color', '');
  $('#last_name').css('border-color', '');
  $('#age').css('border-color', '');
  $('#year').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  var error_age = '';
  var error_year = '';
  var first_name = '';
  var last_name = '';
  var age = '';
  var year = '';
  if($('#first_name').val() == '')
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '#cc0000');
   first_name = '';
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').css('border-color', '');
   first_name = $('#first_name').val();
  } 
  if($('#last_name').val() == '')
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '#cc0000');
   last_name = '';
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').css('border-color', '');
   last_name = $('#last_name').val();
  }
  
  if($('#age').val() == '')
  {
   error_age = 'age is required';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '#cc0000');
   age = '';
  }
  else
  {
   error_age = '';
   $('#error_age').text(error_age);
   $('#age').css('border-color', '');
   age = $('#age').val();
  }
  
  if($('#year').val() == '')
  {
   error_year = 'Last Name is required';
   $('#error_year').text(error_year);
   $('#year').css('border-color', '#cc0000');
   year = '';
  }
  else
  {
   error_year = '';
   $('#error_year').text(error_year);
   $('#year').css('border-color', '');
   year = $('#year').val();
  }
  
  
  if(error_first_name != '' || error_last_name != '' || error_age != '' || error_year != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
    output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+count+'" value="'+age+'" /></td>';
    output += '<td>'+year+' <input type="hidden" name="hidden_year[]" id="year'+count+'" value="'+year+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
    output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="year'+row_id+'" value="'+age+'" /></td>';
    output += '<td>'+year+' <input type="hidden" name="hidden_age[]" id="year'+row_id+'" value="'+year+'" /></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var first_name = $('#first_name'+row_id+'').val();
  var last_name = $('#last_name'+row_id+'').val();
  $('#first_name').val(first_name);
  $('#last_name').val(last_name);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option', 'title', 'Edit Data');
  $('#user_dialog').dialog('open');
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   $('#row_'+row_id+'').remove();
  }
  else
  {
   return false;
  }
 });

 $('#action_alert').dialog({
  autoOpen:false
 });

 $('#user_form').on('submit', function(event){
  event.preventDefault();
  var count_data = 0;
  $('.first_name').each(function(){
   count_data = count_data + 1;
  });
  if(count_data > 0)
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#user_data').find("tr:gt(0)").remove();
     $('#action_alert').html('<p>Data Inserted Successfully</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add atleast one data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>




<?php

    if(isset($_POST['save']))
        {
$task = mysqli_real_escape_string($conn, $_REQUEST['task']);
$when = mysqli_real_escape_string($conn, $_REQUEST['when']);
$notes = mysqli_real_escape_string($conn, $_REQUEST['notes']);
$resources = mysqli_real_escape_string($conn, $_REQUEST['resources']);

	$sql_t = "SELECT * FROM onboarding WHERE USER_ID='".$_SESSION['user']."'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			date_default_timezone_set('US/Pacific');
			$t=date('Y-m-d');$day = date('l',strtotime($t));
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> You finished Scheduling for '".$_SESSION['user']."'.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";
	
		}
		else{


// Attempt insert query execution
$sql = "INSERT INTO onboarding (USER_ID,task,when,notes,resources)
VALUES ('".$_SESSION['user']."','$task','$when','$notes','$resources')";

if(mysqli_query($conn, $sql)){
	$t=date('Y-m-d');$day = date('l',strtotime($t));
   
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Schedule For &nbsp; '".$_SESSION['user']."'
						 &nbsp;&nbsp;&nbsp;.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
								</script>";
	
	
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}}}

    ?>	