<?php
// Exibe os dados do formulário recebidos via POST ou GET
$nome = $_REQUEST['nome'] ?? 'Não informado';
$telefone = $_REQUEST['telefone'] ?? 'Não informado';
$email = $_REQUEST['email'] ?? 'Não informado';
$mensagem = $_REQUEST['mensagem'] ?? 'Não informado';

// Exibe os dados do formulário
echo "<h1>Dados Enviados:</h1>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Telefone:</strong> $telefone</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Mensagem:</strong> $mensagem</p>";

// Exibe os cabeçalhos da requisição HTTP
echo "<h2>Cabeçalhos da Requisição HTTP:</h2>";
$headers = apache_request_headers();
foreach ($headers as $key => $value) {
    echo "<p><strong>$key:</strong> $value</p>";
}

// Exibe o método da requisição
echo "<h2>Método da Requisição:</h2>";
echo "<p><strong>Método:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
?>
