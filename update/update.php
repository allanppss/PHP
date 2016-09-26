<?php

// Inclui o script de conexão.
include  "../conexao.php";

// Query responsável por atualizar o registro.
$query = "UPDATE tabela SET nome='Allan2' WHERE id='1'";

// Através da função mysql_query() a query é executada.
$sql = mysql_query($query);

// Retorna 1 (true) ou 0 (false), se o registro for atualizado $sql retorna '1'.
echo 'sucesso=' . $sql;

?>