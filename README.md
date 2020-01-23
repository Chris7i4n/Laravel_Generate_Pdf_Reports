# Laravel_Generate_Pdf_Reports

This project generates a specific PDF report  in the area of occupational safety, it has the admin and client profile, the client or admin can fill the fields to generate the report, admin profile aproves the report and after this the client can see your report in PDF and download it .

## Prerequisites

```
PHP >= 7.3.3
```

```
Laravel >= 5.8
```

```
Composer
```

```
Npm
```

```
Snappy pdf library: https://github.com/barryvdh/laravel-snappy
```

### Getting Started

- First command when you clone the project: 

```
composer update
```

```
npm install
```

- Install pdf library

```
https://github.com/barryvdh/laravel-snappy
```

- Run migrations:

```
php artisan migrate
```

- Seed database:

```
php artisan db:seed 
```

```
the user seeded is in admin profile, you can create clients profile in a sidebar option when you are admin
```
