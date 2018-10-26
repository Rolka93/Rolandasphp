<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!--> 
<div class="cv">
    <h1><?php print $page['content']['title']; ?></h1>
     
    <!-- 
        Jeigu yra galimybė, kad tam tikrų elementų nespausdinsime,
        pirma patikriname ar $page['content'][?kazkoks_indeksas?]
        yra nustatytas prieš spausdindami tag'us
    !-->
    <?php if (isset($page['content']['subtitle'])): ?>
        <h2><?php print $page['content']['subtitle']; ?></h2>
    <?php endif; ?>
    <hr>
</div>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CV_page</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>

    <div class="container container-main">

        <header class="header inner-container">
            <div>
                Logo
            </div>
            <div>
                <ul class="btn-list">
                    <li>Apie mus</li>
                    <li>Paslaugos</li>
                    <li>Kontaktai</li>
                    <li>Susisiekite</li>
                    <li class="cta-contact">Susisiekite</li>
                </ul>
            </div>
        </header>

        <section class="grey-block">
            <img src="photo.png" alt="">
        </section>

        <section class="cv-main container">
            <div>
                <h2>Vardas ir Pavarde</h2>
                <p>Pageidaujama darbo pozicija</p>
            </div>
            <h1>Curriculum Vitae</h1>
        </section>

        <section class="personal-details">
            <h2>Personal details</h2>
            <div class="flex-container inner-container">
                <div>
                    <div class="bold">Phone</div>
                    <div>+868788168</div>
                </div>
                <div>
                    <div class="bold">Email</div>
                    <div>93rolandas@gmail.com</div>
                </div>
                <div>
                    <div class="bold">City</div>
                    <div>Vilnius</div>
                </div>
                <div>
                    <div class="bold">Age</div>
                    <div>25</div>
                </div>
                <div>
                    <div class="bold">Marital status</div>
                    <div>Single</div>
                </div>
            </div>
        </section>

        <section class="work-experience">
            <h2>Work experience</h2>
            <div class="flex-container inner-container">
                <div class="block block-1">
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>

                </div>
                <div class="block block-2">
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                    <div class="box">
                        <p class="date">July 2018 - Now</p>
                        <h3>Company name</h3>
                        <p>Job title</p>
                        <p class="description">
                            Porro dicta nemo, qui repellendus deleniti sed at consequatur est recusandae unde nihil repudiandae minima earum tempore
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio">
            <h2>Portfolio</h2>
            <div class="flex-container inner-container">
                <div class="flex-item">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
                <div class="flex-item">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                </div>
            </div>
        </section>

        <section class="contanct-me">
            <h2>Contact me</h2>
            <div>
                <div class="flex-container">
                    <i class="fas fa-3x fa-envelope-square"></i>
                    <span>93rolandas@gmail.com</span>
                </div>
                <div class="flex-container">
                    <i class="fas fa-3x fa-phone-square"></i>
                    <span>868788168</span>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="row1 inner-container">
                <div>
                    Logo
                </div>
                <div>
                    <ul class="btn-list">
                        <li>Apie mus</li>
                        <li>Paslaugos</li>
                        <li>Kontaktai</li>
                    </ul>
                </div>
                <div>
                    <span class="cta-contact">Susisiekite</span>
                </div>
            </div>
            <div class="row1 inner-container footer-small">
                <p>@ UAB Programuok. Privacy policy</p>
                <p>Sukure: Vardas, pavardenis</p>
            </div>
        </section>

    </div>

    </body>
</html>
