# Laravel Seeder From CSV File

This projects demostrates how to seed database from CSV file.

## Installation

- Clone the repository
```bash
git clone https://github.com/phi-rakib/laravel-csv-seeder.git
```

- Change directory to laravel-csv-seeder
```bash
cd laravel-csv-seeder
```

- Install the dependencies
```bash
composer install
```
- Create database
- Copy the environment file
```bash
cp .env.example .env
```
- Change database configuration values in the environment file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-db-user-name
DB_PASSWORD=your-db-password
```
- Run migration
```bash
php artisan migrate
```
- Seed database
```bash
php artisan db:seed
```