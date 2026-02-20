Enter<?php
$pageTitle = 'الرئيسية';
require_once 'includes/header.php';
?>

<section class="hero">
    <h1>مرحباً بكم في موقعي</h1>
    <p>هذا هو محتوى الصفحة الرئيسية</p>
    
    <?php if (isLoggedIn()): ?>
        <div class="welcome-message">
            <p>نحن سعداء بعودتك!</p>
        </div>
    <?php else: ?>
        <div class="cta-buttons">
            <a href="/login_system/register.php" class="btn-primary">اشترك الآن</a>
            <a href="/login_system/login.php" class="btn-secondary">تسجيل دخول</a>
        </div>
    <?php endif; ?>
</section>

<?php require_once 'includes/footer.php'; ?>
