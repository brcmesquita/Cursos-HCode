<?php

$conn = new mysqli("127.0.0.1", "root", "mysecretpass", "dbphp7");
// ou $conn = new mysqli("localhost", "root", "mysecretpass", "dbphp7");

if ($conn->connect_error) {
  echo "Error: " . $conn->connect_error;
}

// Comando de Insert no banco
// $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values (?, ?)");
// $stmt->bind_param("ss", $login, $pass);
// $login = "user";
// $pass = "123456";
// $stmt->execute();

// Comando de Select no banco e transformando em json
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {
  array_push($data, $row);
  //var_dump($row);
}

echo json_encode($data);
