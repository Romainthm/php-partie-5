<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 5 Exercice 7</title>
  </head>
  <body>
    <main>
      <?php
      $area = arrey(
        '59' => 'Nord',
        '62' => 'Pas-de-calais',
        '02' => 'Aisne',
        '60' => 'Oise',
        '80' => 'Somme',
        );
        $area['51'] = 'Marne';
        echo 'le nouvelle element du tableau est' $area['51'];
      ?>
    </main>
  </body>
</html>
