<?php
require_once("./db_connect.php");

$id = $_POST['row_id'];
$name = $_POST["name"];
$dob = $_POST["date-of-birth"];
$phNo = $_POST["phone-no"];
$gender = $_POST["gender"];

$sql = "UPDATE customers SET name='$name',`date-of-birth`='$dob',`phone-no`='$phNo',gender='$gender' WHERE id=$id";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location:customer-create-list.php");
}
