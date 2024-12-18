# Projek UAS Mata Kuliah Perancangan Basis Data 🎓

## Tentang Projek 💡

Halo! Nama saya **Hilzam** dari Prodi Bisnis Digital, UNESA. Ini adalah repositori untuk proyek UAS mata kuliah Perancangan Basis Data. Projek ini adalah sebuah aplikasi berbasis web sederhana yang menampilkan daftar teman dari berbagai tahap kehidupan saya (SD hingga kantor), dengan kategori:

- **Teman Dekat** 🤝
- **Teman Nongkrong** 🍻
- **Teman Curhat** 🗨️
- **Teman Bisnis** 💼
- **Teman Belajar** 📚

Aplikasi ini dibangun menggunakan bahasa pemrograman **PHP** dengan struktur basis data yang dirancang untuk mempermudah pengelompokan dan pencarian data berdasarkan kategori.

---

## Prasyarat 🛠️

Sebelum memulai, pastikan Anda memiliki:

- **PHP** versi 7.4 atau lebih baru.
- **MySQL** atau MariaDB sebagai server basis data.
- **Composer** (opsional, jika menggunakan dependency tambahan).
- **Git** untuk mengunduh repositori.

---

## Cara Mengunduh dan Menjalankan Projek 🚀

1. **Clone Repositori**

   ```bash
   git clone https://github.com/HIilLm/uaspbdsem3.git
   ```

2. **Masuk ke Direktori Projek**

   ```bash
   cd projek-uas-pbd
   ```

3. **Konfigurasi Database**

   - Buat database baru di MySQL/MariaDB.
   - Impor file `database.sql` yang terdapat di direktori `sql` ke database Anda.
   - Konfigurasi kredensial database di file `config.php`:
     ```php
     <?php
     $db_host = "localhost";
     $db_user = "root";
     $db_pass = "";
     $db_name = "nama_database";
     ?>
     ```

4. **Jalankan Server Lokal**
   Gunakan built-in server PHP:

   ```bash
   php -S localhost:8000
   ```

5. **Akses Aplikasi**
   Buka browser dan kunjungi:

   ```
   http://localhost:8000
   ```

---

## Struktur Projek 🗂️

- `index.php`: Halaman utama aplikasi.
- `conn.php`: Konfigurasi database.
- `assets/`: Berisi file CSS, JavaScript, dan media.

---

Terima kasih sudah mengunjungi repositori ini! Semoga bermanfaat 😊
