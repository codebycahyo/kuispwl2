<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kasir Sederhana</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="card">
  <h1>Kasir Sederhana</h1>
  <!-- Method POST, data dikirim ke halaman baru (hasil.php) -->
  <form action="hasil.php" method="POST">
    <label for="nama">Nama Pembeli</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama pembeli" required>

    <label for="produk">Nama Produk</label>
    <input type="text" id="produk" name="produk" placeholder="Masukkan nama produk" required>

    <label for="tanggal">Tanggal</label>
    <input type="date" id="tanggal" name="tanggal" required>

    <label for="kategori">Kategori</label>
    <select id="kategori" name="kategori" required>
      <option value="">-- Pilih Kategori --</option>
      <option value="Peralatan Komputer">Peralatan Komputer</option>
      <option value="Aksesoris">Aksesoris</option>
      <option value="Elektronik">Elektronik</option>
    </select>

    <label for="harga">Harga Barang</label>
    <input type="number" id="harga" name="harga" min="0" placeholder="Contoh: 150000" required>

    <label for="jumlah">Jumlah Barang</label>
    <input type="number" id="jumlah" name="jumlah" min="1" placeholder="Contoh: 4" required>

    <label for="bayar">Uang Bayar</label>
    <input type="number" id="bayar" name="bayar" min="0" placeholder="Contoh: 500000" required>

    <label>Metode Bayar</label>
    <div class="radio">
      <label><input type="radio" name="metode" value="Tunai" required> Tunai</label>
      <label><input type="radio" name="metode" value="QRIS"> QRIS</label>
    </div>

    <button type="submit">Hitung Pembayaran</button>
  </form>
  <div class="id">Nama Anda - NIM Anda - Kelas</div>
</div>
</body>
</html>
