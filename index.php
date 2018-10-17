<?php

date_default_timezone_set("Europe/Vilnius")
?>


   <head>

       <title> Aš valdau HTML <?php print 'ir PHP!' ?>

       </title>

   </head>    <body>

       <h1>Rolandas- HTML <?php print 'ir PHP!' ?> asas</h1>
<p>Moku kurti dinamini turinį.
           Atidaryta: <?php print date ('Y-m-d H:i:s'); ?> </p>

   </body>

</html>
<?php

//header("Refresh:1");

//VLN laiko juosta

date_default_timezone_set('Europe/Vilnius');

/*Ir visa

* Kita matematika

*/

$vaikai = rand(1, 5);

$random = rand( strtotime("Oct 16 2018"), strtotime("Oct 16 2028") );

$random2 = rand( strtotime("Oct 16 2021"), strtotime("Oct 16 2121") );

$title = 'PHP lydes ir '.date('Y-m-d',$random);

$h1 = 'Rolandas - Galbut turesiu '.$vaikai.' vaiku!';

$paragraph = 'D. Trump`as nebus prezidentu '.date('Y-m-d',$random);$html = '<!DOCTYPE html>

<!--Pagrindine nesamone

<p>Nieko nera</p>

-->

<html lang="en" dir="ltr">

<head>

<meta charset="utf-8">

<title>'.$title.'</title>

</head>

<body>

<h1>'.$h1.'</h1>

<p>'.$paragraph.'</p>
<?php
</body>';

die ($html);
?>

    
