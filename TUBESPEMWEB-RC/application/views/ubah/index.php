<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE LAPOR!</title>
	<!-- file css ada di aset/css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/aset/css/reset.css">
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
   <?php echo form_open_multipart('index.php/Tampilandepan/ubah/'.$lapor["id"]); ?>
	    <textarea rows="16" cols="136" style="width: 800px;" name="isi" placeholder="Isi Laporan"><?php echo $lapor["isi"]; ?></textarea><br \>
		<select name="aspek">
			<?php foreach ($aspek as $i) { ?>
				<?php if($i == $lapor["aspek"]){ ?>
					<option value="<?= $i; ?>" selected><?= $i; ?></option>
				<?php }else{ ?>
					<option value="<?= $i; ?>"><?= $i; ?></option>
				<?php } ?>

			<?php } ?>
		</select><br />
		<label>File Diwajibkan Dalam Bentuk Gambar / PDF (max 4Mb)</label><br \>
		<input id="file" type="file" name="File" ><br />
		<input id="submit" value="Ubah" type="submit" name="submit">
		<div style="clear: both;"></div>
	<?php echo form_close(); ?>
	<hr>
</div>
</body>
</html>