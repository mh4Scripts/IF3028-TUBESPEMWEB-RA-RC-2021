<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/detail_style.css') ?>">

</head>
<body>

	<div class="container">
		
		<div class="content">
        
        <header>DETAIL LAPORAN</header>
	
		<br>
		
		<p>Detail Laporan/Komentar</p>
		<hr>

		<br>
		
			<p>
				<?php echo $laporan->isi; ?>
			</p>
			
			<p>Lampiran: <?php echo $laporan->lampiran; ?></p>

            <div>

                <a href="<?php echo site_url('lapor_controller/edit/'.$laporan->id) ?>">

                <img src="<?php echo base_url('img/edit.png') ?>" width="25px" height="25px" style="margin-bottom: -43px; margin-left: 410px;"> 

            </a>

            </div>
			

			<p>Waktu: <?php echo $laporan->waktu; ?> Aspek: <?php echo $laporan->aspek; ?> </p>

            <div style="margin-top: -42px; margin-left: 440px;">
			<button style="background-color: #FAAA8C; border-radius: 5px; ">
			<a href="<?php  echo site_url('lapor_controller/edit/'.$laporan->id) ?>" style="color: black;">Edit</a>
			</button>
			</div>
			
			<div class="detail">
                <button type="submit" style="background-color: #FAAA8C; margin-top: -2px; margin-right: 10px; border-radius: 5px; ">

				<a href="<?php echo site_url('lapor_controller/delete/'.$laporan->id) ?>" onclick="return confirm('Anda yakin ingin menghapus laporan ini?');" style="color: black; ">
				Hapus Laporan/Komentar
				</a>
                </button>

			</div>

            <div style="margin-left: 495px; margin-top:-28px;">

				<a href="<?php echo site_url('lapor_controller/delete/'.$laporan->id) ?>">

				<img src="<?php echo base_url('img/delete2.png') ?>" width="20px" height="20px"> 

				</a>

			</div>

			

		<br>
		
		<hr>

		<br><br>

	</div>

</body>
</html>