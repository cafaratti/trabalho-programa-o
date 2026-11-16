<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "conecta.php";
    $cpf=$_GET['CPF'];
    $nome=$_GET['nome'];
    $destino=$_GET['destino'];
    $descricao=$_GET['descricao'];
    $duracao=$_GET['duracao'];
    $valor=$_GET['valor'];
    $sql="INSERT INTO clientes(nome,destino,descricao,duracao,valor) VALUES('$nome','$destino','$descricao','$duracao','$valor')";
    $resultado=mysqli_query($conexao,$sql);
    if($resultado){
        header("Location:index.php");
    }
    ?>
</body>
</html>