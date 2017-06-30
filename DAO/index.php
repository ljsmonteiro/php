<?php 

	require_once("config.php");

// Modo antigo

	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);


//CArrega um usuário
//	$root = new Usuario();
//	$root->loadbyId(3);
//	echo $root;

//Carrega uma lista de usuários
//	$lista = Usuario::getList();
//	echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);

	//carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("root", "123455");

	//echo $usuario;

// Criando um novo usua´rio
//	$aluno = new Usuario("maria", "ruasuja");

//	$aluno->insert();

//	echo $aluno;

//Alterar usuario
//$usuario = new Usuario();
//$usuario->loadbyId(3);

//$usuario->update("professor", "@#$%");

//echo $usuario;

//Deletar usuario

$usuario = new Usuario();
$usuario->loadbyId(6);

$usuario->delete();

echo $usuario;

 ?>