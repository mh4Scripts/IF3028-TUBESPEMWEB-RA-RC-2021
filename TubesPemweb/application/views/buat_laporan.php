<html>
<head>
	<title>Tambah Laporan</title>
</head>
<body>
	<center>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url().'dashboard/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><input type="text" name="isi"></td>
			</tr>
			<tr>
				<td>Aksi</td>
				<td><input type="text" name="aspek"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>