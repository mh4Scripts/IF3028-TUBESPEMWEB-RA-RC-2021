<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="form.css">
        <title>
            SIMPLE LAPOR!
        </title>
    </head>

    <body>
        <h1>SIMPLE LAPOR!</h1>
        <form method="POST" id="formAdd" action="/action_page.php">
            <p>Buat Laporan/Komentar</p>
            <hr>
            <textarea name="laporan" placeholder="Laporan/Komentar" id="laporan" rows="18" cols="151" required></textarea>

            <select name="division">
                <option value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Laporan">Laporan</option>
                <option value="Komentar">Komentar</option>
            </select>
            <br>
            <input type="file" id="fileupload" name="fileupload" class="fileupload">
            <br>
            <input type="submit" class=submit-btn value="Buat LAPOR!">
            <br><br><br>
            <hr>
        </form>
    </body>