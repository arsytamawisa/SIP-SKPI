<!DOCTYPE html>
<html>
<head>
	<title>SKPI UTY</title>
</head>
<body>

	<?php
	  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Siswa.xlsx"');
	// header("Content-type: application/vnd-ms-excel");
	// header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

	<table border="1">

		<tr>
			<th>NIM</th>
			<th>NAMA MAHASISWA</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
		</tr>
		<?php foreach ($mahasiswa as $key => $value): ?>
		<tr>
			<td><?= $value['nim'] ?></td>
			<td><?= $value['nama_mahasiswa'] ?></td>
			<td><?= $value['nim'] ?></td>
			<td><?= $value['password'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>