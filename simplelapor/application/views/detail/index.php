<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di asset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/asset/css/reset.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
					


	<h1>SIMPLE LAPOR!</h1>

	<h4>Detail Laporan / Komentar</h4>
	<hr />
	
	<ul>
		<li>
			<h4 style="margin-bottom: 20px;"></h4>

			<div class="b">
					<?php echo $lapor["isi"]; ?>
					</div>

			<br>
			<h4 class="lampiran">Lampiran : </h4><br>

			<?php 
				$ekstensifile = explode('.',$lapor["file"]); //fungsi untuk mecah string dengan pemecah . ,indonesia.jpg = ['indonesia','jpg']
				$ekstensifile = strtolower(end($ekstensifile));
				if($ekstensifile == "pdf"){
			?>
			<embed src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>" />
			<?php } else { ?>
			<img id="filedetail" style="width: 700px;" src="<?php echo base_url() ?>/asset/file/<?php echo $lapor["file"]; ?>">
			<?php } ?>

			<div style="clear: both"></div>
			<br>
			<a href="<?php echo base_url() ?>index.php/Home/delete/<?php echo $lapor["id"]?>" onclick="return confirm('yakin ingin hapus?');"><h4 class="hapus">| Hapus laporan / komentar <i class="fa fa-trash-o"></i></h4></a>
			<a href="<?php echo base_url() ?>index.php/Home/detail2/<?php echo $lapor["id"]?>" ><h4 class="hapus">Ubah laporan / komentar <i class="fa fa-pencil"></i> |</h4></a>
			<h4 class="waktudetail" style="margin-right: 30px;">Waktu : <?php echo $lapor["tanggal"]; ?></h4>
			<h4 class="aspek">Aspek : <?php echo $lapor["aspek"]; ?></h4>
			<div style="clear: both"></div>
		</li>
		<br>
		<hr />
	</ul>

	<footer>
		&copyCopyright 2021 - itera.ac.id
	</footer>
</div>

</body>
</html>

