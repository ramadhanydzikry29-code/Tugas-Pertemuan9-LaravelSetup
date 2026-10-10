# TugasWeb-P9-LaravelSetup

**Tugas Rutin 9 — Setup Laravel**
Pemrograman Web (3KOM40115) · FMIPA Universitas Negeri Medan

- Nama: Dzikry Ramadhany
- NIM: 4251250008

Project Laravel dengan 3 route kustom (`/`, `/about`, `/contact`) yang mengembalikan Blade view, data dinamis dari array, 1 controller, 1 model beserta migration, serta bonus styling Tailwind CDN dan route parameter `/hello/{nama}`.

## Prasyarat

- PHP >= 8.2 (dipakai: PHP 8.2.12)
- Composer
- XAMPP (Apache + MySQL) dan phpMyAdmin
- Koneksi internet (untuk Tailwind CDN)

## Langkah Instalasi

### A. Clone repo ini

```bash
git clone https://github.com/USERNAMEMU/TugasWeb-P9-LaravelSetup.git
cd TugasWeb-P9-LaravelSetup
composer install
copy .env.example .env
php artisan key:generate
```

Buat database `laravel_p9` di phpMyAdmin, lalu pastikan `.env` berisi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_p9
DB_USERNAME=root
DB_PASSWORD=
```

Jalankan migration dan server:

```bash
php artisan migrate
php artisan serve
```

Buka `http://127.0.0.1:8000`.

### B. Cara project ini dibuat dari nol

```bash
composer create-project laravel/laravel TugasWeb-P9-LaravelSetup
cd TugasWeb-P9-LaravelSetup
```

1. Buat database `laravel_p9` di phpMyAdmin.
2. Ubah koneksi di `.env` menjadi `mysql` (lihat konfigurasi di atas).
3. Generate controller dan model:

```bash
php artisan make:controller ContactController
php artisan make:model Course -m
```

4. Jalankan migration dan server:

```bash
php artisan migrate
php artisan serve
```

## Daftar Route

| URL | Keterangan |
|-----|------------|
| `/` | Halaman welcome, array `name` dan `courses` dikirim dari route |
| `/about` | Profil dan skills, array dikirim dari route |
| `/contact` | Lewat `ContactController`, menampilkan kontak dan data dari model `Course` |
| `/hello/{nama}` | Bonus: route parameter |

Lihat semua route dengan `php artisan route:list`.

## Struktur Folder

```
TugasWeb-P9-LaravelSetup/
├── app/
│   ├── Http/Controllers/ContactController.php   # Controller (C)
│   └── Models/Course.php                        # Model (M)
├── bootstrap/                                   # file booting framework
├── config/                                      # file konfigurasi
├── database/
│   └── migrations/                              # skema tabel (termasuk courses)
├── docs/                                        # screenshot untuk README
├── public/                                      # document root (index.php)
├── resources/
│   └── views/                                   # Blade views (V)
│       ├── layouts/app.blade.php                # layout + Tailwind CDN
│       ├── welcome.blade.php
│       ├── about.blade.php
│       ├── contact.blade.php
│       └── hello.blade.php
├── routes/
│   └── web.php                                  # peta URL ke view/controller
├── storage/                                     # cache, log, upload
├── tests/                                       # unit dan feature test
├── vendor/                                      # dependency Composer (tidak di-commit)
├── .env                                         # konfigurasi lokal (tidak di-commit)
└── artisan                                      # CLI Laravel
```

Penjelasan singkat:

- **app/** berisi logika aplikasi: Model dan Controller dari pola MVC.
- **resources/views/** berisi tampilan Blade (View).
- **routes/web.php** mendefinisikan URL dan menghubungkannya ke view atau controller.
- **database/** berisi migration yang mengatur versi skema database.
- **public/** adalah satu-satunya folder yang diakses langsung oleh browser.
- **config/** berisi pengaturan aplikasi, dibaca lewat `config()`.
- **.env** menyimpan rahasia lokal (password DB, APP_KEY) dan tidak boleh di-commit.
- **vendor/** berisi dependency hasil `composer install`.

## Mengisi Data Contoh (opsional)

```bash
php artisan tinker
```

```php
App\Models\Course::create(['name' => 'Pemrograman Web', 'credits' => 3]);
App\Models\Course::create(['name' => 'Basis Data', 'credits' => 3]);
exit
```

Data akan tampil di halaman `/contact`.

## Screenshot
##welcome
<img width="887" height="460" alt="Welcome" src="https://github.com/user-attachments/assets/2be941c3-c691-4a38-9b83-0d5c4af3327a" />
##about
<img width="814" height="443" alt="About" src="https://github.com/user-attachments/assets/23830a29-dcb8-4578-82fa-12dc5a925d2e" />
##contact
<img width="767" height="446" alt="Contact" src="https://github.com/user-attachments/assets/f7188ca3-4ea0-4fcf-9c9a-a1ee198dd2cd" />
##hello
<img width="776" height="370" alt="Hello" src="https://github.com/user-attachments/assets/e44fe8c4-9aa0-42ea-a7af-2f6808dd3c6e" />



