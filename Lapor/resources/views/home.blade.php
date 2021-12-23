<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" 
        href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="nav"> 
            <nav>
                <ul>
                    <li><img width="50" height="50" src="https://images.unsplash.com/photo-1549924231-f129b911e442?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"></li>
                    <li><a href="#">tentang lapor!</a> </li>
                    <li><a href="#">Laporan</a> </li>
                    <li><a href="#">Cari Aduan</a></li>
                </ul>
            </nav>
        </div>
        <div class="bg">
            <img src="images/bg.png" alt="background">
        </div>
        <div class="header">
            <h1>Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <P>Sampaikan Laporan anda langsung kepada instansi pemerintah berwenang</p>
        </div>
        <div class="form">
            <form action="#">
                <label for="aduan">Aduan: </label><br>
                <input type="text" id="aduan" name="aduan"><br>
                <br>
                <input type="radio" name="Kategori" value="kategoripertama"> kategori pertama<br>
                <input type="radio" name="Kategori" value="kategorikedua"> kategori kedua<br>
                <br>
                <label for="myfile">Lampirkan:</label>
                <input type="file" id="myfile" name="myfile"><br>
                <br>
                <input type="checkbox" name="jenispengirim" value="anonim"> anonim<br>
                <input type="checkbox" name="jenispengirim" value="Rahasia"> Rahasia<br>
                <br>
                <input type="submit" value="Lapor!">
            </form>
        </div>
        <div class="footer">
            <br><br><br>
        </div>
    </div>
</body>
</html>