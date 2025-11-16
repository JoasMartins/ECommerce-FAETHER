<?php include("../config-database.php"); ?>

<?php 

$id = $_POST['id'];

$sql = "DELETE FROM `carrinho` WHERE id = '$id'";
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);