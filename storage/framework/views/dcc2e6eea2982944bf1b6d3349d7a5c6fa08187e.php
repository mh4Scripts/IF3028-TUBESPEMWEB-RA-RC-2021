<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="detail_page.css">
        <title>
            SIMPLE LAPOR!
        </title>
    </head>

    <body>
        <h1>SIMPLE LAPOR!</h1>
        <p>Detail Laporan/Komentar</p>
        <hr>
        <p>
            <?php echo e($posts->laporan); ?>

        </p>
        <div class="lampiran">
            Lampiran :
            <?php echo e($posts->fileupload); ?>

        </div>
        <div class="keterangan1">
                <div class="keterangan2">

                    <div class="waktu">
                        Waktu : <?php echo e($posts->created_at->format('H:i Y-m-d')); ?>

                    </div>

                    <div class="aspek">
                        Aspek : <?php echo e($posts->aspek); ?>

                    </div>

                    <div class="editlaporan">
                        <a href="<?php echo e(route('edit',$posts->id)); ?>">
                        Edit Laporan/Komentar
                        <img src="edit.png">
                    </div>

                    <div class="hapuslaporan">
                        <a href="<?php echo e(route('hapus',$posts->id)); ?>">
                        Hapus Laporan/Komentar
                    </div>     
             </div>
        </div>
        <hr>
    </body><?php /**PATH C:\application_laravel\IF3028-TUBESPEMWEB-RA-RC-2021-main\resources\views/detail_page.blade.php ENDPATH**/ ?>