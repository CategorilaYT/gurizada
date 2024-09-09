<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);

    // Cabeçalhos do e-mail
    $to = $email;
    $subject = "Confirmação de Salvamento de Dados";
    $message = "Olá $nome,\n\nSeus dados foram salvos com sucesso no nosso sistema!";
    $headers = "From: no-reply@gurizadaentertainment.com";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Dados salvos com sucesso! Um e-mail de confirmação foi enviado para $email.";
    } else {
        echo "Falha ao enviar o e-mail. Por favor, tente novamente.";
    }
}
?>
