<?php
include 'connection.php';
$id = $_GET['id'];

// echo "<h1>$id </h1>";

// select data
$query = mysqli_query($con, "SELECT * FROM dosen WHERE id = $id");
$data = mysqli_fetch_array($query);

// // update data
if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];

    mysqli_query($con, "UPDATE dosen SET nama='$nama',nidn='$nidn',jurusan='$jurusan',email='$email',telepon='$telepon',alamat='$alamat',pendidikan_terakhir='$pendidikan_terakhir' WHERE id=$id");

    //     // header("Location :index.php");
    echo "<script>window.location.href ='?page=dosen';</script>";
}
?>


<h4 class="mb-5">Edit Data Dosen</h4>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
        <div class="col-sm-10">
            <input type="text" name="nidn" class="form-control" placeholder="Masukan nidn..."
                value="<?= $data['nidn']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap..."
                value="<?= $data['nama']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan">
                <option value="-">- Pilih Jurusan-</option>
                <option value="TI" <?php echo ($data['jurusan'] == 'TI') ? "selected" : ""; ?>>Teknik Informatika</option>
                <option value="SI" <?php echo ($data['jurusan'] == 'SI') ? "selected" : ""; ?>>Sistem Informasi</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" name="email" class="form-control" placeholder="Masukan email..."
                value="<?= $data['email'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
        <div class="col-sm-10">
            <input type="text" name="telepon" class="form-control" placeholder="Masukan telepon..."
                value="<?= $data['telepon']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat ..."
                value="<?= $data['alamat'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pendidikan_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
        <div class="col-sm-10">
            <input type="text" name="pendidikan_terakhir" class="form-control"
                placeholder="Masukan pendidikan terakhir..." value="<?= $data['pendidikan_terakhir'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=dosen" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>