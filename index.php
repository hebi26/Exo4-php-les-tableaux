<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <title> exo php2</title>
</head>

<body>
<?php

$oc=array(
  30 => 'gard',
  34 => 'herault',
  48 => 'lozere',
  7 => 'ardeche',
  9 => 'ariege',
  11 => 'aude',
  12 => 'aveyron',
  32 => 'gers',
  31 => 'haute garonne',
  46 => 'lot',
  65 => 'haute pyrénées',
  66 => 'pyrénées orientales',
  81 => 'tarn',
  82 => 'tarn et garonne');

echo '<h2> Liste des départements d\'occitanie :</h2>';

  foreach ($oc as $num => $nom) {
    echo '<p> le numéro : '.$num.'</br>le département : '.$nom.'</p>';
  }
?>

</body>
</html>
