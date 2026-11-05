<?php
    session_start();
    
    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $texto = $_POST['texto'];

    $sql = "INSERT INTO postagem (texto, idusuario) VALUES (?, ?)";
    $codiguin = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($codiguin, "ss", $texto, $idusuario);
    mysqli_stmt_execute($codiguin);


    header("Location: principal.php");
?>
