<?php
$firma = 'Szprycha';
$rok = date('Y');

$cennik = [
    ['nazwa' => 'Przegląd podstawowy', 'cena' => 120],
    ['nazwa' => 'Serwis pełny', 'cena' => 250],
    ['nazwa' => 'Centrowanie koła', 'cena' => 60],
    ['nazwa' => 'Wymiana dętki', 'cena' => 40],
    ['nazwa' => 'Regulacja przerzutek', 'cena' => 50],
    // ['nazwa' => 'Mycie roweru', 'cena' => 30]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szprycha - Serwis Rowerowy</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
</head>
<body>
    <header class="site-header">
        <a class="logo" href="#">
            <svg viewBox="0 0 120 64" width="72" height="38" role="img" aria-labelledby="logo-tytul">
                <title id="logo-tytul">Szprycha</title>
                <circle cx="28" cy="42" r="18" fill="none" stroke="#84cc16" stroke-width="5"/>
                <circle cx="92" cy="42" r="18" fill="none" stroke="#84cc16" stroke-width="5"/>
                <polyline points="28,42 48,14 80,14 92,42" fill="none" stroke="#ffffff" stroke-width="5" stroke-linejoin="round"/>
                <polyline points="48,14 60,42 80,14" fill="none" stroke="#ffffff" stroke-width="5" stroke-linejoin="round"/>
            </svg>
            <span>Szprycha</span>
        </a>
        <button class="menu-toggle" aria-expanded="false">Menu</button>
        <nav class="menu">
            <a href="#uslugi">Usługi</a>
            <a href="#cennik">Cennik</a>
            <a href="#kontakt">Kontakt</a>
        </nav>
    </header>

    <main>
        <section id="uslugi">
            <h1>Nasze Usługi</h1>
            <div class="cards">
                <article class="card">
                    <h3>Przegląd</h3>
                    <p>Hamulce i przerzutki.</p>
                    <p class="card_price">od 120 zł</p>
                </article>
                <article class="card card--highlight">
                    <h3>Serwis pełny</h3>
                    <p>Kompleksowy przegląd roweru.</p>
                    <p class="card_price">od 250 zł</p>
                    <span>Najczęściej wybierane</span>
                </article>
                <article class="card">
                    <h3>Centrowanie kół</h3>
                    <p>Profilaktyka i naprawa kół.</p>
                    <p class="card_price">od 60 zł</p>
                </article>
            </div>
        </section>

        <section id="cennik">
            <h2>Cennik</h2>
            <table class="price-table">
                <thead>
                    <tr>
                        <th>Usługa</th>
                        <th class="num">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cennik as $usluga): ?>
                        <tr>
                            <td><?= htmlspecialchars($usluga['nazwa']) ?></td>
                            <td class="num"><?= $usluga['cena'] ?> zł</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer id="kontakt">
        <h2>Kontakt</h2>
        <p>Pracownia Rowerowa <?= $firma ?></p>
        <p>ul. Rowerowa 12, 85-001 Bydgoszcz</p>
        <p>Telefon: <a href="tel:+48500100200">500 100 200</a></p>
        <p>E-mail: <a href="mailto:kontakt@szprycha.pl">kontakt@szprycha.pl</a></p>
        <img src="rower.svg" alt="Ikona roweru - logo pracowni Szprycha" width="80">
        <p>&copy; <?= $rok ?> <?= $firma ?></p>
    </footer>
</body>
</html>