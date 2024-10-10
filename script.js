// Mensagem ao enviar o formulário de contato
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Sua mensagem foi enviada com sucesso! Entraremos em contato em breve.');
});

// Botão de WhatsApp - Efeito de animação simples ao passar o mouse
const whatsappButton = document.querySelector('.whatsapp-float');

whatsappButton.addEventListener('mouseover', function() {
    whatsappButton.style.transform = 'scale(1.1)';
});

whatsappButton.addEventListener('mouseout', function() {
    whatsappButton.style.transform = 'scale(1)';
});
