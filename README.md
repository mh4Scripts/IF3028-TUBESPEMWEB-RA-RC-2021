## Simple `LAPOR` :heavy_exclamation_mark:
Anda mengetahui aplikasi `lapor` yang dibuat oleh pemerintah republik indonesia? jika tidak silahkan kunjungi 
http://lapor.go.id, maka anda akan mendapatkan laman seperti gambar di bawah

![](tampilan/lapor.png)

Kali ini kita akan membuat aplikasi web seperti `lapor` untuk mengumpulkan laporan/komentar terkait layanan
di program studi teknik informatika ITERA.
**Luangkan waktu untuk membaca spesifikasi ini sampai selesai.** :kissing_heart:

### Anggota Tim :cyclone:

   1. Aulia Rahman Zulfi (119140110)
   2. Fadhillah Azhar Alsani (119140217)
   3. Fahri Setiawan (119140193)

      
Project dikerjakan secara **berkelompok** dengan maksimal jumlah anggota adalah 2-3 orang mahasiswa (maksimal 3 orang mahasiswa!).

### Petunjuk Pengerjaan :umbrella:
1. Fork pada repository ini dengan akun github anda.
2. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna,
contoh: fix css, membuat post done, jangan seperti final, benerin dikit, oke deh, update deh dll. 
Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi 
penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan).
3. Minimal commit sebanyak personil anggota tim dengan masing-masing personil tim melakukan commit sesuai dengan kesepakatan tim, penilaian individu akan dilihat.
4. Ubah **Penjelasan Teknis** pada bagian bawah readme.md ini dengan menjelaskan bagaimana cara anda:
   - Instalasi Framework, Koneksi basis data 
   - Melakukan validasi pada client-side
   - Melakukan AJAX (mulai dari pengguna melakukan klik pada tombol LAPOR! sampai laporan/komentar terkirim).
5. Pull request dari repository anda ke repository ini dengan 
format **NIM** - **Nama Lengkap**. **Waktu terkahir proses pull request adalah 4 hari setelah 
ujian akhir semester (UAS)**
6. Data yang dikumpulkan adalah:
   - Source code aplikasi
   - Basis data, dan
   - Cara instalasi aplikasi anda
7. Penilaian:
   - Kerjasama tim
   - Kesesuaian dengan spesifikasi
   - Pemahaman dalam penggunaan framework, penilaian efisiensi query
   - Antarmuka aplikasi
   - Bug free :beetle:
   
### Tools :hammer:
1. Untuk backend, wajib menggunakan PHP framework apapun (Contoh: Codeigniter, Laravel, Slim, Yii dll).
2. Gunakan MySQL atau basis data relasional lain untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh menggunakan library atau framework CSS atau JS seperti 
JQuery atau Bootstrap.** CSS sebisa mungkin ada di file yang berbeda (tidak inline styling/embeding styling).

### Spesifikasi Simple LAPOR!
#### Tampilan :soccer:
Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan berikut. Website yang diminta tidak harus 
responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, 
garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Perhatikan juga tata letak elemen-elemen.

![](tampilan/utama.png)
- Search bar diletakkan di bagian paling atas dibawah judul.
- Tombol "cari" berada di sebelah kanan search bar.
- **Buat LAPOR!** digunakan untuk mengirimkan laporan/komentar baru.
- Tampilan search bar ini harus tetap ada walaupun anda tidak mengimplementasikan fitur search.
- Tampilan pertanyaan tidak harus urut berdasarkan "Laporan/Komentar terakhir", 
namun tulisan "Laporan/komentar Terakhir" ini harus ada.

![](tampilan/buat.png)
- Tampilan di atas digunakan untuk mengajukan atau mengubah laporan/komentar.
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)
- Apek yang dilaporkan ditampilkan dalam bentuk `select`

![](tampilan/detail.png)
- Bagian ini menampilkan laporan/komentar. Bagian `datetime` harus ada. Tanda `kuote` tidak harus ada
- Perhatikan label dari field pada form berada di dalam field (tidak di luar)

### List laporan/komentar
Halaman utama berisi daftar judul pertanyaan, siapa yang bertanya, dan isi pertanyaan. Isi pertanyaan yang terlalu 
panjang harus dipotong. Silakan definisikan sendiri seberapa panjang agar tetap baik terlihat di layout yang Anda buat.

Pada masing-masing elemen list, terdapat menu untuk mengubah dan menghapus pertanyaan.

View Laporan ditampilkan secara terurut dimulai dari laporan terakhir yang diberikan highlight

