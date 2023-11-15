<?php
    INCLUDE_ONCE("php/templates/menu.php");
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
        <section class="Q-quick-messages close">
            <span class="Q-message-pusher"><i class="bi bi-chat-dots All-icon"></i></span>
            <div class="Q-message-content">
                <p>MENSAGENS RÁPIDAS</p>
            </div>
        </section>

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

        <aside class="H-aside">
            <section class="H-featured-profiles">
                <h1 class="H-section-title">Destaques</h1>
                <div class="H-profiles-swiper swiper">
                    <div class="H-all-profiles swiper-wrapper">
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/robo.jfif" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/loud-logo.png" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">ROBO</span>
                                    <span class="H-user-achievement">Hexacampeão do CBLOL</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/loud-logo.png" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">LOUD</span>
                                    <span class="H-user-achievement">Bicampeã da LBFF 9 e Tricampeã do CBLOL</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/shini.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">SHINI</span>
                                    <span class="H-user-achievement">Anuncia seu retorno ao competitivo de LOL</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/team-vitality-logo.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Team Vitality</span>
                                    <span class="H-user-achievement">Campeã do Major CS 2023</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/daiki.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/team-liquid-logo.png" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Daiki</span>
                                    <span class="H-user-achievement"> Classificada para o mundial de Valorant Inclusivo</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/jazzghost.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Jazzghost</span>
                                    <span class="H-user-achievement">Alcança 14M de inscritos no Youtube</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/team-one-logo.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">T1</span>
                                    <span class="H-user-achievement">Campeã Mundial de League Of Legends</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/cameram4n.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/los-logo2.jpg" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Cameram4n</span>
                                    <span class="H-user-achievement">Anunciado pela equipe de Rainbow 6 da Los Grandes</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/bak.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/loud-logo.png" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Bak</span>
                                    <span class="H-user-achievement">Retorna a sua antiga equipe, LOUD GG</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/dupreeh.webp" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Dupreeh</span>
                                    <span class="H-user-achievement">Pentacampeão mundial de CS:GO</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/mouz-logo.png" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Mouz E-sports</span>
                                    <span class="H-user-achievement">Campeã da ESL Pro League</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/team-liquid-logo.png" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Team Liquid BR</span>
                                    <span class="H-user-achievement">Vencedora da final do VCT Game Changers São Paulo</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/fla-esports-logo.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Flamengo E-sports</span>
                                    <span class="H-user-achievement">Vencedor da Copa NFA 2° Split 2023</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/tinonws.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/loud-logo.png" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Tinowns</span>
                                    <span class="H-user-achievement">Campeão do CBLOL 2° split 2023</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/evil-geniuses-logo.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Evil Geniuses</span>
                                    <span class="H-user-achievement">Campeã do Valorant Champions Tour 2023</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/hummer-logo.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Hummer</span>
                                    <span class="H-user-achievement">Anuncia entrada no cenário inclusivo do Valorant</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/aspas.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/leviatan-logo.jpg" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Aspas</span>
                                    <span class="H-user-achievement">MVP do VCT Américas 2023</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/freitas.jpg" alt="Foto de perfil">
                                    </a>
                                    <a href="" class="G-org-img">                    
                                        <img src="assets/fluxo-logo.png" alt="Foto da organização">
                                    </a>
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Freitas FF</span>
                                    <span class="H-user-achievement">Anunciado como novo influenciador do Fluxo</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/fluxo-logo.png" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Fluxo GG</span>
                                    <span class="H-user-achievement">Apresenta line-up feminina para a Taça das Patroas</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                        <div class="H-profile swiper-slide">
                            <div class="H-profile-content">
                                <figure class="G-user-images">
                                    <a href="" class="G-profile-img">
                                        <img src="assets/xand.jpg" alt="Foto de perfil">
                                    </a>
                                    <!--
                                        <a href="" class="G-org-img">                    
                                            <img src="" alt="Foto da organização">
                                        </a>
                                    -->
                                    <span class="G-user-status"></span>
                                </figure>
                                <div class="H-user-texts">
                                    <span class="H-user-nick">Xand</span>
                                    <span class="H-user-achievement">Transferência encaminhada para a 00Nation</span>
                                </div>
                            </div>
                            <span class="H-follow">Seguir</span>
                        </div>
                    </div>
                </div>
                <i class='bx bx-chevron-down All-icon H-arrows H-arrow-preview'></i>
                <i class='bx bx-chevron-down All-icon H-arrows H-arrow-next'></i>
            </section>
            
            <section class="H-trending-topics">
                <h1 class="H-section-title">Assuntos do Momento</h1>
                <i class="bi bi-sliders2 H-trending-filter All-icon"></i>
                <div class="H-all-trends">
                    <a href="" class="H-trend" id="H-first-trend">
                        <p class="H-trend-numbers"><span class="H-trend-ranking">1°</span> — <span class="H-trend-number-posts">1.1M</span> de Postagens</p>
                        <p class="H-trend-topic">Loud Bak is back</p>
                        <p class="H-trend-markers"><span class="H-trend-game">Free Fire</span> / <span class="H-trend-main-tag">Bak</span> / <span class="H-trend-secondary-tag">LOUD</span></p>
                    </a>
                    <a href="" class="H-trend" id="H-second-trend">
                        <p class="H-trend-numbers"><span class="H-trend-ranking">2°</span> — <span class="H-trend-number-posts">992K</span> de Postagens</p>
                        <p class="H-trend-topic">Valorant</p>
                        <p class="H-trend-markers"><span class="H-trend-game">Valorant</span> / <span class="H-trend-main-tag">Valorant</span> / <span class="H-trend-secondary-tag">VCT Champions</span></p>
                    </a>
                    <a href="" class="H-trend" id="H-third-trend">
                        <p class="H-trend-numbers"><span class="H-trend-ranking">3°</span> — <span class="H-trend-number-posts">828K</span> de Postagens</p>
                        <p class="H-trend-topic">Freitas no Fluxo</p>
                        <p class="H-trend-markers"><span class="H-trend-game">Free Fire</span> / <span class="H-trend-main-tag">Freitas</span> / <span class="H-trend-secondary-tag">Fluxo</span></p>
                    </a>
                    <a href="" class="H-trend" id="H-fourth-trend">
                        <p class="H-trend-numbers"><span class="H-trend-ranking">4°</span> — <span class="H-trend-number-posts">802K</span> de Postagens</p>
                        <p class="H-trend-topic">Sentinels</p>
                        <p class="H-trend-markers"><span class="H-trend-game">Valorant</span> / <span class="H-trend-main-tag">Sentinels</span> / <span class="H-trend-secondary-tag">Sacy e pANcada</span></p>
                    </a>
                    <a href="" class="H-trend" id="H-fifth-trend">
                        <p class="H-trend-numbers"><span class="H-trend-ranking">5°</span> — <span class="H-trend-number-posts">758K</span> de Postagens</p>
                        <p class="H-trend-topic">Brance</p>
                        <p class="H-trend-markers"><span class="H-trend-game">League of Legends</span> / <span class="H-trend-main-tag">Kabum</span> / <span class="H-trend-secondary-tag">Red Canids</span></p>
                    </a>
                </div>
                <a href="http://localhost/Bonfire-Project/trends.php" class="H-see-more">Ver mais...</a>
            </section>
            
        </aside>
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