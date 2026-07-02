<?php
/**
 * includes/terminal.php
 * Terminal card kiểu macOS hiển thị vài dòng thông tin cá nhân dạng lệnh cat.
 * Biến $profile được nạp sẵn từ index.php.
 */
?>
<section class="section">
    <div class="section-head">
        <span class="section-head__icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 4-6 8-6s8 2 8 6"/></svg>
        </span>
        <div>
            <div class="section-head__title">Thông tin cá nhân</div>
            <div class="section-head__subtitle">Tìm hiểu thêm về <?= htmlspecialchars($profile['name']) ?></div>
        </div>
    </div>

    <div class="terminal animate-slide-up">
        <div class="terminal__titlebar">
            <span class="terminal__dots">
                <span class="terminal__dot terminal__dot--red"></span>
                <span class="terminal__dot terminal__dot--yellow"></span>
                <span class="terminal__dot terminal__dot--green"></span>
            </span>
            <span class="terminal__title">dori — -zsh — 80x24</span>
        </div>
        <div class="terminal__body">
            <div class="terminal__meta">Last login: <?= date('D M j H:i:s') ?> on console</div>

            <div class="terminal__line">
                <span class="terminal__prompt">dori@profile:~$</span>
                <span class="terminal__cmd">cat ~/about.txt</span>
            </div>
            <div class="terminal__output"><span class="terminal__arrow">→</span> <?= htmlspecialchars($profile['bio']) ?></div>

            <div class="terminal__line">
                <span class="terminal__prompt">dori@profile:~$</span>
                <span class="terminal__cmd">whoami</span>
            </div>
            <div class="terminal__output"><span class="terminal__arrow">→</span> <?= htmlspecialchars($profile['name']) ?> (<?= htmlspecialchars($profile['username']) ?>)</div>

            <div class="terminal__line">
                <span class="terminal__prompt">dori@profile:~$</span>
                <span class="blinking-cursor"></span>
            </div>
        </div>
    </div>
</section>
