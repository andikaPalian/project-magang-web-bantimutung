# 🦋 Taman Wisata Alam Bantimurung - Official Website

![Bantimurung Banner](https://i0.wp.com/www.bantimurungbulusaraung.id/wp-content/uploads/2023/10/051A5961-scaled.jpg?fit=2560%2C1707&ssl=1)

> Sebuah platform website portal pariwisata profesional untuk **Taman Wisata Alam Bantimurung (The Kingdom of Butterflies)**. Dibangun menggunakan arsitektur MVC (Model-View-Controller) dengan PHP Native dan Tailwind CSS untuk memberikan performa yang cepat, aman, dan antarmuka pengguna yang modern.

---

## 📋 Daftar Isi
- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Struktur Database](#-struktur-database)
- [Panduan Instalasi](#-panduan-instalasi)
- [Struktur Folder MVC](#-struktur-folder-mvc)
- [Author](#-author)

---

## ✨ Fitur Utama

Sistem ini dibagi menjadi dua bagian utama: **Halaman Pengunjung (Public/Frontend)** dan **Panel Admin (Backend)**.

### 🌍 Halaman Pengunjung (Frontend)
- **Landing Page Interaktif:** Menampilkan cuplikan informasi wisata, data & fakta, dengan fitur *Progressive Disclosure* (Pop-up Modal) dan animasi *smooth scroll*.
- **Halaman About Dinamis:** Memuat sejarah, keindahan alam, serta upaya konservasi yang dikelola langsung dari *database*.
- **Sistem Blog & Artikel:** Dilengkapi fitur *Instant Search* (Pencarian Tanpa Reload) dan *Filter Kategori* berbasis JavaScript. Artikel diformat dengan *Tailwind Typography (Prose)* agar estetis layaknya platform blog profesional.
- **Halaman Kontak & Pesan:** Menampilkan informasi alamat, *Google Maps*, dan formulir pengiriman pesan yang terhubung langsung ke kotak masuk admin.
- **Visitor Counter:** Pelacakan jumlah pengunjung unik secara otomatis berdasarkan *IP Address* dan *User Agent*.
- **Responsive & Animated:** Tampilan 100% responsif di semua perangkat dengan sentuhan animasi elegan dari *AOS (Animate On Scroll)*.

### 🔐 Panel Admin (Backend)
- **Dashboard Analitik:** Ringkasan jumlah artikel, pesan masuk, dan statistik pengunjung.
- **Manajemen Konten (CMS):**
  - **Home Setting:** Mengubah teks sambutan dan gambar *thumbnail* di Landing Page.
  - **About Setting:** Mengubah sejarah, data fakta, dan gambar-gambar pada halaman Tentang Kami dengan dukungan *Rich Text Editor (Quill.js)*.
  - **Blog Management:** Sistem CRUD penuh untuk artikel blog (Tambah, Edit, Hapus) dan pengelolaan Kategori (Category Management). Gambar *thumbnail* akan tervalidasi maksimal 2MB.
  - **Inbox Management:** Membaca, membalas, dan menghapus pesan yang masuk dari halaman Kontak.
  - **Contact Setting:** Memperbarui alamat, email, telepon, dan tautan semat (*embed*) Google Maps.

---

## 🚀 Teknologi yang Digunakan

- **Backend:** PHP 8+ (Native Object-Oriented Programming & MVC Pattern)
- **Frontend:** HTML5, CSS3, JavaScript (Vanilla)
- **Styling:** [Tailwind CSS](https://tailwindcss.com/) (via CDN) & Tailwind Typography Plugin
- **Database:** MySQL / MariaDB
- **Text Editor:** [Quill.js](https://quilljs.com/) (Rich Text Editor)
- **Animation:** [AOS - Animate On Scroll Library](https://michalsnik.github.io/aos/)

---

## 🗄️ Struktur Database
Proyek ini menggunakan 8 tabel utama yang saling berelasi:
1. `users`: Menyimpan kredensial login admin.
2. `home`: Menyimpan teks dan gambar dinamis untuk Landing Page.
3. `about`: Menyimpan cerita panjang dan gambar untuk halaman Tentang Kami.
4. `blog_categories`: Menyimpan data kategori artikel.
5. `blog`: Menyimpan data artikel, beralasi dengan tabel `blog_categories`.
6. `contact`: Menyimpan informasi kontak dan peta (*maps*).
7. `messages`: Menyimpan pesan masuk dari pengunjung.
8. `visitor_counter`: Mencatat lalu lintas pengunjung (*IP based*).

---

## 🛠️ Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan *project* ini di komputer lokal (Localhost):

### Prasyarat
- XAMPP / Laragon / MAMP terinstal di komputermu.
- PHP minimal versi 8.0.
- Ekstensi PDO PHP harus diaktifkan (biasanya sudah aktif secara *default*).

### Langkah-langkah
1. **Clone Repositori**
   git clone [https://github.com/andikaPalian/bantimurung-website.git]([https://github.com/andikaPalian/bantimurung-website.git](https://github.com/andikaPalian/project-magang-web-bantimutung.git))
   
2. **Pindahkan Folder**
   Pindahkan folder *project* ini ke dalam direktori *server* lokal Anda (contoh: `htdocs` untuk XAMPP atau `www` untuk Laragon).
   
3. **Konfigurasi Database**
   - Buka **phpMyAdmin** (`http://localhost/phpmyadmin`).
   - Buat *database* baru dengan nama `db_bantimurung`.
   - *Import* file SQL yang telah disediakan ke dalam *database* tersebut.
   
4. **Konfigurasi Base URL & Koneksi DB**
   - Buka *file* `app/config/config.php`.
   - Sesuaikan `BASEURL` dengan *path* folder Anda (contoh: `http://localhost/bantimurung-website/public`).
   - Pastikan *username* (biasanya `root`) dan *password* (biasanya kosong) database sudah sesuai.
   
5. **Akses Website**
   - Frontend: Akses `BASEURL` di *browser*.
   - Admin Panel: Akses `BASEURL/login` di *browser*.

---

## 📁 Struktur Folder MVC
Proyek ini mematuhi standar struktur MVC (Model-View-Controller) yang ketat untuk skalabilitas dan keamanan kode.

    /bantimurung-website
    ├── app/
    │   ├── controllers/      # Logika aplikasi (Home, About, Blog, Admin, dll)
    │   ├── core/             # Sistem Inti (App Router, Controller Induk, Database Wrapper)
    │   ├── models/           # Logika interaksi database (CRUD)
    │   ├── views/            # Tampilan antarmuka HTML/PHP (Frontend & Admin Panel)
    │   └── config/           # Konfigurasi sistem (config.php)
    ├── public/               # Direktori yang dapat diakses publik
    │   ├── css/              # File styling kustom
    │   ├── js/               # File JavaScript kustom
    │   ├── uploads/          # Folder untuk menyimpan gambar yang diunggah admin
    │   └── index.php         # Entry point (Front Controller)
    └── README.md

---

## 👨‍💻 Author

**Andika Palian**
- GitHub: [@andikaPalian](https://github.com/andikaPalian)

---
*Dibuat dengan 💚 untuk kemajuan pariwisata Indonesia.*
