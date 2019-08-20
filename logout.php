<?php  

session_start();

include('include/config.php');
date_default_timezone_set('Canada/Pacific');
$ldate=date( 'd-m-Y h:i:s A', time () );

$sql = "UPDATE user_logs  SET LOGOUT_TIME = '$ldate' WHERE USERNAME = '".$_SESSION['username']."'"; 
if(mysqli_query($conn, $sql)){  
session_destroy();  
header("Location: index.php"); }
 
?>