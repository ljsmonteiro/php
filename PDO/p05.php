<?php 

	$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0","sa", "sa");

	$stmt = $conn->prepare("
UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

	$login = "Lucio";
	$password = "police";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alteração OK!";

	

 ?>