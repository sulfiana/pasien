<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
</head>

<body>

  <?php
  include 'koneksi.php';
  $kode_pasien = $_GET['kode_pasien'];

  $query = "SELECT * FROM tbl_pasien WHERE kode_pasien = '$kode_pasien'";
  $result = mysqli_query($db, $query);
  if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
  }

  ?>
  <header>
    <h3>Form Edit Data Pasien </h3>
  </header>

  <form action="proses-edit.php" method="POST">

    <fieldset>
      <p>

        <input type="hidden" name="kode_pasien" value="<?php echo $data['kode_pasien'] ?>">
      </p>
      <p>
        <label>Nama Pasien:</label>
        <input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>">
      </p>
      <p>
        <label>Jenis Kelamin: </label>
        <?php $jenis_kelamin = $data['jk']; ?>
        <label><input type="radio" name="jk" value="Laki-laki" <?php echo ($jenis_kelamin == 'Laki-laki') ? "checked" : "" ?>> Laki-laki</label>
        <label><input type="radio" name="jk" value="Perempuan" <?php echo ($jenis_kelamin == 'Perempuan') ? "checked" : "" ?>> Perempuan</label>
      </p>

      <p>
        <label>No. HP :</label>
        <input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>">
      </p>

      <p>
        <label>Alamat :</label>
        <textarea name="alamat"><?php echo $data['alamat'] ?></textarea>
      </p>
      <p>
        <input type="submit" value="Update">
      </p>
    </fieldset>

  </form>
</body>

</html>