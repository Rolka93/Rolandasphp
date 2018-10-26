<!-- 
    Tai yra template, kurią sukūrėme su mintim naudoti mūsų homepage`ui.
    Tačiau, mes ją galėsime naudoti NEBŪTINAI TIK homepage. Su bet kuriuo
    kitu controlleriu galėsime ją "renderinti" taip pat. 
!-->
<div class="home-page">
    <h1><?php print $page['content']['title']; ?></h1>
    <div class="img">
     <img src="https://www.kullabs.com/classes/subjects/units/lessons/notes/note-detail/2591" alt=""width="42" height="42">     
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
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"> -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="header base-container">

            <div class="logo">
                <img src="code-academy.png" alt="">
            </div>

            <div class="phone">
                <span>+370 6 63 66 555</span>
            </div>

            <div class="nav">
                <ul>
                    <li>Studijos 101</li>
                    <li>Programos</li>
                    <li>Destytojai</li>
                    <li>Apie mus</li>
                    <li>Kontaktai</li>
                    <li>Naujienos</li>
                    <li>Vaikams</li>
                    <li>Verslui</li>
                    <li class="cta">Registruokis</li>
                </ul>
            </div>
            <div class="icon"><i class="fas fa-bars"></i>
            </div>
        </div>



        <div class="main base-container">

            <div class="kaire">
                <img src="image.jpg" alt="">
                <div class="image-text">
                    <p class="date">2018-06-11</p>
                    <h2>Freelancer pareigos apie kurias niekas nekalba</h2>
                    <p>Laisvai samdomas darbuotojas arba vadinamas "freelanceris" ir pastovia darbo vieta...</p>
                    <div class="cta">
                        <span>Skaityti</span>
                    </div>
                </div>
            </div>

            <div class="desine">
                <h2>Naujausi irasai</h2>
                <ul>
                    <li>Freelancerio pareigos apie kurias niekas nekalba</li>
                    <li>Freelancerio pareigos apie kurias niekas nekalba</li>
                    <li>Freelancerio pareigos apie kurias niekas nekalba</li>
                    <li>Freelancerio pareigos apie kurias niekas nekalba</li>
                    <li>Freelancerio pareigos apie kurias niekas nekalba</li>
                </ul>
            </div>
        </div>


    </body>
</html>
   
    