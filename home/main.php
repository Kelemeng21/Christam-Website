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
                <li><a href="#shop" class="nav-cta">Ajándékbolt</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        
    </header>


    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Kellemes Karácsonyi Ünnepeket!</h1>
            <p>Töltsd velünk a legszebb időszakot, és ünnepeld a szeretet, a béke és az öröm ünnepét családoddal és barátaiddal.</p>
            <a href="#main" class="cta-button">Fedezd fel</a>
        </div>
    </section>

    <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Projects</a></li>
  <li><a href="#">Project Nero</a></li>
</ul>

    <!-- Main Content Area (üres, ide jön majd a saját tartalom) -->
    <main id="main">
        <!-- Itt helyezhetitek el a saját tartalmatokat -->
    </main>

<!-- Statisztika Szekció -->
<section class="bg-green-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
      <!-- Statisztika 1 -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base text-green-200">Tranzakciók 24 óránként</dt>
        <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">44 millió</dd>
      </div>

      <!-- Statisztika 2 -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base text-green-200">Kezeletett eszközök</dt>
        <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">119 billió $</dd>
      </div>

      <!-- Statisztika 3 -->
      <div class="mx-auto flex max-w-xs flex-col gap-y-4">
        <dt class="text-base text-green-200">Új felhasználók évente</dt>
        <dd class="order-first text-4xl sm:text-5xl font-bold text-yellow-400 tracking-tight">46 000</dd>
      </div>
    </dl>
  </div>
</section>


<!-- Testimonial Section -->
<section class=" py-16">
  <div class="max-w-5xl mx-auto px-4 text-center">
    <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-12">Mit mondanak rólunk</h2>

    <!-- Testimonials Container -->
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

<!-- FAQ Section -->
<section class=" py-20">
  <div class="max-w-4xl mx-auto px-6">
    <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-12 text-center">Gyakran Ismételt Kérdések</h2>

    <div class="space-y-4">
      <!-- FAQ Item 1 -->
      <details class="bg-green-800 rounded-lg p-5 group">
        <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
          Mi a legjobb dolog Magyarországon?
          <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
        </summary>
        <p class="mt-3 text-green-200 text-sm sm:text-base">
          Nem tudom pontosan, de a kultúra és a hagyományok fantasztikusak! Magyarország tele van szép tájakkal és finom ételekkel.
        </p>
      </details>

      <!-- FAQ Item 2 -->
      <details class="bg-green-800 rounded-lg p-5 group">
        <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
          Hogyan készíthetünk szentelt vizet?
          <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
        </summary>
        <p class="mt-3 text-green-200 text-sm sm:text-base">
          Általában papok vagy vallási vezetők végzik a szentelési rituálét, de otthon is készíthető szertartásos módon.
        </p>
      </details>

      <!-- FAQ Item 3 -->
      <details class="bg-green-800 rounded-lg p-5 group">
        <summary class="font-semibold text-white cursor-pointer flex justify-between items-center">
          Mi történik, ha valaki láthatatlan és munkát ajánlanak neki?
          <span class="transition-transform duration-300 group-open:rotate-45 text-yellow-400">+</span>
        </summary>
        <p class="mt-3 text-green-200 text-sm sm:text-base">
          Ha láthatatlan, akkor nem látszik a fizikai jelenléte, így a munkaadók gyakran nem veszik észre a jelentkezését.
        </p>
      </details>

      <!-- FAQ Item 4 -->
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




<!-- Trusted by Brands Section -->
<section class="bg-green-900 py-20">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center lg:items-start gap-12">
    
    <div class="lg:w-1/2 text-center lg:text-left">
    <br><br>
      <h2 class="text-3xl sm:text-4xl font-bold text-yellow-400 mb-6">Márkák, akik megbíznak bennünk</h2>
      <p class="text-green-200 mb-6">
        Több innovatív csapat bízik megoldásainkban. Termékeink segítenek időt és energiát megtakarítani, miközben gyönyörű karácsonyi élményt nyújtanak.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
        <a href="#create" class="px-6 py-3 bg-yellow-400 text-green-900 font-semibold rounded-full shadow-lg hover:shadow-xl transition">Fiók létrehozása</a>
        <a href="#contact" class="px-6 py-3 border border-yellow-400 text-yellow-400 rounded-full hover:bg-yellow-400 hover:text-green-900 transition">Kapcsolat</a>
      </div>
    </div>

    <!-- Right Logos -->
    <div class="lg:w-1/2 grid grid-cols-2 sm:grid-cols-3 gap-8 items-center justify-items-center">
      <img class="h-13" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Google-flutter-logo.svg" alt="Google">
      <img class="h-13" src="https://freelogopng.com/images/all_img/1685901477apple-logo-transparent.png" alt="Apple">
      <img class="h-13" src="https://www.logo.wine/a/logo/Microsoft_Store/Microsoft_Store-Logo.wine.svg" alt="Microsoft">
      <img class="h-13" src="https://static.vecteezy.com/system/resources/previews/018/930/698/non_2x/facebook-logo-facebook-icon-transparent-free-png.png" alt="Facebook">
      <img class="h-13" src="https://static.vecteezy.com/system/resources/previews/019/766/223/non_2x/amazon-logo-amazon-icon-transparent-free-png.png" alt="Amazon">
      <img class="h-13" src="https://logos-world.net/wp-content/uploads/2020/09/Linux-Logo.png" alt="Instagram">
    </div>

  </div>
</section>





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

</html>