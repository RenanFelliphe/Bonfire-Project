/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
=========================================================================================================================================*/


/*========================================================================================================================================
============================================================ OUTRAS FUNÇÕES ==============================================================
=========================================================================================================================================*/


menuFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
featuredProfilesFunctions(); //Funções da seção DESTAQUES


/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
=========================================================================================================================================*/


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

//Funções e individualidades do MENU DE NAVEGAÇÃO
function menuFunctions() {
    const menuArea = document.querySelector(".M-menu");
    const notificationsArea = document.querySelector(".M-notifications");
    const searchArea = document.querySelector(".M-search");

    const menuButton = document.querySelector(".M-open-close");
    const allSliderIcons = document.querySelectorAll(".M-slider-options");
    const sliderBar = document.querySelector(".M-slider-bar");
    const allPages = document.querySelectorAll(".M-page");
    const loggingArea = document.querySelector(".M-log-actions");
    const logButton = document.querySelector(".M-log-button");

    function openMenu() {
        const pagesSection = document.querySelector(".M-pages-icon");

        function openCloseMenu() {
            menuArea.classList.toggle("close");
            sliderBar.style.transform = `translateX(${-1.2}rem)`;

            allSliderIcons.forEach((sliderOptions) => {
                sliderOptions.classList.remove("active");
                pagesSection.classList.add("active");
            });
        }
        
        function closeMenuAreas() {
            loggingArea.classList.add("close");

            notificationsArea.classList.remove("active");
            notificationsArea.classList.add("close");

            searchArea.classList.remove("active");
            searchArea.classList.add("close");

            setTimeout(openCloseMenu, 200);
        }

        menuButton.addEventListener('click', () => {
            if (!loggingArea.classList.contains("close") ||
                notificationsArea.classList.contains("active") ||
                searchArea.classList.contains("active")) {
                closeMenuAreas();

            } else {
                notificationsArea.classList.add("close");
                searchArea.classList.add("close");
                openCloseMenu();
            }
        });
    }

    function toggleTheme(){
        const body = document.querySelector("body");
        const team1 = document.querySelector(".M-color1");
        const team2 = document.querySelector(".M-color2");
        const team3 = document.querySelector(".M-color3");

        team1.addEventListener("click", () => {
            body.classList.add("G-pink");
            body.classList.remove("G-orange");
            body.classList.remove("G-cyan");
        });

        team2.addEventListener("click", () => {
            body.classList.add("G-orange");
            body.classList.remove("G-pink");
            body.classList.remove("G-cyan");
        });

        team3.addEventListener("click", () => {
            body.classList.add("G-cyan");
            body.classList.remove("G-orange");
            body.classList.remove("G-pink");
        });
    }

    function sliderFunctions(){
        const pagesIcon = document.querySelector(".M-pages-icon");
        const searchIcon = document.querySelector(".M-search-icon");
        const notificationsIcon = document.querySelector(".M-notifications-icon");

        pagesIcon.addEventListener("click", () => {
            sliderBar.style.transform = `translateX(${-1.2}rem)`;

            allSliderIcons.forEach((sliderOptions) => {
                sliderOptions.classList.remove("active");
                pagesIcon.classList.add("active");
            });

            notificationsArea.classList.remove("active");
            notificationsArea.classList.add("close");
            
            searchArea.classList.remove("active");
            searchArea.classList.add("close");
            });
    
        searchIcon.addEventListener("click", () => {
            sliderBar.style.transform = `translateX(${4.8}rem)`;

            allSliderIcons.forEach((sliderOptions) => {
                sliderOptions.classList.remove("active");
                searchIcon.classList.add("active");
            });

            notificationsArea.classList.remove("active");
            notificationsArea.classList.add("close");

            searchArea.classList.remove("close");
            searchArea.classList.add("active");

            notificationsArea.style.zIndex = "1";
            searchArea.style.zIndex = "2";
        });
    
        notificationsIcon.addEventListener("click", () => {
            sliderBar.style.transform = `translateX(${10.5}rem)`;

            
            allSliderIcons.forEach((slidersIcons) => {
                slidersIcons.classList.remove("active");
                notificationsIcon.classList.add("active");
            });

            searchArea.classList.remove("active");
            searchArea.classList.add("close");

            notificationsArea.classList.remove("close");
            notificationsArea.classList.add("active");

            searchArea.style.zIndex = "1";
            notificationsArea.style.zIndex = "2";
            });
    }
    
    function togglePage(){
        allPages.forEach((pages) => {
            pages.addEventListener("click", () => {
                allPages.forEach((pages) => {
                    pages.classList.remove("active");
                });

                pages.classList.toggle("active");
            });
    });

    }

    function logFunctions(){
        function openLogContainer(){
            logButton.addEventListener('click', () => {
                loggingArea.classList.toggle("close");
            });
        }

        function logOutBonfire(){
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

        openLogContainer();
        logOutBonfire();
    }   

openMenu();
sliderFunctions();
logFunctions();
togglePage();
toggleTheme();

}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}