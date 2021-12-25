<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Buat</title>
</head>
<body>
<!-- <center> -->
    <h1>SIMPLE LAPOR!</h1>
  
    
    <!--Formulir Buat Melaporkan Kejadian-->
    <?php echo form_open('melaporkan/submit')?>
    <p><input type="text" name="judul" placeholder="Buat Laporan/Komentar" size="50" required/></p>
        <hr>
        <br>

        <p><textarea name="Laporan" placeholder="Laporan/Komentar" rows="10" cols="50" required></textarea></p>

        <select name="aspek" > 
            <option>Pilih Aspek Pelaporan/Komentar</option>
            <option>Dosen</option>
            <option>Staff</option>
            <option>Mahasiswa</option>
            <option>Infrastruktur</option>
        </select>

        <br>
        <br>

        <input type="file" name="foto"/>

        <br>
        <br>

        <button type="submit" name="submit">laporkan</button>
    <?php echo form_close() ?>

<!-- </center> -->
</body>
</html>