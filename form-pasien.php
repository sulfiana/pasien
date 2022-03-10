<!DOCTYPE html>
<html>

<head>
  <title>
  </title>
</head>

<body>

  <header>
    <h3>Form Pasien Baru</h3>
  </header>

  <form action="proses-simpan.php" method="POST">

    <fieldset>
      <p>
        <label>Kode Pasien : </label>
        <input type="number" name="kode_pasien">
      </p>
      <p>
        <label>Nama Pasien:</label>
        <input type="text" name="nama_pasien">
      </p>
      <p>
        <label>Jenis Kelamin :</label>
        <label><input type="radio" name="jk" value="Laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
      </p>

      <p>
        <label>No. HP :</label>
        <input type="text" name="no_hp">
      </p>

      <p>
        <label>Alamat :</label>
        <textarea name="alamat" cols="30" rows="10"></textarea>
      </p>
      <p>
        <input type="submit" value="Simpan">
      </p>
    </fieldset>

  </form>
</body>

</html>