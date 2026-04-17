<?php 
// Form işlemleri
$msg = "";
$msgClass = "";

// Form post edildiyse
if(isset($_POST['submit'])){
    // Güvenlik filtrelemeleri
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags(trim($_POST['subject'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Boş alan kontrolu
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
        // Email geçerli mi?
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            
            // Mail Ayarları
            $toEmail = 'sarkoy@gmail.com'; // Kendi mailinizi buraya yazın
            $mailSubject = 'LeventStore İletişim: ' . $subject;
            $body = "<h2>Web Sitesi Üzerinden Yeni Bir Mesaj Aldınız</h2>
                     <h4>İsim:</h4><p>{$name}</p>
                     <h4>Email:</h4><p>{$email}</p>
                     <h4>Konu:</h4><p>{$subject}</p>
                     <h4>Mesaj:</h4><p>{$message}</p>
                     <br><hr><small>Bu mesaj leventgul.store üzerinden otomatik iletilmiştir.</small>";
            
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            // Maili gönder
            if(mail($toEmail, $mailSubject, $body, $headers)){
                $msg = 'Harika! Mesajınız bana ulaştı. En kısa sürede dönüş yapacağım.';
                $msgClass = 'alert-success';
            } else {
                $msg = 'Sunucu ayarlarından dolayı mail gönderilemedi. Lütfen bana X üzerinden (DM) ulaşın.';
                $msgClass = 'alert-error';
            }
        } else {
            $msg = 'Geçerli bir e-posta adresi girdiğinizden emin olun.';
            $msgClass = 'alert-error';
        }
    } else {
        $msg = 'Lütfen tüm alanları doldurun.';
        $msgClass = 'alert-error';
    }
}
?>
<?php include 'header.php'; ?>

<section class="hero delay-100" style="padding-bottom: 20px;">
    <div class="hero-badge" style="border-color:var(--cyan); color:var(--cyan); box-shadow: 0 0 15px var(--cyan-glow);">📡 İletişim Protokolü Aktif</div>
    <h1 class="hero-title" style="font-size: 4rem;">Siber Operasyonlarınızı <br><span class="text-cyan">Birlikte İnşa Edelim</span></h1>
    <p class="hero-subtitle" style="max-width: 800px; margin: 0 auto;">Şirketinizi manuel işlemlerden kurtaracak AI ürün fikirleriniz, eğitim talepleriniz veya entegrasyon çözümleri için aşağıdaki formu doldurun. Yapay zeka ajanlarımız talebinizi anında analiz edip dönüş yapacaktır.</p>
</section>

<section class="delay-200">
    <div class="glass-grid" style="align-items: flex-start; max-width:800px; margin: 0 auto;">
        <div class="glass-card">
            <?php if($msg != ""): ?>
                <div class="alert <?php echo $msgClass; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label class="form-label">Adınız Soyadınız</label>
                    <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">E-posta Adresiniz</label>
                    <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Konu</label>
                    <input type="text" name="subject" class="form-control" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Mesajınız</label>
                    <textarea name="message" class="form-control" required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
                
                <button type="submit" name="submit" class="btn btn-glow" style="width: 100%; border-radius: 12px; justify-content:center;">Mesajı Gönder</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
