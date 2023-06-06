
/*====================================================================================================
============================================ MENU ASIDE ==============================================
====================================================================================================*/

//Estado de abertura e fechamento do Menu
const list = document.querySelectorAll('.M-aside-list');
const sidebar = document.querySelector(".M-menu-aside");
const menuButton = document.querySelector(".menu-buttom");

menuButton.addEventListener('click', () => {
  sidebar.classList.toggle("close");
});

const quickMessages = document.querySelector('.I-quick-messages');
const messagePusher = document.querySelector('.I-message-pusher');

messagePusher.addEventListener('click', () => {
  quickMessages.classList.toggle("close");
});

//Identação da página selecionada
list.forEach(item => item.addEventListener('click', function() {
  list.forEach(item => item.classList.remove('active'));
  this.classList.add('active');
}));

//Troca de cor das barras
const asideTop = document.querySelector('.M-aside-top');
const firstSectionBefore = asideTop.querySelector('section:first-child::before');
const asideCenter = document.querySelector('.M-aside-center');
const menuAside = document.querySelector('.M-menu-aside');

asideTop.addEventListener('mouseover', () => {
  firstSectionBefore.classList.add('section-highlight');
});

asideTop.addEventListener('mouseout', () => {
  firstSectionBefore.classList.remove('section-highlight');
});

asideCenter.addEventListener('mouseover', () => {
  menuAside.classList.add('section-highlight');
});

asideCenter.addEventListener('mouseout', () => {
  menuAside.classList.remove('section-highlight');
});
