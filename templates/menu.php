<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/logo.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles/variable.css">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Bonfire</title>
</head>
<body>

    <nav>
        <section class="M-menu">
            <section class="M-top">
                <div class="M-open-close">
                    <i class="bi bi-list All-icon M-open"></i>
                    <i class="bi bi-x All-icon M-close"></i>
                </div>

                <div class="M-menu-color">
                    <i class="bi bi-circle-fill M-color M-color1 G-pink"></i>
                    <i class="bi bi-circle-fill M-color M-color2 G-orange"></i>
                    <i class="bi bi-circle-fill M-color M-color3 G-cyan"></i>
                </div>
            </section>

            <section class="M-slider">
                <i class="bi bi-three-dots active M-slider-options M-pages-icon All-icon" style="font-size: calc(var(--size-font-icons) + 0.3rem);"></i>
                <i class="bi bi-search M-slider-options M-search-icon All-icon"></i>
                <i class="bi bi-bell M-slider-options M-notifications-icon All-icon"></i>
                <span class="M-slider-bar"></span>
            </section>

            <section class="M-center">
                <article class="M-all-pages">
                        <a href="index.php" class="M-page M-home active">
                            <i class="bi bi-house-door M-page-icon All-icon"></i>
                            <span class="M-page-name">Home</span>
                        </a>
                        <a class="M-page M-events">
                            <i class="bi bi-calendar-date M-page-icon All-icon"></i>
                            <span class="M-page-name">Eventos</span>
                            <div class="M-event-notify">
                                <img src="assets/loud-logo.png" alt="Logo do Criador do Evento">
                            </div>
                        </a>
                        <a class="M-page M-explore">
                            <i class="bi bi-globe-americas M-page-icon All-icon"></i>
                            <span class="M-page-name">Explorar</span>
                        </a>
                        <a class="M-page M-friends">
                            <i class="bi bi-people M-page-icon All-icon"></i>
                            <span class="M-page-name">Amigos</span>
                            <i class="M-message-notify"></i>
                        </a>
                        <a class="M-page M-news">
                            <i class="bi bi-newspaper M-page-icon All-icon"></i>
                            <span class="M-page-name">News</span>
                        </a>
                        <a class="M-page M-shopping">
                            <i class="bi bi-cart2 M-page-icon All-icon"></i>
                            <span class="M-page-name">Shopping</span>
                        </a>
                        <a class="M-page M-safe">
                            <i class="bi bi-key M-page-icon All-icon"></i>
                            <span class="M-page-name">Cofre</span>
                        </a>
                        <a class="M-page M-statistics">
                            <i class="bi bi-pie-chart M-page-icon All-icon"></i>
                            <span class="M-page-name">Estatísticas</span>
                        </a>
                        <a href="config.php" class="M-page M-settings">
                            <i class="bi bi-gear-wide M-page-icon All-icon"></i>
                            <span class="M-page-name">Configurações</span>
                        </a>
                </article>

                <article class="M-post">
                    <span class="M-post-button">Postar</span>
                </article>
            </section>

            <section class="M-footer">
                <div class="M-footer-content">
                    <figure class="G-user-images">
                        <a href="" class="G-profile-img">
                            <img src="assets/perfil.png" alt="Foto de perfil">
                        </a>
                        <a href="" class="G-org-img">                    
                            <img src="assets/loud-logo.png" alt="Foto da organização">
                        </a>
                        <span class="G-user-status"></span>
                    </figure>
                    <div class="M-user-infos">
                        <span class="M-user-nick">Saadhak</span>
                        <span class="M-user-name">Matias Delipetro</span>
                    </div>

                    <i class="bi bi-arrow-left-right M-log-button All-icon"></i>
                    <div class="M-log-actions close">
                        <ul>
                            <li>
                                <a href="" style="cursor: pointer;">
                                    <span class="bi bi-people All-icon"></span>
                                    <span class="M-title"> Alternar usuário </span>
                                </a>
                            </li>
                            <li>
                                <a style="cursor: pointer;">
                                    <span class="bi bi-box-arrow-left All-icon"></span>
                                    <span class="M-title M-log-out"> Sair </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>  

            
        </section>

        <section class="M-notifications M-menu-section close">
            <section class="M-notifications-header">
                <div class="M-notifications-top">
                    <p class="M-section-title"> Notificações </p>
                    <i class="bi bi-three-dots-vertical All-icon"></i>
                </div>

                <div class="M-notifications-slider">
                    <p class="M-notifications-filter"> Todos </p>
                    <i class="bi bi-at active M-notifications-filter M-arroba-icon All-icon"></i>
                    <i class="bi bi-chat M-notifications-filter M-messages-icon All-icon"></i>
                    <i class="bi bi-patch-check M-notifications-filter M-verified-icon All-icon"></i>
                    <span class="M-notifications-slider-bar"></span>
                </div>
            </section>

            <section class="M-all-notifications">
                <div class="M-notify">
                    <p class="M-notifications-date">Hoje</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">Ontem</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">12/11/2023</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">01/11/2023</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">22/10/2023</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">07/06/2023</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">01/01/2022</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">30/12/2021</p>
                </div>
                <div class="M-notify">
                    <p class="M-notifications-date">30/12/2021</p>
                </div>

                <p class="M-final-message"> Você não tem mais nenhuma notificação não lida!</p>
                <a href="" class="M-see-more"> Ver Todas...</a>
            </section>
        </section>

        <section class="M-search M-menu-section close">
            <section class="M-search-top">
                <p class="M-section-title"> Pesquisar </p>
                <i class="bi bi-three-dots-vertical All-icon"></i>
            </section>

            <section class="M-search-input">
                <i class="bi bi-keyboard All-icon"> </i>
                <input type="search" placeholder="Pesquisar...">
                <i class="bi bi-mic All-icon"> </i>
            </section>

            <section class="M-search-history">
                <p class="M-section-title"> Histórico de Pesquisa</p>

            </section>

        </section>
    </nav>

    <script>
        function menuFunctions() {
            const menuArea = document.querySelector(".M-menu");
            const notificationsArea = document.querySelector(".M-notifications");
            const searchArea = document.querySelector(".M-search");

            const menuButton = document.querySelector(".M-open-close");
            const allSliderIcons = document.querySelectorAll(".M-slider-options");
            const sliderBar = document.querySelector(".M-slider-bar");
            const allPages = document.querySelectorAll(".M-page");
            const logActionsContainer = document.querySelector(".M-log-actions");
            const logButton = document.querySelector(".M-log-button");

            function openMenu() {
                const pagesSection = document.querySelector(".M-pages-icon");

                function openCloseMenu() {
                    menuArea.classList.toggle("close");
                    sliderBar.style.transform = `translateX(${-1.2}rem)`;

                    allSliderIcons.forEach((sliderOptions) => {
                        sliderOptions.classList.remove("active");
                        pagesSection.classList.add("active");
                    });
                }
                
                function closeNotifications() {
                    notificationsArea.classList.remove("active");
                    notificationsArea.classList.add("close");

                    setTimeout(openCloseMenu, 200);
                }

                function closeSearch() {
                        searchArea.classList.remove("active");
                        searchArea.classList.add("close");

                        setTimeout(openCloseMenu, 200);
                    }

                menuButton.addEventListener('click', () => {
                    if (notificationsArea.classList.contains("active")) {
                        closeNotifications();

                    } else if(searchArea.classList.contains("active")) {
                            closeSearch();

                    } else {
                        notificationsArea.classList.add("close");
                        searchArea.classList.add("close");
                        openCloseMenu();
                    }
                });
            }

            function toggleTheme(){
                const body = document.querySelector("body");
                const team1 = document.querySelector(".M-color1");
                const team2 = document.querySelector(".M-color2");
                const team3 = document.querySelector(".M-color3");

                team1.addEventListener("click", () => {
                    body.classList.add("G-pink");
                    body.classList.remove("G-orange");
                    body.classList.remove("G-cyan");
                });

                team2.addEventListener("click", () => {
                    body.classList.add("G-orange");
                    body.classList.remove("G-pink");
                    body.classList.remove("G-cyan");
                });

                team3.addEventListener("click", () => {
                    body.classList.add("G-cyan");
                    body.classList.remove("G-orange");
                    body.classList.remove("G-pink");
                });
            }

            function sliderFunctions(){
                const pagesIcon = document.querySelector(".M-pages-icon");
                const searchIcon = document.querySelector(".M-search-icon");
                const notificationsIcon = document.querySelector(".M-notifications-icon");

                pagesIcon.addEventListener("click", () => {
                    sliderBar.style.transform = `translateX(${-1.2}rem)`;

                    allSliderIcons.forEach((sliderOptions) => {
                        sliderOptions.classList.remove("active");
                        pagesIcon.classList.add("active");
                    });

                    notificationsArea.classList.remove("active");
                    notificationsArea.classList.add("close");
                    
                    searchArea.classList.remove("active");
                    searchArea.classList.add("close");
                    });
            
                searchIcon.addEventListener("click", () => {
                    sliderBar.style.transform = `translateX(${4.8}rem)`;

                    allSliderIcons.forEach((sliderOptions) => {
                        sliderOptions.classList.remove("active");
                        searchIcon.classList.add("active");
                    });

                    notificationsArea.classList.remove("active");
                    notificationsArea.classList.add("close");

                    searchArea.classList.remove("close");
                    searchArea.classList.add("active");

                    notificationsArea.style.zIndex = "1";
                    searchArea.style.zIndex = "2";
                });
            
                notificationsIcon.addEventListener("click", () => {
                    sliderBar.style.transform = `translateX(${10.5}rem)`;

                    
                    allSliderIcons.forEach((slidersIcons) => {
                        slidersIcons.classList.remove("active");
                        notificationsIcon.classList.add("active");
                    });

                    searchArea.classList.remove("active");
                    searchArea.classList.add("close");

                    notificationsArea.classList.remove("close");
                    notificationsArea.classList.add("active");

                    searchArea.style.zIndex = "1";
                    notificationsArea.style.zIndex = "2";
                    });
            }
            
            function togglePage(){
                allPages.forEach((pages) => {
                    pages.addEventListener("click", () => {
                        allPages.forEach((pages) => {
                            pages.classList.remove("active");
                        });

                        pages.classList.toggle("active");
                    });
            });

            }

            function logFunctions(){
                function openLogContainer(){
                    logButton.addEventListener('click', () => {
                        logActionsContainer.classList.toggle("close");
                    });
                }

                function logOutBonfire(){
                    const logOutButton = document.querySelector('.M-log-out');
                    const confirmDialog = document.querySelector('.M-log-out-modal');
                    const confirmYes = document.querySelector('.M-confirm-log-out');
                    const confirmNo = document.querySelector('.M-cancel-log-out');
                    const pressXbutton = document.querySelector('.M-close-log-out-icon');

                    logOutButton.addEventListener('click', (event) => {
                        event.preventDefault();
                        confirmDialog.style.display = 'block';
                    });

                    confirmYes.addEventListener('click', () => {
                        window.location.href = 'login.html';
                    });

                    confirmNo.addEventListener('click', () => {
                        confirmDialog.style.display = 'none';
                    });

                    pressXbutton.addEventListener('click', () => {
                        confirmDialog.style.display = 'none';
                    });
                }

                openLogContainer();
                logOutBonfire();
            }   

        openMenu();
        sliderFunctions();
        logFunctions();
        togglePage();
        toggleTheme();

        }
    </script>
</body>
</html>
