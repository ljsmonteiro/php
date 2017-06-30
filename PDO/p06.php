<?php 

	$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0","sa", "sa");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = :ID");

	$id = 2;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Deletado OK!";

	

 ?>