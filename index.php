<?php
/**
 * index.php
 * Trang gốc duy nhất. PHP CHỈ dùng để include các component frontend.
 * Không xử lý dữ liệu, không backend, không database, không session.
 * Toàn bộ nội dung nằm trong thư mục data/.
 */

$profile   = require __DIR__ . '/data/profile.php';
$social    = require __DIR__ . '/data/social.php';
$payment   = require __DIR__ . '/data/payment.php';
$utilities = require __DIR__ . '/data/utilities.php';
$posts     = require __DIR__ . '/data/posts.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?= htmlspecialchars($profile['name']) ?> — Personal Profile</title>
    <meta name="description" content="<?= htmlspecialchars($profile['bio']) ?>">

    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/layout.css">
    <link rel="stylesheet" href="assets/css/glassmorphism.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="assets/css/components/navbar.css">
    <link rel="stylesheet" href="assets/css/components/drawer.css">
    <link rel="stylesheet" href="assets/css/components/hero.css">
    <link rel="stylesheet" href="assets/css/components/tabbar.css">
    <link rel="stylesheet" href="assets/css/components/terminal.css">
    <link rel="stylesheet" href="assets/css/components/social-card.css">
    <link rel="stylesheet" href="assets/css/components/payment-card.css">
    <link rel="stylesheet" href="assets/css/components/utility-card.css">
    <link rel="stylesheet" href="assets/css/components/post-card.css">
    <link rel="stylesheet" href="assets/css/components/footer.css">
</head>
<body>

    <?php require __DIR__ . '/includes/header.php'; ?>

    <main class="page">
        <div class="container">

            <?php require __DIR__ . '/includes/hero.php'; ?>
            <?php require __DIR__ . '/includes/tabbar.php'; ?>

            <!-- ===== Trang: Cá nhân ===== -->
            <div class="tab-page is-active" data-tab-page="personal">
                <?php require __DIR__ . '/includes/terminal.php'; ?>
                <?php require __DIR__ . '/includes/social.php'; ?>
            </div>

            <!-- ===== Trang: Thanh toán ===== -->
            <div class="tab-page" data-tab-page="payment">
                <?php require __DIR__ . '/includes/payment.php'; ?>
            </div>

            <!-- ===== Trang: Tiện ích ===== -->
            <div class="tab-page" data-tab-page="utilities">
                <?php require __DIR__ . '/includes/utilities.php'; ?>
            </div>

            <!-- ===== Trang: Bài đăng ===== -->
            <div class="tab-page" data-tab-page="posts">
                <?php require __DIR__ . '/includes/posts.php'; ?>
            </div>

            <?php require __DIR__ . '/includes/footer.php'; ?>
        </div>
    </main>

    <?php require __DIR__ . '/includes/drawer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/tabbar.js"></script>
    <script src="assets/js/copy-clipboard.js"></script>
</body>
</html>
