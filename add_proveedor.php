<?php

include('db.php');

if (isset($_POST['save_proveedor'])) {

  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $email = $_POST['email'];
  $calif = $_POST['calif'];

  $query = "INSERT INTO proveedor(nombre, telefono, direccion, email, calif) VALUES ('$nombre', '$telefono','$direccion','$email','$calif')";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
