<?php 

	$conn = new PDO("sqlsrv:server=localhost\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0","sa", "sa");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = ?");

	$id = 1;

	$stmt->execute(array($id));

//	$conn->rollback();
	$conn->commit();

	echo "Deletado OK!";

	

 ?>