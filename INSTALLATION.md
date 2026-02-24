# Installation Guide - UMUS NGO Project

## Prerequisites
- PHP >= 8.0
- MySQL/MariaDB
- Composer
- Node.js & NPM (optional, for frontend assets)

## Installation Steps

### 1. Clone the Repository
```bash
git clone https://github.com/buildwithnahin/UMUS-Organization.git
cd UMUS-Organization
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Configure Environment
```bash
# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Configure Database
Edit the `.env` file and set your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=afadzute_afad
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Create Database
```bash
mysql -u root -p -e "CREATE DATABASE afadzute_afad CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Create user (optional)
mysql -u root -p -e "CREATE USER 'afad_user'@'localhost' IDENTIFIED BY 'afad123';"
mysql -u root -p -e "GRANT ALL PRIVILEGES ON afadzute_afad.* TO 'afad_user'@'localhost';"
mysql -u root -p -e "FLUSH PRIVILEGES;"
```

### 6. Import Database

**IMPORTANT:** Use the latest database backup to get all UMUS data, logos, and content:

```bash
# Import the complete database with all data
mysql -u afad_user -pafad123 afadzute_afad < database_backup_20260224.sql
```

**OR** if starting fresh:
```bash
php artisan migrate --seed
```

⚠️ **Note:** If you use `migrate`, you will get default/empty data. Always use the database backup file to get the current UMUS website data, logos, and content.

### 7. Set Permissions
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 8. Run the Application
```bash
php artisan serve
```

Visit: http://127.0.0.1:8000

## Admin Panel Access

**URL:** http://127.0.0.1:8000/admin/login

**Default Credentials:**
- Check the database `users` table for admin credentials
- Or create an admin using: `php create_admin.php`

## Troubleshooting

### Logo/Content Not Showing
- Make sure you imported `database_backup_20260224.sql`
- Check if `public/images/application/umus-logo.jpg` exists
- Verify database connection in `.env`

### Permission Errors
```bash
sudo chmod -R 775 storage bootstrap/cache
sudo chown -R $USER:www-data storage bootstrap/cache
```

### Database Connection Failed
- Verify MySQL is running: `sudo systemctl status mysql`
- Check database credentials in `.env`
- Ensure database exists: `mysql -u root -p -e "SHOW DATABASES;"`

## Important Files

- `database_backup_20260224.sql` - Complete database with UMUS data
- `.env` - Environment configuration
- `public/images/application/` - Logo and application images
- `create_admin.php` - Script to create admin user

## Support

For issues or questions, contact the development team or check the repository issues.
