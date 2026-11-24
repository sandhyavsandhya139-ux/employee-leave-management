<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/app.php';

$user = current_user();
if ($user === null) {
    redirect('/employee-leave-management/auth/login.php');
}

redirect($user['role'] === 'admin'
    ? '/employee-leave-management/admin/dashboard.php'
    : '/employee-leave-management/employee/dashboard.php');
