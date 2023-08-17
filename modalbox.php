<head><style>
.modal {
  
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  
  padding-top: 0px;
 
}
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%;
}

.close {

  color: #000;
  font-size: 35px;
  font-weight: bold;
  margin-left:90%;
  color:red;
}

.close:hover,
.close:focus {
  color: blue;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
</style></head>
<body style='background-color:#152E48;'>		
 <?php
		include('include/config.php');
	?> 
<?php  
$idoo=$_REQUEST['id']; ?>

<div id="id02" class="modal">
  
              <div style="width:50%;" class="modal-content animate">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
                <center><h3 class="heading3">ASSIGN EMPLOYEE TYPE</h3>
                <form action="approve.php " method="post">
				
                  
                  <select  name="user_type" style="width:50%" required>
                                                  <option disabled selected>- Choose Type -</option>
                                                  <option>User</option>
                                                  <option>Admin</option>
												  <option><?php echo $idoo;  ?></option>
                                                </select><br><br>
												
                  <button type="submit" class="btn btn-primary" name="assign">ASSIGN</button><br><br> 
                </form></center>
                          

            </div>
            </div>
            </div>