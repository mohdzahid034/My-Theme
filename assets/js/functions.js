const menu = document.getElementById('menu');
    const menuIcon = document.getElementById('menu-icon');

    menuIcon.addEventListener('click', () => {
      menu.classList.toggle('show');
      menuIcon.classList.toggle('active'); // toggle X animation
    });