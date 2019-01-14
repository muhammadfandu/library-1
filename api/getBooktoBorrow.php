<?php
require '../db_config.php';

  if (!empty($_GET["search"])){
	$sqlTotal = "SELECT * FROM books 
		WHERE (title LIKE '%".$_GET["search"]."%' 
		OR description LIKE '%".$_GET["search"]."%')"; 
	$sql = "SELECT * FROM books 
		WHERE (title LIKE '%".$_GET["search"]."%' 
		OR description LIKE '%".$_GET["search"]."%')"; 
  }else{
	$sqlTotal = "SELECT * FROM books"; 
	$sql = "SELECT * FROM books"; 
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