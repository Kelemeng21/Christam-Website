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

    <title>Karácsonyi Üdvözlet</title>
</head>

<body class="bg-[#0d2818] text-white">


    <div id="preloader" class="fixed inset-0 bg-black/70 flex flex-col items-center justify-center z-50">
        <!-- Spinning Ornament -->
        <div class="relative w-24 h-24 mb-6">
            <div class="w-24 h-24 rounded-full bg-red-600 border-4 border-yellow-400 animate-spin-slow shadow-lg flex items-center justify-center">
                <div class="w-4 h-4 bg-white rounded-full"></div>
            </div>
            <!-- Ornament Top -->
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-2 bg-yellow-400 rounded-t-full"></div>
        </div>

        <!-- Loading Text -->
        <p class="text-yellow-400 text-lg font-semibold animate-pulse">Kellemes Ünnepeket!</p>

        <!-- Falling Snow -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="snowflake text-white text-xl absolute animate-fall" style="left: 10%; animation-delay: 0s;">❄</div>
            <div class="snowflake text-white text-2xl absolute animate-fall" style="left: 30%; animation-delay: 1s;">❄</div>
            <div class="snowflake text-white text-xl absolute animate-fall" style="left: 50%; animation-delay: 0.5s;">❄</div>
            <div class="snowflake text-white text-2xl absolute animate-fall" style="left: 70%; animation-delay: 1.5s;">❄</div>
            <div class="snowflake text-white text-xl absolute animate-fall" style="left: 90%; animation-delay: 0.2s;">❄</div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <nav class="max-w-7xl mx-auto flex justify-between items-center p-6">
            <div class="logo text-2xl font-bold flex items-center gap-2 text-yellow-400">
                <span>🎄</span>
                <span>Karácsony</span>
            </div>
            <ul class="nav-links flex gap-6 items-center">
                <li><a href="../../home/main.php">Főoldal</a></li>
                <li><a href="../../home/main.php#about">Rólunk</a></li>
                <li><a href="../galeria/gal.php" class="active">Galéria</a></li>
                <li><a href="../../contact us/contactus.php">Kapcsolat</a></li>
                <li><a id="login" href="../forms/Login.php" class="px-4 py-2 rounded-full bg-red-600">Bejelentkezés</a></li>
                <li><a id="signup" href="../forms/Signup.php" class="px-4 py-2 rounded-full bg-green-500">Regisztráció</a></li>
                <li><a href="../webshop/shop.php" class="nav-cta px-6 py-2 rounded-full font-bold">Ajándékbolt</a></li>
                <li>
                    <a href="../cart/cart.php" class="flex items-center justify-center gap-3 text-white px-6 py-3 font-bold text-lgtransition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 7h13L17 13M7 13l-2-8m0 0H3m4 0h13.6" />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="mobile-menu flex flex-col gap-1 cursor-pointer">
                <span class="w-6 h-0.5 bg-yellow-400 rounded"></span>
                <span class="w-6 h-0.5 bg-yellow-400 rounded"></span>
                <span class="w-6 h-0.5 bg-yellow-400 rounded"></span>
            </div>
        </nav>
    </header>

    <div id="sidebar" class="fixed top-0 right-0 w-80 h-full bg-gradient-to-b from-green-900 via-green-800 to-green-950 shadow-2xl transform translate-x-full transition-transform duration-300 z-50 overflow-y-auto">

        <!-- Header -->
        <div class="p-8 flex justify-between items-center border-b border-green-700">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🎄</span>
                <span class="text-2xl font-bold text-yellow-400 tracking-wide">Karácsony</span>
            </div>
            <button id="close-sidebar" class="w-12 h-12 flex items-center justify-center rounded-full bg-yellow-400 text-green-900 font-bold text-3xl hover:bg-yellow-300 transition shadow-md hover:shadow-lg">&times;</button>
        </div>

        <!-- Sidebar Links -->
        <ul class="flex flex-col mt-8 gap-4 px-6">
            <li>
                <a href="main.php" class="flex items-center gap-3 p-4 rounded-xl text-yellow-400 hover:text-green-900 hover:bg-yellow-400 transition shadow hover:shadow-lg">
                    <span>🏠</span> Főoldal
                </a>
            </li>
            <li>
                <a href="main.php#about" class="flex items-center gap-3 p-4 rounded-xl text-yellow-400 hover:text-green-900 hover:bg-yellow-400 transition shadow hover:shadow-lg">
                    <span>ℹ️</span> Rólunk
                </a>
            </li>
            <li>
                <a href="../galeria/gal.php" class="flex items-center gap-3 p-4 rounded-xl text-yellow-400 hover:text-green-900 hover:bg-yellow-400 transition shadow hover:shadow-lg">
                    <span>🖼️</span> Galéria
                </a>
            </li>
            <li>
                <a href="../contact us/contactus.php" class="flex items-center gap-3 p-4 rounded-xl text-yellow-400 hover:text-green-900 hover:bg-yellow-400 transition shadow hover:shadow-lg">
                    <span>📞</span> Kapcsolat
                </a>
            </li>
            <li>
                <a id="login" href="../forms/Login.php" class="flex items-center gap-3 p-4 rounded-xl text-white bg-red-600 hover:bg-red-500 font-semibold shadow hover:shadow-lg transition">
                    <span>🔑</span> Bejelentkezés
                </a>
            </li>
            <li>
                <a id="signup" href="../forms/Signup.php" class="flex items-center gap-3 p-4 rounded-xl text-green-900 bg-yellow-400 hover:bg-yellow-300 font-semibold shadow hover:shadow-lg transition">
                    <span>📝</span> Regisztráció
                </a>
            </li>
            <li>
                <a href="../webshop/shop.php" class="flex items-center gap-3 p-4 rounded-xl text-green-900 bg-gradient-to-r from-yellow-400 to-yellow-300 hover:from-yellow-300 hover:to-yellow-400 font-semibold shadow hover:shadow-xl transition">
                    <span>🎁</span> Ajándékbolt
                </a>
                <br>
            </li>
        </ul>

        <!-- Decorative Footer -->
        <div class="mt-auto p-8 border-t border-green-700 text-center text-green-200 text-sm">
            🎅 Boldog Ünnepeket! <br> &copy; 2026 Karácsony
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero bg-green-900/80 text-center py-24 px-6">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-yellow-400 mb-4">Kellemes Karácsonyi Ünnepeket!</h1>
            <p class="text-white/80 mb-6 text-lg sm:text-xl">Töltsd velünk a legszebb időszakot, és ünnepeld a szeretet, a béke és az öröm ünnepét családoddal és barátaiddal.</p>
            <a href="#main" class="px-8 py-3 bg-yellow-400 text-green-900 font-semibold rounded-full shadow-lg hover:bg-yellow-300 transition">Fedezd fel</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gradient-to-b from-[#1a472a] via-[#0d2818] to-[#1a472a] py-24 sm:py-32" id="about">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base/7 font-semibold text-[#d4af37]">Gyors Telepítés</h2>
                <p class="mt-2 text-4xl font-semibold tracking-tight text-[#fde047] sm:text-5xl lg:text-balance">
                    Minden, amire szükséged van az alkalmazásod indításához
                </p>
                <p class="mt-6 text-lg/8 text-white/80">
                    Akár kis projektről, akár nagy alkalmazásról van szó, a telepítés gyors és biztonságos. Egyszerű, könnyen követhető folyamatok, amelyek biztosítják a gördülékeny indulást.
                </p>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <!-- Feature Items -->
                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-[#fde047]">
                            <div class="absolute top-0 left-0 flex w-10 h-10 items-center justify-center rounded-lg bg-[#d4af37]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-[#0d2818]">
                                    <path d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Egyszerű telepítés
                        </dt>
                        <dd class="mt-2 text-base/7 text-white/80">
                            Kattints és telepítsd. Nincs szükség bonyolult konfigurációra. Az alkalmazásod percek alatt élesbe állítható.
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-[#fde047]">
                            <div class="absolute top-0 left-0 flex w-10 h-10 items-center justify-center rounded-lg bg-[#d4af37]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-[#0d2818]">
                                    <path d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            SSL tanúsítványok
                        </dt>
                        <dd class="mt-2 text-base/7 text-white/80">
                            Teljesen automatikus SSL tanúsítványok, hogy webalkalmazásod mindig biztonságos legyen.
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-[#fde047]">
                            <div class="absolute top-0 left-0 flex w-10 h-10 items-center justify-center rounded-lg bg-[#d4af37]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-[#0d2818]">
                                    <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Egyszerű sorok
                        </dt>
                        <dd class="mt-2 text-base/7 text-white/80">
                            Könnyen kezelhető üzenetsorok és feldolgozási folyamatok a gördülékeny működésért.
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="text-base/7 font-semibold text-[#fde047]">
                            <div class="absolute top-0 left-0 flex w-10 h-10 items-center justify-center rounded-lg bg-[#d4af37]">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6 text-[#0d2818]">
                                    <path d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Fejlett biztonság
                        </dt>
                        <dd class="mt-2 text-base/7 text-white/80">
                            Tökéletesen védett alkalmazás, a legmodernebb biztonsági protokollokkal és titkosítással.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-green-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base text-green-200">Tranzakciók 24 óránként</dt>
                    <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">44 millió</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base text-green-200">Kezeletett eszközök</dt>
                    <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">119 billió $</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base text-green-200">Új felhasználók évente</dt>
                    <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">46 000</dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-12">Mit mondanak rólunk</h2>
            <div class="flex flex-col sm:flex-row justify-center items-stretch gap-12">
                <!-- Testimonial 1 -->
                <figure class="bg-green-800 rounded-2xl p-8 shadow-xl flex-1 flex flex-col justify-between">
                    <blockquote class="text-white text-xl sm:text-2xl font-medium mb-6">
                        "Flowbite komponensek fantasztikusak! Könnyedén létrehozhatod a karácsonyi weboldalad vagy SaaS projekted, minden előre elkészített elemmel."
                    </blockquote>
                    <figcaption class="flex items-center gap-4 mt-auto">
                        <img class="w-14 h-14 rounded-full ring-2 ring-yellow-400" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Gough">
                        <div class="text-left">
                            <div class="text-yellow-400 font-semibold">Michael Gough</div>
                            <div class="text-green-200 text-sm font-light">CEO at Flowbite</div>
                        </div>
                    </figcaption>
                </figure>

                <!-- Testimonial 2 -->
                <figure class="bg-green-800 rounded-2xl p-8 shadow-xl flex-1 flex flex-col justify-between">
                    <blockquote class="text-white text-xl sm:text-2xl font-medium mb-6">
                        "Nagyszerű felhasználói élmény! A Flowbite előre elkészített komponensei időt és energiát spórolnak meg, miközben gyönyörű karácsonyi dizájnt készíthetsz."
                    </blockquote>
                    <figcaption class="flex items-center gap-4 mt-auto">
                        <img class="w-14 h-14 rounded-full ring-2 ring-yellow-400" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jane-doe.png" alt="Jane Doe">
                        <div class="text-left">
                            <div class="text-yellow-400 font-semibold">Jane Doe</div>
                            <div class="text-green-200 text-sm font-light">Marketing Lead at Flowbite</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <!-- Trusted Brands Section -->
    <section class="bg-green-900 py-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center lg:items-start gap-12">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-6">Márkák, akik megbíznak bennünk</h2>
                <p class="text-green-200 mb-6">
                    Több innovatív csapat bízik megoldásainkban. Termékeink segítenek időt és energiát megtakarítani, miközben gyönyörű karácsonyi élményt nyújtanak.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#create" class="px-6 py-3 bg-yellow-400 text-green-900 font-semibold rounded-full shadow-lg hover:shadow-xl transition">Fiók létrehozása</a>
                    <a href="#contact" class="px-6 py-3 border border-yellow-400 text-yellow-400 rounded-full hover:bg-yellow-400 hover:text-green-900 transition">Kapcsolat</a>
                </div>
            </div>
            <div class="lg:w-1/2 grid grid-cols-2 sm:grid-cols-3 gap-8 items-center justify-items-center">
                <img class="h-13" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Google-flutter-logo.svg" alt="Google">
                <img class="h-13" src="https://freelogopng.com/images/all_img/1685901477apple-logo-transparent.png" alt="Apple">
                <img class="h-13" src="https://www.logo.wine/a/logo/Microsoft_Store/Microsoft_Store-Logo.wine.svg" alt="Microsoft">
                <img class="h-13" src="https://static.vecteezy.com/system/resources/previews/018/930/698/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="Facebook">
                <img class="h-13" src="https://static.vecteezy.com/system/resources/previews/019/766/223/non_2x/amazon-logo-amazon-icon-transparent-free-png.png" alt="Amazon">
                <img class="h-13" src="https://logos-world.net/wp-content/uploads/2020/09/Linux-Logo.png" alt="Linux">
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-12 text-center">Gyakran Ismételt Kérdések</h2>
            <div class="space-y-4">
                <details class="bg-green-800 rounded-lg p-5 group">
                    <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
                        Mi a legjobb dolog Magyarországon?
                        <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
                    </summary>
                    <p class="mt-3 text-green-200 text-sm sm:text-base">
                        Nem tudom pontosan, de a kultúra és a hagyományok fantasztikusak! Magyarország tele van szép tájakkal és finom ételekkel.
                    </p>
                </details>
                <details class="bg-green-800 rounded-lg p-5 group">
                    <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
                        Hogyan készíthetünk szentelt vizet?
                        <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
                    </summary>
                    <p class="mt-3 text-green-200 text-sm sm:text-base">
                        Általában papok vagy vallási vezetők végzik a szentelési rituálét, de otthon is készíthető szertartásos módon.
                    </p>
                </details>
                <details class="bg-green-800 rounded-lg p-5 group">
                    <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
                        Mi történik, ha valaki láthatatlan és munkát ajánlanak neki?
                        <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
                    </summary>
                    <p class="mt-3 text-green-200 text-sm sm:text-base">
                        Ha láthatatlan, akkor nem látszik a fizikai jelenléte, így a munkaadók gyakran nem veszik észre a jelentkezését.
                    </p>
                </details>
                <details class="bg-green-800 rounded-lg p-5 group">
                    <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
                        Miért nem látunk elefántokat a fákban?
                        <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
                    </summary>
                    <p class="mt-3 text-green-200 text-sm sm:text-base">
                        Mert az elefántok túl nagyok, és nem is próbálnak fára mászni. Ez egy klasszikus vicc alapja.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Shop Section -->
    <?php include '../db.php'; ?>
    <section id="shop" class="py-20 bg-[#0d2818]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-yellow-400 mb-8 text-center">Ünnepi Ajánlataink</h2>
            <div id="product-container" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $limit = 6; // initial limit
                $sql = "SELECT * FROM products LIMIT $limit";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                        <div class="bg-green-800 p-6 rounded-2xl shadow-xl">
                            <h3 class="text-xl font-bold text-yellow-400">' . $row["name"] . '</h3>
                            <p class="text-white/80 mt-2">' . $row["description"] . '</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-lg font-bold">' . $row["price"] . ' $</span>
                                <button class="px-4 py-2 bg-yellow-400 text-green-900 rounded-full font-bold hover:bg-yellow-300">Kosárba</button>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>

            <div class="text-center mt-8">
                <button id="show-more" class="px-6 py-3 bg-yellow-400 text-green-900 font-semibold rounded-full hover:bg-yellow-300 transition">
                    Show More
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-900 text-green-200">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="footer-about">
                <h3 class="text-yellow-400 font-bold text-lg mb-2">🎄 Karácsony 2024</h3>
                <p>Ünnepeljük együtt a szeretet és a béke ünnepét. Küldetésünk, hogy felejthetetlen karácsonyi élményt nyújtsunk minden látogatónknak.</p>
                <div class="social-links flex gap-2 mt-2">
                    <a href="#" title="Facebook">📘</a>
                    <a href="#" title="Instagram">📷</a>
                    <a href="#" title="Twitter">🐦</a>
                    <a href="#" title="YouTube">📺</a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-yellow-400 mb-2">Fő</h4>
                <ul class="space-y-1">
                    <li><a href="#home">Főoldal</a></li>
                    <li><a href="#about">Rólunk</a></li>
                    <li><a href="#services">Szolgáltatások</a></li>
                    <li><a href="#gallery">Galéria</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#events">Események</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-yellow-400 mb-2">Segítség</h4>
                <ul class="space-y-1">
                    <li><a href="#faq">Gyakori Kérdések</a></li>
                    <li><a href="#support">Ügyfélszolgálat</a></li>
                    <li><a href="#shipping">Szállítási Információk</a></li>
                    <li><a href="#returns">Visszaküldés</a></li>
                    <li><a href="#contact">Kapcsolat</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-yellow-400 mb-2">Jogi</h4>
                <ul class="space-y-1">
                    <li><a href="#privacy">Adatvédelmi Szabályzat</a></li>
                    <li><a href="#terms">Felhasználási Feltételek</a></li>
                    <li><a href="#cookies">Cookie Szabályzat</a></li>
                    <li><a href="#disclaimer">Jogi Nyilatkozat</a></li>
                    <li><a href="#accessibility">Akadálymentesítés</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center py-4 mt-4">
            <p>© 2024 Karácsony. Minden jog fenntartva. Készítve ❤️-tel</p>
        </div>
    </footer>

    <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>

    <!-- Scripts -->
    <script>
        let offset = 6; // initial number of products shown
        const limit = 6;

        document.getElementById('show-more').addEventListener('click', () => {
            fetch(`../load_more_products.php?offset=${offset}`)
                .then(response => response.text())
                .then(data => {
                    if (data === '0') {
                        // no more products
                        document.getElementById('show-more').innerText = "No More Products";
                        document.getElementById('show-more').disabled = true;
                    } else {
                        document.getElementById('product-container').insertAdjacentHTML('beforeend', data);
                        offset += limit;
                    }
                })
                .catch(err => console.error(err));
        });

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const hamburger = document.querySelector('.mobile-menu');
        const closeBtn = document.getElementById('close-sidebar');

        // Open sidebar
        hamburger.addEventListener('click', () => {
            sidebar.classList.remove('translate-x-full'); // remove hidden transform
            overlay.classList.remove('hidden');
        });

        // Close sidebar
        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('translate-x-full');
            overlay.classList.add('hidden');
        });

        // Close sidebar when clicking outside
        overlay.addEventListener('click', () => {
            sidebar.classList.add('translate-x-full');
            overlay.classList.add('hidden');
        });



        // Lock scrolling while preloader is visible
        document.body.classList.add('overflow-hidden');

        // Preloader hide after page load with delay
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');

            setTimeout(() => {
                preloader.classList.add('opacity-0', 'pointer-events-none');
                // Unlock scrolling
                document.body.classList.remove('overflow-hidden');

                setTimeout(() => preloader.style.display = 'none', 500);
            }, 2000); // wait 3 seconds before hiding
        });
    </script>

</body>

</html>