<?php

$output = 'Dar nesubmit\'inai formos';

$variantai = [

    'taip',

    'ne',

    'galbut'

];

function rand_atsakymas($array) {

    $indexas = rand(0, count($array) - 1);

    return $array[$indexas];

}

if (isset($_POST['klausimas'])) {

    $klausimas = $_POST['klausimas'];

    if (empty($klausimas)) {

        $output = 'neirasete klausimo';

    } else {

        $output = 'atsakymas i jusu klausima (' . $klausimas . ') - ' . rand_atsakymas($variantai);

    }

}

?>

<html>

    <head>

        <title>Atsakymu randomas</title>

    </head>

    <body>

        <form action="index.php" method="post">

            Jusu klausimas: <input name="klausimas" type="text">

            <input type="submit">

        </form>

        <h3><?php print $output; ?></h3>

    </body>

</html>