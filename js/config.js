const quickMessages = document.querySelector('.Q-quick-messages');
const messagePusher = document.querySelector('.Q-message-pusher');

messagePusher.addEventListener('click', () => {
    quickMessages.classList.toggle("close");
});

const searchConfigIcon = document.querySelector('.S-search-icon');
const searchConfigSection = document.querySelector('.S-div-search');

searchConfigIcon.addEventListener('click', () => {
    searchConfigSection.classList.toggle("close");
});


const buttomConfig = document.querySelectorAll('.S-buttom');
const sTierSections = document.querySelectorAll('.S-tier');

buttomConfig.forEach((listElement, index) => {
    listElement.addEventListener('click', () => {
        // Se a S-buttom já estiver ativa, desativa ela e sua seção correspondente
        if (listElement.classList.contains('active')) {
            listElement.classList.remove('active');
            sTierSections[index].classList.remove('active');
            return;
        }

        // Fechar todas as seções S-tier ativas
        sTierSections.forEach((section) => section.classList.remove('active'));

        // Remover a classe 'active' de todas as S-buttoms
        buttomConfig.forEach((button) => button.classList.remove('active'));

        // Adicionar a classe 'active' à S-buttom clicada
        listElement.classList.add('active');

        // Adicionar a classe 'active' à seção S-tier correspondente
        sTierSections[index].classList.add('active');
    });
});

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

defineTheme();

const fontFilter = document.querySelector('.S-font-filter');
const fontAdvanced = document.querySelector('.S-font-advanced-config');

fontFilter.addEventListener('click', () => {
    fontAdvanced.classList.toggle('close');
})