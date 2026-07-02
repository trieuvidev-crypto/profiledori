/**
 * main.js
 * Điểm khởi tạo chung: hiệu ứng ripple cho nút và fade-in khi tab hiển thị.
 * Các module riêng (dropdown.js, tabbar.js, copy-clipboard.js) tự lắng nghe
 * DOMContentLoaded độc lập để dễ bảo trì / tách rời khi cần.
 */

(function () {
  function initRipple() {
    document.addEventListener('click', function (e) {
      var target = e.target.closest('.btn-ripple');
      if (!target) return;

      var rect = target.getBoundingClientRect();
      var size = Math.max(rect.width, rect.height);
      var dot = document.createElement('span');

      dot.className = 'ripple-dot';
      dot.style.width = dot.style.height = size + 'px';
      dot.style.left = (e.clientX - rect.left - size / 2) + 'px';
      dot.style.top = (e.clientY - rect.top - size / 2) + 'px';

      target.appendChild(dot);
      window.setTimeout(function () {
        dot.remove();
      }, 500);
    });
  }

  document.addEventListener('DOMContentLoaded', initRipple);
})();
