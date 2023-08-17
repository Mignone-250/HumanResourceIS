
 <?php
		include('include/config.php');
	?> 
<?php  

$id=$_REQUEST['id']; ?>

<div id="id02" class="modal">
  
              <div style="width:50%;" class="modal-content animate">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
                <center><h3 class="heading3">ASSIGN USER TYPE</h3>
                <form action="approve.php" method="post">
				
                  
                  <select  name="user_type" style="width:50%" required>
                                                  <option disabled selected>- Choose Type -</option>
                                                  <option>User</option>
                                                  <option>Admin</option>
												  <option><?php echo $id;  ?></option>
                                                </select><br><br>
												
                  <button type="submit" class="btn btn-primary" name="assign">ASSIGN</button><br><br> 
                </form></center>
                          

            </div>
            </div>
            </div>