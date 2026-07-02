/**
 * dropdown.js
 * Điều khiển mở/đóng menu popup (drawer) khi bấm avatar user ở navbar.
 */

(function () {
  function initDropdown() {
    var trigger = document.querySelector('[data-drawer-trigger]');
    var overlay = document.querySelector('[data-drawer-overlay]');

    if (!trigger || !overlay) return;

    function openDrawer() {
      overlay.classList.add('is-open');
      trigger.setAttribute('aria-expanded', 'true');
    }

    function closeDrawer() {
      overlay.classList.remove('is-open');
      trigger.setAttribute('aria-expanded', 'false');
    }

    trigger.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = overlay.classList.contains('is-open');
      isOpen ? closeDrawer() : openDrawer();
    });

    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) closeDrawer();
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeDrawer();
    });
  }

  document.addEventListener('DOMContentLoaded', initDropdown);
})();
