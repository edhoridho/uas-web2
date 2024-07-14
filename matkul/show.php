<h4>Tambah Data mata_kuliah</h4>
<a href="?page=matkulAdd" class="btn btn-primary mb-4">Tambah Data</a>
<a href="matkul/print.php" class="btn btn-warning mb-4" target="_blank">Cetak</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Kode Mata Kuliah</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Jurusan</th>
            <th>Akreditasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'connection.php';
        $query = mysqli_query($con, "SELECT * FROM matakuliah");
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['kode_mk']; ?></td>
                <td><?php echo $data['nama_mk']; ?></td>
                <td><?php echo $data['sks'] ?></td>
                <td><?php echo $data['semester']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td><?php echo $data['akreditasi']; ?></td>
                <td>
                    <a class="btn btn-sm btn-success" href="?page=matkulEdit&id=<?= $data['id']; ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="?page=matkulDelete&id=<?= $data['id']; ?>"
                        onclick="return confirm('Lanjutkan menghapus data ?')">Hapus </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>