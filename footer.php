    </main>

    <footer class="app-footer">
        <div class="footer-container">
            <div class="footer-brand">
                <div class="brand-icon">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon></svg>
                </div>
                <span class="brand-name">Levent Gül</span>
            </div>
            
            <div class="footer-links">
                <a href="https://x.com/LeventGul75" target="_blank" class="social-link">
                    <!-- X (Twitter) Icon -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
            </div>
            
            <div class="footer-copyright">
                &copy; <?php echo date('Y'); ?> leventgul.store | Tüm Akıllı Sistem Hakları Saklıdır.
            </div>
        </div>
    </footer>

    <!-- AI Chatbot Widget -->
    <div class="ai-chatbot-widget">
        <div id="chatbotWindow" class="chatbot-window">
            <div class="chatbot-header">
                <h4><span></span> Star AI</h4>
                <button id="chatCloseBtn" class="close-btn">&times;</button>
            </div>
            <div id="chatBody" class="chatbot-body">
                <div class="chat-bubble bot-bubble">LGAI Siber Fabrikasına hoş geldiniz. Ben Levent Gül'ün dijital asistanı Star AI. Size nasıl yardımcı olabilirim?</div>
            </div>
            <div class="chatbot-footer">
                <input type="text" id="chatInput" class="chat-input" placeholder="Bir mesaj yazın...">
                <button id="chatSendBtn" class="send-btn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                </button>
            </div>
        </div>
        
        <button id="chatbotBtn" class="chatbot-btn">
            <!-- Sparkles/Bot icon -->
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        </button>
    </div>

    <!-- Animasyon ve Chatbot Javasript Motoru -->
    <script src="js/app.js"></script>
    <script src="js/chatbot.js"></script>
</body>
</html>
