<?php
require '../db_config.php';

  $id  = $_GET["id"];
  $post = file_get_contents('php://input');
  $post = json_decode($post);
  $sql = "UPDATE borrows SET
    returned_time = '".$post->returned_time."'
  	WHERE id = '".$id."'";
  $result = $mysqli->query($sql);

  $sql = "UPDATE books SET stock = stock+1, borrowed = borrowed-1 WHERE id = '".$post->book_id."'";
  $mysqli->query($sql);

  $sql = "SELECT borrows.id, users.name, books.title, borrows.borrow_time, borrows.return_time, borrows.returned_time FROM borrows left join books on borrows.book_id = books.id left join users on borrows.user_id = users.id WHERE borrows.id = '".$id."'"; 
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();

echo json_encode($data);
?>