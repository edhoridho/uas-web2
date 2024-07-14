<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Web</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include 'nav.php'; ?>

    <div class="container mt-4">
        <?php
        error_reporting(0);
        switch ($_GET['page']) {
            case 'home':
                include 'home.php';
                break;

            case 'mahasiswa':
                include 'mahasiswa/show.php';
                break;
            case 'mahasiswaAdd':
                include 'mahasiswa/add.php';
                break;
            case 'mahasiswaDelete':
                include 'mahasiswa/delete.php';
                break;
            case 'mahasiswaEdit':
                include 'mahasiswa/edit.php';
                break;
            case 'mahasiswaCetak':
                include 'mahasiswa/print.php';
                break;

            case 'dosen':
                include 'dosen/show.php';
                break;
            case 'dosenAdd':
                include 'dosen/add.php';
                break;
            case 'dosenDelete':
                include 'dosen/delete.php';
                break;
            case 'dosenEdit':
                include 'dosen/edit.php';
                break;
            case 'dosenCetak':
                include 'dosen/print.php';
                break;

            case 'mataKuliah':
                include 'matkul/show.php';
                break;
            case 'matkulAdd':
                include 'matkul/add.php';
                break;
            case 'matkulDelete':
                include 'matkul/delete.php';
                break;
            case 'matkulEdit':
                include 'matkul/edit.php';
                break;
            case 'matkulCetak':
                include 'matkul/print.php';
                break;
            default:
                include 'home.php';

        }
        ?>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>