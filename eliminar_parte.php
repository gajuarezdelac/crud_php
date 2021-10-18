<?php

include("db.php");

if(isset($_GET['id'])) {
  
  $id = $_GET['id'];
  $query = "DELETE FROM parte WHERE id = $id";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message_p'] = 'Task Removed Successfully';
  $_SESSION['message_type_p'] = 'danger';
  header('Location: partes.php');
}

?>
