

/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
/*=======================================================================================================================================*/

menuAsideFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
featuredProfilesFunctions(); //Funções da seção DESTAQUES
postingFunctions(); //Funções da seção de postagem

/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
/*=======================================================================================================================================*/

//LIMITADOR de CARACTERES dos inputs
function charactersLimit() {
    const maxCharacters = parseInt(document.querySelector(".H-max-characters").textContent);
    const input = document.querySelector(".H-type-here");
    const inputContent = input.value;
    const numberOFCharacters = document.querySelector(".H-characters-number");
    const characteres = document.querySelector(".H-characters");

    numberOFCharacters.textContent = input.value.length;
    numberOFCharacters.style.color = "lime";

    //100% do limite máximo de caracteres atingido
    if (inputContent.length >= maxCharacters) {
        input.value = inputContent.slice(0, maxCharacters);
        numberOFCharacters.textContent = "MAX";
        numberOFCharacters.style.color = "red";

        //Animação de shake/tremer
        input.classList.add("characterBlocked");
        characteres.classList.add("characterBlocked");
        setTimeout(() => {
            input.classList.remove("characterBlocked");
            characteres.classList.remove("characterBlocked");
        }, 700);

    //70% do limite máximo de caracteres atingido
    } else if(inputContent.length >= (maxCharacters/1.5)){
        numberOFCharacters.style.color = "darkorange";
    
    //50% do limite máximo de caracteres atingido
    } else if(inputContent.length >= (maxCharacters/2)){
        numberOFCharacters.style.color = "yellow";
    }
}

//Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
function menuAsideFunctions() {
    const main = document.querySelector("main");
    const sidebar = document.querySelector(".M-menu-aside");
    const sidebarCenter = document.querySelector(".M-aside-center");
    const morePagesContainer = document.querySelector(".M-aside-more");
    var isOpen = false; // Variável para controlar o estado de abertura da sidebar
    var hoverTimeout;

    // Abre e fecha o menu usando BOTÃO
    function buttonMenuAside() {
        const menuButton = document.querySelector(".menu-button");

        menuButton.addEventListener('click', function () {
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
        sidebar.addEventListener('mouseover', function () {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(function () {
                sidebar.classList.remove("close");
            }, 100); // Delay em milissegundos
        });

        sidebar.addEventListener('mouseout', function () {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(function () {
                sidebar.classList.add("close");
                morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
            }, 200); // Delay em milissegundos
        });
    }

    // Abre a seção para ver as páginas ocultas
    function openMorePages() {
        const morePages = document.querySelector(".M-more-pages");

        morePages.addEventListener('click', function () {
            morePagesContainer.classList.toggle("close");
            isOpen = !isOpen;

            if (isOpen) {
                setTimeout(hoverMorePages, 2000);
            } else {
                morePagesContainer.classList.add("close");
            }
        });
    }

    //Muda o tema de acordo com o circulo
    function testChangeTheme() {
        const body = document.querySelector("body");
        const team1 = document.querySelector(".M-team-1");
        const team2 = document.querySelector(".M-team-2");
        const team3 = document.querySelector(".M-team-3");

        team1.addEventListener("click", () => {
            body.classList.toggle("G-green");
            body.classList.remove("G-orange");
            body.classList.remove("G-blue");
        });

        team2.addEventListener("click", () => {
            body.classList.toggle("G-orange");
            body.classList.remove("G-green");
            body.classList.remove("G-blue");
        });

        team3.addEventListener("click", () => {
            body.classList.toggle("G-blue");
            body.classList.remove("G-orange");
            body.classList.remove("G-green");
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

    // Abre a seção para alternar de usuário e sair do site
    function userActions() {

        const logOptionsDiv = document.querySelector('.M-log-actions');
        const logButtom = document.querySelector('.M-log-buttom');
        
        // Abre a seção com botão
        function openContainer() {
            logButtom.addEventListener('click', function () {
                logOptionsDiv.classList.toggle("close");
                logButtom.classList.toggle("active");
        
                if (logOptionsDiv.classList.contains("close")) {
                    clearTimeout(hoverTimeout);
                } else {
                    clearTimeout(hoverTimeout);
                }
            });
    }
        // Fecha a seção com hover
        function closeContainerHover(){

            main.addEventListener("mouseover", () => {
                logOptionsDiv.classList.add("close");
                logButtom.classList.remove("active");
            })
            
            sidebarCenter.addEventListener("mouseover", () => {
                logOptionsDiv.classList.add("close");
                logButtom.classList.remove("active");
            })
        }

        //SAI do site
        function logOutBonfire() {
            const logOutButton = document.querySelector('.M-log-out');
            const confirmDialog = document.querySelector('.M-log-out-modal');
            const confirmYes = document.querySelector('.M-confirm-log-out');
            const confirmNo = document.querySelector('.M-cancel-log-out');
            const pressXbutton = document.querySelector('.M-close-log-out-icon');

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
        openContainer();
        closeContainerHover();
        logOutBonfire();
    }

    testChangeTheme();
    openMorePages();
    hoverMenuAside();
    buttonMenuAside();
    toggleSelectedPage();
    userActions();
}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}

//Funções da seção DESTAQUES
function featuredProfilesFunctions() {
    //Crie um carrosel de perfis
    function swiperProfiles(){
    var swiper = new Swiper(".H-profiles-swiper", {
        slidesPerView: 2,
        direction: "vertical",
        loop: true,
        navigation: {
          nextEl: ".H-arrow-next",
          prevEl: ".H-arrow-preview",
        },
        mousewheel: true,
        keyboard: {
            enabled: true,
          },

        autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        },
        
      });
  
    }
    //Alterna os botões de seguir/seguindo quando clicados
    function toggleFollows() {
    const followButtonList = document.querySelectorAll(".H-follow");

      followButtonList.forEach((followButton) => {
        followButton.addEventListener('click', () => {
          if (followButton.textContent === "Seguir") {
            followButton.textContent = "Seguindo";
          } else {
            followButton.textContent = "Seguir";
          }
        });
      });
    }

    swiperProfiles(); 
    toggleFollows();
}


