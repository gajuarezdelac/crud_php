<?php
session_start();

$conn = mysqli_connect(
  'localhost:3306',
  'GABRIEL',
  'Macropay21',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
