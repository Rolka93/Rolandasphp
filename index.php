<?php
$x = 10;
$y = 2;
$p = "";
for ($i = 0; $i < 10; $i++) {
    $x += $y;
    $p .= 'Dabartine $x verte: ' . $x . '<br>';
}
?>
<html lang="lt">
    <head>
    </head>
    <body>
        <p>
            <?php print $p; ?>
        </p>
    </body>
</html>