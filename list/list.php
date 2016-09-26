<?php

// Inclui o script de conexão.
include  "../conexao.php";

// Query responsável por listar registros da tabela.
$query = mysql_query("SELECT * FROM tabela ORDER BY id DESC");

while($n = mysql_fetch_array($query)){
	echo $n['nome'] . '</br>';
	echo $n['idade'] . '</br>';
	echo $n['sexo'] . '</br>';
	echo '-----------------';
};


// Fecha a conexão com o banco de dados
mysql_close($conecta);

?>