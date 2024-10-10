<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST["mensagem"]);

    // Verifica se os campos não estão vazios
    if (empty($nome) || empty($email) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Retorna erro se os campos estiverem vazios ou o e-mail for inválido
        http_response_code(400);
        echo "Por favor, preencha todos os campos corretamente.";
        exit;
    }

    // Define para onde o e-mail será enviado
    $recipient = "hillarymaryviana@hotmail.com";
    $subject = "Nova mensagem de $nome";

    // Monta o corpo do e-mail
    $email_content = "Nome: $nome\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $email_headers = "From: $nome <$email>";

    // Envia o e-mail
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // E-mail enviado com sucesso
        http_response_code(200);
        echo "Obrigado! Sua mensagem foi enviada com sucesso.";
    } else {
        // Falha ao enviar o e-mail
        http_response_code(500);
        echo "Oops! Algo deu errado, não conseguimos enviar sua mensagem.";
    }
} else {
    // Se o formulário for acessado de outra forma que não seja POST
    http_response_code(403);
    echo "Método de envio inválido.";
}
?>
