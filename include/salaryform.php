<?php include 'config.php'; ?>
<?php

    if(isset($_POST['add']))
        {
$position = mysqli_real_escape_string($conn, $_REQUEST['position']);
$salary = mysqli_real_escape_string($conn, $_REQUEST['salary']);
$expense= mysqli_real_escape_string($conn, $_REQUEST['expense']);

$net_salary=$salary-$expense;

// Attempt insert query execution
$sql = "INSERT INTO payroll (POSITION, GROSS_SALARY, EXPENSES, NET_SALARY)
VALUES ('$position', '$salary', '$expense', '$net_salary')";


if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
		}

    ?>

		  <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Add salary</div>
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
 
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Positions</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="position">
                                                  <option disabled>- Choose Position -</option>
                                                  <option>Chief Executive Officer</option>
                                                  <option>Chief Operation Manager</option>
                                                  <option>Chief Technology Officer</option>
                                                  <option>Techinical Support</option>
                                                  <option>Chief Finance Manager</option>
                                                  <option>Software Developers</option>
                                                </select>
                        </div>
                      </div>

					  
					  
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Gross Salary</label>
                        <div class="col-lg-10">
                          <input type="number" class="form-control" id="tags" name="salary">
                        </div>

                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Expenses</label>
                        <div class="col-lg-10">
                          <input type="number" class="form-control" id="tags" name="expense">
                        </div>
                      </div>
					
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary" name="add">Add</button>
                          <button type="submit" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div></div></div></div>
