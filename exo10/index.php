<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie 5 Exercice 10</title>
</head>
<body>
  <main>
    <?php
    $areaList = arrey(
      '59' => 'Nord',
      '62' => 'Pas-de-calais',
      '02' => 'Aisne',
      '60' => 'Oise',
      '80' => 'Somme',
    );
    ?>
    <table>
      <caption>Les departement du Haut-de-France</caption>
      <thead>
        <th>Code Postal</th>
        <th>Nom de département</th>
      </thead>
      <tbody>
        <?php
        foreach ($areaList as $zipCode => $area) { ?>
          <tr>
            <td><?= $zipCode ?></td>
            <td><?= $area ?></td>
          </tr>
        <?php }; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
