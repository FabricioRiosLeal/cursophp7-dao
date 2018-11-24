<?php

require_once("config.php");

//Carrega um usuário
//$root = new usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getlist();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega usuario usando login e a senha
$usuario = new Usuario();
$usuario->login("root", "&%$");

echo $usuario;

?>