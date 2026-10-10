# Tugas Rutin 11 — E-Commerce DB + Secure Auth

## Identitas

- **Nama:** Rafli Arrahman
- **Program Studi:** Ilmu Komputer
- **Mata Kuliah:** Pemrograman Web
- **Tugas:** Tugas Rutin 11

## Deskripsi Proyek

Proyek ini merupakan implementasi aplikasi e-commerce sederhana menggunakan Laravel dan MySQL. Pengembangan berfokus pada pengelolaan database relasional, relasi antarmodel menggunakan Eloquent ORM, autentikasi pengguna, serta pembatasan akses berdasarkan peran dan kebijakan otorisasi.

## Teknologi

- PHP 8.3
- Laravel 13
- MySQL
- Laravel Breeze
- Eloquent ORM
- Composer
- Node.js dan npm
- Laragon

## Fitur Utama

### 1. Database dan Eloquent

- Migrasi tujuh tabel utama untuk kebutuhan e-commerce beserta relasi foreign key.
- Seeder dan factory untuk menghasilkan data produk.
- Relasi antarmodel untuk kategori, produk, pengguna, pesanan, item pesanan, dan tag.
- Pengujian query database menggunakan Laravel Tinker.

### 2. Autentikasi dan Keamanan

- Autentikasi pengguna menggunakan Laravel Breeze.
- Middleware untuk membatasi akses berdasarkan peran admin, editor, dan user.
- ProductPolicy untuk mengatur otorisasi tindakan terhadap produk.
- Pengujian perlindungan route dan penolakan akses bagi pengguna yang tidak memiliki izin.

## Struktur Database

Database yang digunakan dalam pengembangan adalah `tugasweb_p11_ecommerce`.

Tabel yang digunakan meliputi:

- `users`
- `categories`
- `products`
- `orders`
- `order_items`
- `tags`
- `product_tag`

Tabel pendukung Laravel juga digunakan sesuai kebutuhan aplikasi.

## Instalasi dan Konfigurasi

### 1. Clone Repository

```bash
git clone https://github.com/rafliarrahman14-pixel/TugasWeb-P11-EcommerceAuth.git
cd TugasWeb-P11-EcommerceAuth
```

### 2. Instal Dependensi

```bash
composer install
npm install
```

### 3. Konfigurasi Environment

Salin file konfigurasi contoh:

```powershell
copy .env.example .env
```

Buat application key:

```bash
php artisan key:generate
```

### 4. Konfigurasi Database

Buat database `tugasweb_p11_ecommerce` melalui MySQL atau phpMyAdmin. Sesuaikan konfigurasi pada file `.env` dengan lingkungan lokal:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugasweb_p11_ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi dan Seeder

Untuk instalasi database baru, jalankan:

```bash
php artisan migrate --seed
```

Perintah tersebut menjalankan migrasi dan seeder yang terdaftar dalam proyek.

### 6. Menjalankan Aplikasi

Jalankan server Laravel:

```bash
php artisan serve
```

Pada terminal lain, jalankan Vite:

```bash
npm run dev
```

Buka alamat lokal yang ditampilkan oleh Laravel Artisan di browser.

## Pengujian

Pengujian dilakukan terhadap aspek berikut:

1. Struktur database dan jumlah data produk.
2. Query jumlah produk menggunakan Laravel Tinker.
3. Relasi produk dengan kategori.
4. Relasi pengguna dengan pesanan.
5. Perhitungan total pesanan.
6. Filter produk berdasarkan kategori Elektronik.
7. Autentikasi menggunakan Laravel Breeze.
8. Pembatasan akses berdasarkan role pengguna.
9. Otorisasi tindakan terhadap produk menggunakan ProductPolicy.

## Dokumentasi Pengujian

Dokumentasi berikut menampilkan hasil pengujian database, query Laravel Tinker, autentikasi, middleware role, dan otorisasi produk.

### A. Database dan Query Laravel Tinker

**1. Struktur Database**

![Struktur Database P11](docs/01_database_p11.png)

**2. Data Produk**

![Data Produk](docs/02_produk_50_data.png)

**3. Query 1 — Jumlah Produk**

![Jumlah Produk](docs/03_query_1_jumlah_produk.png)

**4. Query 2 — Relasi Produk dan Kategori**

![Relasi Produk dan Kategori](docs/04_query_2_relasi_kategori.png)

**5. Query 3 — Jumlah Pesanan Pengguna**

![Jumlah Pesanan](docs/05_query_3_jumlah_pesanan.png)

**6. Query 4 — Total Pesanan**

![Total Pesanan](docs/06_query_4_total_pesanan.png)

**7. Query 5 — Filter Kategori Elektronik**

![Filter Kategori Elektronik](docs/07_query_5_filter_elektronik.png)

### B. Autentikasi dan Otorisasi

**8. Halaman Login Laravel Breeze**

![Halaman Login](docs/08_breeze_halaman_login.png)

**9. Akses Admin Berhasil**

![Akses Admin](docs/09_role_admin_berhasil.png)

**10. Akses Admin oleh User Ditolak**

![Akses Admin Ditolak](docs/10_role_user_akses_ditolak.png)

**11. Akses Edit Produk oleh User Ditolak**

![ProductPolicy User](docs/11_policy_edit_akses_ditolak.png)

**12. Akses Edit Produk oleh Admin Diizinkan**

![ProductPolicy Admin](docs/12_policy_edit_akses_diizinkan.png)

## Keamanan

File `.env` tidak disertakan dalam repository karena digunakan untuk menyimpan konfigurasi lokal yang dapat mencakup informasi sensitif. File `.env.example` disediakan sebagai templat konfigurasi.

Folder dependensi `vendor` dan `node_modules` tidak disertakan karena dapat dibuat kembali melalui Composer dan npm.

## Penutup

Proyek ini menerapkan konsep pengembangan aplikasi web menggunakan Laravel, pengelolaan database relasional, autentikasi, middleware, dan otorisasi berbasis kebijakan akses. Dokumentasi pengujian disertakan sebagai bukti implementasi fitur pada Tugas Rutin 11.