<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 5 Exercice 9</title>
  </head>
  <body>
    <main>
      <?php
      $arealist = arrey(
        '59' => 'Nord',
        '62' => 'Pas-de-calais',
        '02' => 'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        );
      foreach ($arealist as $area) {
        ?>
        <p> <?= $area ?> </p>
      <?php
    };
      ?>
    </main>
  </body>
</html>
