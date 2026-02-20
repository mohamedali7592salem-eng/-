Enter<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقعي - <?php echo $pageTitle ?? 'الرئيسية'; ?></title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/login_system/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-brand">
                    <a href="/index.php">موقعي</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="/index.php">الرئيسية</a></li>
                    <li><a href="/عن-الموقع.php">عن الموقع</a></li>
                    <li><a href="/اتصال.php">اتصل بنا</a></li>
                </ul>
                <div class="nav-auth">
                    <?php if (isLoggedIn()): ?>
                        <?php $user = getCurrentUser($conn); ?>
                        <div class="user-menu">
                            <span>مرحباً، <?php echo htmlspecialchars($user['username'] ?? 'مستخدم'); ?></span>
                            <a href="/login_system/dashboard.php" class="btn-dashboard">لوحة التحكم</a>
                            <a href="/login_system/logout.php" class="btn-logout">تسجيل خروج</a>
                        </div>
                    <?php else: ?>
                        <a href="/login_system/login.php" class="btn-login">تسجيل دخول</a>
                        <a href="/login_system/register.php" class="btn-register">إنشاء حساب</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
