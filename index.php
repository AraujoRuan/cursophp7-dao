<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyid(3);
//echo $root;

//Carrega uma lista de usuários
//$list = Usuario::getList();
//echo json_encode($list);

//Carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root" , "!@#$");

echo $usuario;

?>