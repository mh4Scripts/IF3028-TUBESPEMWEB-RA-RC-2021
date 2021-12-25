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
				<h1>BUAT LAPORAN</h1>
			</div>

			<div id="info-content">
				<p>Buat Laporan/Komentar</p>
				<hr>
			</div>

			<div id="form-insert">
				<?php echo form_open_multipart('dashboard/tambah_aksi'); ?>
					<table style="margin:20px auto;">
						<tr>
							<td><textarea style="padding:15px" cols="110" rows="13" type="text" id="isi" name="isi" placeholder="Laporan/Komentar" required=""></textarea></td>
						</tr>
						<tr>
							<td><br>
								<select name="aspek" required="">
								   <option value="">Pilih Aspek Pelaporan/Komentar</option>
								   <option value="Dosen">Dosen</option>
								   <option value="Staff">Staff</option>
								   <option value="Mahasiswa">Mahasiswa</option>
								   <option value="Infrastruktur">Infrastruktur</option>
								   <option value="Pengajaran">Pengajaran</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><br>
									<input type="file" name="file" value="choose-file" required="">
							</td>
						</tr>
						<tr>
							<td><br><input type="submit" onClick="return validasi()" value="Buat LAPOR!"></td>
						</tr>
					</table>
					<hr style="margin-bottom:4%;">
				<?php echo form_close(); ?>
			</div>	
		</div>
	</div>
	
<script type="text/javascript">
function wordCount(text) {
  totalCount = 0;
  words = text.split(' ')
  words.forEach(function(word) {
    if (word.length > 0) {
      totalCount++;
    }
  })
  
  return totalCount;
}

window.validasi = function() {
 textarea = document.getElementById('isi');
 words = wordCount(textarea.value);
 if(words < 20) {
   alert('Jumlah kata minimal 20');
   return false;
 }
}
</script>

</body>
</html>
