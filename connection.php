<?php
$conn= new mysqli('localhost','root','','sas');
if ($conn->connect_error) {
  die("Connection Error: ".$conn->connect_error);
}
 ?>
