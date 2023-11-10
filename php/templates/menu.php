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
   
    <nav class="M-menu">
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
            <div>
                <i class="bi bi-three-dots active M-slider-options M-pages-icon All-icon" style="font-size: calc(var(--size-font-icons) + 0.3rem);"></i>
            </div>
            <div>
                <i class="bi bi-search M-slider-options M-search-icon All-icon"></i>
            </div>
            <div>
                <i class="bi bi-bell M-slider-options M-notifications-icon All-icon"></i>
            </div>
            <span class="M-slider-bar"></span>
        </section>

        <section class="M-center">
            <article class="M-all-pages">
                    <a href="index.php" class="M-page M-home active">
                        <i class="bi bi-house-door M-page-icon All-icon"></i>
                        <span class="M-page-name">Página Inicial</span>
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
    </nav> 
</body>
</html>
