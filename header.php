<?php
// Geçerli sayfanın adını al
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levent Gül - AI Otomasyon Mimarı</title>
    <!-- Google Fonts: Inter & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800;900&family=JetBrains+Mono:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chatbot.css">
</head>
<body>
    <!-- AI Background Canvas -->
    <canvas id="networkCanvas"></canvas>

    <!-- Global Header -->
    <header class="app-header">
        <div class="header-container">
            <a href="index.php" class="brand">
                <div class="brand-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 22 8.5 22 15.5 12 22 2 15.5 2 8.5 12 2"></polygon><line x1="12" y1="22" x2="12" y2="12"></line><line x1="22" y1="8.5" x2="12" y2="12"></line><line x1="2" y1="8.5" x2="12" y2="12"></line></svg>
                </div>
                <div class="brand-text">
                    <span class="brand-name">Levent Gül</span>
                    <span class="brand-title">Ai architect</span>
                </div>
            </a>
            
            <nav class="main-nav">
                <a href="index.php" class="nav-link <?php echo $current_page == 'index.php' || $current_page == '' ? 'active' : ''; ?>">Ana Sayfa</a>
                <a href="otomasyon.php" class="nav-link <?php echo $current_page == 'otomasyon.php' ? 'active' : ''; ?>">Otomasyon</a>
                <a href="egitim.php" class="nav-link <?php echo $current_page == 'egitim.php' ? 'active' : ''; ?>">Eğitim</a>
                <a href="uygulamalar.php" class="nav-link <?php echo $current_page == 'uygulamalar.php' ? 'active' : ''; ?>">Uygulamalar</a>
            </nav>

            <div class="header-actions">
                <a href="iletisim.php" class="btn btn-primary btn-glow">Bana Ulaşın</a>
            </div>
        </div>
    </header>

    <main class="page-content animate-fade-in">
