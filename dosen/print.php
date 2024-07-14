<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Data</title>
	<style>
		* {
			font-family: Arial, Helvetica, sans-serif;
		}

		table {
			font-size: 12px;
			border-collapse: collapse;
			width: 100%;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 align="center">Laporan Data Dosen</h1>

		<table border="1" cellpadding="5">
			<thead>
				<tr>
					<th>NIDN</th>
					<th>Nama Lengkap</th>
					<th>Telepon</th>
					<th>Email</th>
					<th>Pendidikan Terakhir</th>
					<th>Alamat</th>
					<th>Jurusan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include '../connection.php';
				$query = mysqli_query($con, "SELECT * FROM dosen");
				while ($data = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $data['nidn']; ?></td>
						<td><?php echo $data['nama']; ?></td>

						<td><?php echo $data['telepon']; ?></td>
						<td><?php echo $data['email']; ?></td>

						<td><?php echo $data['pendidikan_terakhir']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td>
							<?php echo ($data['jurusan'] == 'TI') ? 'Teknik Informatika' : "Sistem Informasi" ?>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>

<script>
	window.print();
</script>

</html>