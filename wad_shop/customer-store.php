<?php require_once("./db_connect.php");


//var_dump($conn);
//print_r($_POST);

$name = $_POST["name"];
$dob = $_POST["date-of-birth"];
$phNo = $_POST["phone-no"];
$gender = $_POST["gender"];

$sql = "INSERT INTO customers(name,`date-of-birth`,`phone-no`,gender) VALUES('$name','$dob','$phNo','$gender')";

$query = mysqli_query($conn, $sql);

if ($query) {
header("Location:customer-create-list.php");
}

//var_dump($query) ;