<?php
include 'connection.php';

$tables = ['mahasiswa', 'dosen', 'matakuliah'];
$counts = [];

foreach ($tables as $table) {
    $query = mysqli_query($con, "SELECT * FROM $table");
    $counts[$table] = mysqli_num_rows($query);
}

$totalMahasiswa = $counts['mahasiswa'];
$totalDosen = $counts['dosen'];
$totalMatKul = $counts['matakuliah'];
?>

<div class="row my-5">
    <h1 class="text-primary">Rekap Data</h1>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mahasiswa</strong></div>
            <div class="card-body">
                <i class="fa fa-user-graduate fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $totalMahasiswa ?></h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Dosen</strong></div>
            <div class="card-body">
                <i class="fa fa-users fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $totalDosen ?></h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-default mb-3 text-center text-secondary">
            <div class="card-header"><strong>Data Mata Kuliah</strong></div>
            <div class="card-body">
                <i class="fa fa-book fa-3x"></i>
                <h4 class="card-title mt-4"><?php echo $totalMatKul ?></h4>
            </div>
        </div>
    </div>
</div>
<div class="row my-5">
    <h1 class="text-primary">Profil</h1>
    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Foto</strong></div>
            <div class="card-body text-center">
                <img src="assets/img/fotoFormal2.jpg" alt="Edho" width="150px" class="rounded-circle">
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Media Sosial</strong></div>
            <div class="card-body text-center">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="https://wa.me/62895332967800?text=halo+edho" target="_blank"
                            class="btn btn-link">Whatsapp</a></li>
                    <li class="list-group-item"><a href="https://github.com/edhoridho" target="_blank"
                            class="btn btn-link">Github</a></li>
                    <li class="list-group-item"><a href="https://www.instagram.com/dho_mhmmd_/" target="_blank"
                            class="btn btn-link">Instagram</a>
                    <li class="list-group-item"><a href="https://web.facebook.com/profile.php?id=61555876306218"
                            target="_blank" class="btn btn-link">Facebook</a>

                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card border-default mb-3">
            <div class="card-header text-center text-secondary"><strong>Biodata</strong></div>
            <div class="card-body text-center">
                <table class="table" style="width:100%; margin:0 auto;">
                    <tbody>
                        <tr>
                            <td align="right" width="30%"><strong>NPM :</strong></td>
                            <td align="left" width="70%">2210010618</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Nama Lengkap :</strong></td>
                            <td align="left" width="70%">Muhammad Ridho</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Fakultas :</strong></td>
                            <td align="left" width="70%">Teknologi Informasi</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Program Studi :</strong></td>
                            <td align="left" width="70%">Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tempat Lahir :</strong></td>
                            <td align="left" width="70%">Amuntai</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Tanggal Lahir :</strong></td>
                            <td align="left" width="70%">16 November 2002</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>Telepon :</strong></td>
                            <td align="left" width="70%">0895 3329 67800</td>
                        </tr>
                        <tr>
                            <td align="right" width="30%"><strong>email :</strong></td>
                            <td align="left" width="70%">bismillahobisa@gmail.com</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>