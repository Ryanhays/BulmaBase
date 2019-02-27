// Mobile Nav System
var el = document.querySelector('.navbar-burger');
var html = document.querySelector('html');
var submenuItems = document.getElementById('mobile-menu').querySelectorAll('li.menu-item-has-children');

el.onclick = function () {
  html.classList.toggle('menuopen');
};

function spring() {
  this.classList.toggle('spring-open');
  event.stopPropagation();
}

submenuItems.forEach(submenuItem => submenuItem.addEventListener('click', spring));