### Kirim laporan/komentar `LAPOR!`
Pengguna dapat mengajukan laporan/komentar. Form yang digunakan memiliki komentar (textarea), 
data lapiran berupa gambar 
dan file berekstention `doc, docx, xls, xlsx, ppt, pptx, pdf``. Gunakan HTTP POST.

### Ubah Laporan/komentar
Pengguna dapat mengubah laporan/komentar yang sudah dibuat. Form yang digunakan memiliki tampilan yang sama dengan 
form untuk bertanya, namun field-field yang ada sudah terisi. Gunakan HTTP POST untuk menyimpan perubahan.

### Hapus Laporan/komentar
Pengguna dapat menghapus laporan/komentar yang sudah dibuat. Lakukan konfirmasi penghapusan dengan `javascript`.

### Lihat Laporan/komentar
Pengguna dapat melihat laporan/komentar. Pada halaman ini terdapat informasi aspek yang dilaporkan.
(Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran ), isi laporan/komentar, waktu pengiriman komentar `datetime` 
dan file lapiran. 

### Validasi
Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong.
- minimal jumlah kata dalam laporan/komentar adalah 20 kata.

### Bonus
Pengguna dapat mencari laporan/komentar dengan melakukan search ke `isi laporan/komentar`.

### Penjelasan Teknis
1. Instalasi Framework, Koneksi basis data
Untuk mengerjakan tugas besar ini, framework yang kami gunakan yaitu Laravel. Laravel merupakan web framework open source dengan konsep MVC (Model View Controller). Untuk menginstall framework ini, terlebih dahulu mengintall software pendukung pada device diantaranya:
   - <a href="https://getcomposer.org/download/">Composer</a>
   - <a href="https://www.php.net/downloads">PHP</a>

Untuk menginstall framework laravel dengan nama folder Laravel, pada terminal dapat dimasukkan perintah

      composer create-project laravel/laravel Laravel

Kemudian setelah framework selesai diinstall, maka framework dapat dijalankan atau diedit dengan perintah

      php artisan serve

Aplikasi akan dijalankan pada http://127.0.0.1:8000/ 

Basis data yang digunakan yaitu MySQL. MySQL adalah relational database management system (RDBMS) yang bersifat open source. Sebelum digunakan terlebih dahulu dibutuhkan software pendukung yaitu

   - <a href="https://www.apachefriends.org/index.html">XAMPP</a>

 Untuk menggunakannya pada framework, file **.env** disetting terlebih dahulu seperti berikut:

         DB_CONNECTION=mysql
         DB_HOST=127.0.0.1
         DB_PORT=3306
         DB_DATABASE=lapor
         DB_USERNAME=root
         DB_PASSWORD=

Membuat tabel basis data pada framework ini digunakan perintah

      php artisan make:migration create_lapor_table

Setelah template tabel lapor dibuat, kemudian dibuat schema sebagai berikut:

      ID
      Judul
      Laporan
      Aspek
      Lampiran

Kemudian tabel tersebut dapat di migrasi ke database dengan perintah

      php artisan migrate

Database secara langsung akan terbuat, kemudian untuk menggunakannya pada framework dibuat **model** dengan perintah

      php artisan make:model Lapor


2. Melakukan validasi pada client-side
Validasi menggunakan javascript dengan cara embedded pada file lapor dan edit pada folder **views**. Pada embedded script digunakan Document Object Model (DOM) untuk mengambil id dan class. Kemudian digunakan fungsi addEventListener yang akan trigger ketika button submit pada form diklik. Javascript akan mengecek value yang terdapat pada tag input dan akan menampilkan pesan error menggunakan innerHTML. 


3. Melakukan AJAX
Halaman awal merupakan tampilan awal data yang diambil dari database lapor. Pengguna ketika mengklik **Buat Laporan/Komentar**, button akan trigger javascript dengan fungsi XMLHttpRequest yang akan mengarah ke route get /lapor. Kemudian pengguna diminta untuk memasukkan Judul, Laporan/Komentar, Aspek, dan Lampiran. Setelah itu fungsi AJAX fetch semua data yang dimasukkan pengguna. Ketika laporan yang pengguna masukkan belum sesuai dengan kriteria validasi, maka laporan tidak dapat dikirimkan ke database dan akan menampilkan pesan error melalui innerHTML. Jika laporan sudah sesuai kriteria validasi, fetch semua data yang ditulis pengguna dapat dikirimkan ke database.
      


### Knowledge
Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.
- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder, 
anchor tag.
- Javascript : XMLHTTPRequest.
- PHP OOP
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.

:telephone: Jika ada pertanyaan silakan tanyakan lewat `Asisten`.

### About :honeybee:

Dosen       : Andre Febrianto, S.Kom., M.Eng., Amirul Iqbal, S.Kom., M.Eng., Muhammad Habib Algifari, S.Kom., M.T.I.
