<?php
require '../db_config.php';

  $id  = $_GET["id"];
  $sql = "SELECT borrows.id, borrows.user_id, borrows.book_id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id WHERE borrows.id = '".$id."'"; 
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();

echo json_encode($data);

?>