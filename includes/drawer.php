<?php
/**
 * includes/drawer.php
 * Menu popup dạng kính mờ (glass) hiện ra khi bấm avatar user.
 * Biến $profile, $social được nạp sẵn từ index.php.
 */
$avatarSrc = !empty($profile['avatar']) && file_exists(__DIR__ . '/../' . $profile['avatar'])
    ? $profile['avatar']
    : 'assets/images/icons/avatar-placeholder.svg';
?>
<div class="drawer-overlay" data-drawer-overlay>
    <div class="drawer glass-dark animate-scale-in">
        <div class="drawer__header">
            <img class="drawer__header-avatar" src="<?= htmlspecialchars($avatarSrc) ?>" alt="<?= htmlspecialchars($profile['name']) ?>">
            <div>
                <div class="drawer__header-name"><?= htmlspecialchars($profile['name']) ?></div>
                <div class="drawer__header-username"><?= htmlspecialchars($profile['username']) ?></div>
            </div>
        </div>

        <div class="drawer__list">
            <button class="drawer__item" type="button" data-tab-target="personal">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 4-6 8-6s8 2 8 6"/></svg>
                Cá nhân
            </button>
            <button class="drawer__item" type="button" data-tab-target="payment">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/></svg>
                Thanh toán
            </button>
            <button class="drawer__item" type="button" data-tab-target="posts">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10M7 12h10M7 16h6"/></svg>
                Bài đăng
            </button>
            <button class="drawer__item" type="button" data-tab-target="utilities">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a4 4 0 0 1-5.4 5.4L4 17v3h3l5.3-5.3a4 4 0 0 1 5.4-5.4l-3 3-2-2z"/></svg>
                Tiện ích
            </button>

            <?php foreach ($social['quick_links'] as $link): ?>
            <a class="drawer__item" href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
                <?= htmlspecialchars($link['name']) ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
