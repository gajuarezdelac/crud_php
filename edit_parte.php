<?php
include("db.php");

$pkparte = '';
$nombre = '';
$tipoparte = '';
$color = '';
$existencia = 0;

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM parte WHERE id=$id";

  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

    $pkparte = $row['pkparte'];
    $nombre = $row['nombre'];
    $tipoparte = $row['tipoparte'];
    $color = $row['color'];
    $existencia = $row['existencia'];

  }
}

if (isset($_POST['update_p'])) {
  
  $id = $_GET['id'];
  $pkparte = $_POST['pkparte'];
  $nombre = $_POST['nombre'];
  $tipoparte = $_POST['tipoparte'];
  $color = $_POST['color'];
  $existencia = $_POST['existencia'];

  $query = "UPDATE parte set pkparte = '$pkparte', nombre = '$nombre', tipoparte = '$tipoparte', color = '$color', existencia = '$existencia' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message_p'] = 'Task Updated Successfully';
  $_SESSION['message_type_p'] = 'warning';
  header('Location: partes.php');

}
?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

      <form action="edit_parte.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
      <div class="form-group">
          <input name="pkparte" type="text" class="form-control" value="<?php echo $pkparte; ?>" placeholder="Clave">
        </div>

        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nombre">
        </div>

        <div class="form-group">
          <input name="tipoparte" type="text" class="form-control" value="<?php echo $tipoparte; ?>" placeholder="Tipo de parte">
        </div>

        <div class="form-group">
          <input name="color" type="text" class="form-control" value="<?php echo $color; ?>" placeholder="Color">
        </div>
   
        <div class="form-group">
          <input name="existencia" type="number" class="form-control" value="<?php echo $existencia; ?>" placeholder="Existencia">
        </div>
   

        <button class="btn-success" name="update_p">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>
