
<h4>Tambah Data Mahasiswa</h4>
<a href="?page=mahasiswaAdd" class="btn btn-primary mb-4">Tambah Data</a>
<a href="mahasiswa/print.php" class="btn btn-warning mb-4" target="_blank">Cetak</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Jurusan</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>	
        <?php
            include 'connection.php';
            $query = mysqli_query($con, "SELECT * FROM mahasiswa");
            while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['npm']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td>
                    <?php echo ($data['jurusan']) == 'TI' ? 'Teknik Informatika' : 'Sistem Informasi'; ?>
                </td>
                <td><?php echo $data['telepon']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td>
                    <a class="btn btn-sm btn-success" href="?page=mahasiswaEdit&id=<?= $data['id']; ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="?page=mahasiswaDelete&id=<?= $data['id']; ?>" onclick="return confirm('Lanjutkan menghapus data ?')">Hapus </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
