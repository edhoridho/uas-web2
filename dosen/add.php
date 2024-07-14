<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

    $result = mysqli_query($con, "INSERT INTO dosen(nama,nidn,jurusan,email,telepon,alamat,pendidikan_terakhir) VALUES('$nama','$nidn','$jurusan','$email','$telepon','$alamat','$pendidikan_terakhir')");

    echo "<script>window.location.href ='?page=dosen';</script>";
}
?>

<h4 class="mb-5">Tambah Data Dosen</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
        <div class="col-sm-10">
            <input type="text" name="nidn" class="form-control" placeholder="Masukan nidn...">
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
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" placeholder="Masukan email...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
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
        <label for="pendidikan_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control"
                placeholder="Masukan pendidikan terakhir...">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=dosen" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>