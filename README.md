# LeaveDesk — Employee Leave Management

A standalone employee leave management project built with PHP, MySQL, HTML, CSS, and vanilla JavaScript. It is separate from the existing `vehicle-rental` project.

## Requirements

- XAMPP with PHP 8.1+ and MySQL/MariaDB
- PHP PDO MySQL extension enabled

## Run locally

1. Keep this folder at `C:\xampp\htdocs\employee-leave-management`.
2. Start Apache and MySQL from the XAMPP Control Panel.
3. Open phpMyAdmin at `http://localhost/phpmyadmin` and import `database/schema.sql`.
4. If your local MySQL credentials differ from the XAMPP defaults, set `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD` in the PHP environment or edit the defaults in `db.php`.
5. Visit `http://localhost/employee-leave-management/auth/setup_admin.php` and create the first administrator account. This page disables itself after an administrator has been created.
6. Employees can create accounts at `http://localhost/employee-leave-management/auth/register.php`; administrators can sign in at `http://localhost/employee-leave-management/auth/login.php`.

## Features

- Employee registration and sign-in with password hashing
- Employee overview with annual leave allowances and request counts
- Submit leave requests and view their status and review notes
- Admin overview, pending request review, and employee directory
- CSRF protection, role checks, prepared SQL statements, and escaped HTML output
- Seeded annual, sick, and personal leave types (edit allowances in phpMyAdmin as needed)

Leave is counted in calendar days, including weekends. Each request must start and end within the same calendar year. Pending requests reserve allowance; rejected requests do not.
