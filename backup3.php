<!DOCTYPE html>
<html lang="en">

<head>
  <?php
include"include/stylings.php";
?>
 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
		<?php
            include 'include/config.php';
        ?>
	
		
  <section id="main-content">
  <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> ON BOARDING</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="User_dashboard.php">Home</a></li>
              <li><i class="icon_documents_alt"></i> ASSIGN TASKS</li>
              <li><i class="fa fa-user-md"></i> ASSIGN TASKS</li>
            </ol>
          </div>
        </div>
		
	  
				  
				<?php

    if(isset($_POST['SaveSchedule']))
        {
//$dayname = mysqli_real_escape_string($conn, $_REQUEST['dayname']);
$todaysdate = mysqli_real_escape_string($conn, $_REQUEST['TodaysDate']);
//$title = //mysqli_real_escape_string($conn, $_REQUEST['title']);
$task1 = mysqli_real_escape_string($conn, $_REQUEST['task1']);
$status_task1 = mysqli_real_escape_string($conn, $_REQUEST['status_task1']);
$deadline_task1 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task1']);

$task2 = mysqli_real_escape_string($conn, $_REQUEST['task2']);
$status_task2 = mysqli_real_escape_string($conn, $_REQUEST['status_task2']);
$deadline_task2 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task2']);

$task3 = mysqli_real_escape_string($conn, $_REQUEST['task3']);
$status_task3 = mysqli_real_escape_string($conn, $_REQUEST['status_task3']);
$deadline_task3 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task3']);


$task4 = mysqli_real_escape_string($conn, $_REQUEST['task4']);
$status_task4 = mysqli_real_escape_string($conn, $_REQUEST['status_task4']);
$deadline_task4 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task4']);

$task5 = mysqli_real_escape_string($conn, $_REQUEST['task5']);
$status_task5 = mysqli_real_escape_string($conn, $_REQUEST['status_task5']);
$deadline_task5 = mysqli_real_escape_string($conn, $_REQUEST['deadline_task5']);

	$sql_t = "SELECT * FROM schedules2 WHERE todaysdate='$todaysdate'";
		if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
			date_default_timezone_set('US/Pacific');
			$t=date('Y-m-d');$day = date('l',strtotime($t));
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:red;color:white;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Sorry!</strong> You finished Scheduling for this week.</div></div><br><br><br>";
								 
								 echo "<script type='text/javascript'>
								window.setTimeout('closeHelpDiv();', 3000);

								function closeHelpDiv(){
								document.getElementById('helpdiv').style.display=' none';
								}
				</script>";
	
		}
		else{


// Attempt insert query execution
$sql = "INSERT INTO schedules2 (USER_ID,todaysdate,task1,status_task1,deadline_task1,challenge_task1,task2,status_task2,deadline_task2,challenge_task2,task3,status_task3,deadline_task3,challenge_task3,task4,status_task4,deadline_task4,challenge_task4,task5,status_task5,deadline_task5,challenge_task5)
VALUES ('".$_SESSION['user']."','$todaysdate','$task1','$status_task1','$deadline_task1','','$task2','$status_task2','$deadline_task2','','$task3','$status_task3','$deadline_task3','','$task4','$status_task4','$deadline_task4','','$task5','$status_task5','$deadline_task5','')";

if(mysqli_query($conn, $sql)){
	$t=date('Y-m-d');$day = date('l',strtotime($t));
   
echo "<div class='col-lg-9' id='helpdiv'>
								 <div style='background-color:#C2E1C0;color:green;text-align:center;font-size:17px;padding:10px;border-radius:5px;box-shadow: 0 4px 4px -4px black;'>
								 <strong>Success!</strong> Schedule For &nbsp; $todaysdate
						 &nbsp;&nbsp;&nbsp;was successfully created.</div></div><br><br><br>";
								 
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
 <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  
                  <li>
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          CREATE A SCHEDULE
                                      </a>
                 
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                 
                  <!-- profile -->
                  <div id="profile" class="tab-pane active" >
                    <section class="panel">
                     
					  
						<div class="panel-body bio-graph-info">
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" autocomplete="off" name="add_name" id="add_name">
						<div class="form-group">
                            <label class="col-lg-2 control-label" >Task</label>
                            <div class="col-lg-6">
                              <input type="text" readonly class="form-control" id="l-name" name="task">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">When To compelete</label>
                            <div class="col-lg-6">
							  <input type="text" class="form-control" name="when">
                            </div>
                          </div>
						  
						  
						  
						<div class="form-group">
                        <label class="col-lg-2 control-label" style='color:red; font-size:12px; font-weight:bold;;'>Notes</label>
                        <div class="col-lg-6">
						<textarea class="form-control" name="notes" ></textarea>
                        </div>
                        </div>
						  
						   <div class="form-group">
                            <label class="col-lg-2 control-label">Relevant Resource</label>
                            <div class="col-lg-6">
							  <input type="text" class="form-control"  name="r_resources">
							  
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <label class="col-lg-2 control-label">Status</label>
                            <div class="col-lg-6">
							  <input type="hidden" class="form-control"  name="status" value="pending">
							  
                            </div>
                          </div>
						  
						  <div class="form-group">
                            <div class="col-lg-6">
							  <table  id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
							  
                            </div>
                          </div>
                </div>  
						
						
						 <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
                        </div>
                        </div>
						  
						 
						 
						 

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary" name="SaveSchedule">SAVE </button>
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


















		
		<p>
        <input type="button" id="addRow" value="Add New Row" onclick="addRow()" class="btn" />
    </p>

    <!--THE CONTAINER WHERE WE'll ADD THE DYNAMIC TABLE-->
    <div id="cont"></div>

    <p><input type="button" id="bt" value="Save Records" onclick="submit()" class="btn btn-info"  style='margin-top:3%;'/></p>
    <!--<p>(See the result in the console window.)</p>-->
</body>

<script>
    // ARRAY FOR HEADER.
    var arrHead = new Array();
    arrHead = ['', 'Task', 'When To  Complete', 'Notes', 'Relevant Resources'];      // SIMPLY ADD OR REMOVE VALUES IN THE ARRAY FOR TABLE HEADERS.

    // FIRST CREATE A TABLE STRUCTURE BY ADDING A FEW HEADERS AND
    // ADD THE TABLE TO YOUR WEB PAGE.
    function createTable() {
        var empTable = document.createElement('table');
        empTable.setAttribute('id', 'empTable');            // SET THE TABLE ID.

        var tr = empTable.insertRow(-1);

        for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');          // TABLE HEADER.
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
        }

        var div = document.getElementById('cont');
        div.appendChild(empTable);    // ADD THE TABLE TO YOUR WEB PAGE.
    }

    // ADD A NEW ROW TO THE TABLE.s
    function addRow() {
        var empTab = document.getElementById('empTable');

        var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
        var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
        tr = empTab.insertRow(rowCnt);

        for (var c = 0; c < arrHead.length; c++) {
            var td = document.createElement('td');          // TABLE DEFINITION.
            td = tr.insertCell(c);

            if (c == 0) {           // FIRST COLUMN.
                // ADD A BUTTON.
                var button = document.createElement('input');

                // SET INPUT ATTRIBUTE.
                button.setAttribute('type', 'button');
                button.setAttribute('value', 'Remove');
				button.className = "btn";
				

                // ADD THE BUTTON's 'onclick' EVENT.
                button.setAttribute('onclick', 'removeRow(this)');

                td.appendChild(button);
            }
            else {
                // CREATE AND ADD TEXTBOX IN EACH CELL.
                var ele = document.createElement('input');
                ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');

                td.appendChild(ele);
            }
        }
    }

    // DELETE TABLE ROW.
    function removeRow(oButton) {
        var empTab = document.getElementById('empTable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
    }

    // EXTRACT AND SUBMIT TABLE DATA.
    function submit() {
        var myTab = document.getElementById('empTable');
        var values = new Array();

        // LOOP THROUGH EACH ROW OF THE TABLE.
        for (row = 1; row < myTab.rows.length - 1; row++) {
            for (c = 0; c < myTab.rows[row].cells.length; c++) {   // EACH CELL IN A ROW.

                var element = myTab.rows.item(row).cells[c];
                if (element.childNodes[0].getAttribute('type') == 'text') {
                    values.push("'" + element.childNodes[0].value + "'");
                }
            }
        }
        
        // SHOW THE RESULT IN THE CONSOLE WINDOW.
        console.log(values);
    }
</script>




































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
				<button type="button" name="add" id="add" class="btn">Add More Fields</button>
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
							<th style='background-color:lavender;'>Task</th>
							<th style='background-color:lavender;'>When?</th>
							<th style='background-color:lavender;'>Notes</th>
							<th style='background-color:lavender;'>Relevant Resources</th>
							
						</tr>
					</table>
				</div>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Add Tasks" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Enter Task</label>
				<input type="text" name="task_name" id="task" class="form-control" />
				<span id="error_first_name" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Specify when to have task complete</label>
				<input type="text" name="when" id="when_tocomplete" class="form-control" />
				<span id="error_last_name" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Notes</label>
				<input type="text" name="notes" id="notess" class="form-control" />
				<span id="error_last_name" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Relevant Resources</label>
				<input type="text" name="relevantResource" id="resources" class="form-control" />
				<span id="error_last_name" class="text-danger"></span>
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
		$('#task').val('');
		$('#when_tocomplete').val('');
		$('#notess').val('');
		$('#resources').val('');
		$('#error_task').text('');
		$('#error_when_tocomplete').text('');
		$('#error_notess').text('');
		$('#error_resources').text('');
		$('#task').css('border-color', '');
		$('#when_tocomplete').css('border-color', '');
		$('#notess').css('border-color', '');
		$('#resources').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_task = '';
		var error_when_tocomplete = '';
		var error_notess = '';
		var error_resources = '';
		var task = '';
		var when_tocomplete = '';
		var notess = '';
		var resources = '';
		if($('#task').val() == '')
		{
			error_first_name = 'Task Field is required';
			$('#error_task').text(error_task);
			$('#task').css('border-color', '#cc0000');
			task = '';
		}
		else
		{
			error_task = '';
			$('#error_task').text(error_task);
			$('#task').css('border-color', '');
			task = $('#task').val();
		}	
		if($('#when_tocomplete').val() == '')
		{
			error_when_tocomplete = 'Deadline field is required';
			$('#error_when_tocomplete').text(error_when_tocomplete);
			$('#when_tocomplete').css('border-color', '#cc0000');
			when_tocomplete = '';
		}
		else
		{
			error_when_tocomplete = '';
			$('#error_when_tocomplete').text(error_when_tocomplete);
			$('#when_tocomplete').css('border-color', '');
			when_tocomplete = $('#when_tocomplete').val();
		}
		
		if($('#notess').val() == '')
		{
			error_notess = 'Notes field is required';
			$('#error_notess').text(error_notess);
			$('#notess').css('border-color', '#cc0000');
			notess = '';
		}
		else
		{
			error_notess = '';
			$('#error_notess').text(error_notess);
			$('#notess').css('border-color', '');
			notess = $('#notess').val();
		}
		
		
		if($('#resources').val() == '')
		{
			error_notess = 'Resources field is required';
			$('#error_resources').text(error_resources);
			$('#resources').css('border-color', '#cc0000');
			resources = '';
		}
		else
		{
			error_resources = '';
			$('#error_resources').text(error_resources);
			$('#resources').css('border-color', '');
			notess = $('#resources').val();
		}
		
		
		if(error_first_name != '' || error_last_name != '' || error_notess != '' || error_resources != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+task+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+task+'" /></td>';
				output += '<td>'+when_tocomplete+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+when_tocomplete+'" /></td>';
				output += '<td>'+notess+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+notess+'" /></td>';
				output += '<td>'+resources+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+resources+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+task+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+task+'" /></td>';
				output += '<td>'+when_tocomplete+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+when_tocomplete+'" /></td>';
				output += '<td>'+notess+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+notess+'" /></td>';
				output += '<td>'+resources+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+resources+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var task = $('#task'+row_id+'').val();
		var when_tocomplete = $('#when_tocomplete'+row_id+'').val();
		var notess = $('#notess'+row_id+'').val();
		var resources = $('#resources'+row_id+'').val();
		$('#task').val(task);
		$('#when_tocomplete').val(when_tocomplete);
		$('#notess').val(notess);
		$('#resources').val(resources);
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
		$('.task).each(function(){
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
		
		