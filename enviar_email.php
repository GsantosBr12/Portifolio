<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // Destinatário
    $destinatario = "12201986@aluno.cotemig.com.br"; // Substitua pelo seu endereço de e-mail

    // Assunto
    $assunto = "Nova mensagem de $nome";

    // Cabeçalhos
    $headers = "De: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envie o e-mail
    mail($destinatario, $assunto, $mensagem, $headers);
    
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
