/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
/*=======================================================================================================================================*/

openTiers(); //Abre e fecha cada SEÇÃO da página de configurações
openSearchArea(); //Abre e fecha a ÁREA DE PESQUISA
defineTheme(); //Define o MODO(Light/Dark) e as CORES do site
defineFont(); //Define o TIPO, o TAMANHO e a ESPESSURA das FONTES do site
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS

/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
/*=======================================================================================================================================*/

//Abre e fecha cada SEÇÃO da página de configurações
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
        document.documentElement.className = currentCard.classList[1];
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

//Define o TIPO, o TAMANHO e a ESPESSURA das FONTES do site
function defineFont() {
    const fontSizeValue = document.querySelector('.S-font-size-value');
    const fontSizeRange = document.querySelector('.S-font-size-range');

    const fontWeightValue = document.querySelector('.S-font-weight-value');
    const fontWeightRange = document.querySelector('.S-font-weight-range');

    fontSizeRange.addEventListener('input', function () {
        fontSizeValue.innerHTML = this.value;
    });

    fontWeightRange.addEventListener('input', function () {
        fontWeightValue.innerHTML = this.value;
    });
}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}