<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Lucio Monteiro");
	$cad->setEmail("lucio.suruagy@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

 ?>