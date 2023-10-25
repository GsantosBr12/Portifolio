<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $mensagem = $_POST["message"];
    
    $para = "12201987@aluno.cotemig.com.br"; // Substitua com o seu endereço de e-mail
    $assunto = "Nova mensagem de $nome";
    $headers = "De: $email";
    
    mail($para, $assunto, $mensagem, $headers);
    
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
