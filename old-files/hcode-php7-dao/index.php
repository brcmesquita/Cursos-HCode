<?php

require_once("config.php");

// carrega todos os itens do banco de dados
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

// carrega um item do banco, exemplo, só um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// localiza um item na tabela pelo login
// $search = Usuario::search("o");
// echo json_encode($search);

// Carrega usuário com login e senha
// $usuario = new Usuario();
// $usuario->login("root", "root123");
// echo $usuario;

// Insert com Stored Procedure
// $aluno = new Usuario("bruno", "bruno123");
// $aluno->insert();
// echo $aluno;

// Update - alterar um usuário
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("mesquita", "mesquita123");

// Delete - apagar um usuário
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;
