<?php
// Kết nối CSDL
require 'connection.php';

// Kiểm tra id có tồn tại trong URL hay không?
if ( isset($_GET["id"])) {
  $id = $_GET["id"];

  $sql = "DELETE FROM clients WHERE id=$id";
  $conn->query($sql);
}

header("location: /index.php");
exit;
?>
