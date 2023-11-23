<?php
    INCLUDE_ONCE("templates/menu.php");
?>

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

<body class="">

    <main>
        <?php
            INCLUDE_ONCE("templates/quickMessages.php");
        ?>

        <section class="H-timeline">
            <section class="H-publish">
                <h1 class="H-section-title">Criar Publicação</h1>
                <div class="H-left">
                    <figure class="G-user-images">
                        <a href="" class="G-profile-img">
                            <img src="assets/perfil.png" alt="Foto de perfil">
                        </a>
                        <a href="" class="G-org-img">                    
                            <img src="assets/loud-logo.png" alt="Foto da organização">
                        </a>
                        <div class="G-user-status"></div>
                    </figure>
                    <span class="H-characters"><span class="H-characters-number">0</span>/<span class="H-max-characters">20</span></span>
                </div>
        
                <input type="text" placeholder="No que você está pensando?" class="H-type-here" oninput="charactersLimit()">
                <i class="bi bi-emoji-smile All-icon"></i>
        
                <div class="H-annexes">
                    <i class="bi bi-link-45deg All-icon"></i>
                    <i class="bi bi-images All-icon"></i>
                    <i class="bi bi-trophy All-icon"></i>
                    <i class="bi bi-clock-history All-icon"></i>
                    <i class="bi bi-flag All-icon"></i>
                    <i class="bi bi-filetype-gif All-icon"></i>
                    <i class="bi bi-controller All-icon"></i>
                    <i class="bi bi-geo-alt All-icon"></i>
                    <i class="bi bi-bar-chart All-icon"></i>
                </div>
            </section>

            <section class="H-suggestions">
                <h1 class="H-section-title"> Sugestões </h1>
                <div class="H-all-profiles">
                    <div class="H-profile">
                        <figure class="G-user-images">
                            <a href="" class="G-profile-img">
                                <img src="assets/perfil.png" alt="Foto de perfil">
                            </a>
                            <a href="" class="G-org-img">                    
                                <img src="assets/loud-logo.png" alt="Foto da organização">
                            </a>
                            <span class="G-user-status"></span>
                        </figure>
                        <div class="H-user-texts">
                            <span class="H-user-nick">FNX</span>
                            <span class="H-user-name">Lincoln Lau</span>
                            <span class="H-follows"><span class="H-number-followers">615.1K</span>Seguidores</span>
                        </div>
                        <span class="H-follow">Seguir</span>
                    </div>
                    <div class="H-profile">
                        <figure class="G-user-images">
                            <a href="" class="G-profile-img">
                                <img src="assets/fallen.jpg" alt="Foto de perfil">
                            </a>
                            <a href="" class="G-org-img">                    
                                <img src="assets/furia-logo.png" alt="Foto da organização">
                            </a>
                            <span class="G-user-status"></span>
                        </figure>
                        <div class="H-user-texts">
                            <span class="H-user-nick">Fallen</span>
                            <span class="H-user-name">Gabriel Toledo</span>
                            <span class="H-follows"><span class="H-number-followers">1.2M</span>Seguidores</span>
                        </div>
                        <span class="H-follow">Seguir</span>
                    </div>
                    <div class="H-profile">
                        <figure class="G-user-images">
                            <a href="" class="G-profile-img">
                                <img src="assets/gaules.jpg" alt="Foto de perfil">
                            </a>
                            <!--
                                <a href="" class="G-org-img">                    
                                    <img src="" alt="Foto da organização">
                                </a>
                            -->
                            <span class="G-user-status"></span>
                        </figure>
                        <div class="H-user-texts">
                            <span class="H-user-nick">Gaules</span>
                            <span class="H-user-name">Alexandre Borba</span>
                            <span class="H-follows"><span class="H-number-followers">1.03M</span>Seguidores</span>
                        </div>
                        <span class="H-follow">Seguir</span>
                    </div>
                </div>
                <a href="" class="H-see-more-suggestions">Ver mais...</a>
            </section>
        </section>

        <?php
            INCLUDE_ONCE("templates/aside.php");
        ?>
    </main>
    
    <section>
        <!--SEÇÃO PARA DEFINIÇÃO DE MODAIS -->
        <div class="M-log-out-modal">
            <!--Aparece ao Clicar no botão de Log Out na S-Settings-->
            <div class="M-log-out-modal-container">
                <i class="bi bi-x M-close-log-out-icon All-icon"></i>
                <h4>Tem certeza que deseja SAIR ?</h4>
                <div class="M-log-out-modal-buttons">
                    <button class="M-cancel-log-out">CANCELAR</button>
                    <button class="M-confirm-log-out">SAIR</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>