# Laravel KTP CRUD

Aplikasi manajemen KTP (Kartu Tanda Penduduk) menggunakan framework Laravel dengan fitur CRUD, export/import, dan kontrol akses berbasis peran.

## Fitur

- CRUD (Create, Read, Update, Delete) data KTP lengkap dengan foto
- Generasi NIK otomatis (16 digit unik)
- Perhitungan umur otomatis berdasarkan tanggal lahir
- Export data ke format CSV & PDF
- Import data dari format CSV
- API untuk mengakses data KTP (return JSON)
- Hak akses berbasis peran (admin & user)

## Instalasi

1. Clone repositori ini:
   ```
   git clone https://github.com/dheamiradikna/Laravel-KTP.git
   cd Laravel-KTP-CRUD
   ```

2. Install dependensi PHP:
   ```
   composer install
   ```

3. Install dependensi JavaScript:
   ```
   npm install
   ```

4. Generate application key:
   ```
   php artisan key:generate
   ```

5. Konfigurasi database di file .env

6. Jalankan migrasi dan seeder:
   ```
   php artisan migrate --seed
   ```

7. Buat symbolic link untuk storage:
   ```
   php artisan storage:link
   ```

8. Compile assets:
   ```
   npm run dev
   ```

9. Jalankan server:
    ```
    php artisan serve
    ```

## Akun Login

1. **Admin**
   - Email: admin@example.com
   - Password: password

2. **User** (Anda dapat mendaftar sendiri melalui halaman register)
