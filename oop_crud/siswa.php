<?php 
include 'class/dasis.php';
$Dasis = new Dasis();
$datasiswa = $Dasis->tampilDatasiswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang</title>
</head>
<body>
    <div class="barang">
      <h1>Data Barang</h1>
      <a href="tambah_siswa.php">Tambah</a>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Nama Barang</th>
          <th>kelas</th>
          <th>Foto</th>
          <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($datasiswa as $data) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $data["nama_siswa"]; ?></td>
          <td><?= ($data["kelas"]); ?></td>
          <td><img src="foto/<?= $data["foto"]; ?>" alt="Sepatu Nike Black Edition" width="90"></td>
          <td>
            <a href="edit_siswa.php?id=<?= $data["id_siswa"]; ?>" class="edit">Edit</a>
            <a href="hapus_siswa.php?id=<?= $data["id_siswa"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
</body>
</html>