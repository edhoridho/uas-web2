<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $npm      = $_POST['npm'];
  $nama     = $_POST['nama'];
  $jurusan  = $_POST['jurusan'];
  $alamat   = $_POST['alamat'];
  $email    = $_POST['email'];
  $telepon  = $_POST['telepon'];

  $result = mysqli_query($con, "INSERT INTO mahasiswa(npm,nama,jurusan,alamat,email,telepon) VALUES('$npm','$nama','$jurusan','$alamat','$email','$telepon')");

  echo "<script>window.location.href ='?page=mahasiswa';</script>";
}
?>

<h4 class="mb-5">Tambah Data Mahasiswa</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
        <div class="col-sm-10">
            <input type="text" name="npm" class="form-control" placeholder="Masukan nim...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan">
                <option value="-">- Pilih Jurusan-</option>
                <option value="TI">Teknik Informatika</option>
                <option value="SI">Sistem Informasi</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telepon"  class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
            <input type="text" name="telepon" class="form-control" placeholder="Masukan telepon...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat ...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Masukan email...">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mahasiswa" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>
    
