# Yayasan Generasi Rabbani Muara Enim - Portal Resmi Sekolah Islam Terpadu

Website resmi profil dan portal informasi **Yayasan Generasi Rabbani Muara Enim** dan **Sekolah Islam Terpadu (SIT) Rabbani Muara Enim**, membawahi 4 unit pendidikan berjenjang dari TK hingga SMA:
- **TKS IT Rabbani** (NPSN: 10647514)
- **SDS IT Rabbani** (NPSN: 10648045)
- **SMPS IT Rabbani** (NPSN: 69920340)
- **SMA IT Rabbani** (NPSN: 70010515 • Terakreditasi B • Boarding School)

Dibangun menggunakan Laravel 12 dan Tailwind CSS v4 dengan arsitektur modern, responsif, dan elegan selaras dengan identitas JSIT Indonesia.

## 🎓 Identitas & Kelembagaan
- **Nama Yayasan**: Yayasan Generasi Rabbani Muara Enim
- **Ketua Yayasan**: Drs. H. Basuki Wiwoho
- **Alamat Sekretariat**: Jl. Proklamasi No. 80, Kel. Air Lintang, Kab. Muara Enim, Sumatera Selatan 31311
- **Kontak & WhatsApp**: 0851-5929-3554
- **Email Resmi**: yayasangerabbani@gmail.com
- **Instagram**:
  - TKIT: [@tkitrabbanim.e](https://www.instagram.com/tkitrabbanim.e/)
  - SDIT: [@sditrabbani_me](https://www.instagram.com/sditrabbani_me/)
  - SMPIT: [@smpitrabbanimuaraenim](https://www.instagram.com/smpitrabbanimuaraenim/)
  - SMAIT: [@smaitrabbanime](https://www.instagram.com/smaitrabbanime/)
- **Facebook**: [Yayasan Generasi Rabbani Muara Enim](https://web.facebook.com/YayasanGenerasiRabbaniMuaraEnim)

## 🚀 Fitur Utama
1. **Multi-Unit Portal Terintegrasi**:
   - Beranda Yayasan dengan ringkasan & quick switcher ke 4 unit sekolah (TK, SD, SMP, SMA)
   - Laman khusus tiap unit sekolah dengan identitas, kepala sekolah, dan kurikulum masing-masing
   - Hero Slider dinamis, Quick Access Menu & Counter Statistik Akademik
   - Profil Dewan Pembina, Pengurus Yayasan, Kepala Sekolah, dan Dewan Guru & GTK
2. **Program Unggulan**:
   - Kurikulum Terpadu Berbasis JSIT Indonesia
   - Tahfidzul Qur'an Mutqin & Boarding School SMA IT Rabbani
   - Pembinaan Sains, Riset Teknologi, & Sukses Masuk PTN / SNBT Gratis
   - Pembiasaan Karakter & Adab Qur'ani
3. **Penerimaan Peserta Didik Baru (PPDB / SPMB Online)**:
   - Formulir pendaftaran multi-jalur online (Jalur Reguler, Prestasi, Tahfidz)
   - Integrasi cetak bukti pendaftaran & export PDF resmi
   - Informasi rincian biaya, infaq pembangunan, seragam, dan SPP
4. **Portal Informasi & Download Publik**:
   - Modul Kurikulum Tahfidz, Buku Saku Adab & Karakter Santri
   - Panduan Praktikum Sains, Panduan Sukses SNBT
   - Unduhan Logo Resmi Rabbani Vektor High Resolution (PNG / WEBP)

## 🛠️ Tech Stack
- **Framework Backend**: Laravel 12 (PHP 8.4)
- **Frontend / Styling**: Blade Components, Tailwind CSS v4, FontAwesome 6, Alpine.js
- **Database**: SQLite (Development) / MySQL (Production cPanel)
- **Testing**: Pest PHP (128+ passing feature tests)

## 💻 Instalasi Lokal

```bash
# Clone repository
git clone https://github.com/septaryanhidayat/yayasanrabbanime.git
cd yayasanrabbanime

# Install dependensi PHP & JavaScript
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Migrasi & Seeder Data Rabbani
php artisan migrate:fresh --seed

# Build asset frontend
npm run build

# Jalankan server lokal
php artisan serve
```

---
Dikelola dengan bangga oleh **Yayasan Generasi Rabbani Muara Enim**.
