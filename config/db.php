<?php
// Arquivo de configuração do banco de dados
$host = 'localhost';       // Host do banco de dados
$dbname = 'henriq_tatto';  // Nome do banco de dados
$username = 'root';        // Usuário do banco de dados
$password = '';            // Senha do banco de dados

try {
    // Estabelecendo a conexão com o MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
