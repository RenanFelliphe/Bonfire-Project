const controls = document.querySelectorAll('.control');
let currentItem = 0;
const items = document.querySelectorAll('.item');
const maxItems = items.length;
controls.forEach(control => {
  control.addEventListener('click', () => {
    const isLeft = control.classList.contains('arrow-left');

    if (isLeft) {
      currentItem -= 1;
    } else {
      currentItem += 1;
    }

    if (currentItem >= maxItems) {
      currentItem = 0;
    }
    if (currentItem < 0) {
      currentItem = maxItems - 1;
    }
    items.forEach(item => item.classList.remove('current-item'));
    items[currentItem].scrollIntoView({
      inline: "center",
      behavior: "smooth"
    });
    items[currentItem].classList.add("current-item");
  })
})

document.getElementById("btn-fluxo").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "fluxo-color");
})
document.getElementById("btn-kru").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "kru-color");
})
document.getElementById("btn-leviatan").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "leviatan-color");
})
document.getElementById("btn-liberty").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "liberty-color");
})
document.getElementById("btn-los").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "los-color");
})
document.getElementById("btn-loud").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "loud-color");
})
document.getElementById("btn-magic-squad").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "magic-squad-color");
})
document.getElementById("btn-pain").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "pain-color");
})
document.getElementById("btn-red-canids").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "red-canids-color");
})
document.getElementById("btn-sentinels").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "sentinels-color");
})
document.getElementById("btn-team-liquid").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "team-liquid-color");
})
document.getElementById("btn-vivo-keyd").addEventListener("click", function () {
  document.querySelector("body").setAttribute("class", "vivo-keyd-color");
})