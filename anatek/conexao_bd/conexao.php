<?php
# Dados para conexão com banco de dados 

$servidor ='localhost';# Nome do Ip ou DNS do servidor
$usuario ='root';# Usuario do banco de dados
$senha ='      ';# Senha do banco de dados
$banco ="anatek";# Nome do banco de dados

# Executa a conexão com o MYSQL
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die('Não foi possivel conectar com o banco de dados'.mysqli_errno($conexao));

?>