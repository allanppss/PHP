<?php

// Inclui o script de conex�o.
include  "../conexao.php";

// Query respons�vel por inserir novos registros na tabela.
$query = "INSERT INTO tabela (nome, idade, sexo) VALUES ('Allan', '28', 'Masculino')";

// Atrav�s da fun��o mysql_query(), a query � executada.
$sql = mysql_query($query);

// Retorna 1 (true) ou 0 (false), se o registro for inserido $sql retorna '1'.
echo 'sucesso=' . $sql;

?>
