<?php require_once("./db_connect.php");

$id = $_GET["row_id"];

$sql = "DELETE FROM staffs WHERE id=$id";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location:staff-create-list.php");
}
