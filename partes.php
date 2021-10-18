<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    
  <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message_p'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type_p']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message_p']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
    
      <div class="card card-body">
        <form action="add_parte.php" method="POST">
          <div class="form-group">
            <input type="text" name="pkparte" class="form-control" placeholder="Clave" required autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre de la refacción" required autofocus>
          </div>
        
          <div class="form-group">
            <input type="text" name="tipoparte" class="form-control" placeholder="Tipo de parte" required autofocus>
          </div>
        

          <div class="form-group">
            <input type="text" name="color" class="form-control" placeholder="Color" required autofocus>
          </div>

          <div class="form-group">
            <input type="number" name="existencia" class="form-control" placeholder="Existencia" required autofocus>
          </div>

          <input type="submit" name="save_parte" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Tipo de parte</th>
            <th>Color</th>
            <th>Existencia</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM parte";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['pkparte']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['tipoparte']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['existencia']; ?></td>
            <td>
              <a href="edit_parte.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="eliminar_parte.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>




  </div>
</main>

<?php include('includes/footer.php'); ?>
