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
        
        <section class="S-settings">
            <div class="S-top">
                <a href="config.html"><span class="S-tittle"> Configurações </span></a>
                <div class="S-others-functions">
                    <i class='bi bi-search S-search-icon All-icon'><span class="icon-hover">Pesquisar</span></i>
                </div>
            </div>
            <div class="S-div-search close">
                <div class="S-search-buttom">
                    <i class='bi bi-keyboard All-icon'></i>
                    <input type="search" placeholder="Pesquisar nas configurações">
                    <i class='bi bi-mic All-icon'></i>
                </div>
            </div>
            <div class="S-center">
                <ul>
                    <li class="S-buttom active"> <span> Conta e Perfil </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="#S-profile">Perfil</a></p>
                            </li>
                            <li>
                                <p><a href="#S-showcase">Vitrine</a></p>
                            </li>
                            <li>
                                <p><a href="#S-user-informations">Informações Pessoais</a></p>
                            </li>
                            <li>
                                <p><a href="#S-my-games">Meus Jogos</a></p>
                            </li>
                            <li>
                                <p><a href="#S-visibility">Visibilidade</a></p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Segurança </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="">Email e Senha</a> </p>
                            </li>
                            <li>
                                <p><a href="">Autenticação de 2 fatores</a> </p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Privacidade </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="">Contas Bloqueadas</a> </p>
                            </li>
                            <li>
                                <p><a href="">Notificações</a> </p>
                            </li>
                            <li>
                                <p><a href="">Interações</a> </p>
                            </li>
                            <li>
                                <p> <a href="">Solicitações e Mensagens</a></p>
                            </li>
                            <li>
                                <p><a href="">Política de Privacidade</a></p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Aparência </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="#S-theme">Tema</a> </p>
                            </li>
                            <li>
                                <p><a href="#S-font-style">Fonte</a> </p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Grupos e Amizades </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="">Seguindo e Seguidores</a> </p>
                            </li>
                            <li>
                                <p><a href="">Melhores Amigos</a> </p>
                            </li>
                            <li>
                                <p><a href="">Organização</a> </p>
                            </li>
                            <li>
                                <p><a href="">Comunidades</a> </p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Acessibilidade </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="">Idioma</a></p>
                            </li>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Compras </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                        </ul>
                    </li>


                    <li class="S-buttom"> <span> Suporte </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="#S-faq"> Perguntas Frequentes </a></p>
                            </li>
                            <li>
                                <p><a href="#S-report-problems"> Relatar um Problema </a></p>
                            </li>
                            <li>
                                <p><a href="#S-feedback"> Feedback </a></p>
                            </li>
                        </ul>
                    </li>

                    <li class="S-buttom"> <span> Sobre </span>
                        <ul class="S-subbuttom">
                            <span class='bx bx-chevron-down All-icon All-arrows S-open-list-icon'></span>
                            <li>
                                <p><a href="#S-bonfire">Bonfire</a></p>
                            </li>
                            <li>
                                <p><a href="#S-team">Equipe</a></p>
                            </li>
                            <li>
                                <p><a href="#S-CEFET">CEFET</a></p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        <aside class="S-subsettings">
            <section class="S-account-profile S-tier active" style="padding-top: 0;">
                <section id="S-section-divisions">
                    <article class="S-profile" id="S-profile">
                        <div class="S-cover">
                            <img src="assets/loud-capa.jpg" alt="Imagem de capa" class="cover">
                        </div>
                        <div class="S-profile-content">
                            <figure class="G-user-images">
                                <a href="" class="G-profile-img">
                                    <img src="assets/perfil.png" alt="Foto de Perfil" class="perfil-img">
                                </a>
                                <a href="" class="G-org-img">
                                    <img src="assets/loud-logo.png" alt="Foto da Org" class="org-img">
                                </a>
                            </figure>
                            <div class="S-user-informations">
                                <p class="nick">Saadhak</p>
                                <p class="name">Matias Delipetro</p>
                            </div>
                            <a href="">
                                <i class="bi bi-pencil-square All-icon S-edit-profile-icon">
                                    <span class="icon-hover">Editar Perfil</span></i>
                            </a>
                        </div>
                        <div class="S-profile-numbers">
                            <span class="seguidores"> <b> 8.254.537 </b> Seguidores </span>
                            <span class="seguindo"> <b> 472 </b> Seguindo </span>
                            <span class="likes"> <b> 44.107.912 </b> Likes </span>
                            <span class="posts"> <b> 93 </b> Posts </span>
                        </div>
                        <div class="S-bio">
                            <p> Biografia </p>
                            <textarea name="bio"> </textarea>
                        </div>

                    </article>

                    <article class="S-showcase" id="S-showcase">
                        <h1 class="S-article-title"> Vitrine </h1>
                    </article>

                    <article class="S-user-informations" id="S-user-informations">
                        <h1 class="S-article-title"> Informações Pessoais </h1>
                    </article>

                    <article class="S-my-games" id="S-my-games">
                        <h1 class="S-article-title"> Meus Jogos </h1>
                    </article>

                    <article class="S-visibility" id="S-visibility">
                        <h1 class="S-article-title"> Visibilidade </h1>
                    </article>
                </section>
            </section>

            <section class="S-security S-tier">
                <section id="S-section-divisions">
                    SEGURANÇA
                </section>
            </section>
            <section class="S-privacy S-tier">
                <section id="S-section-divisions">
                    PRIVACIDADE
                </section>
            </section>

            <section class="S-appearence S-tier">
                <section id="S-section-divisions">
                    <article class="S-theme" id="S-theme">
                        <p class="S-theme-tips">Sinta-se à vontade para personalizar o <strong>Bonfire</strong>
                             de acordo com a<br> sua identidade<strong>!</strong></p>
                        <h1 class="S-article-title"> Tema </h1>
                        <div class="S-toggle-mode">
                            <p class="S-article-subtitle"> Modo Claro / Escuro </p>
                            <input type="checkbox" class="S-checkbox" id="S-chk">
                            <label class="S-label" for="S-chk">
                                <i class='bi bi-sun-fill S-sun'></i>
                                <i class='bi bi-moon-fill S-moon'></i>
                                <span class="S-ball"> </span>
                            </label>
                        </div>

                        <p class="S-article-subtitle"> Paleta de Cores </p>
                        <div class="S-toggle-colors">
                            <div class="S-colors G-white"></div>
                            <div class="S-colors G-red"></div>
                            <div class="S-colors G-orange"></div>
                            <div class="S-colors G-yellow"></div>
                            <div class="S-colors G-green"></div>
                            <div class="S-colors G-cyan"></div>
                            <div class="S-colors G-blue"></div>
                            <div class="S-colors G-purple"></div>
                            <div class="S-colors G-pink"></div>
                        </div>
                    </article>

                    <article class="S-font-style" id="S-font-style">
                        <h1 class="S-article-title"> Fonte </h1>

                        <p class="S-article-subtitle"> Tipo </p>
                        <div class="S-font-type">
                        </div>

                        <p class="S-article-subtitle"> Tamanho </p>
                        <div class="S-all-font-size">
                            <i class="bi bi-dash S-font-size-minus All-icon"></i>
                            <input type="range" min="1" max="7" class="S-font-size-range">
                            <i class="bi bi-plus S-font-size-plus All-icon"></i>
                            <p class="S-font-size-value"> 4 </p>
                        </div>

                        <i class="bi bi-sliders S-font-config All-icon"></i>
                        <div class="S-font-advanced-config close">
                            <h1 class="S-article-title"> Alterar tamanhos específicos </h1>
                            <p class="S-article-subtitle"> Títulos </p>

                            <div class="S-title-font-size">
                                <input type="range" min="23" max="29" value="26"
                                    class="S-font-size-range S-title-font-size-range">
                                <p class="S-font-size-value S-title-font-size-value"> 26 </p>
                            </div>

                            <p class="S-article-subtitle"> Ícones </p>
                            <div class="S-icons-font-size">
                                <input type="range" min="15" max="21" value="18"
                                    class="S-font-size-range S-icons-font-size-range">
                                <p class="S-font-size-value S-icons-font-size-value"> 18 </p>
                            </div>


                            <p class="S-article-subtitle"> Subtítulos </p>
                            <div class="S-subtitle-font-size">
                                <input type="range" min="13" max="19" value="16"
                                    class="S-font-size-range S-subtitle-font-size-range">
                                <p class="S-font-size-value S-subtitle-font-size-value"> 16 </p>
                            </div>


                            <p class="S-article-subtitle"> Textos </p>
                            <div class="S-text-font-size">
                                <input type="range" min="11" max="17" value="14"
                                    class="S-font-size-range S-text-font-size-range">
                                <p class="S-font-size-value S-text-font-size-value"> 14 </p>
                            </div>
                        </div>
                    </article>
                </section>
            </section>

            <section class="S-groups-friends S-tier">
                <section id="S-section-divisions">
                    GRUPOS E AMIZADES
                </section>
            </section>

            <section class="S-accessibility S-tier">
                <section id="S-section-divisions">
                    ACESSIBILIDADE
                </section>
            </section>

            <section class="S-shopping S-tier">
                <section id="S-section-divisions">
                    COMPRAS
                </section>
            </section>

            <section class="S-suport S-tier">
                <section id="S-section-divisions">
                    <article class="S-faq" id="S-faq">
                        <h1 class="S-article-title"> Perguntas Frequentes </h1>
                        <div class="S-questions-section">
                            <h4 class="S-generalQ-title active"> GERAL </h4>
                            <h4 class="S-otherQ-title"> Outros </h4>
                            <span class="S-line S-geral-active"> </span>
                        </div>
                        <div class="S-all-questions">
                            <div class="S-other-questions">
                                <ul>
                                    <li class="S-questions">
                                        <span> Como funciona o sistema de conversas privadas ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> DSADSADSADSDADADSSD </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como denunciar comportamento inadequado ou spam ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Posso vincular minha conta da rede social a outras contas de jogos
                                            ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como posso encontrar informações sobre atualizações de jogos e patches
                                            ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Existe um limite para o tamanho das comunidades na plataforma ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span><span class="G-wrong">NÃO!</span> Por padrão, todas as comunidades do Bonfire possuem a capacidade de comportar um número ilimitado de membros, porém, durante a criação de uma comunidade, o usuário criador tem a opção de definir um número limite para a quantidade de membros dentro daquela comunidade. Dessa forma, os administradores da comunidade deverão fazer o control do fluxo de membros do grupo. </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Quais são os benefícios de ter uma conta verificada na plataforma
                                            ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Posso compartilhar minha agenda de transmissões ao vivo com outros
                                            jogadores ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Existe um sistema de prêmios ou reconhecimento para os mais ativos na
                                            plataforma ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Existe um sistema de tradução automática para interagir com pessoas de
                                            diferentes idiomas ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como faço para criar ou participar de discussões temáticas sobre jogos
                                            específicos ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Existe uma opção para agendar, criar ou compartilhar eventos futuros de
                                            jogos ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="S-general-questions active">
                                <ul>
                                    <li class="S-questions">
                                        <span> Como desativar ou excluir minha conta ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span>1. Na página de configurações, selecione a opção <a href="#S-profile" class="S-pages">Contas e Perfil</a>.<br>
                                                2. Role até o final da seção.<br>
                                                3. Selecione ou a opção desativar conta ou excluir conta.<br><br>
                                                <p style="text-align: center;">A desativação de uma conta é temporária e poderá ser desfeita a qualquer momento. Já a exclusão de uma conta
                                                     é permanente e <span class="G-wrong">NÃO</span> poderá ser desfeita!</p><br>
                                                5. Confirme a operação.<br>
                                                6. Digite a senha da conta para confirmar a operação novamente.</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como criar uma comunidade ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como alterar a minha senha ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como criar um campeonato ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como participar de um campeonato ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como bloquear usuários ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> 
                                                    1. Abra o perfil do usuário que deseja bloquear.<br>
                                                    2. Selecione a opção "Bloquear".<br><br>
                                                    <p style="text-align: center; font-weight: 600; font-size: var(--size-font-subtitle); color: var(--white-to-black-color);"> OU</p><br>
                                                    1. Nas configurações, vá para a seção <a href="#S-privacy" class="S-pages">Privacidade</a>.<br>
                                                    2. Clique no artigo "Contas Bloqueadas".<br>
                                                    3. Selecione a opção "Bloquear outros Usuários".<br>
                                                    4. Pesquise ou selecione o perfil que deseja bloquear e confirme a operação.
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como mudar para um perfil privado ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span>
                                                       1. Ainda nas configurações, vá até a seção <a href="#S-privacy" class="S-pages">Privacidade</a>.<br>
                                                       2. Role até a até encontrar o artigo: "Mudar para um perfil privado".<br>
                                                       3. Selecione a opção e faça a troca.<br><br>
                                                       <p style="text-align: center;">A mudança para um perfil privado pode ser desfeita a qualquer momento!</p>
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como criar uma conta secundária ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como denunciar um perfil ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="S-questions">
                                        <span> Como vender um produto ?</span>
                                        <ul>
                                            <li class="S-answers closed">
                                                <span> Resposta </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="S-report-problems" id="S-report-problems">
                        <span class="S-service-terms"><a href=""> Termos de Serviço</a></span>

                        <h1 class="S-article-title"> Relatar um Problema </h1>
                        <p class="S-article-subtitle"> Tags </p>
                        <p class="S-article-description"> Quais das opções abaixo reflete melhor o seu problema? </p>

                        <div class="S-report-tags">
                            <div class="S-tags">
                                Senha
                            </div>
                            <div class="S-tags">
                                Email
                            </div>
                            <div class="S-tags">
                                Comunidades
                            </div>
                            <div class="S-tags">
                                Loja
                            </div>
                            <div class="S-tags">
                                Atualizações
                            </div>
                            <div class="S-tags">
                                Amizades
                            </div>
                            <div class="S-tags">
                                Campeonatos
                            </div>
                            <div class="S-tags">
                                Login
                            </div>
                            <div class="S-tags">
                                Chat
                            </div>
                            <div class="S-tags">
                                Eventos
                            </div>
                            <div class="S-tags">
                                Jogos
                            </div>
                            <div class="S-tags">
                                Recuperação de Conta
                            </div>
                            <div class="S-tags">
                                Conta Hackeada
                            </div>
                            <div class="S-tags">
                                Conta Suspensa
                            </div>
                            <div class="S-tags">
                                Postagem
                            </div>
                            <div class="S-tags">
                                Conta Verificada
                            </div>
                            <div class="S-tags">
                                Perfil
                            </div>
                            <div class="S-tags S-more-tags">
                                <i class="bi bi-plus"></i>
                            </div>
                        </div>

                        <form class="S-report-area">
                            <button type="reset" class="bi bi-trash S-report-clear All-icon"></button>
                            <input type="text" id="S-tag-area" class="S-report-input" placeholder="Tags..."> </input>
                            <input type="text" class="S-report-input" placeholder="Título..."> </input>
                            <textarea name="report-area" class="S-report-input"
                                placeholder="Descreva com o máximo de informações possíveis..."></textarea>

                            <button type="reset" class="S-report-submit"><i class="bi bi-send-fill"></i></button>
                            <i class="bi bi-paperclip S-report-media"></i>
                            <p class="S-media-placeholder">Adicione até 3 imagens ou vídeos...</p>

                            <div class="S-confirm-modal S-report-problems-modal close">
                                <button type="submit" class="S-close-modal"><i class="bi bi-x All-icon"></i></button>
                                <img src="assets/Bonfire-logo.svg" alt="Logo do Bonfire" class="S-bonfire-logo">
                                <span class="S-thanks-for">Obrigado pelo relatório!</span>
                                <span class="S-confirm-text">
                                    Trabalharemos o mais rápido possível para investigar e resolver o seu problema. Entraremos em contato em breve pelo email:</span>
                                    <span class="S-user-email">“pancada@seg.gg”</span>
                                    <button type="submit" class="S-confirm-report">OK</button>
                                </div>
                        </form>
                    </article>

                    <article class="S-feedback" id="S-feedback">
                        <h1 class="S-article-title"> Feedback </h1>
                        <p class="S-article-description"> Ajude-nos a melhorar a sua experiência no <span
                                class="S-feedback-bonfire">Bonfire</span>!</p>
                        <form class="S-feedback-area">
                            <button type="reset" class="bi bi-trash S-feedback-clear All-icon"></button>
                            <div class="S-feedback-rating">
                                <i id="S-awful" class="bi bi-star-fill S-feedback-stars All-icon"></i>
                                <i id="S-bad" class="bi bi-star-fill S-feedback-stars All-icon"></i>
                                <i id="S-medium" class="bi bi-star-fill S-feedback-stars All-icon"></i>
                                <i id="S-good" class="bi bi-star-fill S-feedback-stars All-icon"></i>
                                <i id="S-amazing" class="bi bi-star-fill S-feedback-stars All-icon"></i>
                            </div>
                            <input type="text" class="S-feedback-input" placeholder="Título..."> </input>
                            <textarea name="feedback-area" class="S-feedback-input"
                                placeholder="Descreva com o máximo de informações possíveis..."></textarea>
                            <button type="reset" class="S-feedback-submit"><i class="bi bi-send-fill"></i></button>

                            <div class="S-confirm-modal S-feedback-modal close">
                                <button type="submit" class="S-close-modal"><i class="bi bi-x All-icon"></i></button>
                                <img src="assets/Bonfire-logo.svg" alt="Logo do Bonfire" class="S-bonfire-logo">
                                <span class="S-thanks-for">Obrigado pelo feedback!</span>
                                <span class="S-confirm-text">
                                    Faremos o possível para melhorar com base nas suas sugestões. Sua contribuição é fundamental para tornar nossa plataforma ainda melhor!</span>
                                    <button type="submit" class="S-confirm-feeback">OK</button>
                                </div>
                        </form>
                    </article>
                </section>
            </section>

            <section class="S-about-us S-tier">
                <section id="S-section-divisions">
                    <article class="S-bonfire" id="S-bonfire">
                        <h1 class="S-article-title"> Bonfire </h1>
                        <p class="S-bonfire-text">
                            <strong>N</strong>os últimos anos, o volume de conteúdos relacionados a jogos e esportes eletrônicos têm cada vez mais se espalhado 
                            pelo mundo. O que, para as grandes organizações desse nicho, se reserva o desafio de estar presentes em várias redes 
                            sociais simultaneamente, dificultando o controle de suas postagens, eventos e atividades. Como resultado, várias 
                            figuras se apresentam inativas ou inexistentes em certas mídias sociais, tornando a conexão entre essas equipes e 
                            celebridades com seu público cada vez mais distante e complexa.<br>
                            
                            Acompanhando o crescimento dos jogos e seus campeonatos, diversos talentos emergiram no cenário dos jogos eletrônicos, 
                            especialmente entre os jogadores. No entanto, ainda há muitas grandes promessas que não conseguiram conquistar o seu 
                            lugar e para enfrentar esse desafio é que surge o Bonfire. Com suas ferramentas e recursos, o Bonfire visa promover as 
                            conquistas, currículos e outros feitos de seus usuários, ajudando-os a chamar a atenção de grandes organizações e 
                            patrocinadores. Com o Bonfire, esses novos talentos terão mais chances de finalmente alcançar seus sonhos e elevar suas 
                            carreiras a um novo patamar nos esportes eletrônicos.<br>
                            
                            Dessa forma, o Bonfire tem como objetivo criar um ambiente inclusivo e altamente conectado para a comunidade de jogadores 
                            e entusiastas de esportes eletrônicos. A plataforma promove a interação entre usuários, possibilitando que todos encontrem, 
                            com mais facilidade, pessoas com interesses semelhantes, como torcedores do mesmo time e jogadores dos mesmos jogos.<br>

                            A plataforma deve impulsionar o crescimento da indústria dos esportes eletrônicos como um todo, aproximando ainda mais as 
                            pessoas desse universo e tornando-o mais acessível e emocionante para todos.
                        </p>
                        <div class="S-download-bonfire">
                            <a href="" target="_blank"><img src="assets/google-play-download.png" alt="" class="S-google-play-download"></a>
                            <a href="" target="_blank"><img src="assets/apple-store-download.png" alt="" class="S-apple-store-download"></a>
                        </div>
                    </article>

                    <article class="S-team" id="S-team">
                        <h1 class="S-article-title"> Equipe </h1>
                        <section class="S-bonfire-members">
                            <section class="S-members-infos">
                                <div class="S-member">
                                    <img src="assets/Renan Felliphe.png" alt="" class="S-member-image">
                                    <span class="S-member-name">Renan Felliphe</span>
                                    <span class="S-member-role">Desenvolvedor</span>
                                    <span class="S-member-see-more">Ver mais</span>
                                </div>
                                <div class="S-member">
                                    <img src="assets/Nathália Lessa.png" alt="" class="S-member-image">
                                    <span class="S-member-name">Nathália Lessa</span>
                                    <span class="S-member-role">Desenvolvedora</span>
                                    <span class="S-member-see-more">Ver mais</span>
                                </div>
                                <div class="S-member">
                                    <img src="assets/Natália da Mata.png" alt="" class="S-member-image">
                                    <span class="S-member-name">Natália da Mata</span>
                                    <span class="S-member-role">Orientadora</span>
                                    <span class="S-member-see-more">Ver mais</span>
                                </div>
                            </section>
                            <section class="S-all-bios">
                                <div class="S-member-bio S-member-renan-felliphe">
                                    <p class="S-bio-title">Biografia</p>
                                    <p class="S-member-bio-text">
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        ..................................................................................Bio do Renan..............................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................
                                    </p>
                                    <div class="S-member-social">
                                        <a href="https://www.facebook.com/feliphe.bp" target="_blank" class="S-social-media-link facebook">
                                           <div class="S-media-name">Facebook</div>
                                            <div class="S-media-icon">
                                                <i class="bi bi-facebook"></i>
                                                <span class="S-link-animation"></span>
                                            </div>
                                        </a>
                                        
                                        <a href="https://www.instagram.com/renan_felliphe11/" target="_blank" class="S-social-media-link instagram">
                                            <div class="S-media-name">Instagram</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-instagram"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                         <a href="https://www.linkedin.com/in/renan-felliphe-2869b6270/" target="_blank" class="S-social-media-link linkedin">
                                            <div class="S-media-name">Linkedin</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-linkedin"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                        <a href="http://lattes.cnpq.br/1685057836344732" target="_blank" class="S-social-media-link lattes">
                                            <div class="S-media-name">Lattes</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-mortarboard"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>
                                
                                         <a href="https://twitter.com/foiopee" target="_blank" class="S-social-media-link twitter">
                                            <div class="S-media-name">Twitter</div>
                                            <div class="S-media-icon">
                                                 <i class="bi bi-twitter"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                         <a href="https://www.tiktok.com/@renan_felliphe9" target="_blank" class="S-social-media-link tiktok">
                                            <div class="S-media-name">TikTok</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-tiktok"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                         <a href="https://github.com/RenanFelliphe" target="_blank" class="S-social-media-link github">
                                            <div class="S-media-name">Github</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-github"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>
                                     </div>
                                </div>
                                <div class="S-member-bio S-member-nathalia-lessa">
                                    <p class="S-bio-title">Biografia</p>
                                    <p class="S-member-bio-text">
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................Bio da Nathália............................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................
                                    </p>
                                    <div class="S-member-social">
                                        <a href="https://www.instagram.com/mirror.nl2/" target="_blank" class="S-social-media-link instagram">
                                           <div class="S-media-name">Instagram</div>
                                            <div class="S-media-icon">
                                                <i class="bi bi-instagram"></i>
                                                <span class="S-link-animation"></span>
                                            </div>
                                        </a>

                                        <a href="https://twitter.com/mirrorNL2" target="_blank" class="S-social-media-link twitter">
                                            <div class="S-media-name">Twitter</div>
                                            <div class="S-media-icon">
                                                 <i class="bi bi-twitter"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                        <a href="http://lattes.cnpq.br/1408213143619083" target="_blank" class="S-social-media-link lattes">
                                            <div class="S-media-name">Lattes</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-mortarboard"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>
                                
                                         <a href="https://www.tiktok.com/@mirror.nl2" target="_blank" class="S-social-media-link tiktok">
                                            <div class="S-media-name">TikTok</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-tiktok"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>

                                         <a href="https://github.com/LiaLess1808" target="_blank" class="S-social-media-link github">
                                            <div class="S-media-name">Github</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-github"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>
                                     </div>
                                </div>
                                <div class="S-member-bio S-member-natalia-da-mata">
                                    <p class="S-bio-title">Biografia</p>
                                    <p class="S-member-bio-text">
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        .................................................................................Bio da Natália..............................................................................<br>
                                        ................................................................................................................................................................................................<br>
                                        ................................................................................................................................................................................................
                                    </p>
                                    <div class="S-member-social">
                                        <a href="https://www.instagram.com/nataliadamata/" target="_blank" class="S-social-media-link instagram">
                                           <div class="S-media-name">Instagram</div>
                                            <div class="S-media-icon">
                                                <i class="bi bi-instagram"></i>
                                                <span class="S-link-animation"></span>
                                            </div>
                                        </a>
                                
                                        <a href="http://lattes.cnpq.br/8144676319993082" target="_blank" class="S-social-media-link lattes">
                                            <div class="S-media-name">Lattes</div>
                                             <div class="S-media-icon">
                                                 <i class="bi bi-mortarboard"></i>
                                                 <span class="S-link-animation"></span>
                                             </div>
                                         </a>
                                     </div>
                                </div>
                            </section>
                        </section>
                    </article>
                    
                    <article class="S-CEFET" id="S-CEFET">
                        <h1 class="S-article-title"> CEFET </h1>
                        <p class="S-cefet-text">
                            <strong>O</strong> <a href="https://www.cefetmg.br/" target="_blank" style="color: var(--org-color1); font-style: italic;">CEFET</a>, mais especificamente, o CEFET-MG (Centro Federal de Educação Tecnológica de Minas Gerais) é uma instituição de ensino pública federal localizada 
                            no estado de Minas Gerais, Brasil. Fundada em 1910, é conhecida por oferecer cursos técnicos, graduação, pós-graduação e programas de extensão nas áreas 
                            de ciência, tecnologia e engenharia.<br>

                            As atividades do CEFET podem incluir cursos técnicos em diversas áreas, graduação em engenharia, tecnologia e outras disciplinas, além de programas de 
                            pesquisa e extensão voltados para a comunidade local e regional.<br>

                            O<a href="https://www.leopoldina.cefetmg.br/" target="_blank" style="color: var(--org-color1); font-style: italic;"> CEFET-MG Campus Leopoldina</a> destaca-se por sua dedicação em proporcionar uma educação de alta qualidade alinhada com as demandas atuais do mercado e da 
                            sociedade. Por meio de uma equipe de professores qualificados e uma estrutura moderna de ensino, o campus visa oferecer aos seus estudantes uma formação 
                            abrangente, que combina conhecimentos teóricos sólidos com experiências práticas relevantes.<br>

                            No âmbito dos cursos técnicos, o campus oferece uma variedade de opções que abrangem setores como eletrônica, informática, mecânica, eletromecânica e muito mais.
                            Além dos cursos técnicos, o CEFET-MG Campus Leopoldina proporciona oportunidades de formação avançada por meio de seus programas de graduação. Os cursos de 
                            engenharia e tecnologia oferecem uma base sólida de conhecimentos científicos e práticos, preparando os estudantes para atuarem como profissionais altamente 
                            capacitados e inovadores em suas respectivas áreas.
                            A pesquisa e extensão junto dos projetos de final de curso, projetos interdisciplinares ou PIs são uma parte fundamental da jornada educacional em instituições 
                            como o CEFET-MG Campus Leopoldina. Eles permitem que os estudantes apliquem os conhecimentos adquiridos ao longo de seu curso em um projeto prático. Geralmente, 
                            esses projetos representam uma oportunidade para os alunos consolidarem suas habilidades técnicas, desenvolverem sua capacidade de pesquisa, trabalho em equipe 
                            e resolução de problemas, além de se prepararem para os desafios da vida profissional.
                            Para obter informações atualizadas sobre os cursos oferecidos, projetos em andamento e demais atividades do CEFET-MG Campus Leopoldina, recomenda-se visitar o 
                            site oficial da instituição ou entrar em contato direto com a equipe do campus.
                        </p>
                    </article>
                </section>
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

    <script src="js/config.js"></script>
</body>

</html>