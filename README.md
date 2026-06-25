<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Vehikl Oil Change Challenge

A simple Laravel application that determines whether a car is due for an oil change based on:
- Distance driven since last oil change (5000 km rule cutoff)
- Time passed since last oil change (6 months rule cutoff)

---

##  Features

- Form to input:
  - Current odometer
  - Previous odometer
  - Previous oil change date
- Validation to ensure correct input
- Stores each submission in SQLite database
- Unique result page for each submission
- Displays:
  - Distance driven
  - Months passed
  - Whether the car is due for oil change

---

##  Logic

A car is considered **due for an oil change** if:

- It has been driven more than **5000 km**, OR
- It has been more than **6 months** since the last oil change

---

## Setup Instructions

### 1. Clone the repository
```bash
git clone https://github.com/YOUR_USERNAME/YOUR_REPO.git
cd YOUR_REPO

### 2. Install dependencies
```bash
composer install
```

### 3. Environment setup
```bash
cp .env.example .env
php artisan key:generate
```
### 4. Database setup (SQLite)
Create SQLite file:
```bash
touch database/database.sqlite
```
In your `.env` file, set:
```env
DB_CONNECTION=sqlite
```
### 5. Run migrations
```bash
php artisan migrate
```
### 6. Start the application
```bash
php artisan serve
```
Open in browser:
```
http://127.0.0.1:8000
```
---
Routes
GET / → Show form
POST /check → Submit form
GET /result/{id} → Show result page
---
Tech Stack
Laravel 12
Blade Templates
SQLite Database
Carbon (date calculations)

