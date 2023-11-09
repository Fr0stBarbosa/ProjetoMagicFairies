<?php
$host = 'localhost';
$usuario = 'seu_usuario';
$senha = 'sua_senha';
$banco = 'seu_banco';

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
