<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie 5 Exercice 8</title>
  </head>
  <body>
    <main>
      <?php
      $months = array('janvier','fevier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');

      foreach ($months as $month) {
        ?>
        <p> <?= $month ?> </p>
      <?php
    };
      ?>
    </main>
  </body>
</html>
