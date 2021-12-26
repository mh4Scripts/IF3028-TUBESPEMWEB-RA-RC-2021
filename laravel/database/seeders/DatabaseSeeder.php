<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Report;
use App\Models\Attachment;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //USERS SEEDS

        User::create([
            'name'              => 'Anonim',
            'uname'             => 'Anonim',
            'email'             => '',
            'password'          => '',
            'prof_pic'          => 'media/profile_pictures/Anonim.jpg'
        ]);

        User::create([
            'name'              => 'Markus Togi Fedrian Rivaldi Sinaga',
            'uname'             => 'MarkusTogi24',
            'email'             => 'markus.togi@gmail.com',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Togi.jpg'
        ]);
        
        User::create([
            'name'              => 'Muhammad Farhan Andani',
            'uname'             => 'M_Farhan',
            'email'             => 'muhammad.119140109@student.itera.ac.id',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Farhan.jpg'
        ]);

        User::create([
            'name'              => 'Gusti Hafizah',
            'uname'             => 'Gusti_HN',
            'email'             => 'gusti.119140086@student.itera.ac.id',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Gusti.jpg'
        ]);

        User::create([
            'name'              => 'Cindy Natalia',
            'uname'             => 'CindyNS',
            'email'             => 'cindy@mail.com',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Cindy.jpg'
        ]);

        User::create([
            'name'              => 'Josua Jeremy Gultom',
            'uname'             => 'Jerry_G',
            'email'             => 'josua@mail.com',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Josua.jpg'
        ]);

        User::create([
            'name'              => 'Canra Aguslan Siregar',
            'uname'             => 'CanraGuslan',
            'email'             => 'canra@mail.com',
            'password'          =>  bcrypt('111111'),
            'prof_pic'          => 'media/profile_pictures/Pasfoto_Canra.jpg'
        ]);

        //REPORTS SEEDS
        
        Report::create([
            'title'             => 'Biaya Operasi untuk Pasien Tidak Mampu',
            'slugy'             => 'biaya-operasi-untuk-pasien-tidak-ampu',
            'exmpl'             => 'Menkes RI yang terhormat, tolong inspeksi ke RSUD WZ. Yohanis, Kupang. Jika pasien tidak mampu, operasi penyakit dalam diminta bayar sekitar 10 juta, meskipun ada keteran',
            'cntnt'             => 'Menkes RI yang terhormat, tolong inspeksi ke RSUD WZ. Yohanis, Kupang. Jika pasien tidak mampu, operasi penyakit dalam diminta bayar sekitar 10 juta, meskipun ada keterangan tidak mampu. Apakah ini benar?',
            'aspct'             => 'Mahasiswa',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Polusi Asap (Dugaan Dari Pabrik Kertas Terdekat) Hampir Setiap Hari',
            'slugy'             => 'polusi-asap-dugaan-dari-pabrik-kertas-terdekat-hampir-setiap-hari',
            'exmpl'             => 'Polusi asap yang saat ini hampir meliputi setiap waktu pagi siang sore dan malam daerah sekitar the orchard, summarecon bekasi, harapan baru. sekitar akhir tahun 2020 pol',
            'cntnt'             => 'Polusi asap yang saat ini hampir meliputi setiap waktu pagi siang sore dan malam daerah sekitar the orchard, summarecon bekasi, harapan baru. sekitar akhir tahun 2020 polusi ini sudah bermunculan meski frekuensinya tidak sesering saat ini dan biasanya di subuh dan malam hari. saat ini hampir di setiap pagi, siang, malam udara luar tercemar dan masuk ke rumah yang dapat menyebabkan gangguan pernafasan orang dewasa dan anak2.',
            'aspct'             => 'Dosen',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Dana Sertifikasi Guru di Tanjungbalai, Sumatera Utara Belum Dibayar',
            'slugy'             => 'dana-sertifikasi-guru-di-tanjungbalai-sumatera-utara-belum-dibayar',
            'exmpl'             => 'Kepada Yth. Menteri Pendidikan dan Kebudayaan,

            Kenapa dana sertifikasi di Tanjungbalai, Sumatera Utara untuk bulan November-Desember 2012 tidak dicairkan? Dana yang tida
            ',
            'cntnt'             => 'Kepada Yth. Menteri Pendidikan dan Kebudayaan,

            Kenapa dana sertifikasi di Tanjungbalai, Sumatera Utara untuk bulan November-Desember 2012 tidak dicairkan? Dana yang tidak dibayar adalah untuk guru PNS di semua tingkatan (SD/SMP/SMA/SMK). Contoh beberapa NUPTK:
            ElSA SIAGIAN NUPTK 2659733635300002 dan Desy Anggraeni NUPTK 6538 7566583000 23 guru SMK, beserta ratusan guru lainnya.
            
            Mohon perhatiannya. Terima kasih.
            
            
            Dari Saut Sitorus, Ketua Asosiasi Guru Bersatu Tanjungbalai.',
            'aspct'             => 'Program Studi',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Banjir di Perumahan Star Perdana Residance Cikarang',
            'slugy'             => 'banjir-di-perumahan-star-perdana-residance-cikarang',
            'exmpl'             => 'Perumahan subsidi di cikarang, selalu banjir jika ujan datang, Genangan air bisa mencapai 20-30cm bahkan lebih. sudah banyak warga yang jatuh akibat genangan yang tidak s',
            'cntnt'             => 'Perumahan subsidi di cikarang, selalu banjir jika ujan datang, Genangan air bisa mencapai 20-30cm bahkan lebih. sudah banyak warga yang jatuh akibat genangan yang tidak surut. di musim kemaraupun genangan masih terjadi. Warga sudah berdialog dengan pengembang namun tidak ada hasilnya sampai saat ini. surat, pertemuan warga selalu menemukan jalan buntu. bahkan pihak desa pun telah diminta untuk membantu hal ini.',
            'aspct'             => 'Dosen',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Penimbunan/penampungan Bbm Subsidin Oleh Pelaku Atau Oknum',
            'slugy'             => 'penimbunan-penampungan-bbm-subsidin-oleh-pelaku-atau-oknum',
            'exmpl'             => 'Di kota manado sering sekali terjadi penimbunan/penampungan oleh pelaku/oknum spbu bekerja sama dengan pelaku lain yang bertindak sebagai konsumen. karena ada jenis mobil',
            'cntnt'             => 'Di kota manado sering sekali terjadi penimbunan/penampungan oleh pelaku/oknum spbu bekerja sama dengan pelaku lain yang bertindak sebagai konsumen. karena ada jenis mobil yang sudah di modifikasi yang terdapat tanki penampung dalam bagasi mobil. kejadian ini saya saksikan langsung ketika sedang antri panjang hari ini jam 12.45 wita di spbu ringroad manado. saya melihat 1 mobil kijang yang mengisi bbm solar hingga memakan waktu 1 jam, saya coba mengawasi meter ternyata sudah 4 kali mencapai harga maksimum dari meteran alat pengisi yaitu rp. 990.000 x 4 pengisian, diperkirakan hal inilah yg menjadi salah satu kelangkaan bbm khususnya solar di wilayah manado.
            mohon agar ada pengawasan dari aparat/pemerintah untuk hal-hal seperti ini. untuk menunjang pemerataan, keadilan dan kelancaran aktivitas masyarakat.',
            'aspct'             => 'Dosen',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Proyek Jalan Tol Pejagan-Pemalang Seksi 3',
            'slugy'             => 'proyek-jalan-tol-pejagan-pemalang-seksi-3',
            'exmpl'             => 'Selamat siang, mau tanya tentang kelanjutan proyek jalan tol Pejagan-Pemalang seksi 3 di Kabupaten Tegal. Kapan sosialisasinya? Terima kasih.',
            'cntnt'             => 'Selamat siang, mau tanya tentang kelanjutan proyek jalan tol Pejagan-Pemalang seksi 3 di Kabupaten Tegal. Kapan sosialisasinya? Terima kasih.',
            'aspct'             => 'Mahasiswa',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Tenaga Dokter di Nusa Tenggara Timur',
            'slugy'             => 'tenaga-dokter-di-nusa-tenggara-timur',
            'exmpl'             => 'Pak Menteri Kesehatan. Tolong perhatikan kami RSU di daerah NTT, tenaga Dokter kurang & pelayanan tidak maksimal, tapi bisa melayani 3 s/d 4 tempat. Sangat berbahaya... T',
            'cntnt'             => 'Pak Menteri Kesehatan. Tolong perhatikan kami RSU di daerah NTT, tenaga Dokter kurang & pelayanan tidak maksimal, tapi bisa melayani 3 s/d 4 tempat. Sangat berbahaya... Trims.',
            'aspct'             => 'Mahasiswa',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Layanan Balik Nama Sertifikat Tanah BPN Tangerang Lambat',
            'slugy'             => 'layanan-balik-nama-sertifikat-tanah-bpn-tangerang-lambat',
            'exmpl'             => 'Saya mengeluhkan lambatnya proses pengurusan untuk balik nama sertifikat tanah di Badan Pertanahan Nasional Tigaraksa, Tangerang. Sejak masuknya dokumen-dokumen pada bula',
            'cntnt'             => 'Saya mengeluhkan lambatnya proses pengurusan untuk balik nama sertifikat tanah di Badan Pertanahan Nasional Tigaraksa, Tangerang. Sejak masuknya dokumen-dokumen pada bulan Oktober 2012 lalu (No. Berkas Permohonan: 73710/2012), sampai sekarang statusnya masih dalam proses. Padahal, sesuai informasi di situs resmi BPN, prosesnya hanya 5 hari. Mohon agar diberikan penjelasan dan ditindaklanjuti',
            'aspct'             => 'Mata Kuliah',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Pembayaran Gaji Dokter PTT di Maluku Utara',
            'slugy'             => 'pembayaran-gaji-dokter-ptt-di-maluku-utara',
            'exmpl'             => 'Selamat pagi, saya Andrianto, dokter PTT di pedalaman Maluku Utara. Saya ingin komplain mengenai kinerja kemenkes tentang pemberian gaji kami pegawai PTT, yang tidak manu',
            'cntnt'             => 'Selamat pagi, saya Andrianto, dokter PTT di pedalaman Maluku Utara. Saya ingin komplain mengenai kinerja kemenkes tentang pemberian gaji kami pegawai PTT, yang tidak manusiawi. Gaji selalu telat, alasan bermacam-macam. Contoh terbaru, gaji saya bulan April 2012, sampai hari ini 30 Mei 2012 belum turun juga. Kami para dokter PTT dituntut bekerja profesional di daerah minim fasilitas. Tapi hak kami diabaikan. Mohon feedback-nya. Best regards, dr. Andrianto.',
            'aspct'             => 'Mahasiswa',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Pembalakan Liar di Kalimantan Tengah',
            'slugy'             => 'pembalakan-liar-di-kalimantan-tengah',
            'exmpl'             => 'Yth. Bpk. Kapolda Kalimantan Tengah. Penegak hukum kalteng selalu memanjakan mafia kayu, hingga mereka tidak bisa jera. Ilegal logging yang ada di Kabupaten Barito Selata',
            'cntnt'             => 'Yth. Bpk. Kapolda Kalimantan Tengah. Penegak hukum kalteng selalu memanjakan mafia kayu, hingga mereka tidak bisa jera. Ilegal logging yang ada di Kabupaten Barito Selatan yang sudah dipasang garis polisi malah dibebaskan. Kini sudah ada lagi ilegal logging di Barito Utara yang ingin di bawa/diluncurkan. Thanks',
            'aspct'             => 'Mahasiswa',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Pelayanan & Kebersihan RS Rangkasbitung dan Pandeglang Mengecewakan',
            'slugy'             => 'pelayanan-kebersihan-rs-rangkasbitung-dan-pandeglang-mengecewakan',
            'exmpl'             => 'Kepada Yth. Kementrian Kesehatan,
            Saya warga Banten prihatin dengan keadaan dan pelayanan Rumah Sakit Pembantu di daerah saya, yaitu RS Rangkasbitung dan Pandeglang. Sepe
            ',
            'cntnt'             => 'Kepada Yth. Kementrian Kesehatan,
            Saya warga Banten prihatin dengan keadaan dan pelayanan Rumah Sakit Pembantu di daerah saya, yaitu RS Rangkasbitung dan Pandeglang. Seperti tidak ada pengawasan dan perhatian dari pemerintah. Hal ini terlihat misalnya keluarga pasien akan dianggap "rewel" ketika meminta penjelasan tentang kondisi pasien ataupun masalah administrasi. Lalu kebersihan juga bermasalah karena ada pedagang masuk ke dalam RS.
            Tolong ditinjau. Terimakasih atas perhatiannya.',
            'aspct'             => 'Mata Kuliah',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);

        Report::create([
            'title'             => 'Pengaduan Tindak Lanjut Pemidanaan Kasus Perdata',
            'slugy'             => 'pengaduan-tindak-lanjut-pemidanaan-kasus-perdata',
            'exmpl'             => 'Mohon tindak lanjut dan perhatian mengetai kasus mempidanakan perkara perdata a.n ida fandayani yang dilakukan oleh penyidik jatanum polrestabes surabaya. sesuai koordina',
            'cntnt'             => 'Mohon tindak lanjut dan perhatian mengetai kasus mempidanakan perkara perdata a.n ida fandayani yang dilakukan oleh penyidik jatanum polrestabes surabaya.
            sesuai koordinasi dengan spripim kapolri untuk upaya penyelesaian kepada kasat reskrim polrestabes surabaya, maka kami pada tanggal 20 januari menemui kasat reskrim polrestabes surabaya di kantornya. menurut kasat reskrim polrestabes surabaya kasus ini memang sudah putus perdatanya dan segera gelar perkara bersama penyidik. hasil dari gelar perkara ini akan dilaporkan kepada spripim kapolri menurut kasat reskrim polrestabes surabaya.
            kejaksaan negeri surabaya pun sudah mengembalikan berkas kepada penyidik berdasarkan surat no.b-14/o.5.10.3/epp.1/072016 tanggal 6 juli 2016. menurut kepala kejaksaan negeri surabaya, surat pemberitahuan dimulainya penyidikan telah dikembalikan kepada penyidik polrestabes surabaya.
            oleh karena itu, polisi/penyidik semestinya menghentikan perkara tersebut',
            'aspct'             => 'Dosen',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Anggaran Normalisasi Sungai Juwana di Pati, Jawa Tengah',
            'slugy'             => 'anggaran-normalisasi-sungai-juwana-di-pati-jawa-tengah',
            'exmpl'             => 'Proyek Normalisasi Sungai Juwana di Kabupaten Pati Provinsi Jawa Tengah sejak 2010-2012 sudah menelan biaya lebih dari 60 miliar rupiah. Akan tetapi setelah kami telusuri',
            'cntnt'             => 'Proyek Normalisasi Sungai Juwana di Kabupaten Pati Provinsi Jawa Tengah sejak 2010-2012 sudah menelan biaya lebih dari 60 miliar rupiah. Akan tetapi setelah kami telusuri, uang sebesar itu baru digunakan untuk melakukan pengerukan sungai sepanjang 25,42 kilometer. Sedangkan panjang alur Sungai Juwana adalah 62,50 kilometer. Saya melihat proyek ini terlalu mahal; karena berarti setiap 1 kilometer menelan biaya lebih dari 2 miliar. Sedangkan berbagai persoalan baik teknis maupun sosial masih melingkupi proyek ini. mohon disidan atau disidik. Sepertinya kok ada mark up! Anggota DPR RI seperti Marwan Jakfar, Imam Suroso (keduanya berasal dari Kabupaten Pati) mengaku aktif memperjuangkan proyek ini.',
            'aspct'             => 'Mata Kuliah',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        
        Report::create([
            'title'             => 'Kebijakan Amburadul Manager Pln Up3 Pematangsiantar Buang Anggaran Investasi Negara',
            'slugy'             => 'kebijakan-amburadul-manager-pln-up3-pematangsiantar-buang-anggaran-investasi-negara',
            'exmpl'             => 'Manager pln up3 pematangsiantar di provinsi sumatera utara sdr. joy mart sihaloho melalui kebijakannya membangun jaringan listrik tegangan menegah 20kv sepanjang kurangle',
            'cntnt'             => 'Manager pln up3 pematangsiantar di provinsi sumatera utara sdr. joy mart sihaloho melalui kebijakannya membangun jaringan listrik tegangan menegah 20kv sepanjang kuranglebih 100km ludes disikat maling. lokasi jaringan listrik di sepanjang jln. siantar - tebing tinggi dan jln. siantar - perdagangan.
            kebijakan amburadul ini bermula dari tertangkapnya pelaku pencurian kabel listrik jenis mvtic khusus tegangan 20kv pada bulan september 2021 oleh polsek serbelawan.
            ternyata aksi pelaku pencurian berhasil memotong kabel yg tergolong mahal ini dalam keadaan tidak bertegangan yg memang sejak selesai proyek pembangunan jaringan kabel tidak pernah dialiri tegangan listrik.
            bagaimana mungkin hal ini tidak diantisipasi seorang manager pln pematangsiantar bahwa asset yg dibangun dengan anggaran negara sepele dengan keamanan asset di wilayah kerjanya.
            semula kabel disikat maling hanya beberapa tiang, namun sampai saat ini dalam beberapa bulan hampir 90% jaringan kabel sudah hilang ditaksir bernilai puluhan milyar rupiah dan tersisa hanya tiang beton. seharusnya ketika ada bagian kabel yg hilang, maka segera disambung kembali dan dialiri tegangan atau menggulung yg terpasang agar tidak dicuri maling. namun pln pematangsiantar malah membiarkan berbulan bulan sehingga hampir ludes semuanya.
            sungguh sangat amburadul seorang manager yg tidak mengerti tentang konsekwensi kebijakan proyek yg diambilnya. peristiwa ini termasuk kejadian luar biasa dan mungkin dalam sejarah kehilangan material kabel yg terbesar.
            
            mohon kemen bumn mendalami persoalan ini dan mengusut tuntas pejabat2 penghambur uang negara melalui kegiatan proyek proyek infrastruktur.
            jangan hny melihat dari sudut pandang pelaku pencurian, tp yg lebih penting bagaimana kebijakan seorang pejabat bumn itu berkualitas. harus ada yg bertanggung jawab secara hukum kerugian negara ini selain tindakan kriminal pencurian.
            
            demikian laporan ini disampaikan sebagai pintu masuk untuk menginvestigasi kerugian negara di instansi pln pematangsiantar milik bumn.',
            'aspct'             => 'Dosen',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Jalan Berlubang di Jalan Raya Jakarta-Bogor',
            'slugy'             => 'jalan-berlubang-di-jalan-raya-jakarta-bogor',
            'exmpl'             => 'Banyak jalan berlubang sepanjang Jalan Raya Jakarta-Bogor. Jalur yang saya lewati dari KM 32 s.d. KM 47, dimana jalan berlubang ada di dua sisi jalan (dari dan ke arah B ',
            'cntnt'             => 'Banyak jalan berlubang sepanjang Jalan Raya Jakarta-Bogor. Jalur yang saya lewati dari KM 32 s.d. KM 47, dimana jalan berlubang ada di dua sisi jalan (dari dan ke arah Bogor). Mohon segera diperbaiki.',
            'aspct'             => 'Mata Kuliah',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Sering Padam Lampu di Kebun Jeruk, Jakarta',
            'slugy'             => 'sering-padam-lampu-di-kebun-jeruk-jakarta',
            'exmpl'             => 'Saya Canra. Ingin melaporkan bahwa sering terjadi pemadam listrik Kebun Jeruk 17, Kelurahan Maphar, Kecamatan Tamansari, Jakarta Barat. Tolong ditinjau.',
            'cntnt'             => 'Saya Canra. Ingin melaporkan bahwa sering terjadi pemadam listrik Kebun Jeruk 17, Kelurahan Maphar, Kecamatan Tamansari, Jakarta Barat. Tolong ditinjau.',
            'aspct'             => 'Program Studi',
            'unqid'             => Str::random(12),
            'rprtr'             => 3
        ]);
        
        Report::create([
            'title'             => 'Permasalahan Pembangunan di Desa Tembongwah, Tegal',
            'slugy'             => 'permasalahan-pembangunan-di-desa-tembongwah-tegal',
            'exmpl'             => 'Saya Agus Salim, Kepala Desa Tembongwah, Kecamatan Balapulang, Kabupaten Tegal. Ingin melaporkan masalah-masalah dalam desa kami:
            1. Bidang infrastuktur: jalan belum dise',
            'cntnt'             => 'Saya Agus Salim, Kepala Desa Tembongwah, Kecamatan Balapulang, Kabupaten Tegal. Ingin melaporkan masalah-masalah dalam desa kami:
            1. Bidang infrastuktur: jalan belum disentun oleh proyek Kementerian Pekerjaan Umum. Panjang jalan gang 8km. Sebagiannya masih tanah. Sebagian lagi rusak parah.
            2. Bidang pendidikan: 50% tamat SD, 40% gagal sekolah, 10% tamat SMP.
            3. Bidang kesehatan: banyak balita kena giji buruk, tumor basah, katarak, dan bibir sumbing.
            Apakah pemerintah memiliki perhatian khusus untuk menyelesaikan masalah di desa kami? Karena menurut kami masalah di desa terpencil seperti kami penting untuk ditindaklanjuti.
            
            
            Data Desa Tembongwah:
            Luas 311,045 ha; 4 RW dan 21 RT.
            Batas utara Desa Danareja; Timur Desa Cikura, Selatan Desa Danasari; Barat Desa Cilongok.
            Lahan desa diperuntukan untuk: 1. sawah 68,775 ha; 2. perkebonan 192,647 ha; 3 pemukiman 32,285 ha; 4 untuk makam 8050 m.
            Jarak dengan kantor kecamatan 19 km; dari kantor Kabupaten 23 km; dari kantor Propinsi 200 km; dari pusat 420 km.
            Penduduk 1100 kepala keluarga atau 5500 jiwa.
            Mata pencaharian: buruh tani.
            Jumlah perangkat desa: 8 orang terdiri 1 Kepala Desa; 2 Sekretaris Desa; 4 Kepala Seksi; 2 Kepala Urusan; Badan Permusyawaratan Desa (BPD) 5 orang; Lembaga Ketahanan Masyarakat Desa 10 orang.',
            'aspct'             => 'Program Studi',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Pencairan Dana Sertifikasi Guru Tidak Pernah Tuntas',
            'slugy'             => 'pencairan-dana-sertifikasi-guru-tidak-pernah-tuntas',
            'exmpl'             => 'Dana guru tersertifikasi di Kota Samarinda, Kalimantan Timur yang belum dibayar adalah:
                1. tahun 2010 satu bulan,
                2. tahun 2011 dua bulan, dan
                3. tahun 2012 akan dua bula
                ',
            'cntnt'             => 'Dana guru tersertifikasi di Kota Samarinda, Kalimantan Timur yang belum dibayar adalah:
                1. tahun 2010 satu bulan,
                2. tahun 2011 dua bulan, dan
                3. tahun 2012 akan dua bulan yang tidak dibayar.
                Informasi ini menurut Dinas Pendidikan Kota Samarinda. Mengapa pembayaran guru tersertifikasi tidak pernah tuntas?',
            'aspct'             => 'Mata Kuliah',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Harapan Petani Tebu di Jember Akan Pinjaman Lunak',
            'slugy'             => 'harapan-petani-tebu-di-jember-akan-pinjaman-lunak',
            'exmpl'             => 'Kami petani tebu berharap agar pemerintah dapat memberi pinjaman lunak dengan bunga 12% per tahun. Selama ini petani tebu saja dapat meminjam biaya garap ke PT Perkebunan',
            'cntnt'             => 'Kami petani tebu berharap agar pemerintah dapat memberi pinjaman lunak dengan bunga 12% per tahun. Selama ini petani tebu saja dapat meminjam biaya garap ke PT Perkebunan Nusantara X1 Semboro sebanyak Rp. RP 3.500.000,- per ha dengan bunga 10% per tahun. Kami juga dapat meminjam ke Asosiasi Petani Tebu Rakyat Semboro Rawat Ratun sebanyak Rp. 4.000.000,- per ha dengan bunga 10% per tahun. Sementara itu, Koperasi Usaha Rakyat di Jember tidak berjalan.

            Apakah pemerintah memiliki rencana untuk memberi bantuan atau pinjaman dana kepada petani tebu?',
            'aspct'             => 'Program Studi',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);
        
        Report::create([
            'title'             => 'Indikasi Pungutan Liar Biaya Pembuatan E-KTP di Bekasi Utara',
            'slugy'             => 'indikasi-pungutan-liar-biaya-pembuatan-e-ktp-di-bekasi-utara',
            'exmpl'             => 'Apakah benar pembuatan E-KTP harus membayar Rp. 5.000 per KTP? Karena di desa saya, Desa Pusaka Rakyat, Kecamatan Tarumajaya, Kabupaten Bekasi Utara, saya dikenakan biaya',
            'cntnt'             => 'Apakah benar pembuatan E-KTP harus membayar Rp. 5.000 per KTP? Karena di desa saya, Desa Pusaka Rakyat, Kecamatan Tarumajaya, Kabupaten Bekasi Utara, saya dikenakan biaya sebesar itu. Padahal info yang saya terima, biaya E-KTP adalah gratis.
            Seperti apa aturan yang sebenarnya? Dan jika memang aturan sebenarnya tidak dikenakan biaya, kami meminta uang kami dikembalikan beserta permintaan maaf dari aparat.',
            'aspct'             => 'Program Studi',
            'unqid'             => Str::random(12),
            'rprtr'             => mt_rand(1,7)
        ]);

        //ATTACHMENTS SEED
        for($i=1; $i<=16; $i++)
        {
            for ($j=0; $j<5; $j++)
            {
                Attachment::create([
                    'lcate'             => 'public/files/seed('.$i.').jpeg',
                    'rp_id'             => mt_rand(1,20)
                ]);
            }
        }
        
    }
}
