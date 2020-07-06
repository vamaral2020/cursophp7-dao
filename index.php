<?php

require_once("config.php");


//carrega um usuario
//$root = new Usuario();
//$root->loadByid(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma busca de usuarios usando o like
// $search= Usuario::search("w");
// echo json_encode($search);



//carrega um usuario usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "123456");
// echo $usuario;

//inseri um novo usuario no banco de dados
// $aluno = new Usuario("aluno", "lun0");
// $aluno->insert();
// echo $aluno;

// Alterar um usuario
// $usuario = new Usuario();
// $usuario->loadByid(9);
// $usuario->update("professor", "!@#$%");
// echo $usuario;


$usuario = new Usuario();
$usuario->loadByid(9);
$usuario->delete();

echo $usuario;


?>