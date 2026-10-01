<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de postagem</h2>

    <table border="1">
        <tr>
            <td>ID Postagem</td>
            <td>Texto</td>
            <td>Data e Hora</td>
            <td>ID Usuário</td>
        </tr>
        <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM postagem";

            $postagens = mysqli_query($conexao, $sql);

            while ($postagem = mysqli_fetch_array($postagens)) {
                $idpostagem = $postagem['idpostagem'];
                $texto = $postagem['texto'];
                $data_hora = $postagem['data_hora'];
                $idusuario = $postagem['idusuario'];

                echo "<tr>";
                echo "<td>$idpostagem</td>";
                echo "<td>$texto</td>";
                echo "<td>$data_hora</td>";
                echo "<td>$idusuario</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>