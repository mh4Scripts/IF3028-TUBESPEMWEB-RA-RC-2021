<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tubes PemWeb</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/indexStyle.css')); ?>">
</head>

<body>
    <div id = "javas">
    <div class="banner">SIMPLE LAPOR!</div>
    <div class="container-1">
        <input type="search" id="search" name= "search" placeholder="Search..." />    
    </div>

    <div class="isi-list">
        <div class="atribut">
            <a class ="cari" href="#" onclick="cari()" >Cari</a>
        </div>
    </div>


    <div class="atastextarea" text-align="center">   
        <a href="#" onclick="buat()">Buat Laporan/Komentar + </a>
    </div>
    <br><br>
    
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <hr width="70%">
    <div class="isi-list">
        
        <div class="isi-laporan">
        <?php 
            $limited_string = limit_words($d->report, 50);
        ?>
            <p><?php echo e($limited_string); ?></p>
        </div> 

        <div class="atribut ">
            <a style="float: left">Lampiran : <?php echo e($d->file); ?></p>
            
            <a href="#" onclick="detail(<?php echo e($d->id); ?>)"> Lihat Selengkapnya ></a>
            <a href="#" onclick="edit(<?php echo e($d->id); ?>)"> Edit&ensp;</a>
            
            <a>  Waktu : <?php echo e($d->updated_at); ?> &ensp; </a>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <script>
        function buat() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/create", true);
            xhttp.send();
        }

        function detail(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "/detail/"+i, true);
            xhttp.send();
        }
        
        function hapus(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/delete/"+i, true);
            xhttp.send();
        }

        function edit(i) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("javas").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "/edit/"+i, true);
            xhttp.send();
        }

        function cari() {
            var xhttp = new XMLHttpRequest();
            var s = document.getElementById("search").value;
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search").innerHTML =
                this.responseText;
                }
            };
            xhttp.open("GET", "/search/"+s, true);
            xhttp.send();
        }
    </script>
</body>
</html><?php /**PATH C:\Users\ASUS\tubes\resources\views/index.blade.php ENDPATH**/ ?>