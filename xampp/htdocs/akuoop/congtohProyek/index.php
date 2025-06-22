<?php
require_once 'class.php';

$buku = new Buku();

if (isset($_POST['submit'])) {
    $buku->tambah($_POST['judul'], $_POST['penulis'], $_POST['tahun']);
}

$data = $buku->tampilkanSemua();
?>

<h2>Tambah Buku</h2>
<form method="post">
    Judul: <input type="text" name="judul"><br>
    Penulis: <input type="text" name="penulis"><br>
    Tahun: <input type="number" name="tahun"><br>
    <input type="submit" name="submit" value="Tambah">
</form>

<h2>Daftar Buku</h2>
<ul>
<?php foreach ($data as $b): ?>
    <li><strong><?= htmlspecialchars($b['judul']) ?></strong> oleh <?= htmlspecialchars($b['penulis']) ?> (<?= $b['tahun'] ?>)</li>
<?php endforeach; ?>
</ul>