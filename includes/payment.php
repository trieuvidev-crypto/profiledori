<?php
/**
 * includes/payment.php
 * Section Thanh toán (Donate): box nội dung chuyển khoản + danh sách
 * card ngân hàng (Techcombank, Vietcombank, ZaloPay).
 * Biến $payment được nạp sẵn từ index.php. Toàn bộ dữ liệu lấy từ
 * data/payment.php — sửa số tài khoản/QR ở đó, KHÔNG sửa file này.
 */
?>
<section class="section">
    <div class="section-head">
        <span class="section-head__icon">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/></svg>
        </span>
        <div>
            <div class="section-head__title">Chuyển khoản tài khoản</div>
            <div class="section-head__subtitle">Ủng hộ / Donate cho Dori</div>
        </div>
    </div>

    <div class="transfer-box animate-slide-up">
        <div class="transfer-box__label">NỘI DUNG CHUYỂN KHOẢN</div>
        <div class="transfer-box__row">
            <span class="transfer-box__content"><?= htmlspecialchars($payment['transfer_content']) ?></span>
            <button class="copy-btn btn-ripple" type="button" data-copy="<?= htmlspecialchars($payment['transfer_content']) ?>">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>
                <span data-copy-label>Sao chép</span>
            </button>
        </div>
    </div>

    <div class="bank-list" style="margin-top: 16px;">
        <?php foreach ($payment['banks'] as $bank):
            $logoExists = file_exists(__DIR__ . '/../' . $bank['logo']);
            $qrExists = file_exists(__DIR__ . '/../' . $bank['qr']);
        ?>
        <div class="bank-card glass-hover animate-slide-up">
            <div class="bank-card__head">
                <div class="bank-card__logo">
                    <?php if ($logoExists): ?>
                        <img src="<?= htmlspecialchars($bank['logo']) ?>" alt="<?= htmlspecialchars($bank['name']) ?>">
                    <?php else: ?>
                        <span class="bank-card__logo-fallback"><?= htmlspecialchars(substr($bank['name'], 0, 2)) ?></span>
                    <?php endif; ?>
                </div>
                <div class="bank-card__info">
                    <div class="bank-card__label">Ngân hàng / Ví</div>
                    <div class="bank-card__name"><?= htmlspecialchars($bank['name']) ?></div>
                </div>
            </div>

            <div class="bank-card__body">
                <div class="bank-card__details">
                    <div class="bank-card__holder">
                        Chủ tài khoản
                        <strong><?= htmlspecialchars($bank['holder']) ?></strong>
                    </div>

                    <div class="bank-card__label"><?= htmlspecialchars($bank['account_label']) ?></div>
                    <div class="bank-card__account-row">
                        <span class="bank-card__account"><?= htmlspecialchars($bank['account']) ?></span>
                        <button class="copy-btn btn-ripple" type="button" data-copy="<?= htmlspecialchars($bank['account']) ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="12" height="12" rx="2"/><path d="M5 15V5a2 2 0 0 1 2-2h10"/></svg>
                            <span data-copy-label>Copy</span>
                        </button>
                    </div>
                </div>

                <div class="bank-card__qr">
                    <?php if ($qrExists): ?>
                        <img src="<?= htmlspecialchars($bank['qr']) ?>" alt="QR <?= htmlspecialchars($bank['name']) ?>">
                    <?php else: ?>
                        <span class="bank-card__qr-fallback">QR sẽ cập nhật sau</span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="bank-card__actions">
                <a class="bank-card__transfer-btn btn-ripple" href="<?= !empty($bank['transfer_url']) ? htmlspecialchars($bank['transfer_url']) : '#'; ?>" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    Chuyển khoản ngay
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
