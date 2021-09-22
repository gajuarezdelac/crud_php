<?php
include("db.php");

$nombre = '';
$telefono = '';
$direccion = '';
$email = '';
$calif = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM proveedor WHERE id=$id";

  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

    $nombre = $row['nombre'];
    $telefono = $row['telefono'];
    $direccion = $row['direccion'];
    $email = $row['email'];
    $calif = $row['calif'];

  }
}

if (isset($_POST['update'])) {
  
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $email= $_POST['email'];
  $calif = $_POST['calif'];

  $query = "UPDATE proveedor set nombre = '$nombre', telefono = '$telefono', direccion = '$direccion', email = '$email', calif = '$calif' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');

}
?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

      <form action="edit_proveedor.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
      <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre completo">
        </div>

        <div class="form-group">
          <input name="telefono" type="text" class="form-control" value="<?php echo $telefono; ?>" placeholder="Telefono">
        </div>
   

        <div class="form-group">
          <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Dirección">
        </div>

        <div class="form-group">
          <input name="email" type="text" class="form-control" value="<?php echo $email; ?>" placeholder="Email">
        </div>
   
        <div class="form-group">
          <input name="calif" type="number" class="form-control" value="<?php echo $calif; ?>" placeholder="Calificación">
        </div>
   

        <button class="btn-success" name="update">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>
