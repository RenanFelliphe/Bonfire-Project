/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
/*=======================================================================================================================================*/

menuAsideFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
toggleSelectedPage() //Troca e identa a PÁGINA SELECIONADA no menu lateral
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS

/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
/*=======================================================================================================================================*/

//Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
function menuAsideFunctions() {
    const sidebar = document.querySelector(".M-menu-aside");
    const morePagesContainer = document.querySelector(".M-aside-more");
    var isOpen = false; // Variável para controlar o estado de abertura da sidebar
    var hoverTimeout;
  
    // Abre e fecha o menu usando BOTÃO
    function buttonMenuAside() {
      const menuButton = document.querySelector(".menu-button");
  
      menuButton.addEventListener('click', function() {
        sidebar.classList.toggle("close");
        isOpen = !isOpen;
  
        if (isOpen) {
          setTimeout(hoverMorePages, 2000); // Aguarda 2 segundos antes de permitir a execução da função hoverMorePages
        } else {
          morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
        }
      });
    }
  
    // Abre o menu usando HOVER em Desktops
    function hoverMenuAside() {
      sidebar.addEventListener('mouseover', function() {
        clearTimeout(hoverTimeout);
        hoverTimeout = setTimeout(function() {
          sidebar.classList.remove("close");
        }, 100); // Delay em milissegundos
      });
  
      sidebar.addEventListener('mouseout', function() {
        clearTimeout(hoverTimeout);
        hoverTimeout = setTimeout(function() {
          sidebar.classList.add("close");
          morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
        }, 200); // Delay em milissegundos
      });
    }

    // Abre a seção para ver as páginas ocultas
    function openMorePages() {
      const morePages = document.querySelector(".M-more-pages");
  
      morePages.addEventListener('click', function() {
        morePagesContainer.classList.toggle("close");
        isOpen = !isOpen;
  
        if (isOpen) {
          setTimeout(hoverMorePages, 1300); // Aguarda 1,3 segundos antes de permitir a execução da função hoverMorePages
        } else {
          morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
        }
      });

      // Fecha a seção ao retirar o mouse do container
      function hoverMorePages() {
        if (!isOpen) {
          return; // Retorna se o elemento não estiver aberto
        }
  
        morePagesContainer.addEventListener('mouseover', function() {
          clearTimeout(hoverTimeout);
        });
  
        morePagesContainer.addEventListener('mouseout', function() {
          clearTimeout(hoverTimeout);
          hoverTimeout = setTimeout(function() {
            morePagesContainer.classList.add("close");
            isOpen = false; // Atualiza o estado de abertura do elemento para fechado
          }, 200); // Delay em milissegundos
        });
      }
    }

    //Muda o tema de acordo com o circulo
    function testChangeTheme() {
      const body = document.querySelector("body");
      const team1 = document.querySelector(".M-team-1");
      const team2 = document.querySelector(".M-team-2");
      const team3 = document.querySelector(".M-team-3");
    
      team1.addEventListener("click", () => {
        body.classList.toggle("loud-color");
        body.classList.remove("los-color");
        body.classList.remove("cloud9-color");
      });
    
      team2.addEventListener("click", () => {
        body.classList.toggle("los-color");
        body.classList.remove("loud-color");
        body.classList.remove("cloud9-color");
      });
    
      team3.addEventListener("click", () => {
        body.classList.toggle("cloud9-color");
        body.classList.remove("loud-color");
        body.classList.remove("los-color");
      });
    }

    //Troca e identa a PÁGINA SELECIONADA no menu lateral
    function toggleSelectedPage() {
      const list = document.querySelectorAll('.M-list');
      const sublist = document.querySelectorAll('.M-sublist');

      list.forEach(item => item.addEventListener('click', function () {
          list.forEach(item => item.classList.remove('active'));
          this.classList.add('active');
      }));

      sublist.forEach(subitem => subitem.addEventListener('click', function () {
          sublist.forEach(subitem => subitem.classList.remove('active'));
          this.classList.add('active');
      }));
    }

    testChangeTheme();
    openMorePages();
    hoverMenuAside();
    buttonMenuAside();
    toggleSelectedPage();
}  

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}

