<!DOCTYPE html>
<html>
<head>
	<title>ITERAPOR - Itera Lapor!</title>
	<link rel="stylesheet" href="<?php echo base_url('style/home_style.css') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Poppins', sans-serif;">
    
	<div class="container">
		
		<div class="content">

			<div class="header">
				<h1>ITERAPOR!</h1>
				<h2>Itera Lapor, platform pengaduan untuk seluruh civitas akademika ITERA<h2><br>
			</div>

			<form action="" method="POST">
				<input type="text" name="cari" id="cari" placeholder="Cari laporan/komentar yang ingin dicari..." class="cari">
				<button class="btn" type="submit" name="btncari" >Cari</button>
			</form>

			<br><br><br>
			<center>
				<a href="<?php echo site_url('lapor_controller/tambah') ?>">Buat Laporan/Komentar 
				<div class="tambah">
					<a href="<?php echo site_url('lapor_controller/tambah') ?>">
						<img src="<?php  echo base_url('img/plus.png') ?>" width="20px" height="20px">
					</a>	
				</div>
			</center>
				
			<br><p>Laporan/Komentar Terakhir</p><hr>
			
			<?php foreach ($laporan as $value): ?>
				<?php  echo "<p>$value->isi</p><br>"; ?>
				<p><img src="<?php  echo base_url('img/file.png') ?>" width="20px" height="20px"></p>
				<div class="lampir">
					Lampiran: <?= $value->lampiran ?>
				</div>
			<?php echo "<p class='waktu'>Waktu: $value->waktu</p>"; ?>
			
			<p class="lihat"><a href="<?php echo site_url('lapor_controller/detail/'.$value->id) ?>">Lihat Selengkapnya</p>
				
			<div class="next">
				<img src="<?php  echo base_url('img/next-button.png') ?>" width="20px" height="20px"></a>	
			</div>
			
			<hr>
			<?php endforeach; ?>
		</div><br><br><br>

	</div>
</body>

</html>
