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



