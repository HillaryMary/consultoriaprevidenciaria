// Script simples para tratar o formulário de contato
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name && email && message) {
        alert(`Obrigado, ${name}! Sua mensagem foi enviada com sucesso.`);
    } else {
        alert('Por favor, preencha todos os campos.');
    }

    // Limpa o formulário
    document.getElementById('contactForm').reset();
});
