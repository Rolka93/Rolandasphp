<?php
$catalog = ['miltai'.'pienas'.'kiaušiniai'];
$tekst =''; 
?>
 <!DOCTYPE html>
<html>
<head>
<style>
.produktas {
   width: 150px;
   height: 150px; 
}
</style>
</head>

<body>

<div class="produktas">
  <h2>Miltai</h2>
  <span class="">Kaina</span><br
  <span class="">Aprašymas</span><br>
  <span class="">Nuolaida</span><br>
</div>

<div class="produktas">
  <h2>Pienas</h2>
  <span class="">Kaina</span><br>
  <span class="">Aprašymas </span><br>
  <span class="">Nuolaida</span><br>
</div>

<div class="produktas">
  <h2>Kiaušiniai</h2> 
  <span class="">Kaina</span><br>
  <span class="">Aprašymas</span><br>
  <span class="">Nuolaida</span><br>
</div>
    <p><?php print $tekst; ?></p>
</body>
</html> 
