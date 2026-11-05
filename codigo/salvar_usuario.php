<?php
require_once "conexao.php";

$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$nome_arquivo = $_FILES['foto']['name'];
$caminho_temporario = $_FILES['foto']['tmp_name'];

$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

$novo_nome = uniqid() . "." . $extensao;

$caminho_destino = "fotos_user/" . $novo_nome;

move_uploaded_file($caminho_temporario, $caminho_destino);

$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES (?, ?, ?, ?, ?)";

$code = mysqli_prepare($conexao, $sql);
    
mysqli_stmt_bind_param($code, "sssss", $username, $nome, $email, $senha, $foto);
mysqli_stmt_execute($code);

$resultado = mysqli_stmt_get_result($code);

header("Location: index.php");
?>