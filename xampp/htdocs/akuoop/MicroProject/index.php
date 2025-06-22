<?php
require_once 'karakter.php';

$karakter = new Karakter();

if (isset($_POST['submit'])) {
    if ($_POST['tipe'] == "pilih") {
        header("location:index.php?error=tipe_tidak_dipilih");
    } else if ($_POST['tipe'] == "husbu") {
        $karakter->tambah($_POST['nama'], $_POST['asal'], $_POST['tipes'], "Husbu");
    } else if ($_POST['tipe'] == "waifu") {
        $karakter->tambah($_POST['nama'], $_POST['asal'], $_POST['tipes'], "Waifu");
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Halu</title>
</head>
<body>
    <h1>Input Halu</h1>
    <a href="input.php">Lihat Karakter Halu yang sudah diinput</a>
    <br>
    <br>
    <form method="post">
        <label for="tipe">Tipe</label><br>
        <select name="tipe" id="tipe">
            <option value="pilih">== Pilih ==</option>
            <option value="husbu">Husbu</option>
            <option value="waifu">Waifu</option>
        </select><br>
        <label for="nama">Nama</label><br>
        <input id="nama" name="nama"><br>
        <label for="asal">Asal Game/Anime</label><br>
        <input id="asal" name="asal"><br>
        <label for="tipes">Tipe Pesona</label><br>
        <input id="tipes" name="tipes"><br><br>
        <button type="submit" name="submit">Input</button>
    </form>
</body>
</html>