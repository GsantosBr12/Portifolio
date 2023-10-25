<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
   
    $destinatario = "gustavosantoscontato.pf@gmail.com"; 

    
    $assunto = "Nova mensagem de $nome";

   
    $headers = "De: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

   

ini_set("SMTP", "gustavosantoscontato.pf@gmail.com");
ini_set("smtp_port", "587");

    
    mail($destinatario, $assunto, $mensagem, $headers);
    
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Ocorreu um erro ao processar o formulário.";
}
?>
