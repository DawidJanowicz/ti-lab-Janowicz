<?php
$firma = 'Szprycha';
$rok = date('Y');
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
        <p class="logo">Szprycha</p>
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
                    <tr>
                        <td>Przegląd podstawowy</td>
                        <td class="num">120 zł</td>
                    </tr>
                    <tr>
                        <td>Serwis pełny</td>
                        <td class="num">250 zł</td>
                    </tr>
                    <tr>
                        <td>Centrowanie koła</td>
                        <td class="num">60 zł</td>
                    </tr>
                    <tr>
                        <td>Wymiana dętki</td>
                        <td class="num">40 zł</td>
                    </tr>
                    <tr>
                        <td>Regulacja przerzutek</td>
                        <td class="num">50 zł</td>
                    </tr>
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