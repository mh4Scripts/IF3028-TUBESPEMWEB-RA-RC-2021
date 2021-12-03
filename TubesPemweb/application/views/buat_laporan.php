<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tubes Pemweb</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/theme-buat_laporan/style.css">
</head>
<body>

	<div id="box">
		<div id="box-content">
			<div id="title">
				<h1>SIMPLE LAPOR!</h1>
			</div>

			<div id="info-content">
				<p>Laporan/Komentar Terakhir</p>
				<hr>
			</div>

			<div id="form-insert">
				
				<?php echo form_open_multipart('dashboard/tambah_aksi'); ?>
					<table style="margin:20px auto;">
						<tr>
							<td><textarea style="padding:15px" cols="110" rows="15" type="text" name="isi" placeholder="Laporan/Komentar"></textarea></td>
						</tr>
						<tr>
							<td><br>
								<select name="aspek">
								   <option value="None">Pilih Aspek Pelaporan/Komentar</option>
								   <option value="A">A</option>
								   <option value="B">B</option>
								   <option value="C">C</option>
								   <option value="D">D</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><br>
								<div id="choose-file" name="input-file">
									<input type="file" name="file" value="choose-file" required="">
								</div>
							</td>
						</tr>
						<tr>
							<td><br><input type="submit" value="Tambah"></td>
						</tr>
					</table>
				
				<?php echo form_close(); ?>
			</div>	
		</div>
	</div>
	

</body>
</html>
