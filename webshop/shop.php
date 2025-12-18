<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.css" rel="stylesheet" />

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.5/flowbite.min.js"></script>

    <link rel="stylesheet" href="shop.css">

    <title>Karácsonyi Üdvözlet</title>
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
                <li><a href="#home">Főoldal</a></li>
                <li><a href="#about">Rólunk</a></li>
                <li><a href="../../galeria/gal.php">Galéria</a></li>
                <li><a href="../contact us/contactus.php">Kapcsolat</a></li>
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

    <main>
        <section class="productgrid">
            <article class="productcard">
                <span class="badge">🎄 Christmas</span>

                <div class="img-wrap">
                    <img src="https://picsum.photos/500/400" alt="Product">
                </div>

                <div class="content">
                    <h2 class="productname">Golden Candle</h2>

                    <div class="rating">
                        ⭐⭐⭐⭐☆ <span>(4.2)</span>
                    </div>

                    <p class="description">
                        Premium handmade karácsonyi gyertya, meleg fahéj és narancs illattal.
                    </p>
                </div>

                <div class="footer">
                    <span class="price">
                        <span class="amount">45</span>
                        <span class="currency">$</span>
                    </span>
                    <button class="buy-btn">Kosárba</button>
                </div>
            </article>
            <div class="productcard"></div>
            <div class="productcard"></div>
            <div class="productcard"></div>
        </section>
    </main>

    <div
        class="relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1 news">
        <div aria-hidden="true"
            class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
            <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"
                class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"></div>
        </div>
        <div aria-hidden="true"
            class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
            <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"
                class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-30"></div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
            <p class="text-sm/6 text-gray-900">
                <strong class="font-semibold">GeneriCon 2023</strong><svg viewBox="0 0 2 2" aria-hidden="true"
                    class="mx-2 inline size-0.5 fill-current">
                    <circle r="1" cx="1" cy="1" />
                </svg>Join us in Denver from June 7 – 9 to see what’s coming next.
            </p>
            <a href="#"
                class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register
                now <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" class="-m-3 p-3 focus-visible:-outline-offset-4">
                <span class="sr-only">Dismiss</span>
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                    class="size-5 text-gray-900">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </button>
        </div>
    </div>


    <footer>
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-section footer-about">
                    <h3>🎄 Karácsony 2024</h3>
                    <p>Ünnepeljük együtt a szeretet és a béke ünnepét. Küldetésünk, hogy felejthetetlen karácsonyi
                        élményt nyújtsunk minden látogatónknak.</p>
                    <div class="social-links">
                        <a href="#" title="Facebook">📘</a>
                        <a href="#" title="Instagram">📷</a>
                        <a href="#" title="Twitter">🐦</a>
                        <a href="#" title="YouTube">📺</a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Fő</h3>
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