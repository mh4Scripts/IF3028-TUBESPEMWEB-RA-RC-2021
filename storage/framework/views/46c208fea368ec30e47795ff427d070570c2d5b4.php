<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home_page.css">
    <title>
        SIMPLE LAPOR!
    </title>
</head>

<body>
    <h1>SIMPLE LAPOR!</h1>
    <form class="searchbar" action="/search_page.php">
        <input type="text" placeholder="Search.." name="search" value="<?php echo e(request('search')); ?>">
        <button type="submit" class=searchbutton>
            <img src="search.png">
            Cari
        </button>
    </form>
    <div class="buatlaporan">
        <a href="<?php echo e(route('create')); ?>">Buat Laporan/Komentar</a>
    </div>

    <div class="daftarlaporan">
        Laporan/Komentar Terakhir

        <hr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <!--p> contoh <br> contoh <br> contoh </p-->
        <?php echo e($p->judul); ?> oleh <?php echo e($p->pelapor); ?>

        <br><br>
        <?php echo e($p->laporan); ?>

        <div class="keterangan1">
            <div class="keterangan2">
                <div class="lampiran">
                    Lampiran : <?php echo e($p->fileupload); ?>

                </div>

                <div class="waktu">
                    
                    Waktu : <?php echo e($p->created_at->format('H:i Y-m-d')); ?>

                </div>

                <div class="selengkapnya">
                    <a href="<?php echo e(route('show', $p->id)); ?>">
                        Lihat Selengkapnya
                        <img src="arrow_forward_ios.png">
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</body>

</html><?php /**PATH C:\application_laravel\IF3028-TUBESPEMWEB-RA-RC-2021-main\resources\views/home_page.blade.php ENDPATH**/ ?>