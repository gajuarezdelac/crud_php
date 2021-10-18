<?php

include('db.php');

if (isset($_POST['save_parte'])) {

  $pkparte = $_POST['pkparte'];
  $nombre = $_POST['nombre'];
  $tipoparte = $_POST['tipoparte'];
  $color = $_POST['color'];
  $existencia = $_POST['existencia'];

  $query = "INSERT INTO parte(pkparte, nombre, tipoparte, color, existencia) VALUES ('$pkparte', '$nombre','$tipoparte','$color','$existencia')";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message_p'] = 'Task Saved Successfully';
  $_SESSION['message_type_p'] = 'success';
  header('Location: partes.php');

}

?>
