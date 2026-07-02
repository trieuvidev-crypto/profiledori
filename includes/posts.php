<?php
/**
 * includes/posts.php
 * Biến $posts được nạp sẵn từ index.php. Dữ liệu quản lý ở data/posts.php.
 */
?>
<section class="section">
    <div class="section-head">
        <span class="section-head__icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M7 8h10M7 12h10M7 16h6"/></svg>
        </span>
        <div>
            <div class="section-head__title">Bài đăng</div>
            <div class="section-head__subtitle">Nội dung mới nhất từ Dori</div>
        </div>
    </div>

    <?php if (empty($posts)): ?>
        <div class="empty-state">Chưa có bài đăng nào. Quay lại sau nhé.</div>
    <?php else: ?>
    <div class="post-list">
        <?php foreach ($posts as $post): ?>
        <a class="post-card glass-hover" href="<?= htmlspecialchars($post['url']) ?>">
            <div class="post-card__title"><?= htmlspecialchars($post['title']) ?></div>
            <div class="post-card__excerpt"><?= htmlspecialchars($post['excerpt']) ?></div>
        </a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>
