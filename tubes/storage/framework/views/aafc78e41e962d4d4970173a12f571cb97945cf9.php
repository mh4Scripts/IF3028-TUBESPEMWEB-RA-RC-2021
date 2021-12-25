<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapor</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/detailStyle.css')); ?>">
</head>

<body>
    <div id = "javas">
    <div class="atastextarea" text-align="center">
        <a href="" >Buat Laporan/Komentar</a>
    </div>
    <div class="tandahalaman" >
          SIMPLE LAPOR!
    </div>
    <br>
   
    <div class="detail-list">    
        <div class="atribut " >
            <a class="tombol"  href="" style="float: left; background: rgba(0, 0, 0, 0);">< KEMBALI</a>            
        </div>
        <hr width="100%">
        <div class="atribut "> 
            <a class="tombol"  href="" onclick="hapus(<?php echo e($data->id); ?>)"> Hapus </a>
            <!-- <a class="tombol"  href=""> Edit </a> -->
        </div>
        <div class=" isi-laporan">
            <p><?php echo e($data->report); ?></p>
        </div>  

        <div class="dokumen">
            Lampiran :
            <br><br>
            <a> <?php echo e($data->file); ?> </a>
        </div>
        <div class="atribut ">
            <a>  Waktu : <?php echo e($data->updated_at); ?> &ensp; </a>
            <a>  Aspek : <?php echo e($data->aspect); ?> </a>
        </div>
        <br><br>
        <hr width="100%">
    </div>
    </div>
</body>
</html><?php /**PATH C:\Users\ASUS\tubes\resources\views/detail.blade.php ENDPATH**/ ?>