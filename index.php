<?php

require_once("config.php");

// CARREGA APENAS UM USUÁRIO
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//CARREGA UMA LISTA DE USUÁRIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA LISTA DE USUÁRIO BUSCANDO POR LOGIN
//$search = Usuario::search("o");
//echo json_encode($search);

//CARREGA UM USUÁRIO AUTENTICADO
//$usuario = new Usuario();
//$usuario->login("root","1234561");
//echo $usuario;

//CRIANDO UM NOVO USUÁRIO
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;

?>