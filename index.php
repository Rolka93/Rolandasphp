<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>
<!DOCTYPE html>
<html>
    <head>
      <title>phpsualum</title>   
    </head>
    <body>
        <br>
        <img src="https://upload.wikimedia.org/wikipedia/lt/thumb/f/f4/The_Scream.jpg/250px-The_Scream.jpg" alt="Smiley face" height="42" width="42"> 
        <img src="https://upload.wikimedia.org/wikipedia/lt/thumb/f/f4/The_Scream.jpg/250px-The_Scream.jpg" alt="Smiley face" height="42" width="42"> 
        <img src="https://upload.wikimedia.org/wikipedia/lt/thumb/f/f4/The_Scream.jpg/250px-The_Scream.jpg" alt="Smiley face" height="42" width="42"> 
        <img src="https://upload.wikimedia.org/wikipedia/lt/thumb/f/f4/The_Scream.jpg/250px-The_Scream.jpg" alt="Smiley face" height="42" width="42"> 
    </body>
<?php
$date = new DateTime('2018-09-17'); // Y-m-d
$date->add(new DateInterval('P30D'));
echo $date->format('Y-m-d') . "\n";
echo "<br>";
?>
 <?php

$sunny= rand(0,1);$cssClass = null;

$weather = null;// if ($sunny == true)

// if ($sunny == 1)

if ($sunny) {

   $cssClass = "sunny";

   $weather = 'saulyte';

} else {

   $cssClass = "notsunny";

   $weather = 'lietutis';

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

       </div>

   </body>

</html>
