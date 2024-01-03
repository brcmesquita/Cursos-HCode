<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "mysecretpass");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollback();

$conn->commit();

echo "Delete OK!";
