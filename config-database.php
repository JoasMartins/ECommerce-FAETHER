<?php

// acessar o banco de dados
$MySQL = array(
	'servidor' => 'localhost',	
	'usuario' => 'root',		
	'senha' => '',				
	'banco' => 'produtos'
);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

// situação de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);