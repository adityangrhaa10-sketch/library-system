#Library System
##Description

Library System adalah aplikasi sederhana untuk mengelola informasi perpustakaan, seperti data buku, anggota, dan peminjaman. Project ini dibangun menggunakan framework Laravel sebagai bagian dari tugas Pertemuan 4 - Laravel Environment Setup.

Requirements
- PHP
- Composer
- MySQL
- Laravel
  
1. Installation
Clone repository ini ke komputer lokal
bash
   git clone https://github.com/USERNAME/library-system.git
   cd library-system
2. Install semua dependency PHP menggunakan Composer
bash
   composer install
3. Salin file .env.example menjadi .env
bash
   cp .env.example .env
4. Generate application key
bash
   php artisan key:generate
5. Buat database baru di MySQL dengan nama library_system
6. Buka file .env, lalu sesuaikan konfigurasi database berikut:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=library_system
   DB_USERNAME=root
   DB_PASSWORD=
7. Jalankan migrasi untuk membuat tabel-tabel di database
bash
   php artisan migrate
8. Jalankan server lokal Laravel
bash
   php artisan serve
9. Buka browser dan akses alamat berikut untuk melihat aplikasi berjalan
   http://127.0.0.1:8000
Author
Aditya Nugraha
