<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "conecta.php";
$id=$_GET['id'];
$sql="SELECT * FROM clientes WHERE id=$id";
$resultado=mysqli_query($conexao,$sql);
$linha=mysqli_fetch_array($resultado);
mysqli_close($conexao);    
?>
<form action="altera.php" method="post">
<input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
<p> Nome
<input type="text" name="nome" value="<?php echo $linha['nome']; ?>"></p>
<p> Destino
<input type="text" name="destino" value="<?php echo $linha['destino']; ?>"></p>
<p> Descrição
<input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"></p>
<p> Duração
<input type="text" name="duracao" value="<?php echo $linha['duracao']; ?>"></p>
<p> Valor
<input type="text" name="valor" value="<?php echo $linha['valor']; ?>"></p>
<input type="submit" value="Confirma alteração">
</form>
<br><a href="index.php"> Listar turistas</a>
</body>
</html>