
  
  
  
  
  
  
  
  
  
  
  
  
  
    
  <?php
  
  
   if(isset($_POST['search']))
        {
			
			   echo '<div class="col-sm-12" id= "printinga">
		<form action="" method="post" enctype="multipart/form-data">
            <section class="panel">
              
              <table border="1" class="table" id="tblattendance">
                <thead>
                  <tr>
          <th style="background-color:Lavender ">DATE</th>
          
		  <th style="background-color:Lavender ">ARRIVED AT</th>
		  <th style="background-color:Lavender ">ARRIVAL STATUS</th>
		  <th style="background-color:Lavender ">LEFT AT</th>
		  <th style="background-color:Lavender ">LEAVING STATUS</th>
		  <th style="background-color:Lavender ">DAY STATUS</th>
                  </tr>
                </thead>' ;
			
			
		$datesearch= mysqli_real_escape_string($conn, $_REQUEST['seacrchdate']);

$sql = "SELECT * FROM roll_call_attendance` WHERE USER_ID = $ID and todate = $datesearch"; 
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$USER_ID=$row["USER_ID"];
								$datee=$row["todate"];
								$arrivedat=$row["arrived_at"];
								$arrivalstatus=$row["arrival_status"];
								$left_att=$row["left_at"];
								$laevingstatus=$row["leaving_status"];
								$daystatus=$row["day_status"];	
								
								?>
								
								
							
																			
  
 <?php 
		date_default_timezone_set('US/Pacific');
		
		
 ?>

								
		
                <tbody>
                  <tr>
                      
             <td> <input type="text" name="CurrentDate"  readonly value=" <?php echo $datee;?>"style="border:none;"></td>
			
                    <td><input type="text" name="arrivedat" readonly value=" <?php echo $arrivedat;?>" readonly style="border:none;"> % &nbsp;</td>
<td>
					<input type="text" name="arrival_status" readonly  value=" <?php echo $arrivalstatus;?>" style="border:none;">
					
					</td>					
					<td>
					<input type="text" name="leftat" readonly  value=" <?php echo $left_att;?>" style="border:none;">
					
					</td>
					
					<td>
					<input type="text" name="leaving_status" readonly value=" <?php echo $laevingstatus?>" style="border:none;">
					
					</td>
					<td><input type="text" readonly value=" <?php echo $daystatus;?>"  style="border:none;"></td>
					
					

                  </tr>
				  
					<?php }}
					
					else{
						
						echo "No Records Found For That Particular Date";
					}
 ?>
</tbody>
              </table>        
            </section>
			</form>
			
		</div><?php }?>