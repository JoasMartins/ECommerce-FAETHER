<?php include("../config-database.php"); ?>

<?php 

$sql = "DELETE FROM `carrinho`";
$resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);