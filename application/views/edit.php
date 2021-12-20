<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        
        <title>Edit Laporan</title>
        <link rel="stylesheet" href="<?php echo base_url('style/edit_style.css') ?>">
        <script type="text/javascript" src="<?php echo base_url('asset/script.js') ?>"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <header>EDIT LAPORAN</header>
                <form name="tambah_form" method="POST" onsubmit="return validasi()">
                    <p>Edit Laporan/Komentar</p>
                    <hr><br>
                    <div>
                        <input type="hidden" name="id" value="<?php echo $laporan->id ?>">
                    </div>
                    <div>
                        <textarea name="isi" placeholder="Laporan/Komentar" class="textarea"><?php echo $laporan->isi ?></textarea>
                    </div><br>
                    <div>
                        <select name="aspek" class="select">
                            <option>Pilih Aspek Pelaporan/Komentar</option>
                            <?php
                                $options = array( 'Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran' );
    
                                $output = '';
                                for( $i=0; $i<count($options); $i++ ) {
                                    if($laporan->aspek == $options[$i]){
                                        echo "<option value=".$options[$i]." selected>".$options[$i]."</option>";
                                    }
                                    else{
                                        echo "<option value=".$options[$i].">".$options[$i]."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div>
                        <br>
                        <input type="file" name="lampiran" class="file">
                    </div>
                    <br>
                    <button type="submit" class="btn_edit">EDIT!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>