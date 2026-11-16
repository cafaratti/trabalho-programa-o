<?php
include "conecta.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$destino= $_POST['destino'];
$descricao = $_POST['descricao'];
$duracao= $_POST['duracao'];
$valor = $_POST['valor'];
$CPF = $_POST['CPF'];

 $sql="UPDATE clientes SET nome='$nome', destino='$destino', descricao= '$descricao', duracao= '$duracao', valor= '$valor' WHERE id=$id";
 $resultado = mysqli_query($conexao,$sql);
 
 if($resultado){
    header("Location: index.php");
 }
 ?>