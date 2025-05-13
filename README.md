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

1. Jalankan server:
    ```
    php artisan serve
    ```

## Akun Login

1. **Admin**
   - Email: admin@example.com
   - Password: password

2. **User** (Anda dapat mendaftar sendiri melalui halaman register)
