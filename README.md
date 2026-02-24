# 🌟 NGO-UMUS - Uddipto Mohila Unnayan Sangstha

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-red?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.1+-blue?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Bootstrap-5.3-purple?style=for-the-badge&logo=bootstrap" alt="Bootstrap">
  <img src="https://img.shields.io/badge/MySQL-5.7+-orange?style=for-the-badge&logo=mysql" alt="MySQL">
</p>

> 🚀 **Quick Start:** For complete installation instructions, see **[INSTALLATION.md](INSTALLATION.md)**
> 
> ⚠️ **IMPORTANT:** When cloning this project, always import `database_backup_20260224.sql` to get all UMUS data, logos, and content. Do NOT run migrations only!

## 📖 About The Project

**Uddipto Mohila Unnayan Sangstha (UMUS)** is a modern, fully responsive NGO website built with Laravel, designed to empower Dalit women and children in Satkhira district, Bangladesh. The platform features a comprehensive admin panel for content management and a beautifully designed frontend showcasing the organization's mission, programs, and impact.

### ✨ Key Features

#### **Frontend**
- 🎨 Modern, responsive design with glass-morphism effects
- 📱 Mobile-first approach (fully responsive)
- 🖼️ Dynamic hero slider with AOS animations
- 📊 Animated impact counters with Intersection Observer
- 📰 Latest news & events showcase
- 🎯 Featured programs with hover effects
- 📂 Ongoing projects display
- ⭐ Success stories with rating filters
- 🖼️ Photo gallery
- 💌 Newsletter subscription system
- 🤝 Unified "Get Involved" section (Sponsor, Volunteer, Subscribe)
- 🎨 Purple gradient backgrounds with map overlays

#### **Admin Panel**
- 🔐 Secure authentication system
- 📊 Dashboard with statistics
- 🖼️ Slider management
- 📚 Programs & projects management
- 📰 News & events CRUD operations
- 🖼️ Gallery management
- ⭐ Success stories management
- 💪 Impact metrics management
- 👥 Team members management
- 🏛️ Executive committee management
- 🤝 Partners & donors management
- 📄 Publications management
- 📋 Strategic plans management
- ❓ FAQ management
- 🙋 Volunteer registrations
- 📧 Contact messages
- 📬 Newsletter subscribers
- 💰 Donation records

## 🚀 Technologies Used

- **Backend:** Laravel 10.x
- **Frontend:** Blade Templates, Bootstrap 5.3
- **Database:** MySQL
- **Icons:** FontAwesome 6
- **Animations:** AOS (Animate On Scroll)
- **JavaScript:** Vanilla JS, Intersection Observer API
- **Styling:** Custom CSS with glass-morphism and gradients

## 📋 Requirements

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM (for asset compilation)
- XAMPP/LAMPP (recommended for local development)

## ⚙️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/buildwithnahin/-NGO-UMUS.git
cd -NGO-UMUS
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Environment Configuration

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup

Create a MySQL database and update `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations

```bash
# Run all migrations
php artisan migrate

# (Optional) Seed database with sample data
php artisan db:seed
```

### 6. Create Admin User

```bash
# Run the admin creation script
php create_admin.php
```

**Default Admin Credentials:**
```
Email: mamaruf317@gmail.com
Password: admin123
```

### 7. Storage Link

```bash
# Create symbolic link for storage
php artisan storage:link
```

### 8. Compile Assets

```bash
# Compile assets for development
npm run dev

# OR compile for production
npm run production
```

### 9. Start Development Server

```bash
# Start Laravel dev server
php artisan serve

# OR use XAMPP/LAMPP
# Place project in htdocs and access via localhost
```

## 🌐 Access the Application

- **Frontend:** `http://localhost:8000`
- **Admin Panel:** `http://localhost:8000/admin/login`

## 👨‍💼 Admin Panel Features

### Dashboard
- Overview statistics
- Recent activities
- Quick actions

