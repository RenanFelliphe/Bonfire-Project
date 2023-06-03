const wrapper = document.querySelector(".gallery-wrapper");
const gallery = document.querySelector(".gallery");
const firstCardWidth = gallery.querySelector(".card").offsetWidth;
const arrows = document.querySelectorAll(".gallery-wrapper i");
const carouselChildrens = [...gallery.children];

let isDragging = false,
  isAutoPlay = true,
  startX,
  startScrollLeft,
  timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(gallery.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens
  .slice(-cardPerView)
  .reverse()
  .forEach((card) => {
    gallery.insertAdjacentHTML("afterbegin", card.outerHTML);
  });

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach((card) => {
  gallery.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
gallery.classList.add("no-transition");
gallery.scrollLeft = gallery.offsetWidth;
gallery.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrows.forEach((btn) => {
  btn.addEventListener("click", () => {
    gallery.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
  });
});

let scrollIntervalId;

const startScroll = (direction) => {
  // Função para rolar a galeria continuamente na direção especificada
  const scroll = () => {
    gallery.scrollLeft += direction * firstCardWidth;
  };

  // Iniciar a rolagem automática com um intervalo de 50ms
  scrollIntervalId = setInterval(scroll, 265);
};

const stopScroll = () => {
  // Parar a rolagem automática ao liberar o botão
  clearInterval(scrollIntervalId);
};

// Adicionar eventos de "mousedown" e "mouseup" nos botões de seta
arrows.forEach((btn) => {
  btn.addEventListener("mousedown", () => {
    const direction = btn.id === "left" ? -1 : 1;
    startScroll(direction);
  });

  btn.addEventListener("mouseup", stopScroll);
});

// Parar a rolagem automática se o cursor sair da galeria
gallery.addEventListener("mouseleave", stopScroll);

const dragStart = (e) => {
  isDragging = true;
  gallery.classList.add("dragging");
  // Records the initial cursor and scroll position of the carousel
  startX = e.pageX;
  startScrollLeft = gallery.scrollLeft;
};

const dragging = (e) => {
  if (!isDragging) return; // if isDragging is false return from here
  // Updates the scroll position of the carousel based on the cursor movement
  gallery.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
  isDragging = false;
  gallery.classList.remove("dragging");
};

const infiniteScroll = () => {
  // If the carousel is at the beginning, scroll to the end
  if (gallery.scrollLeft === 0) {
    gallery.classList.add("no-transition");
    gallery.scrollLeft = gallery.scrollWidth - 2 * gallery.offsetWidth;
    gallery.classList.remove("no-transition");
  }
  // If the carousel is at the end, scroll to the beginning
  else if (
    Math.ceil(gallery.scrollLeft) ===
    gallery.scrollWidth - gallery.offsetWidth
  ) {
    gallery.classList.add("no-transition");
    gallery.scrollLeft = gallery.offsetWidth;
    gallery.classList.remove("no-transition");
  }
};

gallery.addEventListener("mousedown", dragStart);
gallery.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
gallery.addEventListener("scroll", infiniteScroll);

