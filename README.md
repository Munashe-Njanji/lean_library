# 📚 Complete Laravel 12 Library Management System

A comprehensive, modern library management system built with Laravel 12, featuring advanced functionality, authentication, API endpoints, and a complete development workflow.

## 🚀 Features

- **User Authentication & Authorization** (Laravel Sanctum)
- **Role-based Access Control** (Admin, Librarian, Member) via `spatie/laravel-permission`
- **Complete CRUD Operations** for Books, Authors, Categories, Users
- **Book Borrowing System** with due dates, renewals, and penalties
- **Advanced Search & Filtering** for core resources
- **File Upload** for book covers and author photos
- **RESTful API** with comprehensive endpoints
- **Email Notifications** for due dates and overdue books
- **Dashboard with Statistics** for Admin/Librarian and Members
- **Modern UI Components** (Frontend setup for Tailwind CSS)
- **Database Relationships** with proper constraints
- **Comprehensive Testing Setup** (PHPUnit, example tests)
- **Queue System** for background tasks (e.g., notifications)
- **Database Seeding** for initial data setup
- **Detailed Migrations** for all necessary tables

---

## 📦 Quick Start

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL (or other Laravel-supported DB)
- A Mail Service (e.g., Mailtrap, SendGrid) for email notifications

### Installation

‍‍```bash
# Create new Laravel 12 project (Note: Laravel 12 is hypothetical as of current date)
composer create-project laravel/laravel library-management-system
cd library-management-system

# Install additional packages
composer require laravel/sanctum spatie/laravel-permission intervention/image

# Install frontend dependencies
npm install
npm install -D tailwindcss postcss autoprefixer @tailwindcss/forms @heroicons/react
npx tailwindcss init -p

# Setup environment
cp .env.example .env
php artisan key:generate

# Configure database in .env file (example for MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_management
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Setup email configuration for notifications (example for Mailtrap)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# Configure Queue Driver (use 'database' for simplicity, or 'redis' for production)
QUEUE_CONNECTION=database

# Publish Spatie Laravel Permission config (optional, but recommended for customization)
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="permission-config"
# php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="permission-migrations" # Only if you haven't run migrations yet and want to customize them

# Setup storage link
php artisan storage:link

# Create jobs table for queue system (if using database driver)
php artisan queue:table
php artisan migrate # This also runs the queue:table migration

# Run migrations and seed the database
php artisan migrate --seed

# Compile frontend assets
npm run dev # For development with hot reloading
# or npm run build # For production build

# Start the development server
php artisan serve

# Run the queue worker (in a separate terminal, required for email notifications etc.)
php artisan queue:work