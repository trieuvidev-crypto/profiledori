<?php
/**
 * includes/footer.php
 * Biến $profile được nạp sẵn từ index.php.
 */
?>
<footer class="footer">
    &copy; <?= date('Y') ?> <strong><?= htmlspecialchars($profile['name']) ?></strong>
    &nbsp;Made with <span class="heart">&hearts;</span> in Vietnam
</footer>
