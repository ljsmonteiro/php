<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0"';
$user = 'sa';
$password = 'sa';




try {
    $dbh = new PDO($dsn, $user, $password);
     
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>