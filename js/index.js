//DropDown Menu

const btnDropdown = document.querySelector('.js-btn-dropdown');
const dropdown = document.querySelector('.js-dropdown');

function openDropdown(event) {
  event.preventDefault();
  
  dropdown.classList.toggle('active'); 
}

btnDropdown.addEventListener('click', openDropdown);
dropdown.addEventListener('mouseleave', openDropdown);

//Menu Fixo


const header = document.getElementById('js-header');

function fixedMenu() {
  if(window.pageYOffset > 80) {
    header.classList.add('fixed-menu');
    return
  } 
    header.classList.remove('fixed-menu');
}

document.addEventListener('scroll', fixedMenu);

//Menu Mobile
const btnMenu = document.getElementById("js-btn-menu-mobile");
const overlayMenu = document.querySelector(".js-overlay");

function openMenuMobile() {
  document.documentElement.classList.toggle('menu-opened') 
}

btnMenu.addEventListener('click', openMenuMobile);
overlayMenu.addEventListener('click', openMenuMobile);