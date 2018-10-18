<?php //

$sunny= rand(0,1);

$cssClass = null;

$weather = null;

$rain = rand(0, 1);// if ($sunny == true)

// if ($sunny == 1)If ($sunny && $rain){

If ($sunny && $rain){

   $weather = 'saule su debeseliu';

   $cssClass = 'sunny';

}

elseIf ($sunny && !$rain){

    $weather = 'saule';

    $cssClass = 'sunny';

}

elseif (!$sunny && $rain) {

   $weather = 'debesys su lietum';

   $cssClass = 'notsunny';

}

else{

   $weather = 'debesis';

   $cssClass = 'notsunny';

}

?>

<html>

  <head>

      <title>

          IF testas

      </title>

      <style>

          .sunny {

              background-color: yellow;

          }

          .notsunny {

              background-color: grey;

          }

      </style>

  </head>

  <body>

      <div class="<?php print $cssClass;?>">

          <?php print $weather; ?>

      </div>   </body>

</html>