  window.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.gallery-item');
    items.forEach((item, index) => {
      setTimeout(() => item.classList.add('show'), index * 100);
    });
  });