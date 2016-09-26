<?php

// Inclui o script de conexão.
require_once('conexao.php');


// Query responsável por inserir novos dados no db.
$query = "INSERT INTO tabela (nome, idade, sexo) VALUES ('Allan', '28', 'Masculino')";
// Através da função mysql_query(), a query é executada.
$sql = mysql_query($query);

// Retorna 1 (true) ou 0 (false), se o registro for inserido $sql retorna '1'.
echo 'sucesso=' . $sql;

?>
