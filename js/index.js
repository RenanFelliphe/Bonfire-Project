let list = document.querySelectorAll('.list');

function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>

    item.addEventListener('click', activeLink));
const body = document.querySelector("body"),
    sidebar = body.querySelector(".menu-aside"),
    menu = body.querySelector(".menu-buttom");
menu.addEventListener("click", () => {
    sidebar.classList.toggle("close");
})