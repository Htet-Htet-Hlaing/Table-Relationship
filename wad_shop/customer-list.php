<?php

require_once("./db_connect.php");
//sql statement
$sql = "SELECT * FROM customers";

//run query
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($query)) {
  print_r($row["date-of-birth"] . "\n");
}


