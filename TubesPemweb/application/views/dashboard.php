<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tubes Pemweb</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/theme-dashboard/style.css">

	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ;?>/assets/css/font-awesome.css">
</head>

<body>

	<div id="box">
		
		<div id="box-content">
			<div id="title">
				<h1>DASHBOARD</h1>
			</div>

			<div id="menu-report">
				<div id="search-report">
					<form>
				  		<input id="search" type="text" placeholder="Cari..." required>	
				  		<button id="button" type="button" value="Cari"><i class="fa fa-search"></i> Cari</button> 		
					</form>
				</div>
				<div id="create-report">
					<p>Buat Laporan/Komentar <a href="<?php echo site_url('/dashboard/tambah/')?>"><button><i class="fa fa-plus-square fa-lg"></i></button></a></p>
				</div>
			</div>


			<div id="form-content">
				<div id="info-content">
					<p>Laporan/Komentar Terakhir</p>
					<hr>
				</div>

				<div id="content" style="margin-bottom: 50px;">
					<?php foreach($hal_utama as $data) : ?>					
						<div id="desc-content">
							<?php echo substr($data->isi, 0,450) ;?><br><br>
						
							<table width="100%">
								<tr>
									<td>Lampiran : <?php echo ($data->file);?></td>
									<td align="right"><?php echo "Wakkt : 20-11-2019 20:00"?></td>					
									<td width="19.5%" id="more" align="right"><a href="<?php echo site_url('/dashboard/readmore/'.$data->id) ?>">Baca Selengkapnya ></a></td>
								</tr>
							</table>
						</div>
						<hr>
					<?php endforeach;?>
				</div>
			</div>
		</div>

		<div>
			<p><i class="fa fa-ellipsis-v fa-2x" aria-hidden="true"></i></p>
		</div>

	</div>

</body>
</html>
