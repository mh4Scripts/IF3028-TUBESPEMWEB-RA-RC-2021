<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tubes Pemweb</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/theme-detail_laporan/style.css">


	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assets/css/font-awesome.css">
</head>
<body>

	<div id="box">
		<div id="box-content">
			<div id="title">
				<h1>DETAIL LAPORAN!</h1>
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

					<div class="file-attachment">
						<p>Lampiran :</p>
						<img src="<?= base_url('uploads/'.$data->file) ?>" width="18%"><br><br><br>


						<table width="100%">
							<tr>
								<td width="25%">Wakkt : <?php echo " 20-11-2020 20.00";?></td>	
								<td>Aspek : <?php echo $data->aspek;?></td>
								<td width="25%" align="right"><?php echo anchor('dashboard/hapus/'.$data->id, 'Hapus Laporan/Komentar <i class="fa fa-times"></i>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?></td>
							</tr>
						</table>
					</div>

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
