<?php
/**
 * includes/utilities.php
 * Biến $utilities được nạp sẵn từ index.php. Dữ liệu quản lý ở data/utilities.php.
 */
?>
<section class="section">
    <div class="section-head">
        <span class="section-head__icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a4 4 0 0 1-5.4 5.4L4 17v3h3l5.3-5.3a4 4 0 0 1 5.4-5.4l-3 3-2-2z"/></svg>
        </span>
        <div>
            <div class="section-head__title">Tiện ích</div>
            <div class="section-head__subtitle">Công cụ do Dori xây dựng</div>
        </div>
    </div>

    <?php if (empty($utilities)): ?>
        <div class="empty-state">Chưa có tiện ích nào. Quay lại sau nhé.</div>
    <?php else: ?>
    <div class="utility-grid">
        <?php foreach ($utilities as $item): ?>
        <a class="utility-card glass-hover" href="<?= htmlspecialchars($item['url']) ?>">
            <span class="utility-card__icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/></svg>
            </span>
            <?= htmlspecialchars($item['name']) ?>
        </a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>
