<?php

require_once("./db_connect.php");
//sql statement
$sql="SELECT * FROM products";

//run query
$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query)){
  print_r($row["price"]."\n");
}

//var_dump($query);

//fetch data
//var_dump(mysqli_fetch_object($query));
//var_dump(mysqli_fetch_assoc($query));
// print_r(mysqli_fetch_all($query));
// var_dump(mysqli_fetch_all($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));

