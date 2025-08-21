# Database Setup Guide

## Local Development

### Option 1: Install MySQL Locally
1. Download and install MySQL Server from https://dev.mysql.com/downloads/mysql/
2. Create a database named `bearjcc_portfolio`
3. Update `.env` file with your MySQL credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=bearjcc_portfolio
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

### Option 2: Use XAMPP
1. Download and install XAMPP from https://www.apachefriends.org/
2. Start MySQL service in XAMPP Control Panel
3. Create database `bearjcc_portfolio` in phpMyAdmin
4. Use default credentials in `.env`:
   ```
   DB_USERNAME=root
   DB_PASSWORD=
   ```

### Option 3: Use Cloud Database
1. Use a free MySQL service like PlanetScale, Railway, or similar
2. Update `.env` with cloud database credentials

## Hostinger Deployment
The database is already configured for Hostinger MySQL:
- Database connection: MySQL
- Host: Your Hostinger MySQL host
- Database: Your Hostinger database name
- Username: Your Hostinger database username
- Password: Your Hostinger database password

## Running Migrations
Once database is set up:
```bash
php artisan migrate
php artisan db:seed
```

## Current Status
- ✅ Database migrations created
- ✅ Models created
- ⏳ Database connection setup (requires local MySQL installation)
- ⏳ Migrations ready to run
