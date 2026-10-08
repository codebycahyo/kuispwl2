<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") { header("Location: index.php"); exit; }

$nama     = htmlspecialchars(trim($_POST["nama"] ?? ""));
$produk   = htmlspecialchars(trim($_POST["produk"] ?? ""));
$tanggal  = htmlspecialchars($_POST["tanggal"] ?? "");
$kategori = htmlspecialchars($_POST["kategori"] ?? "");
$metode   = htmlspecialchars($_POST["metode"] ?? "");
$harga    = (float)($_POST["harga"] ?? 0);
$jumlah   = (int)($_POST["jumlah"] ?? 0);
$bayar    = (float)($_POST["bayar"] ?? 0);

$total      = $harga * $jumlah;      // Total Harga = Harga Barang x Jumlah Barang
$diskon     = $total * 0.10;         // Diskon = Total Harga x 10%
$totalBayar = $total - $diskon;      // Total Pembayaran setelah diskon
$kembalian  = $bayar - $totalBayar;  // Kembalian = Uang Bayar - Total Pembayaran
$kurang     = $bayar < $totalBayar;

function rp($n){ return "Rp " . number_format($n, 0, ",", "."); }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hasil Transaksi</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
  <h1>Hasil Transaksi</h1>
  <table>
    <tr><td>Nama Pembeli</td><td><?= $nama ?></td></tr>
    <tr><td>Nama Produk</td><td><?= $produk ?></td></tr>
    <tr><td>Tanggal Pembelian</td><td><?= $tanggal ?></td></tr>
    <tr><td>Kategori</td><td><?= $kategori ?></td></tr>
    <tr><td>Harga</td><td><?= rp($harga) ?></td></tr>
    <tr><td>Jumlah Barang</td><td><?= $jumlah ?></td></tr>
    <tr><td>Uang Pembayaran</td><td><?= rp($bayar) ?></td></tr>
    <tr><td>Metode Pembayaran</td><td><?= $metode ?></td></tr>
    <tr class="sep"><td>Total Pembelian</td><td><?= rp($total) ?></td></tr>
    <tr class="sep"><td>Diskon (10%)</td><td><?= rp($diskon) ?></td></tr>
    <tr class="sep"><td>Total Pembayaran</td><td><?= rp($totalBayar) ?></td></tr>
    <tr class="total"><td>Kembalian</td><td><?= $kurang ? "-" : rp($kembalian) ?></td></tr>
  </table>
  <?php if ($kurang): ?>
    <p class="err">Uang bayar kurang <?= rp($totalBayar - $bayar) ?> dari total pembayaran.</p>
  <?php endif; ?>
  <a class="btn" href="index.php">Transaksi Baru</a>
  <div class="id">Nama Anda - NIM Anda - Kelas</div>
</div>
</body>
</html>
