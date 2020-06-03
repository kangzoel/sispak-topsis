# SISPAK TOPSIS

Sistem Pakar dengan metode TOPSIS. Dibuat menggunakan _framework_ Laravel 7.0.

## Instalasi

### Clone Repository ini

```
git clone https://github.com/kangzoel/sispak-topsis.git
```

### Install dependecy

```
cd ./sispak-topsis
composer install
npm install
```

### Setup _environment_

```
cp ./.env-example ./.env        # Linux
copy ./.env-example ./.env      # Windows

# Selanjutnya sesuaikan file .env yang ada di folder sispak-topsis
```

### Migrasi database

Hidupkan MySQL, lalu jalankan

```
php artisan migrate --seed
```

### Jalankan server pengembangan

```
php artisan serve
npm run watch       # Di terminal/ command prompt lain
```

## Kontribusi

Silakan lakukan pull request untuk mulai berkontribusi ke proyek ini
