 // Wait for the DOM to load
  document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.top-item');
    const scrollBox = document.querySelector('.scroll-box');

    navItems.forEach(item => {
      item.addEventListener('mouseenter', () => {
        // Only trigger if this specific item HAS a dropdown
        if (item.querySelector('.item-drop')) {
          scrollBox.style.overflowX = 'visible';
        }
      });

      item.addEventListener('mouseleave', () => {
        // Return to scrollable mode
        scrollBox.style.overflowX = 'auto';
      });
    });
  });