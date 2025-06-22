<?php
require_once 'karakter.php';

$data = new Karakter;

$data->tampilkan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputtan</title>
</head>
<body>
    <a href="index.php">Input Karakter Halu</a>

    <h1>List Karakter Halu</h1>
    <?php foreach ($data as $y) : ?>
        <l1><?= htmlspecialchars($y['id']) ?></l1>
    <?php endforeach ?>

</body>
</html>