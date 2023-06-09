/*==========================================================================================================================================
======================================================== INDIVIDUALIDADES DA PÁGINA ========================================================
============================================================================================================================================*/


//Carrosel de organizações
const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 5,
    centeredSlides: true,
    freeMode: true,
    spaceBetween: 40,
    grabCursor: true,
    mousewheel: true,
    watchOverflow: true,

    keyboard: {
        enabled: true
    },

    pagination: {
        el: '.org-pagination',
        dynamicBullets: true,
        clickable: true,
    },

    navigation: {
        nextEl: '.arrow-right',
        prevEl: '.arrow-left',
    },

    speed: 300, // Defina um valor adequado para a velocidade da transição dos slides
});


/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
=========================================================================================================================================*/

openTiers(); //Abre e fecha CADA SEÇÃO da página de configurações
openSearchArea(); //Abre e fecha a ÁREA DE PESQUISA
defineTheme(); //Define o MODO(Light/Dark) e as CORES do site
defineFont(); //Define AS FONTES do site
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
logOutBonfire(); //SAI do site
openToggleThemeFunctions(); //Abre as seções de cada função na área de escolha de tema do site por Organização
menuAsideFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL


/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
=========================================================================================================================================*/


//Abre e fecha CADA SEÇÃO da página de configurações
function openTiers() {
    const buttomConfig = document.querySelectorAll('.S-buttom');
    const tierSections = document.querySelectorAll('.S-tier');

    buttomConfig.forEach((buttomList, index) => {
        buttomList.addEventListener('click', () => {
            buttomConfig.forEach(button => button.classList.toggle('active', button === buttomList));
            tierSections.forEach(section => section.classList.toggle('active', section === tierSections[index]));
        });
    });
}

//Abre e fecha a ÁREA DE PESQUISA
function openSearchArea() {
    const searchConfigIcon = document.querySelector('.S-search-icon');
    const searchConfigSection = document.querySelector('.S-div-search');

    searchConfigIcon.addEventListener('click', () => {
        searchConfigSection.classList.toggle("close");
    });
}

//Define o MODO(Light/Dark) e as CORES do site
function defineTheme() {
    const colorCards = document.querySelectorAll('.S-card');

    function updateColors() {
        const currentCard = document.querySelector('.S-card.current');
        const orgColorClass = Array.from(currentCard.classList).find(cls => cls.endsWith('-color'));
        document.documentElement.className = orgColorClass;
    }

    function updateMode() {
        const chk = document.getElementById('S-chk');
        chk.addEventListener('change', () => {
            document.body.classList.toggle('light-mode');
        });
    }

    colorCards.forEach(card => {
        card.addEventListener('click', function () {
            colorCards.forEach(card => card.classList.remove("current"));
            this.classList.add("current");
            updateColors(); // Atualiza as cores com base na seleção atual
        });
    });

    updateMode(); // Ativa a funcionalidade de alternar entre o modo claro e escuro
    updateColors(); // Atualiza as cores com base na seleção inicial
}

