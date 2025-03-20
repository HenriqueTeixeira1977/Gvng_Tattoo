<?php
// Incluindo o arquivo de conexão com o banco de dados
include('../config/db.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Validação simples dos campos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        // Inserir os dados no banco de dados
        try {
            $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mensagem', $mensagem);
            $stmt->execute();
            echo "Mensagem enviada com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao salvar a mensagem: " . $e->getMessage();
        }
    }
}
?>
