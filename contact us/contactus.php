<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolat - Karácsony 2024</title>
    <link rel="icon" type="image/x-icon" href="/src/tree.png">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                <span>🎄</span>
                <span>Karácsony 2024</span>
            </div>
            <ul class="nav-links">
                <li><a href="../home/main.php">Főoldal</a></li>
                <li><a href="../home/main.php#about">Rólunk</a></li>
                <li><a href=" ../../galeria/gal.php">Galéria</a></li>
                <li><a href="#contact">Kapcsolat</a></li>
                <li><a id="login" href=" ../../galeria/gal.php">Bejelentkezés</a></li>
                <li><a id="signup" href="#contact">Regisztráció</a></li>
                <li><a href="#shop" class="nav-cta">Ajándékbolt</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <h1>Lépj Kapcsolatba Velünk</h1>
        <p>Van kérdésed vagy üzeneted számunkra? Töltsd ki az alábbi űrlapot és hamarosan jelentkezünk!</p>
    </section>

    <!-- Contact Container -->
    <div class="contact-container">
        <!-- Contact Form -->
        <div class="contact-form-wrapper">
            <h2>Küldj Üzenetet</h2>
            <div class="form-group">
                <label for="name">Név *</label>
                <input type="text" id="name" placeholder="Kovács János" required>
            </div>

            <div class="form-group">
                <label for="email">Email cím *</label>
                <input type="email" id="email" placeholder="pelda@email.com" required>
            </div>

            <div class="form-group">
                <label for="message">Üzenet *</label>
                <textarea id="message" placeholder="Írd le, miben segíthetünk..." required></textarea>
            </div>

            <button type="submit" class="submit-btn">Üzenet Küldése</button>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-section footer-about">
                    <h3>🎄 Karácsony 2024</h3>
                    <p>Ünnepeljük együtt a szeretet és a béke ünnepét. Küldetésünk, hogy felejthetetlen karácsonyi élményt nyújtsunk minden látogatónknak.</p>
                    <div class="social-links">
                        <a href="#" title="Facebook">📘</a>
                        <a href="#" title="Instagram">📷</a>
                        <a href="#" title="Twitter">🐦</a>
                        <a href="#" title="YouTube">📺</a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Felfedezés</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Főoldal</a></li>
                        <li><a href="#about">Rólunk</a></li>
                        <li><a href="#services">Szolgáltatások</a></li>
                        <li><a href="#gallery">Galéria</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#events">Események</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Segítség</h3>
                    <ul class="footer-links">
                        <li><a href="#faq">Gyakori Kérdések</a></li>
                        <li><a href="#support">Ügyfélszolgálat</a></li>
                        <li><a href="#shipping">Szállítási Információk</a></li>
                        <li><a href="#returns">Visszaküldés</a></li>
                        <li><a href="#contact">Kapcsolat</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Jogi</h3>
                    <ul class="footer-links">
                        <li><a href="#privacy">Adatvédelmi Szabályzat</a></li>
                        <li><a href="#terms">Felhasználási Feltételek</a></li>
                        <li><a href="#cookies">Cookie Szabályzat</a></li>
                        <li><a href="#disclaimer">Jogi Nyilatkozat</a></li>
                        <li><a href="#accessibility">Akadálymentesítés</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2024 Karácsony. Minden jog fenntartva. Készítve ❤️-tel</p>
                <ul class="footer-bottom-links">
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms & Conditions</a></li>
                    <li><a href="#sitemap">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>