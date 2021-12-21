<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/semua.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<div class="container">
	<h1>SIMPLE LAPOR!</h1>
    <h4>Buat Laporan/Komentar</h4>
   <hr />
   <?php 
   if(validation_errors()):
   echo validation_errors(); 
   endif;
	?>
   <?php echo form_open_multipart('index.php/Home/tambah'); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" ></textarea><br \>
		<select name="aspek">
			<option >- Pilih Aspek Pelaporan/Komentar -</option>
			<option value="Dosen">Dosen</option>
			<option value="Staff">Staff</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Infrastruktur">Infrastruktur</option>
			<option value="Pengajaran">Pengajaran</option>
		</select><br />
		<label>File Diwajibkan Dalam Bentuk Gambar / Dokumen</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Tambah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
	<footer>&copyCopyright 2021 - Randi Baraku (119140030), Putu Ary Kusuma Yudha (119140098) </footer>

</div>
</body>
</html>