<?php
    session_start();
    
    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO postagem (texto, idusuario) VALUES ('$texto', $idusuario)";

    mysqli_query($conexao, $sql);

    header("Location: principal.php");
?>
