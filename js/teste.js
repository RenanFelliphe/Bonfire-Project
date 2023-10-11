function menuAsideFunctions(){
    const menu = document.querySelector(".M-menu");
    const menuButton = document.querySelector(".M-open-close");

    menuButton.addEventListener("click", () => {
        menu.classList.toggle("close");
    })
}

menuAsideFunctions();
