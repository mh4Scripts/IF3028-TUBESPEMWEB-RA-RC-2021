<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tubes Pemweb</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/theme-detail_laporan/style.css">
</head>
<body>

	<div id="box">
		<div id="box-content">
			<div id="title">
				<h1>SIMPLE LAPOR!</h1>
			</div>

			<div id="detail-content">
				<p>Detail Laporan/Komentar</p>
				<hr>
			</div>

			<div id="content" style="margin-bottom: 50px;">
				<?php
					foreach($info_detail as $data) : ?>
					<div id="desc-content">
						<?php echo $data->isi;?>	
					</div>

					<div id="aspect">
						<?php echo $data->aspek;?>
					</div>

					<div class="post-date">
						<?php 
						echo "Lampiran : file.png";
						?>
						<?php 
						echo " Wakkt : 20-11-2020 20.00";
						?>
					</div>

					<?php echo anchor('dashboard/hapus/'.$data->id, 'Hapus', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>
					<hr>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	
	<script>
		function confirmDialog() {
 			return confirm('Apakah Anda yakin akan menghapus Laporan ini?')
		}
	</script>


</body>
</html>