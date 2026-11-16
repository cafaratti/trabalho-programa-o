<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro turistas</title>
    <style>
        table{
            width:65%;
        }
        th,td{
            border:1px solid #ed11a3;
            padding:10px;
            text-aling: left;
        }
        th{
            background-color:#ed11a3;
            color:white;
        }
        tr:nth-child(even){
            background-color:#eeeeee;
        }
        </style>
</head>
<body>
  <?php
    require "conecta.php";
  ?>
<table>
<thead>
<tr>
<th> ID </th>
<th> Nome </th>
<th> Destino </th>
<th> Descrição </th>
<th> Duração </th>
<th> Valor </th>
<th colspan='2'> Operação </th>
</tr>
</thead>
<tbody>
  <?php
  $sql="SELECT id,nome,destino,descricao,duracao,valor FROM clientes";
  $resultado=mysqli_query($conexao,$sql);
  //var_dump($resultado);
  while($linha=mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>" . $linha['id'] . "</td>";
    echo "<td>" . $linha['nome'] . "</td>"; 
    echo "<td>" . $linha['destino'] . "</td>"; 
    echo "<td>" . $linha['descricao'] . "</td>"; 
    echo "<td>" . $linha['duracao'] . "</td>"; 
    echo "<td>" . $linha['valor'] . "</td>"; 
    echo '<td><a href="excluir.php?id='. $linha['id'] . '">Excluir</a></td>';
    echo '<td><a href="formalt.php?id='. $linha['id'] . '">Alterar</a></td>';
    echo "</tr>";
      }
      ?>
      </tbody>
</table>
<a href="insere.html"> Adicionar turista</a>
</body>
</html>