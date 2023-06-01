const list = document.querySelectorAll('.M-aside-list');
const sidebar = document.querySelector(".M-menu-aside");
const menuButton = document.querySelector(".menu-buttom");

menuButton.addEventListener('click', () => {
  sidebar.classList.toggle("close");
});

list.forEach(item => item.addEventListener('click', function() {
  list.forEach(item => item.classList.remove('active'));
  this.classList.add('active');
}));
