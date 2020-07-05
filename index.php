<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROm tb_usuarios");

echo json_encode($usuarios);*/

$root = new Usuario();
$root->loadByid(3);

echo $root;

?>