<!DOCTYPE html>
<html>

<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/semua.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
</head>
<body>

<!-- main content -->
<div class="container">
	<h1>SIMPLE LAPOR!</h1>

	<h4>Detail Laporan / Komentar</h4>
	<hr />
	
	<ul>
		<li>
			<h4 id="detail"><?php echo $lapor["isi"]; ?></h4>
			<h4 class="lampiran">Lampiran : <a href="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>"><?=$lapor["file"]; ?></a></h4><br \>

			<?php 
				$ekstensifile = explode('.',$lapor["file"]);
				$ekstensifile = strtolower(end($ekstensifile));

				if ($ekstensifile == "jpg" or $ekstensifile == "jpeg" or $ekstensifile == "png" or $ekstensifile == "gif") {
			?>
				<img id="filedetail" src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>">
			<?php
			 	} else {
			?>
				<img id="file_dokumen" src="<?php echo base_url() ?>/asset/images/<?php echo $ekstensifile; ?>.png">
			<?php 	 } ?>

			<div style="clear: both"></div>
			<a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"]?>" onclick="return confirm('yakin ingin hapus?');"><h4 class="hapus">| Hapus laporan / komentar</h4></a>
			<a href="<?php echo base_url() ?>index.php/Home/detail2/<?php echo $lapor["id"]?>" ><h4 class="hapus">Ubah laporan / komentar |</h4></a>
			<h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>
			<h4 class="aspek">Aspek : <?php echo $lapor["aspek"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	</ul>

	<footer>
		&copyCopyright 2021 - Randi Baraku (119140030) - Putu Ary Kusuma Yudha (119140098)
	</footer>
</div>

</body>
</html>

