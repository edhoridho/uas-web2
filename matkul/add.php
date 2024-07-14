<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    $jurusan = $_POST['jurusan'];
    $akreditasi = $_POST['akreditasi'];

    $result = mysqli_query($con, "INSERT INTO matakuliah(kode_mk,nama_mk,sks,semester,jurusan,akreditasi) VALUES('$kode_mk','$nama_mk','$sks','$semester','$jurusan','$akreditasi')");

    echo "<script>window.location.href ='?page=mataKuliah';</script>";
}
?>

<h4 class="mb-5">Tambah Data Mata Kuliah</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="kode_mk" class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="kode_mk" class="form-control" placeholder="Masukan kode mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_mk" class="col-sm-2 col-form-label">Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="nama_mk" class="form-control" placeholder="Masukan mata kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
            <input type="text" name="semester" class="form-control" placeholder="Masukan semester..." min="1" max="15">
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
        <label for="sks" class="col-sm-2 col-form-label">SKS</label>
        <div class="col-sm-10">
            <input type="number" name="sks" class="form-control" placeholder="Masukan sks..." min="1" max="4">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
        <div class="col-sm-10">
            <select class="form-select" name="akreditasi">
                <option value="-">- Pilih Akreditasi-</option>
                <option value="A">A</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=mataKuliah" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>