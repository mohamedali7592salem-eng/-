Enter<?php
$pageTitle = 'اتصل بنا';
require_once 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    // هنا يمكنك إرسال البريد الإلكتروني أو حفظ الرسالة في قاعدة البيانات
    $success = "تم إرسال رسالتك بنجاح!";
}
?>

<section class="contact-page">
    <h1>اتصل بنا</h1>
    
    <?php if (isset($success)): ?>
        <div class="success-message"><?php echo $success; ?></div>
    <?php endif; ?>
    
    <form method="POST" class="contact-form">
        <div class="form-group">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required 
                   value="<?php echo isLoggedIn() ? htmlspecialchars($user['username']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required
                   value="<?php echo isLoggedIn() ? htmlspecialchars($user['email']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <label for="message">الرسالة:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn-submit">إرسال</button>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>
