<?php 

	$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0","sa", "sa");

	$stmt = $conn->prepare("
insert into tb_usuarios (deslogin, dessenha) values(:LOGIN, :PASSWORD);");

	$login = "jose";
	$password = "123456789";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido OK!";

	

 ?>