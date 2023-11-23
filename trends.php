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
        
        <section class="T-trends">
            <section class="T-trending-topics">
                <h1 class="T-section-title">Assuntos do Momento</h1>
                <div class="T-trend-functions">
                    <i class="bi bi-search T-trending-search All-icon"></i>
                    <i class="T-country-img"><img src="assets/brasil.png" alt="Imagem da Bandeira do Brasil"></i>
                </div>

                <div class="T-gaming-filter">
                    <h4 class="T-game T-first-game active"> Todos </h4>
                    <h4 class="T-game T-second-game"> League of Legends </h4>
                    <h4 class="T-game T-third-game"> Valorant </h4>
                    <h4 class="T-game T-fourth-game"> CS:GO </h4>
                    <h4 class="T-game T-fifth-game"> Free Fire </h4>
                    <span class="T-line"> </span>
                </div>
                <div class="T-all-trends">
                    <a href="" class="T-trend" id="T-first-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">1°</span> — <span class="T-trend-number-posts">1.1M</span> de Postagens</p>
                        <p class="T-trend-topic">Loud Bak is back</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Free Fire</span> / <span class="T-trend-main-tag">Bak</span> / <span class="T-trend-secondary-tag">LOUD</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-second-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">2°</span> — <span class="T-trend-number-posts">992K</span> de Postagens</p>
                        <p class="T-trend-topic">Valorant</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Valorant</span> / <span class="T-trend-main-tag">Valorant</span> / <span class="T-trend-secondary-tag">VCT Champions</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-third-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">3°</span> — <span class="T-trend-number-posts">828K</span> de Postagens</p>
                        <p class="T-trend-topic">Freitas no Fluxo</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Free Fire</span> / <span class="T-trend-main-tag">Freitas</span> / <span class="T-trend-secondary-tag">Fluxo</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-fourth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">4°</span> — <span class="T-trend-number-posts">802K</span> de Postagens</p>
                        <p class="T-trend-topic">Sentinels</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Valorant</span> / <span class="T-trend-main-tag">Sentinels</span> / <span class="T-trend-secondary-tag">Sacy e pANcada</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-fifth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">5°</span> — <span class="T-trend-number-posts">758K</span> de Postagens</p>
                        <p class="T-trend-topic">Brance</p>
                        <p class="T-trend-markers"><span class="T-trend-game">League of Legends</span> / <span class="T-trend-main-tag">Kabum</span> / <span class="T-trend-secondary-tag">Red Canids</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-eighth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">6°</span> — <span class="T-trend-number-posts">743K</span> de Postagens</p>
                        <p class="T-trend-topic">NAYU NA LOUD</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Minecraft</span> / <span class="T-trend-main-tag">NAYU</span> / <span class="T-trend-secondary-tag">Coringa</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-seventh-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">7°</span> — <span class="T-trend-number-posts">721K</span> de Postagens</p>
                        <p class="T-trend-topic">Cs2</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Counter-Strike: Global Offensive</span> / <span class="T-trend-main-tag">CS2</span> / <span class="T-trend-secondary-tag">CS:GO</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-eighth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">8°</span> — <span class="T-trend-number-posts">702K</span> de Postagens</p>
                        <p class="T-trend-topic">FaZe</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Rainbow Six Siege</span> / <span class="T-trend-main-tag">FaZe</span> / <span class="T-trend-secondary-tag">SIX Invitational</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-sixth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">9°</span> — <span class="T-trend-number-posts">681K</span> de Postagens</p>
                        <p class="T-trend-topic">Robo</p>
                        <p class="T-trend-markers"><span class="T-trend-game">League of Legends</span> / <span class="T-trend-main-tag">LOUD</span> / <span class="T-trend-secondary-tag">Worlds</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-nineth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">10°</span> — <span class="T-trend-number-posts">673K</span> de Postagens</p>
                        <p class="T-trend-topic">Titan</p>
                        <p class="T-trend-markers"><span class="T-trend-game">League of Legends</span> / <span class="T-trend-main-tag">paiN</span> / <span class="T-trend-secondary-tag">Kabum</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-nineth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">11°</span> — <span class="T-trend-number-posts">649K</span> de Postagens</p>
                        <p class="T-trend-topic">Minecraft</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Minecraft</span> / <span class="T-trend-main-tag">Tatu</span> / <span class="T-trend-secondary-tag">Carangueijo</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-sixth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">12°</span> — <span class="T-trend-number-posts">622K</span> de Postagens</p>
                        <p class="T-trend-topic">Dupreeh</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Counter-Strike: Global Offensive</span> / <span class="T-trend-main-tag">Team Vitality</span> / <span class="T-trend-secondary-tag">Major</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-seventh-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">13°</span> — <span class="T-trend-number-posts">607K</span> de Postagens</p>
                        <p class="T-trend-topic">Gods</p>
                        <p class="T-trend-markers"><span class="T-trend-game">League of Legends</span> / <span class="T-trend-main-tag">Newjeans</span> / <span class="T-trend-secondary-tag">Riot</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-tenth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">14°</span> — <span class="T-trend-number-posts">564K</span> de Postagens</p>
                        <p class="T-trend-topic">ALGS</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Apex-Legends</span> / <span class="T-trend-main-tag">TSM</span> / <span class="T-trend-secondary-tag">ImperialHal</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-tenth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">15°</span> — <span class="T-trend-number-posts">538K</span> de Postagens</p>
                        <p class="T-trend-topic">Furia</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Counter-Strike: Global Offensive</span> / <span class="T-trend-main-tag">FURIA</span> / <span class="T-trend-secondary-tag">Complexity</span></p>
                    </a>
                    <a href="" class="T-trend" id="T-eighth-trend">
                        <p class="T-trend-numbers"><span class="T-trend-ranking">16°</span> — <span class="T-trend-number-posts">520K</span> de Postagens</p>
                        <p class="T-trend-topic">Xand</p>
                        <p class="T-trend-markers"><span class="T-trend-game">Valorant</span> / <span class="T-trend-main-tag">KRU</span> / <span class="T-trend-secondary-tag">00Nation</span></p>
                    </a>
                </div>
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
    <script src="js/trends.js"></script>
</body>

</html>