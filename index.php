<?php 
$submit = filter_input(INPUT_POST, 'model');
if(isset($_POST['model']))
{
$genres = $_POST['model'];
}
?>
 






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($submit)) {
    echo "formulář byl odeslán"; 

        echo "</br> $model";
        echo "<br> $barva";
    foreach ($vybava as $vybava) 
    {
        echo "</br> $vybava";
    }
}

     else {?>
    <h1>Poptávkový dotazník Škoda auto</h1>
    <form method="post">
    <h2>O jaký model by jste měl/a zájem?</h2>
    <label for="model">Vyberte model</label>
    <select name="model" id="model">
      <option value="Fabia">Fabia</option>
      <option value="Scala">Scala</option>
      <option value="Kamiq">Kamiq</option>
      <option value="Octavia">Octavia</option>
      <option value="Karoq">Karoq</option>
      <option value="Superb">Superb</option>
  </select>
    <h2>O jaké palivo by jste měl/a zájem?</h2>
    <input type="radio" id="benzin" name="palivo" value="benzin"><label for="benzin">Benzín</label></br>
    <input type="radio" id="diesel" name="palivo" value="diesel"><label for="palivo">Diesel</label></br>
    <input type="radio" id="lpg" name="palivo" value="lpg"><label for="lpg">LPG</label></br>
    <input type="radio" id="elektro" name="palivo" value="elektro"><label for="elektro">Elektřina</label></br>
    <input type="radio" id="hybrid" name="palivo" value="hybrid"><label for="hybrid">Hybrid</label></br>

    <h2>O jakou výbavu by jste měl/a zájem?</h2>
    <input type="checkbox" id="airbag" name="vybava[]"><label for="airbag">Airbag</label>
    <input type="checkbox" id="klimatizace" name="vybava[]"><label for="klimatizace">Klimatizace</label>
    <input type="checkbox" id="sedacky" name="vybava[]"><label for="sedacky">Vyhřívané sedačky</label>
    <input type="checkbox" id="pneumatiky" name="vybava[]"><label for="pneumatiky">Neprůstřelné pneumatiky</label>
    <input type="checkbox" id="padak" name="vybava[]"><label for="padak">Střešní padák</label>
    <input type="checkbox" id="clun" name="vybava[]"><label for="clun">Samonafukovací člun</label>

    <select name="barva" id="barva">
      <option value="cervena">červená</option>
      <option value="bila">bílá</option>
      <option value="modra">modrá</option>
      <option value="zelena">zelená</option>
      <option value="ruzova">růžová</option>
      <option value="cerna">černá</option>
  </select>

    <?php } ?>
</body>
</html>