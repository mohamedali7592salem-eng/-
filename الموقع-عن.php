<?php
$pageTitle = 'عن الموقع';
require_once 'includes/header.php';
?>

<section class="about-page">
    <h1>عن موقعي</h1>
    <p>هذه صفحة عن الموقع - محتواها متاح للجميع</p>
    
    <?php if (isLoggedIn()): ?>
        <div class="members-only-content">
            <h2>محتوى خاص بالأعضاء</h2>
            <p>هذا المحتوى يظهر فقط للمستخدمين المسجلين!</p>
        </div>
    <?php endif; ?>
</section>

<?php require_once 'includes/footer.php'; ?>
