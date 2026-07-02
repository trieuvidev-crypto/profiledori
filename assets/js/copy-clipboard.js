/**
 * copy-clipboard.js
 * Xử lý mọi nút "Sao chép / Copy" trong trang (nội dung chuyển khoản,
 * số tài khoản, số điện thoại...) thông qua thuộc tính data-copy.
 * Dùng chung cho mọi component, không cần viết lại logic ở nơi khác.
 */

(function () {
  function fallbackCopy(text) {
    var textarea = document.createElement('textarea');
    textarea.value = text;
    textarea.style.position = 'fixed';
    textarea.style.opacity = '0';
    document.body.appendChild(textarea);
    textarea.focus();
    textarea.select();
    try {
      document.execCommand('copy');
    } catch (err) {
      console.error('Copy thất bại:', err);
    }
    document.body.removeChild(textarea);
  }

  function copyText(text) {
    if (navigator.clipboard && window.isSecureContext) {
      return navigator.clipboard.writeText(text);
    }
    fallbackCopy(text);
    return Promise.resolve();
  }

  function showFeedback(btn) {
    var label = btn.querySelector('[data-copy-label]');
    var originalText = label ? label.textContent : null;

    btn.classList.add('is-copied');
    if (label) label.textContent = 'Đã copy';

    window.setTimeout(function () {
      btn.classList.remove('is-copied');
      if (label && originalText) label.textContent = originalText;
    }, 1600);
  }

  function initCopyButtons() {
    document.addEventListener('click', function (e) {
      var btn = e.target.closest('[data-copy]');
      if (!btn) return;

      var text = btn.getAttribute('data-copy');
      if (!text) return;

      copyText(text).then(function () {
        showFeedback(btn);
      });
    });
  }

  document.addEventListener('DOMContentLoaded', initCopyButtons);
})();
