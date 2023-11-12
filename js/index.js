

/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
/*=======================================================================================================================================*/

menuFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
featuredProfilesFunctions(); //Funções da seção DESTAQUES

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


