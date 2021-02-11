<?php
$civilite = [1 => 'Monsieur', 2 => 'Madame'];
$lines = file("contact.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Civilité</th>
    </tr>
  </thead>
  <tbody>
  <?php $lineNumber = 0; ?>
  <?php foreach($lines as $key => $line): ?>
    <?php $detail = explode(';', $line); ?>
    <?php var_dump($detail); ?>
    <?php $numberCivilite = (int) $detail[3]; ?>
    <tr>
      <td><?= ++$lineNumber ?></td>
      <td><?php echo $detail[0] ?></td>
      <td><?= $detail[1] ?></td>
      <td><?= $detail[2] ?></td>
      <td><?= $civilite[$numberCivilite] ??  'N/A'?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</body>
</html>