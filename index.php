<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$");

//echo $usuario;
/*
//criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

/*

//Alterar um usuario
$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->update("professor","!@#$''&*");

echo $usuario;
*/
$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;

 ?>