## Lapor Tugas besar Pemrograman web RC

anggota 
fajari bagas imami (118140121)


## cara penginstallan

pastikan sudah menginstall laravel 8 
 1. clone git ini 
 2. Install Depedency
 3. Setup Environment Variable
	 
	`cp .env.example .env`

	kemudian, buat app key
	
	`php artisan key:generate`
 4. Migrate & Seed
 kemudian buat migration, jangan lupa untuk membuat database dengan nama "Lapor"
	`php artisan migrate --seed`
5. Run Local Dev Server
	
	`php artisan serve`
	
**terima kasih**
