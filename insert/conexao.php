<?php
$servidor = "localhost";//Geralmente � localhost mesmo
$nome_usuario = "usuarioBD";//Nome do usu�rio do mysql
$senha_usuario = "senhaBD"; //Senha do usu�rio do mysql
$nome_do_banco = "nomeBD"; //Nome do banco de dados

$conecta = mysql_connect("$servidor", "$nome_usuario", "$senha_usuario") or die (mysql_error());
mysql_select_db("$nome_do_banco",$conecta) or die (mysql_error());
?>
