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
changeMenuBars(); //Troca de COR DAS BARRAS do menu lateral


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