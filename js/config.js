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

const chk = document.getElementById('S-chk')
chk.addEventListener('change', () => {
  document.body.classList.toggle('light-mode')
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
