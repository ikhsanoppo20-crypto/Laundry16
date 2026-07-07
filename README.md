# Laundry16

Sistem Informasi Manajemen Laundry berbasis Laravel 12.

## 📖 Deskripsi

Laundry16 adalah aplikasi berbasis web yang digunakan untuk membantu proses pengelolaan usaha laundry, mulai dari pendataan pelanggan, transaksi, hingga pengelolaan status cucian.

## ✨ Fitur

- Login Admin
- Dashboard
- Data Pelanggan
- Data Transaksi
- Perhitungan Harga Laundry
- Status Cucian
- Logout

## 🛠️ Teknologi

- Laravel 12
- PHP 8.2+
- MySQL
- Bootstrap
- Vite

## 📂 Struktur Project

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

## 🚀 Cara Menjalankan

### Clone Repository

```bash
git clone https://github.com/ikhsanoppo20-crypto/Laundry16.git
```

### Masuk ke Folder

```bash
cd Laundry16
```

### Install Dependency

```bash
composer install
npm install
```

### Salin File Environment

```bash
cp .env.example .env
```

### Generate Key

```bash
php artisan key:generate
```

### Konfigurasi Database

Ubah file `.env`

```env
DB_DATABASE=laundry
DB_USERNAME=root
DB_PASSWORD=
```

### Jalankan Migrasi

```bash
php artisan migrate
```

### Jalankan Server

```bash
npm run dev

php artisan serve
```

Buka browser:

```
http://127.0.0.1:8000
```

## 👨‍💻 Developer

**Ikhsan**

## 📄 License

Project ini dibuat untuk keperluan pembelajaran dan tugas kuliah.