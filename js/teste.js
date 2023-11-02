function menuAsideFunctions(){
    const menu = document.querySelector(".M-menu");
    const menuButton = document.querySelector(".M-open-close");

    menuButton.addEventListener("click", () => {
        menu.classList.toggle("close");
    })
        const logOptionsDiv = document.querySelector('.M-log-actions');
        const logButton = document.querySelector('.M-log-button');
        
            logButton.addEventListener('click', function () {
                logOptionsDiv.classList.toggle("close");
                logButton.classList.toggle("active");
            });
    
    

    userActions();
}

menuAsideFunctions();
