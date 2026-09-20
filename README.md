# Library System

## Deskripsi
Library System adalah aplikasi web sederhana untuk mengelola informasi perpustakaan digital, seperti melihat daftar buku, kategori, anggota, serta detail buku. Project ini dibangun menggunakan framework **Laravel 13** tanpa basis data (menggunakan data *dummy* array) sebagai bagian dari **Tugas Praktikum Pertemuan 6 - Implementasi Routing, Controller, dan Blade**.

## Fitur Utama
* **Dashboard (`/dashboard`)**: Menampilkan statistik singkat aplikasi (*dummy data*).
* **Books (`/books`)**: Menampilkan daftar koleksi buku beserta penulis dan tahun terbit.
* **Book Detail (`/books/{id}`)**: Menampilkan detail ID buku menggunakan *route parameter*.
* **Categories (`/categories`)**: Menampilkan daftar kategori buku.
* **Members (`/members`)**: Menampilkan daftar anggota perpustakaan.
* **Blade Templating**: Menggunakan *layout master* (`layouts/app.blade.php`) dengan arahan `@extends`, `@section`, `@yield`, `@foreach`, dan `@if`.

## Prasyarat System
* PHP >= 8.2
* Composer
* Laravel 13

## Cara Menjalankan Project

1. **Clone repository ini ke komputer lokal:**
   ```bash
   git clone [https://github.com/adityangrhaa10-sketch/library-system.git](https://github.com/adityangrhaa10-sketch/library-system.git)
   cd library-system
Install dependency PHP:

Bash
composer install
Salin file .env.example menjadi .env:

Bash
cp .env.example .env
Generate Application Key:

Bash
php artisan key:generate
Jalankan server lokal Laravel:

Bash
php artisan serve
Akses aplikasi di browser:
Buka alamat http://127.0.0.1:8000/dashboard

Author
Aditya Nugraha


---

### Cara Memperbarui File `README.md` di Project Kamu:

1. Buka file **`README.md`** yang ada di folder utama project kamu di VS Code.
2. Hapus semua isinya, lalu *copy-paste* draf teks markdown di atas.
3. Simpan file (`Ctrl + S`).
4. Buka terminal VS Code dan *push* perubahan README ini ke GitHub:
   ```bash
   git add README.md
   git commit -m "Update README for Pertemuan 6 assignment"
   git push origin main
