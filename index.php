<?php

$fridge = array("Jogurtas", "Kebabas", "Alus", "Sugede vaisiai", "supuves avokadas");

$noriu = ["Kebabas", "Alus", "Pica", "traktorius"];

$tekstas = "";

foreach ($noriu as $kazkas) {

    if (in_array($kazkas, $fridge)) {

        $tekstas .= "$kazkas: Turiu <br>";

    } else {

        $tekstas .= "$kazkas: Neturiu <br>";

    }

}

?>

<html>

    <body>

        <h1>Ar viska turiu saldytuve?</h1>

        <p><?php print $tekstas; ?></p>

    </body>

</html
