<?php
require '../db_config.php';

$num_rec_per_page = 5;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;

  if (!empty($_GET["search"])){
	$sqlTotal = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id
		WHERE (name LIKE '%".$_GET["search"]."%' 
		OR title LIKE '%".$_GET["search"]."%')"; 
	$sql = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id 
		WHERE (name LIKE '%".$_GET["search"]."%' 
		OR title LIKE '%".$_GET["search"]."%') 
		LIMIT $start_from, $num_rec_per_page"; 
  }else{
	$sqlTotal = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id where borrows.returned_time is null"; 
	$sql = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id where borrows.returned_time is null LIMIT $start_from, $num_rec_per_page"; 
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