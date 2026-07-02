/**
 * tabbar.js
 * Điều khiển chuyển đổi giữa các trang con (Cá nhân / Thanh toán / Tiện ích / Bài đăng)
 * mà không cần tải lại trang. Đồng bộ trạng thái active giữa navbar icon và tabbar chữ.
 */

(function () {
  function initTabs() {
    var tabButtons = document.querySelectorAll('[data-tab-target]');
    var pages = document.querySelectorAll('[data-tab-page]');

    if (!tabButtons.length || !pages.length) return;

    function activateTab(tabId) {
      pages.forEach(function (page) {
        page.classList.toggle('is-active', page.getAttribute('data-tab-page') === tabId);
      });

      tabButtons.forEach(function (btn) {
        btn.classList.toggle('is-active', btn.getAttribute('data-tab-target') === tabId);
      });

      // Đóng drawer nếu đang mở khi chuyển tab
      var overlay = document.querySelector('[data-drawer-overlay]');
      if (overlay) overlay.classList.remove('is-open');
    }

    tabButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        activateTab(btn.getAttribute('data-tab-target'));
      });
    });
  }

  document.addEventListener('DOMContentLoaded', initTabs);
})();
