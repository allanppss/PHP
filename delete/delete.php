<?php

// Inclui o script de conexão.
include  "../conexao.php";

// Query responsável por deletar o registro.
$query = "DELETE FROM tabela WHERE id='1'";

$sql = mysql_query($query);

// Retorna 1 (true) ou 0 (false), se o registro for deletado $sql retorna '1'.
echo 'sucesso=' . $sql;

?>