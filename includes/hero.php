<?php
/**
 * includes/hero.php
 * Cover full-width + avatar glow đè lên cover + tên gradient + badge xác minh
 * + username + số lượt xem + nút social nhanh.
 * Biến $profile, $social được nạp sẵn từ index.php.
 */
$coverExists = !empty($profile['cover']) && file_exists(__DIR__ . '/../' . $profile['cover']);
$avatarSrc = !empty($profile['avatar']) && file_exists(__DIR__ . '/../' . $profile['avatar'])
    ? $profile['avatar']
    : 'assets/images/icons/avatar-placeholder.svg';
?>
<section class="hero animate-fade-in">
    <div class="hero__cover">
        <?php if ($coverExists): ?>
            <img src="<?= htmlspecialchars($profile['cover']) ?>" alt="Cover">
        <?php endif; ?>
    </div>

    <div class="hero__content">
        <div class="hero__avatar-wrap">
            <span class="hero__avatar-glow"></span>
            <img class="hero__avatar" src="<?= htmlspecialchars($avatarSrc) ?>" alt="<?= htmlspecialchars($profile['name']) ?>">
        </div>

        <h1 class="hero__name">
            <?= htmlspecialchars($profile['name']) ?>
            <?php if (!empty($profile['verified'])): ?>
            <svg class="hero__badge" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l2.4 2.1 3.2-.5 1 3.1 3 1.4-.9 3.1 1.7 2.8-2.4 2.2.3 3.2-3.2.3-1.6 2.8-3-1.2-3 1.2-1.6-2.8-3.2-.3.3-3.2-2.4-2.2 1.7-2.8-.9-3.1 3-1.4 1-3.1 3.2.5L12 2z"/><path d="M9 12.5l2 2 4-4.5" stroke="#fff" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <?php endif; ?>
        </h1>

        <div class="hero__meta">
            <span class="hero__pill glass-dark"><?= htmlspecialchars($profile['username']) ?></span>
            <span class="hero__pill glass-dark">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg>
                <?= number_format((int) $profile['views'], 0, ',', '.') ?>
            </span>
        </div>

        <div class="hero__domain"><?= htmlspecialchars($profile['domain']) ?></div>

        <div class="hero__social">
            <?php foreach ($social['quick_links'] as $link): ?>
            <a class="hero__social-btn glass-dark glass-hover" href="<?= htmlspecialchars($link['url']) ?>" target="_blank" rel="noopener">
                <?php if ($link['id'] === 'facebook'): ?>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h3l1-4h-4V7.5C13 6.4 13.6 6 14.6 6H17V2.2C16.6 2.1 15.3 2 13.9 2 11 2 9 3.8 9 7v3H6v4h3v8h4z"/></svg>
                <?php elseif ($link['id'] === 'telegram'): ?>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.5 3.5L2.5 11l6 2 2.2 6.5 3-3.6 4.3 3.1L21.5 3.5zM8.7 13.3l9-6.4-7.1 7.6"/></svg>
                <?php else: ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
                <?php endif; ?>
                <?= htmlspecialchars($link['name']) ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
