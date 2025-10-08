const menu = document.getElementById('menu');
    const menuIcon = document.getElementById('menu-icon');

// Toggle open/close when clicking the icon
menuIcon.addEventListener('click', (e) => {
  e.stopPropagation(); // Prevent closing immediately
  menu.classList.toggle('show');
  menuIcon.classList.toggle('active'); // toggle X animation
});

// Close when clicking anywhere outside
document.addEventListener('click', (e) => {
  if (!menu.contains(e.target) && !menuIcon.contains(e.target)) {
    menu.classList.remove('show');
    menuIcon.classList.remove('active');
  }
});

// close menu automatically when clicking a menu link (mobile)
const menuLinks = document.querySelectorAll('#menu a');

menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    // Add a small delay (e.g. 300ms) before closing menu
    setTimeout(() => {
      menu.classList.remove('show');
      menuIcon.classList.remove('active');
    }, 300);
  });
});