
# Aplikasi Kafe CI 4



## Fitur

- Login
- Register
- Hapus data
- Tambah data


## Requirement

- PHP
- Composer
- MySQL
- PHP MyAdmin


## Installation

Ikuti instruksi dibawah ini untuk installasi.

1. Buka terminal pada project.

2. Install semua dependencies composer yang dibutuhkan. Ketik:
```bash
  composer install
```
3. Konfigurasikan pengaturan database pada file `.env`.
4. Lakukan migration untuk semua table. Ketik:
```bash
  php spark migrate
```
5. Lakukan seeding data untuk table. Ketik:
```bash
  php spark db:seed UserSeeder
```
```bash
  php spark db:seed MenuSeeder
```
## Test

Untuk menguji coba, ketik:

```bash
  php spark serve
```

