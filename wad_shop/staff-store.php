<?php require_once("./db_connect.php");


//var_dump($conn);
//print_r($_POST);

$name = $_POST["name"];
$staffId = $_POST["staff-id"];
$phNo = $_POST["phone-no"];
$gender = $_POST["gender"];
$dob = $_POST["date-of-birth"];

$sql = "INSERT INTO staffs(name,`staff-id`,`phone-no`,gender,`date-of-birth`) VALUES('$name','$staffId','$phNo','$gender','$dob')";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location:staff-create-list.php");
}

//var_dump($query) ;