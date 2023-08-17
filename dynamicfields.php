<html>  
    <head>  
	
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<style>.hide{

visibility: hidden

}
</style>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="left" style='font-family:calibri; font-weight:bold;color:blue;'>Employee On Boarding</a></h3><br />
			<br />
			<br />
			<div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn">Add Tasks</button>
   </div>
   <br />
   <form method="post" id="user_form" style="background-color:lavender;">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data" style="font-family:calibri; font-size:15px;">
      <tr>
       <th>Task</th>
       <th>When &nbsp; ?</th>
	   <th>Notes<br></th>
	   <th>Relevant Resources</th>
	   <th>Details</th>
       <th>Remove</th>
      </tr>
     </table>
    </div>
    <div align="center">
     <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Save Tasks" style="font-family:calibri; font-size:15px;" />
    </div>
   </form>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group" style="font-family:calibri; font-size:15px;">
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
   
   <div class="form-group">
	<?php $ID=$_GET['USER_ID'];?>
    <input type="hidden" name="USER_ID" id="USER_ID" value="<?php echo $ID; ?>" class="form-control" />
    <span id="error_USER_ID" class="text-danger"></span>
   </div>
   
   <div class="form-group">
    <input type="hidden" name="status" id="status" value="<?php echo "Pending" ?>" class="form-control" />
    <span id="error_status" class="text-danger"></span>
   </div>
   
   
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-primary"  style="font-family:calibri; font-size:15px;">Save</button>
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
  $('#USER_ID').val('<?php $ID=$_GET['USER_ID']; echo $ID;?>');
  $('#status').val('Pending');
  $('#error_first_name').text('');
  $('#error_last_name').text('');
  $('#error_age').text('');
  $('#error_year').text('');
  $('#error_USER_ID').text('');
  $('#error_status').text('');
  $('#first_name').css('border-color', '');
  $('#last_name').css('border-color', '');
  $('#age').css('border-color', '');
  $('#year').css('border-color', '');
  $('#USER_ID').css('border-color', '');
  $('#status').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_first_name = '';
  var error_last_name = '';
  var error_age = '';
  var error_year = '';
  var error_USER_ID = '';
  var error_status = '';
  var first_name = '';
  var last_name = '';
  var age = '';
  var year = '';
  var USER_ID = '';
  var status = '';
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
  
  if($('#USER_ID').val() == '')
  {
   error_user_id = 'user id is required';
   $('#error_USER_ID').text(error_user_id);
   $('#USER_ID').css('border-color', '#cc0000');
   USER_ID = '';
  }
  else
  {
   error_USER_ID = '';
   $('#error_USER_ID').text(error_USER_ID);
   $('#USER_ID').css('border-color', '');
   user_id = $('#USER_ID').val();
  }
  
   if($('#status').val() == '')
  {
   error_status = 'user id is required';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '#cc0000');
   status = '';
  }
  else
  {
   error_status = '';
   $('#error_status').text(error_status);
   $('#status').css('border-color', '');
   status = $('#status').val();
  }
  
  
  
  if(error_first_name != '' || error_last_name != '' || error_USER_ID != '' || error_status != '')
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
    output += '<td class="hidden">'+<?php $ID=$_GET['USER_ID']; echo $ID;?>+' <input type="hidden" name="hidden_USER_ID[]" id="USER_ID'+count+'" value="'+<?php $ID=$_GET['USER_ID']; echo $ID;?>+'" /></td>';
    output += '<td class="hidden">'+'Pending'+' <input type="hidden" name="hidden_status[]" id="status'+count+'" value="'+'Pending'+'" /></td>';
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
    output += '<td>'+age+' <input type="hidden" name="hidden_age[]" id="age'+row_id+'" value="'+age+'" /></td>';
    output += '<td>'+year+' <input type="hidden" name="hidden_year[]" id="year'+row_id+'" value="'+year+'" /></td>';
    output += '<td>'+'Pending'+' <input type="hidden" name="hidden_status[]" id="status'+row_id+'" value="'+'Pending'+'" /></td>';
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
  var age = $('#age'+row_id+'').val();
  var year = $('#year'+row_id+'').val();
  var USER_ID = $('#USER_ID'+row_id+'').val();
  var status = $('#status'+row_id+'').val();
  $('#first_name').val(first_name);
  $('#last_name').val(last_name);
  $('#age').val(age);
  $('#year').val(year);
  $('#USER_ID').val(USER_ID);
  $('#status').val(status);
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
     $('#action_alert').html('<p>You successfully assigned tasks to this employee!</p>');
     $('#action_alert').dialog('open');
    }
   })
  }
  else
  {
   $('#action_alert').html('<p>Please Add  Some Data</p>');
   $('#action_alert').dialog('open');
  }
 });
 
});  
</script>

    

