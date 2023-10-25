<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    // Destinatário
    $destinatario = "gustavosantoscontato.pf@gmail.com"; // Substitua pelo seu endereço de e-mail

    // Assunto
    $assunto = "Nova mensagem de $nome";

    // Cabeçalhos
    $headers = "De: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envie o e-mail

ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");

    
    mail($destinatario, $assunto, $mensagem, $headers);
    
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
