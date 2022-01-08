<?php

require_once("config.php");

$sql = new sql();

$usuarios = $sql->select("select * from tb_usuario");


echo json_decode($usuario);
?>