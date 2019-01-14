<?php
require '../db_config.php';

  $id  = $_GET["id"];
  $sql = "SELECT * FROM books WHERE id = '".$id."'"; 
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();

echo json_encode($data);

?>