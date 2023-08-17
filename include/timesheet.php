<?php $ID=$_GET['USER_ID'];?>
<style>
h1{
  font-size: 30px;
  color: #06389d;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  border:1px;
}
.tbl-header{
  background-color:black;
  border:1px;
 }
 .tbl-header2{
  background-color:#fff;
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  background-color:gray;
  
}
th{
  padding: 20px 15px;
  text-align: left;
  font-size: 12px;
  color: white;
  text-transform: uppercase;
  font-weight:bolder;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
 
}



/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

</style>

  <!--for demo wrap-->
  <h1><b>Vatel &nbsp;&nbsp; Employees&nbsp;&nbsp; Attendance&nbsp;&nbsp; Sheet<b></h1>
  <br><br>
  
  <?php

$sql = "SELECT * FROM user_registration WHERE USER_ID = $ID"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								$USER_ID=$row["USER_ID"];
								$FIRST=$row["FIRST_NAME"];
								$LAST=$row["LAST_NAME"];
								$POSITION=$row["POSITION"];
								$DEPARTMENT=$row["DEPARTMENT"];
								
								?>
								
								
							
																			
  
  <div class="tbl-header2">
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <tr><th style="text-transform:Capitalize; font-size:18px;">Employee Name:&nbsp;&nbsp; &nbsp;&nbsp;<span style="color:blue;"><?php  echo $FIRST." ".$LAST  ?></span></th>
          <th style="text-transform:Capitalize; font-size:18px;">Employee Post:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;"><?php  echo $POSITION ?></span></th></tr>
          <tr><th style="text-transform:Capitalize; font-size:18px;">Employee Department:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:blue;"><?php  echo $DEPARTMENT ?></span></th>
          <th style="text-transform:Capitalize; font-size:18px;">Employee Supervisor:</th></tr>
          
        </tr>
      </thead>
    </table>
  </div><?php	}}?>
  
  
  
  <?php
    if(isset($_POST['record']))
        {
		$date= mysqli_real_escape_string($conn, $_REQUEST['CurrentDate']);
		@$arrivedat= mysqli_real_escape_string($conn, $_REQUEST['arrivedat']);
		@$leftat= mysqli_real_escape_string($conn, $_REQUEST['leftat']);
@$arrival_status= mysqli_real_escape_string($conn, $_REQUEST['arrival_status']);
@$leaving_status=mysqli_real_escape_string($conn,$_REQUEST['leaving_status']);
@$day_status= mysqli_real_escape_string($conn, $_REQUEST['day_status']);
	
	$sql_t = "SELECT * FROM roll_call_attendance WHERE date='$date'";
	if ($conn->query($sql_t) ==TRUE) {
		$result = mysqli_query($conn,$sql_t) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		if($rows>0){
		echo "<div class='alerte' id='helpdiv' style='background-color:red;' > 
  <center> Attendance has already been taken <strong>&#10008</strong></center>
</div>";
echo "<script type='text/javascript'>
window.setTimeout('closeHelpDiv();', 3000);

function closeHelpDiv(){
document.getElementById('helpdiv').style.display=' none';
}
</script>";
	
		}

else{		
		

// Attempt insert query execution
$sql = "INSERT INTO roll_call_attendance (USER_ID,date,arrived_at,arrival_status,left_at,leaving_status,day_status)
VALUES ('$ID','$date','$arrivedat','$arrival_status','$leftat','$leaving_status','$day_status')";

if(mysqli_query($conn, $sql)){
   
	echo "<div class='alertO' id='helpdiv' style='background-color:blue;'> 
  <center> Attendance for today was taken successfully <strong>&#10004</strong></center>
</div>";
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
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
          <th>Date</th>
          <th>Arrived At</th>
          <th>Arrival Status</th>
          <th>Left At</th>
		  <th>Leaving status</th>
          <th>Final status/day</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <form action="" method="post">
    <table cellpadding="0" cellspacing="0" border="1">
      <tbody>
        <tr>
		<?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>
          <td><input type="text" name="CurrentDate" required readonly value=" <?php echo date('m/d/y');?>" autofocus="autofocus" style="background-color:gray; font-style:calibri; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none; text-align:center;"></td>

          <td><input type="time" name="arrivedat" required  style="background-color:gray; text-align:center; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none;"></td>

          <td>
		  
		  <select name="arrival_status" required style="background-color:gray; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none;">
		  <option  disabled="disabled" selected="selected">--Select--</option>
		  <option>On Time</option>
		  <option>Before Time</option>
		  <option>Late</option>
		  </select></td>

          <td><input type="time" name="leftat" required style="background-color:gray; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none; text-align:center;"></td>

		  <td><select name="leaving_status" required style="background-color:gray; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none;">
		  <option  disabled="disabled" selected="selected">--Select--</option>
		  <option>On Time</option>
		  <option>Before Time</option>
		  <option>Late</option>
		  </select></td>

          <td><select name="day_status" required style="background-color:gray; margin-left:-15px; width:200px; cursor:default;
color:white; font-size:12px;height:50px; border:none;">
		  <option  disabled="disabled" selected="selected">--Select--</option>
		  <option>Present</option>
		  <option>Absent</option>
		  <option>Late</option>
		  </select></td></td>
        </tr>
		
		
        
      </tbody>
    </table>
	<table border="0" style="position:absolute; left:40%; top:70%;">
	<tr>
		<td><button class="btn" name="record" type="submit" style="background-color: green;color:white; width:200px; height:50px; font-size:18px;">Record</button>
		<button class="btn" name="edit" style="background-color: #152E48;color:white; width:200px; height:50px;  font-size:18px;">Edit</button></td>
		
		</tr>
	</table>
	</form>
  </div>



<!-- follow me template -->
<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>