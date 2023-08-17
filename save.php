<?php include 'include/config.php';?>
<?php

$name=$_POST['name'];

for($i=0;$i<sizeof($name);$i++){

$price=$_POST['price'];


$sql = "INSERT INTO trial (name, price)

VALUES ('$name[$i]', '$price[$i]')";

if ($conn->query($sql) === TRUE) {

echo "";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

}

//header('location:index.php');

?>