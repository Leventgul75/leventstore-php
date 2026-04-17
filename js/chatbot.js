document.addEventListener("DOMContentLoaded", function() {
    const chatBtn = document.getElementById('chatbotBtn');
    const chatWindow = document.getElementById('chatbotWindow');
    const closeBtn = document.getElementById('chatCloseBtn');
    const sendBtn = document.getElementById('chatSendBtn');
    const chatInput = document.getElementById('chatInput');
    const chatBody = document.getElementById('chatBody');

    // Toggle Window status
    chatBtn.addEventListener('click', () => {
        chatWindow.classList.toggle('active');
        if(chatWindow.classList.contains('active')) {
            setTimeout(() => {
                chatInput.focus();
            }, 300);
        }
    });

    closeBtn.addEventListener('click', () => {
        chatWindow.classList.remove('active');
    });

    function scrollBottom() {
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    // Send function
    function sendMessage() {
        const text = chatInput.value.trim();
        if(text === '') return;

        // User bubble
        const userDiv = document.createElement('div');
        userDiv.className = 'chat-bubble user-bubble animate-fade-in';
        userDiv.textContent = text;
        chatBody.appendChild(userDiv);
        chatInput.value = '';
        scrollBottom();

        // Simulate thinking and Bot reply
        setTimeout(() => {
            const botDiv = document.createElement('div');
            botDiv.className = 'chat-bubble bot-bubble animate-fade-in';
            botDiv.innerHTML = "Merhaba! Ben <strong>Star AI</strong>, Levent Gül'ün dijital asistanıyım. Otonom yapımın çekirdek algoritması henüz sunucuya (backend) bağlanıyor. İsterseniz <a href='iletisim.php' style='color:#00f0ff;'>İletişim</a> sayfasından tüm düşüncelerinizi bize anında iletebilirsiniz.";
            chatBody.appendChild(botDiv);
            scrollBottom();
        }, 1200);
    }

    sendBtn.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if(e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
        }
    });
});
