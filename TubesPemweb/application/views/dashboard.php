<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tubes Pemweb</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/theme-dashboard/style.css">

	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>

	<div id="box">
		
		<div id="box-content">
			<div id="title">
				<h1>SIMPLE LAPOR!</h1>
			</div>

			<div id="menu-report">
				<div id="search-report">
					<form>
				  		<input id="search" type="text" placeholder="Cari..." required>	
				  		<button id="button" type="button" value="Cari"><i class="fas fa-search"></i> Cari</button> 		
					</form>
				</div>
				<div id="create-report">
					<p>Buat Laporan/Komentar <a href="tambah"><button><i class="fas fa-plus-square"></i></button></a></p>
				</div>
			</div>


			<div id="form-content">
				<div id="info-content">
					<p>Laporan/Komentar Terakhir</p>
					<hr>
				</div>

				<div id="content" style="margin-bottom: 50px;">
					<?php
					foreach($dashboard as $data) : ?>
						<div id="desc-content">
							<?php echo $data->isi ?>	
						</div>

						<div id="aspect">
							<?php echo $data->aspek ?>
						</div>

						<div class="post-date">
							<?php 
							echo "Lampiran : file.png";
							?>
							<?php 
							echo " Wakkt : 20-11-2020 20.00";
							?>
						</div>
						<hr>
					<?php endforeach;?>
				</div>
			</div>
		</div>

	</div>

<!-- Fontawesome JS -->
    <script src="<?php echo base_url() ?> assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

</body>
</html>
