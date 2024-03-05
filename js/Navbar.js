// JavaScript to toggle mobile menu
document.addEventListener('DOMContentLoaded', function() {
  const hamburgerMenu = document.querySelector('#menu-icon');
  const mobileMenu = document.querySelector('.mobile-navbar');

  hamburgerMenu.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
  });
});
