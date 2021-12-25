# A Little Bit More Than Simple `LAPOR` :heavy_exclamation_mark:

Berikut adalah penjelasan tentang Tugas Besar kami,
**berisi langkah instalasi dan penjelasan singkat fitur.**

### Anggota Tim :raising_hand_man: :raising_hand_man:
1. 118140037 - Markus Togi Fedrian Rivaldi Sinaga
2. 119140086 - Gusti Hafizah Nurrahmah
3. 119140109 - Muhammad Farhan Andani

### Petunjuk Instalasi
1. Disarankan Menggunakan Visual Studio Code
2. Install terlebih dahulu composer di komputer anda
   - Dapat diunduh dari : https://getcomposer.org/
3. Setelah Composer diinstal, kemudian salin link atau download repositori ini
4. Silakan lakukan rename folder jika diinginkan
5. Buat sebuah basis data dengan nama "pemweb_2021"
6. Kemudian, menggunakan terminal, arahkan ke folder `laravel` yang terdapat dalam repositori ini
7. Selanjutnya jalankan perintah `mv .env.example .env` pada terminal
8. Ubah nama DataBase di `.env` menjadi sesuai dengan yang sudah dibuat sebelumnya
9. Selanjutnya, masih di dalam direktori `laravel` menggunakan terminal jalankan perintah `composer install`
10. Kemudian perintah `php artisan key:generate`
11. Kemudian perintah `php artisan migrate`
12. Kemudian perintah `php artisan db:seed`
13. Terakhir perintah `php artisan serve`
14. Selamat menggunakan (disarankan gunakan fitur sejak dari registrasi)

## Fitur Unggulan
1. Live Search (menggunakan `JS Fetch API`)
2. Images Preview Before Update
3. Tampilkan data berdasarkan aspek tanpa reload (menggunakan `JS Fetch API`)
4. Validasi Real Time menggunakan `JS Fetch API`

Dosen : Andre Febrianto, S.Kom., M.Eng., Amirul Iqbal, S.Kom., M.Eng., Muhammad Habib Algifari, S.Kom., M.T.I.
