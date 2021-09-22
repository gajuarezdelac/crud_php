<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    
  <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
    
      <div class="card card-body">
        <form action="add_proveedor.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del proveedor" required autofocus>
          </div>

          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="Telefono del proveedor" required autofocus>
          </div>
        
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" placeholder="Dirección del proveedor" required autofocus>
          </div>
        

          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
          </div>

          
          <div class="form-group">
            <input type="number" name="calif" class="form-control" placeholder="Califación" required autofocus>
          </div>
        
      
          <input type="submit" name="save_proveedor" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Calif</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proveedor";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['calif']; ?></td>
            <td>
              <a href="edit_proveedor.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_proveedor.php?id=<?php echo $row['id']?>" class="btn btn-danger">
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
