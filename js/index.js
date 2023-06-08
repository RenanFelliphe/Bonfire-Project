/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
/*=======================================================================================================================================*/

openMenuAside(); //Abre e fecha o MENU DE NAVEGAÇÃO LATERAL
toggleSelectedPage() //Troca e identa a PÁGINA SELECIONADA no menu lateral
changeMenuBars(); //Troca de COR DAS BARRAS do menu lateral
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS

/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
/*=======================================================================================================================================*/

//Abre e fecha o MENU DE NAVEGAÇÃO LATERAL
function openMenuAside() {
    const sidebar = document.querySelector(".M-menu-aside");
    const menuButton = document.querySelector(".menu-buttom");

    menuButton.addEventListener('click', () => {
        sidebar.classList.toggle("close");
    });
}

//Troca e identa a PÁGINA SELECIONADA no menu lateral
function toggleSelectedPage() {
    const list = document.querySelectorAll('.M-aside-list');

    list.forEach(item => item.addEventListener('click', function () {
        list.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    }));
}

//Troca de COR DAS BARRAS do menu lateral
function changeMenuBars() {
    const asideTop = document.querySelector('.M-aside-top');
    const firstSectionBefore = asideTop.querySelector('section:first-child::before');
    const asideCenter = document.querySelector('.M-aside-center');
    const menuAside = document.querySelector('.M-menu-aside');

    asideTop.addEventListener('mouseover', () => firstSectionBefore.classList.toggle('section-highlight', true));
    asideTop.addEventListener('mouseout', () => firstSectionBefore.classList.toggle('section-highlight', false));

    asideCenter.addEventListener('mouseover', () => menuAside.classList.toggle('section-highlight', true));
    asideCenter.addEventListener('mouseout', () => menuAside.classList.toggle('section-highlight', false));
}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}