Enter<?php
require_once '../includes/config.php';
requireLogin();

$user = getCurrentUser($conn);
$pageTitle = 'لوحة التحكم';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - <?php echo htmlspecialchars($user['username']); ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>القائمة</h2>
            <ul>
                <li><a href="dashboard.php">الرئيسية</a></li>
                <li><a href="../index.php">العودة للموقع</a></li>
                <li><a href="logout.php">تسجيل خروج</a></li>
            </ul>
        </aside>
        
        <main class="dashboard-main">
            <h1>مرحباً، <?php echo htmlspecialchars($user['username']); ?>!</h1>
            
            <div class="dashboard-widgets">
                <div class="widget">
                    <h3>معلومات الملف الشخصي</h3>
                    <p>البريد الإلكتروني: <?php echo htmlspecialchars($user['email']); ?></p>
                    <p>تاريخ التسجيل: <?php echo $user['created_at']; ?></p>
                </div>
                
                <div class="widget">
                    <h3>روابط سريعة</h3>
                    <ul>
                        <li><a href="../index.php">الصفحة الرئيسية</a></li>
                        <li><a href="../عن-الموقع.php">عن الموقع</a></li>
                        <li><a href="../اتصال.php">اتصل بنا</a></li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