//Define AS FONTES do site
function defineFont() {

    //Define o TAMANHO de UMA FONTE ESPECÍFICA do site
    function defineEspecificFontSize() {
        function updateFontSize(className, sizeVarName) {
            const sizeValue = document.querySelector(className + '-value');
            const sizeRange = document.querySelector(className + '-range');

            sizeRange.addEventListener('input', function () {
                sizeValue.innerHTML = this.value;
                document.documentElement.style.setProperty(sizeVarName, `${sizeRange.value}px`);
            });
        }

        updateFontSize('.S-title-font-size', '--size-font-title');
        updateFontSize('.S-subtitle-font-size', '--size-font-subtitle');
        updateFontSize('.S-text-font-size', '--size-font-text');
        updateFontSize('.S-icons-font-size', '--size-font-icons');
    }

    //Abre e fecha a ÁREA DE CONFIGURAÇÕES AVANÇADAS DE FONTE
    function openAdvancedFontConfig() {
        const fontAdvancedConfig = document.querySelector('.S-font-advanced-config');
        const fontAdvancedConfigIcon = document.querySelector('.S-font-config');

        fontAdvancedConfigIcon.addEventListener('click', () => {
            fontAdvancedConfig.classList.toggle('close');
        });
    }

    //Define o TAMANHO de TODAS AS FONTES do site
    function defineAllFontSize() {
        const fontSizeValue = document.querySelector('.S-font-size-value');
        const fontSizeRange = document.querySelector('.S-font-size-range');

        const rangeMin = parseInt(fontSizeRange.min);
        const rangeMax = parseInt(fontSizeRange.max);
        const rangeCenter = (rangeMin + rangeMax) / 2;

        const initialFontSize = getComputedStyle(document.documentElement).getPropertyValue('--size-font-title') || rangeCenter;
        const initialFontIcons = getComputedStyle(document.documentElement).getPropertyValue('--size-font-icons') || rangeCenter;
        const initialFontSubtitle = getComputedStyle(document.documentElement).getPropertyValue('--size-font-subtitle') || rangeCenter;
        const initialFontText = getComputedStyle(document.documentElement).getPropertyValue('--size-font-text') || rangeCenter;
        const initialFontDetail = getComputedStyle(document.documentElement).getPropertyValue('--size-font-detail') || rangeCenter;

        fontSizeRange.addEventListener('input', function () {
            const newSize = parseInt(initialFontSize) + parseInt(fontSizeRange.value) - rangeCenter;
            const newIconsSize = parseInt(initialFontIcons) + parseInt(fontSizeRange.value) - rangeCenter;
            const newSubtitleSize = parseInt(initialFontSubtitle) + parseInt(fontSizeRange.value) - rangeCenter;
            const newTextSize = parseInt(initialFontText) + parseInt(fontSizeRange.value) - rangeCenter;
            const newDetailSize = parseInt(initialFontDetail) + parseInt(fontSizeRange.value) - rangeCenter;

            fontSizeValue.innerHTML = fontSizeRange.value;

            document.documentElement.style.setProperty('--size-font-title', `${newSize}px`);
            document.documentElement.style.setProperty('--size-font-icons', `${newIconsSize}px`);
            document.documentElement.style.setProperty('--size-font-subtitle', `${newSubtitleSize}px`);
            document.documentElement.style.setProperty('--size-font-text', `${newTextSize}px`);
            document.documentElement.style.setProperty('--size-font-detail', `${newDetailSize}px`);
        });

        function defineFontSizeByButtons() {
            const fontSizeMinus = document.querySelector('.S-font-size-minus');
            const fontSizePlus = document.querySelector('.S-font-size-plus');

            fontSizePlus.addEventListener('click', () => {
                fontSizeRange.value = parseInt(fontSizeRange.value) + 1;
                fontSizeRange.dispatchEvent(new Event('input'));
            });

            fontSizeMinus.addEventListener('click', () => {
                fontSizeRange.value = parseInt(fontSizeRange.value) - 1;
                fontSizeRange.dispatchEvent(new Event('input'));
            });
        }
        defineFontSizeByButtons();
    }

    openAdvancedFontConfig();
    defineAllFontSize();
    defineEspecificFontSize();
}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}

//SAI do site
function logOutBonfire() {
    const logOutButton = document.querySelector('.S-logout-icon');
    const confirmDialog = document.querySelector('.S-log-out-modal');
    const confirmYes = document.querySelector('.S-confirm-log-out');
    const confirmNo = document.querySelector('.S-cancel-log-out');
    const pressXbutton = document.querySelector('.S-close-log-out-icon');

    logOutButton.addEventListener('click', (event) => {
        event.preventDefault();
        confirmDialog.style.display = 'block';
    });

    confirmYes.addEventListener('click', () => {
        window.location.href = 'login.html';
    });

    confirmNo.addEventListener('click', () => {
        confirmDialog.style.display = 'none';
    });

    pressXbutton.addEventListener('click', () => {
        confirmDialog.style.display = 'none';
    });
}

//Abre as seções de cada função na área de escolha de tema do site por Organização
function openToggleThemeFunctions() {
    function openSearchOrg() {
        const searchOrgDiv = document.querySelector('.S-search-org');
        const searchOrgIcon = document.querySelector('.S-search-org-icon');

        searchOrgIcon.addEventListener('click', () => {
            searchOrgDiv.classList.toggle('active');
        });
    }

    function openSuggestOrg() {
        const suggestOrgDiv = document.querySelector('.S-suggest-org');
        const suggestOrgIcon = document.querySelector('.S-suggest-org-icon');

        suggestOrgIcon.addEventListener('click', () => {
            suggestOrgDiv.classList.toggle('active');
        });
    }

    function openCleanOrg() {
        const cleanOrgDiv = document.querySelector('.S-clean-org');
        const cleanOrgIcon = document.querySelector('.S-clean-org-icon');
        cleanOrgIcon.addEventListener('click', () => {
            cleanOrgDiv.classList.toggle('active');
        });
    }

    openSearchOrg();
    openSuggestOrg();
    openCleanOrg();
}

//Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
function menuAsideFunctions() {
    const sidebar = document.querySelector(".M-menu-aside");
    const morePagesContainer = document.querySelector(".M-aside-more");
    var isOpen = false; // Variável para controlar o estado de abertura da sidebar
    var hoverTimeout;
  
    /* Essas funções do Menu Aside não devem ocorrer nessa página
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
    }*/

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

    testChangeTheme();
    openMorePages();
}  

