# 🎓 Sistem Informasi Kampus STITEK Bontang

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📋 Deskripsi

Proyek ini merupakan sistem informasi kampus yang komprehensif yang terdiri dari beberapa modul terintegrasi. Setiap modul dirancang untuk mendukung berbagai aspek administrasi dan pengelolaan kampus STITEK Bontang secara efektif dan efisien.

## 🚀 Fitur Utama

- ✅ **Formulir Pendaftaran Mahasiswa Baru** - Sistem registrasi online yang mudah digunakan
- ✅ **Buku Tamu Digital** - Platform untuk mengumpulkan feedback dari pengunjung
- ✅ **Manajemen Produk** - Sistem CRUD untuk pengelolaan produk kampus
- ✅ **Interface Responsif** - Desain yang optimal untuk berbagai perangkat
- ✅ **Validasi Data** - Sistem validasi input yang komprehensif

## 📁 Struktur Proyek

```
tugas-modul7/
│
├── Modul1/                    # Formulir Pendaftaran Mahasiswa
│   ├── tugas.html            # Form registrasi mahasiswa baru
│   └── logo.gif              # Logo kampus
│
├── Modul2/                    # Materi Pendukung
│   └── tugas.html            # Konten pembelajaran
│
├── Modul3/                    # Galeri & Informasi
│   ├── tugas.html            # Halaman informasi
│   ├── layanan.jpg           # Gambar layanan
│   ├── Pelatihan & Workshop.jpg
│   └── pengembangan aplikasi.jpg
│
├── Modul4/                    # Katalog Produk
│   ├── tugas.html            # Halaman katalog
│   ├── Kipas Angin Mini.jpg
│   ├── model kipas angin mini.jpg
│   ├── model lampu led pintar.jpg
│   ├── panduan mic speaker bluetooth.jpg
│   ├── speaker bluetooth.jpg
│   └── tampilan lampu led pintar.jpg
│
├── Modul5/                    # Buku Tamu Digital
│   └── buku_tamu.php         # Aplikasi buku tamu
│
├── Modul6/                    # Sistem Manajemen Produk
│   └── tugasmodul6/
│       ├── index.php         # Halaman utama daftar produk
│       ├── tambah.php        # Form tambah produk
│       ├── edit.php          # Form edit produk
│       ├── hapus.php         # Script hapus produk
│       ├── koneksi_toko.php  # Konfigurasi database
│       ├── proses_tambah.php # Proses tambah produk
│       └── proses_edit.php   # Proses edit produk
│
├── Modul7/                    # Modul Pengembangan
│   └── tugasmodul7/          # [Dalam pengembangan]
│
└── README.md                 # Dokumentasi proyek
```

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Styling**: Custom CSS dengan tema pink/magenta
- **Server**: Apache/Nginx

## 📦 Instalasi

### Persyaratan Sistem
- PHP 7.4 atau lebih baru
- MySQL 5.7 atau lebih baru
- Web server (Apache/Nginx)
- Browser modern (Chrome, Firefox, Safari, Edge)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/yourusername/tugas-modul7.git
   cd tugas-modul7
   ```

2. **Setup Database**
   - Buat database baru di MySQL
   - Import struktur database (jika tersedia)
   - Konfigurasi koneksi database di `Modul6/tugasmodul6/koneksi_toko.php`

3. **Konfigurasi Database**
   ```php
   // Edit file koneksi_toko.php
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $dbname = "your_database_name";
   ```

4. **Deploy ke Web Server**
   - Salin semua file ke direktori web server
   - Pastikan PHP dan MySQL service berjalan
   - Akses melalui browser

## 🖥️ Penggunaan

### Modul 1: Formulir Pendaftaran Mahasiswa
- Akses: `localhost/tugas-modul7/Modul1/tugas.html`
- Fitur: Pendaftaran mahasiswa baru dengan validasi form

### Modul 5: Buku Tamu Digital
- Akses: `localhost/tugas-modul7/Modul5/buku_tamu.php`
- Fitur: Input dan tampilan pesan pengunjung

### Modul 6: Manajemen Produk
- Akses: `localhost/tugas-modul7/Modul6/tugasmodul6/index.php`
- Fitur: CRUD (Create, Read, Update, Delete) produk

## 🎨 Tema dan Desain

Proyek ini menggunakan tema konsisten dengan skema warna:
- **Primary Color**: Pink (#ff69b4)
- **Secondary Color**: Magenta (#d63384)
- **Background**: Light pink gradients
- **Typography**: Arial, Poppins (modern dan readable)

## 🔧 Kustomisasi

### Mengubah Tema Warna
Edit file CSS di setiap modul untuk mengubah skema warna:
```css
/* Contoh perubahan warna utama */
.primary-color {
    background-color: #your-color;
}
```

### Menambah Fitur Baru
1. Buat direktori baru untuk modul
2. Ikuti struktur yang sudah ada
3. Implementasikan fitur sesuai kebutuhan

## 🤝 Kontribusi

Kontribusi selalu diterima! Untuk berkontribusi:

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 Changelog

### Version 1.0.0
- ✅ Implementasi formulir pendaftaran mahasiswa
- ✅ Sistem buku tamu digital
- ✅ Manajemen produk dengan CRUD
- ✅ Responsive design untuk semua modul

## 🐛 Bug Reports

Jika Anda menemukan bug atau masalah, silakan:
1. Buat issue baru di GitHub
2. Sertakan detail langkah reproduksi
3. Lampirkan screenshot jika diperlukan

## 📄 Lisensi

Proyek ini dilisensikan di bawah MIT License. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 👥 Tim Pengembang

- **Developer**: Tim STITEK Bontang
- **Institution**: STITEK Bontang
- **Contact**: [email@stitek-bontang.ac.id](mailto:email@stitek-bontang.ac.id)

## 🙏 Acknowledgments

- STITEK Bontang untuk dukungan pengembangan
- Seluruh tim yang terlibat dalam proyek ini
- Komunitas open source yang menginspirasi

---

**⭐ Jika proyek ini bermanfaat, berikan star di GitHub!**

*Dibuat dengan ❤️ oleh Tim STITEK Bontang*
