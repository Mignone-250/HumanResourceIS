<?php
$connect = new PDO("mysql:host=localhost;dbname=hrms", "root", "");
$query = "
INSERT INTO onboarding 
(first_name, last_name, age, year, USER_ID,status) 
VALUES (:first_name, :last_name, :age, :year, :USER_ID, :status)
";

 
for($count = 0; $count<count($_POST['hidden_first_name']); $count++)
{
	$data = array(
		':first_name'	=>	$_POST['hidden_first_name'][$count],
		':last_name'	=>	$_POST['hidden_last_name'][$count],
		':age'	=>	$_POST['hidden_age'][$count],
		':year'	=>	$_POST['hidden_year'][$count],
		':USER_ID'	=>	$_POST['hidden_USER_ID'][$count],
		':status'	=>	$_POST['hidden_status'][$count]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
	exit;
		}

?>
