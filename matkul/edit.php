<?php
include 'connection.php';
$id = $_GET['id'];

// echo "<h1>$id</h1>";

// select data
$query = mysqli_query($con, "SELECT * FROM matakuliah WHERE id = $id");
$data = mysqli_fetch_array($query);

// // update data
if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $jurusan = $_POST['jurusan'];
    $akreditasi = $_POST['akreditasi'];

    mysqli_query($con, "UPDATE matakuliah SET kode_mk='$kode_mk',nama_mk='$nama_mk',sks='$sks',semester='$semester',jurusan='$jurusan',akreditasi='$akreditasi' WHERE id=$id");

    //     // header("Location :index.php");
    echo "<script>window.location.href ='?page=mataKuliah';</script>";
}
?>


<h4 class="mb-5">Edit Data Mata Kuliah</h4>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="kode_mk" class="col-sm-2 col-form-label">kode_mk</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah..."
                value="<?= $data['kode_mk']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_mk" class="col-sm-2 col-form-label">nama_mk</label>
        <div class="col-sm-10">
            <input type="text" name="nama_mk" class="form-control" placeholder="Masukan nama mata kuliah..."
                value="<?= $data['nama_mk']; ?>">
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
        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
        <div class="col-sm-10">
            <input type="text" name="sks" class="form-control" placeholder="Masukan sks..."
                value="<?= $data['sks']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
            <input type="text" name="semester" class="form-control" placeholder="Masukan semester ..."
                value="<?= $data['semester'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
        <div class="col-sm-10">
            <select class="form-select" name="akreditasi">
                <option value="A" <?php echo ($data['akreditasi'] == 'A') ? "selected" : ""; ?>>A</option>
                <option value="B+" <?php echo ($data['akreditasi'] == 'B+') ? "selected" : ""; ?>>B+</option>
                <option value="B" <?php echo ($data['akreditasi'] == 'B') ? "selected" : ""; ?>>B</option>
                <option value="C+" <?php echo ($data['akreditasi'] == 'C+') ? "selected" : ""; ?>>C+</option>
                <option value="C" <?php echo ($data['akreditasi'] == 'C') ? "selected" : ""; ?>>C</option>
                <option value="D" <?php echo ($data['akreditasi'] == 'D') ? "selected" : ""; ?>>D</option>
                <option value="E" <?php echo ($data['akreditasi'] == 'E') ? "selected" : ""; ?>>E</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mata_kuliah" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>