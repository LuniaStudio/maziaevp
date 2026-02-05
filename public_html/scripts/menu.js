const menuIcon = document.querySelector('.menu-icon');
const menuContainer = document.querySelector('.menu-container');
const menuItems = document.querySelectorAll('.menu-item');
const closeMenu = document.querySelector('.close-menu');
const dropdownCtrl = document.querySelector('.dropdown-controller');
const dropdownMenu = document.querySelector('.dropdown-menu');

function togglePageMenu() {

    if (menuContainer.classList.contains('show-menu')) {

        menuContainer.classList.remove('show-menu');
        closeMenu.style.display = 'none';

    } else {

        menuContainer.classList.add('show-menu');
        closeMenu.style.display = 'block';
    }
}

function removeDropdownMenu() {

    if (event.target !== dropdownCtrl && dropdownMenu) {

        dropdownMenu.classList.remove('show');
    }
}

function toggleDropdownMenu() {

    dropdownMenu.classList.toggle('show');
};

menuItems.forEach(

    function(menuItem) {

        menuItem.addEventListener('click', togglePageMenu);
    }
)

menuIcon.addEventListener('click', togglePageMenu);

    if (dropdownCtrl) {

        dropdownCtrl.addEventListener('click', toggleDropdownMenu);
    }

document.addEventListener('click', removeDropdownMenu);
