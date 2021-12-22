<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/detail_style.css') ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container">
		
		<div class="content">
			<h1>DETAIL LAPORAN</h1>
			<p>Detail Laporan/Komentar</p>
			<hr><br>
		
			<p>
				<?php echo $laporan->isi; ?>
			</p>
			
			<p>Lampiran: <?php echo $laporan->lampiran; ?></p>

            <div>
                <a href="<?php echo site_url('lapor_controller/edit/'.$laporan->id) ?>">
                <img src="<?php echo base_url('img/edit.png') ?>" width="25px" height="25px" class="imgedit"></a>				
            </div>
			
			<p>Waktu: <?php echo $laporan->waktu; ?> Aspek: <?php echo $laporan->aspek; ?> </p>

            <div class="edt">
				<button>
					<a href="<?php  echo site_url('lapor_controller/edit/'.$laporan->id) ?>" style="color: black;">Edit</a>
				</button>
			</div>
			
			<div class="hps">
                <button type="submit">
					<a href="<?php echo site_url('lapor_controller/delete/'.$laporan->id) ?>" onclick="return confirm('Anda yakin ingin menghapus laporan ini?');" style="color: black; ">Hapus Laporan/Komentar</a>	
                </button>
			</div>

            <div class="imgdel">
				<a href="<?php echo site_url('lapor_controller/delete/'.$laporan->id) ?>">
				<img src="<?php echo base_url('img/delete.png') ?>" width="20px" height="20px"></a> 
			</div>

			<br>
			<hr>

		</div><br><br>

	</div>

</body>
</html>