### Content Management
- **Slider:** Manage homepage hero images
- **Programs:** Add/edit organizational programs
- **Projects:** Manage ongoing projects
- **News:** Create and manage news articles
- **Gallery:** Upload and organize photos
- **Stories:** Manage success stories with ratings
- **Impact:** Update impact metrics/counters

### Organization
- **About Us:** Update organization information
- **Mission & Vision:** Edit organizational goals
- **Team Members:** Manage team profiles
- **Executive Committee:** Committee member management
- **Partners:** Manage partner organizations

### Resources
- **Publications:** Upload documents and reports
- **Strategic Plans:** Manage planning documents
- **FAQs:** Create and update FAQs

### User Engagement
- **Volunteers:** View volunteer registrations
- **Contact Messages:** Respond to inquiries
- **Subscriptions:** Manage newsletter subscribers
- **Donations:** Track donation records

## 📁 Project Structure

```
NGO-UMUS/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/           # Admin panel controllers
│   │   └── frontController.php
│   ├── Models/              # Eloquent models
│   └── Helper/              # Helper functions
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/            # Database seeders
├── public/
│   ├── images/             # Uploaded images
│   ├── css/                # Compiled CSS
│   └── js/                 # Compiled JS
├── resources/
│   ├── views/
│   │   ├── home.blade.php  # Main homepage
│   │   ├── admin/          # Admin panel views
│   │   └── layouts/        # Layout templates
│   ├── css/                # Source CSS
│   └── js/                 # Source JS
├── routes/
│   ├── web.php            # Frontend routes
│   └── admin.php          # Admin routes
└── storage/
    ├── app/public/        # Public storage
    └── logs/              # Application logs
```

## 🎨 Design Features

### Modern UI Components
- Glass-morphism cards with backdrop blur
- Purple gradient backgrounds (#667eea → #764ba2)
- Smooth hover animations (translateY, scale, rotate)
- Animated counters with scroll trigger
- Rating filter system for stories
- Responsive image galleries

### Color Scheme
- **Primary (Red):** #dc3545 - CTA buttons
- **Success (Green):** #28a745 - Positive actions
- **Primary (Blue):** #0d6efd - Info & forms
- **Purple Gradient:** #667eea → #764ba2 - Special sections
- **Gold:** #ffd700 - Highlights & accents

## 🛠️ Customization

### Update Logo & Branding
```php
// resources/views/layouts/main.blade.php
// Replace logo and update colors in CSS
```

### Modify Homepage Sections
```php
// resources/views/home.blade.php
// Edit section content and styling
```

### Admin Panel Theme
```php
// resources/views/admin/layouts/master.blade.php
// Customize admin panel appearance
```

## 📸 Screenshots

*Add your screenshots here*

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 🐛 Known Issues

- None at the moment

## 📝 Changelog

### Version 2.0.0 (2026-02-22)
- ✨ Major frontend redesign with modern UI
- 🗑️ Removed all static content for admin management
- 🎨 Added unified "Get Involved" section
- 💎 Implemented glass-morphism design
- 🎯 Added animated impact counters
- 📱 Improved mobile responsiveness
- ⭐ Added success stories rating filter
- 🔧 Optimized codebase (removed 662 lines)

## 🔒 Security

If you discover any security-related issues, please email nahin.codebug@gmail.com instead of using the issue tracker.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👨‍💻 Developer

**Nahin**
- GitHub: [@buildwithnahin](https://github.com/buildwithnahin)
- Email: nahin.codebug@gmail.com

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework
- [Bootstrap](https://getbootstrap.com) - Frontend Framework
- [FontAwesome](https://fontawesome.com) - Icons
- [AOS](https://michalsnik.github.io/aos/) - Animate On Scroll Library

## 📞 Support

For support, email nahin.codebug@gmail.com or create an issue in the repository.

---

<p align="center">Made with ❤️ for Uddipto Mohila Unnayan Sangstha</p>
<p align="center">© 2026 UMUS. All rights reserved.</p>
#   N G O - C D D F 
 
 