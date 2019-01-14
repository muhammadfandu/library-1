<?php
require '../db_config.php';

  $date = date("Y-m-d H:i:s", strtotime("+7 days"));
  $post = file_get_contents('php://input');
  $post = json_decode($post);
  $sql = "INSERT INTO borrows (user_id,book_id, return_time) 
	VALUES ('".$post->user."','".$post->book."','".$date."')";

  $result = $mysqli->query($sql);

  $sql = "UPDATE books SET stock = stock-1,borrowed = borrowed+1 WHERE id = '".$post->book."'";
  $mysqli->query($sql);

  $sql = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id Order by id desc LIMIT 1"; 
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();

echo json_encode($data);
?>