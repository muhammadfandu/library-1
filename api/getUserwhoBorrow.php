<?php
require '../db_config.php';

  if (!empty($_GET["search"])){
	$sqlTotal = "SELECT * FROM users 
		WHERE (name LIKE '%".$_GET["search"]."%' 
		OR username LIKE '%".$_GET["search"]."%')"; 
	$sql = "SELECT * FROM users 
		WHERE (name LIKE '%".$_GET["search"]."%' 
		OR username LIKE '%".$_GET["search"]."%') "; 
  }else{
	$sqlTotal = "SELECT * FROM users"; 
	$sql = "SELECT * FROM users"; 
  }

  $result = $mysqli->query($sql);

  while($row = $result->fetch_assoc()){
     $json[] = $row;
  }
  $data['data'] = $json;

$result =  mysqli_query($mysqli,$sqlTotal);
$data['total'] = mysqli_num_rows($result);

echo json_encode($data);

?>