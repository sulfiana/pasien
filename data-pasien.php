<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
</head>

<body>
  <header>
    <h3>Daftar Pasien</h3>
  </header>
  <nav>
    <a href="form-pasien.php">[+] Tambah Baru</a>
  </nav>

  <br>
  <br>
  <table border="1">
    <thead>
      <tr>
        <th>Kode Pasien</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No Telf.</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php

      include 'koneksi.php';

      $query = "SELECT * FROM tbl_pasien";
      $result = mysqli_query($db, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($data = mysqli_fetch_assoc($result)) { ?>

          <tr>
            <td><?php echo $data['kode_pasien'] ?></td>
            <td><?php echo $data['nama_pasien'] ?></td>
            <td><?php echo $data['jk'] ?></td>
            <td><?php echo $data['no_hp'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td>
              <a href="edit-pasien.php?kode_pasien=<?php echo $data['kode_pasien'] ?>">EDIT</a>
              <a href="hapus-pasien.php?kode_pasien=<?php echo $data['kode_pasien'] ?>">HAPUS</a>
            </td>
          </tr>
      <?php }
      } else ?>
      <tr>

      </tr>
    </tbody>
  </table>
</body>

</html>