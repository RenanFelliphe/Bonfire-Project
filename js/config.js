const searchConfigIcon = document.querySelector('.S-search-icon');
const searchConfigSection = document.querySelector('.S-div-search');

searchConfigIcon.addEventListener('click', () => {
  searchConfigSection.classList.toggle("close");
});


const quickMessages = document.querySelector('.Q-quick-messages');
const messagePusher = document.querySelector('.Q-message-pusher');

messagePusher.addEventListener('click', () => {
  quickMessages.classList.toggle("close");
});


let listElements = document.querySelectorAll('.S-buttom');

listElements.forEach(listElement => {
  listElement.addEventListener('click', () => {
    if (listElement.classList.contains('active')) {
      listElement.classList.remove('active');
    } else {
      listElements.forEach(listE => {
        listE.classList.remove('active');
      })
      listElement.classList.toggle('active');
    }
  })
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
    card.addEventListener('click', function() {
      colorCards.forEach(card => card.classList.remove("current"));
      this.classList.add("current");
      updateColors(); // Atualiza as cores com base na seleção atual
    });
  });

  updateMode(); // Ativa a funcionalidade de alternar entre o modo claro e escuro
  updateColors(); // Atualiza as cores com base na seleção inicial
}

defineTheme();
