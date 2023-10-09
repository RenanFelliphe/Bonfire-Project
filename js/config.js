/*==========================================================================================================================================
======================================================== INDIVIDUALIDADES DA PÁGINA ========================================================
============================================================================================================================================*/



/*========================================================================================================================================
========================================================== FUNÇÕES DA PÁGINA =============================================================
=========================================================================================================================================*/

openTiers(); //Abre e fecha CADA SEÇÃO da página de configurações
openSearchArea(); //Abre e fecha a ÁREA DE PESQUISA
openQuickMessages(); //Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
menuAsideFunctions(); //Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
FAQsection(); //Funções da seção das PERGUNTAS FREQUENTES no Tier para o SUPORTE
reportProblemsAndFeedback(); //Funções da seção para Reportar PROBLEMAS e Enviar FEEDBACK
personalizeBonfire(); //Conjunto de funções para personalizar as características do site como o MODO, AS CORES E AS FONTES
bonfireMembersBio(); //Abre a BIOGRAFIA de cada um dos MEMBROS do Projeto

/*========================================================================================================================================
========================================================= DEFININDO AS FUNÇÕES ===========================================================
=========================================================================================================================================*/


//Abre e fecha CADA SEÇÃO da página de configurações
function openTiers() {
    const buttomConfig = document.querySelectorAll('.S-buttom');
    const tierSections = document.querySelectorAll('.S-tier');

    buttomConfig.forEach((buttomList, index) => {
        buttomList.addEventListener('click', () => {
            buttomConfig.forEach(button => button.classList.toggle('active', button === buttomList));
            tierSections.forEach(section => section.classList.toggle('active', section === tierSections[index]));
        });
    });
}

//Abre e fecha a ÁREA DE PESQUISA
function openSearchArea() {
    const searchConfigIcon = document.querySelector('.S-search-icon');
    const searchConfigSection = document.querySelector('.S-div-search');

    searchConfigIcon.addEventListener('click', () => {
        searchConfigSection.classList.toggle("close");
    });
}

//Abre e fecha a ÁREA DE MENSAGENS RÁPIDAS
function openQuickMessages() {
    const quickMessages = document.querySelector('.Q-quick-messages');
    const messagePusher = document.querySelector('.Q-message-pusher');

    messagePusher.addEventListener('click', () => {
        quickMessages.classList.toggle("close");
    });
}

//Funções e individualidades do MENU DE NAVEGAÇÃO LATERAL
function menuAsideFunctions() {
    const main = document.querySelector("main");
    const sidebar = document.querySelector(".M-menu-aside");
    const sidebarCenter = document.querySelector(".M-aside-center");
    const morePagesContainer = document.querySelector(".M-aside-more");
    var isOpen = false; // Variável para controlar o estado de abertura da sidebar
    var hoverTimeout;

    /* ESSAS FUNÇÕES NÃO DEVEM OCORRER NA PÁGINA DE CONFIGURAÇÕES 

    // Abre e fecha o menu usando BOTÃO
    function buttonMenuAside() {
        const menuButton = document.querySelector(".menu-button");

        menuButton.addEventListener('click', function () {
            sidebar.classList.toggle("close");
            isOpen = !isOpen;

            if (isOpen) {
                setTimeout(hoverMorePages, 2000); // Aguarda 2 segundos antes de permitir a execução da função hoverMorePages
            } else {
                morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
            }
        });
    }

    // Abre o menu usando HOVER em Desktops
    function hoverMenuAside() {
        sidebar.addEventListener('mouseover', function () {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(function () {
                sidebar.classList.remove("close");
            }, 100); // Delay em milissegundos
        });

        sidebar.addEventListener('mouseout', function () {
            clearTimeout(hoverTimeout);
            hoverTimeout = setTimeout(function () {
                sidebar.classList.add("close");
                morePagesContainer.classList.add("close"); // Retorna morePagesContainer ao estado inicial com a classe 'close'
            }, 200); // Delay em milissegundos
        });
    }
*/

    // Abre a seção para ver as páginas ocultas
    function openMorePages() {
        const morePages = document.querySelector(".M-more-pages");

        morePages.addEventListener('click', function () {
            morePagesContainer.classList.toggle("close");
            isOpen = !isOpen;

            if (isOpen) {
                setTimeout(hoverMorePages, 2000);
            } else {
                morePagesContainer.classList.add("close");
            }
        });
    }

    //Muda o tema de acordo com o circulo
    function testChangeTheme() {
        const body = document.querySelector("body");
        const team1 = document.querySelector(".M-team-1");
        const team2 = document.querySelector(".M-team-2");
        const team3 = document.querySelector(".M-team-3");

        team1.addEventListener("click", () => {
            body.classList.toggle("G-green");
            body.classList.remove("G-orange");
            body.classList.remove("G-blue");
        });

        team2.addEventListener("click", () => {
            body.classList.toggle("G-orange");
            body.classList.remove("G-green");
            body.classList.remove("G-blue");
        });

        team3.addEventListener("click", () => {
            body.classList.toggle("G-blue");
            body.classList.remove("G-orange");
            body.classList.remove("G-green");
        });
    }

    //Troca e identa a PÁGINA SELECIONADA no menu lateral
    function toggleSelectedPage() {
        const list = document.querySelectorAll('.M-list');
        const sublist = document.querySelectorAll('.M-sublist');

        list.forEach(item => item.addEventListener('click', function () {
            list.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        }));

        sublist.forEach(subitem => subitem.addEventListener('click', function () {
            sublist.forEach(subitem => subitem.classList.remove('active'));
            this.classList.add('active');
        }));
    }

    // Abre a seção para alternar de usuário e sair do site
    function userActions() {

        const logOptionsDiv = document.querySelector('.M-log-actions');
        const logButtom = document.querySelector('.M-log-buttom');

        // Abre a seção com botão
        function openContainer() {
            logButtom.addEventListener('click', function () {
                logOptionsDiv.classList.toggle("close");
                logButtom.classList.toggle("active");

                if (logOptionsDiv.classList.contains("close")) {
                    clearTimeout(hoverTimeout);
                } else {
                    clearTimeout(hoverTimeout);
                }
            });
        }
        // Fecha a seção com hover
        function closeContainerHover() {

            main.addEventListener("mouseover", () => {
                logOptionsDiv.classList.add("close");
                logButtom.classList.remove("active");
            })

            sidebarCenter.addEventListener("mouseover", () => {
                logOptionsDiv.classList.add("close");
                logButtom.classList.remove("active");
            })
        }

        //SAI do site
        function logOutBonfire() {
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
        openContainer();
        closeContainerHover();
        logOutBonfire();
    }

    /*hoverMenuAside();
    buttonMenuAside();*/

    testChangeTheme();
    openMorePages();
    toggleSelectedPage();
    userActions();
}

//Funções da seção das PERGUNTAS FREQUENTES no Tier para o SUPORTE
function FAQsection() {
    const faq = document.querySelector(".S-faq");
    const generalQuestions = document.querySelector(".S-general-questions");
    const otherQuestions = document.querySelector(".S-other-questions");
    const questions = document.querySelectorAll(".S-questions");
    const answers = document.querySelectorAll(".S-answers");
    const generalQuestionTitle = document.querySelector(".S-generalQ-title");
    const otherQuestionTitle = document.querySelector(".S-otherQ-title");
    const questionLine = document.querySelector(".S-line");

    function openQuestion() {
        questions.forEach((questionList, index) => {
            questionList.addEventListener('click', () => {
                answers[index].classList.remove("closed");
            });
        });
    }

    function closeQuestionsHover() {
        faq.addEventListener('mouseleave', () => {
            answers.forEach(answer => {
                answer.classList.add('closed');
            });
        });
    }

    function otherQuestion() {
        otherQuestionTitle.addEventListener('click', () => {
            //Transiciona a linha colorida
            questionLine.classList.remove("S-geral-active");
            questionLine.classList.add("S-other-active");

            //Identa os títulos das 2 seções
            generalQuestionTitle.classList.remove("active");
            otherQuestionTitle.classList.add("active");

            //Inverte as seções
            otherQuestions.classList.add("active");
            generalQuestions.classList.remove("active");

            //Fecha as perguntas
            answers.forEach(answer => {
                answer.classList.add('closed');
            });
        });
    }

    function generalQuestion() {
        generalQuestionTitle.addEventListener('click', () => {
            //Transiciona a linha colorida
            questionLine.classList.remove("S-other-active");
            questionLine.classList.add("S-geral-active");

            //Identa os títulos das 2 seções
            otherQuestionTitle.classList.remove("active");
            generalQuestionTitle.classList.add("active");

            //Inverte as seções
            generalQuestions.classList.add("active");
            otherQuestions.classList.remove("active");

            //Fecha as perguntas
            answers.forEach(answer => {
                answer.classList.add('closed');
            });
        });
    }

    otherQuestion();
    generalQuestion();
    openQuestion();
    closeQuestionsHover();
}

//Funções da seção para Reportar PROBLEMAS e Enviar FEEDBACK
function reportProblemsAndFeedback() {
    //Funções da seção de Reportar problemas
    function sendReport() {
        const reportSubmit = document.querySelector(".S-report-submit");
        const reportModal = document.querySelector(".S-report-problems-modal");
        const reportClear = document.querySelector(".S-report-clear");
        const tagList = document.querySelectorAll(".S-tags");


        function openCloseModal() {
            // Abre o modal
            reportSubmit.addEventListener('click', () => {
                reportModal.classList.toggle('close');
            });
            // Limpa o input e fecha o modal
            reportClear.addEventListener('click', () => {
                reportModal.classList.add('close');
                //Adiciona a opacidade em todas as tags
                tagList.forEach((tags) => {
                    tags.style.opacity = 1;

                });
            });
        }

        function chooseTags() {
            const tagInput = document.querySelector("#S-tag-area");
            tagList.forEach((tags) => {
                tags.addEventListener('click', () => {
                    if (tags.style.opacity == 0.3) {
                        tags.style.opacity = 1;
                        const tagToRemove = tags.textContent.trim();
                        tagInput.value = tagInput.value
                            .split(',')
                            .map((tag) => tag.trim())
                            .filter((tag) => tag !== tagToRemove)
                            .join(', '); // Remove a tag do input
                    } else {

                        tags.style.opacity = 0.3;

                        const tagText = tags.textContent.trim();
                        if (tagInput.value === "") {
                            tagInput.value = tagText;
                        } else {
                            tagInput.value += `, ${tagText}`; // Adiciona a tag ao input separada por vírgula
                        }
                    }
                });
            });
        }

        openCloseModal();
        chooseTags();
    }

    //Funções da seção de enviar Feedback
    function sendFeedback() {
        const reportSubmit = document.querySelector(".S-feedback-submit");
        const reportModal = document.querySelector(".S-feedback-modal");
        const feedbackClear = document.querySelector(".S-feedback-clear");
        const feedbackStars = document.querySelectorAll('.S-feedback-rating .S-feedback-stars');

        function openCloseModal() {
            // Abre o modal
            reportSubmit.addEventListener('click', () => {
                reportModal.classList.toggle('close');
            });

            // Limpa o input e fecha o modal
            feedbackClear.addEventListener('click', () => {
                reportModal.classList.add('close');

                // Remove a classe de todas as estrelas
                feedbackStars.forEach((star) => {
                    star.classList.remove("active");
                });
            });
        }

        function updateStars() {
            feedbackStars.forEach((star, index) => {
                star.addEventListener('click', () => {
                    // Adiciona a classe "active" nas estrelas com índice menor ou igual ao índice da estrela clicada
                    for (let i = 0; i <= index; i++) {
                        feedbackStars[i].classList.add("active");
                    }

                    // Remove a classe "active" das estrelas com índice maior do que o índice da estrela clicada
                    for (let i = index + 1; i < feedbackStars.length; i++) {
                        feedbackStars[i].classList.remove("active");
                    }
                });
            });
        }

        openCloseModal();
        updateStars();
    }

    sendFeedback();
    sendReport();
}

//Conjunto de funções para personalizar as características do site como o MODO, AS CORES E AS FONTES
function personalizeBonfire() {
    //Atualiza o MODO(Light/Dark)
    function updateMode() {
        const chk = document.getElementById('S-chk');
        chk.addEventListener('change', () => {
            document.body.classList.toggle('light-mode');
        });
    }

    //Atualiza o tema e as CORES do site
    function updateColors() {
        const colors = document.querySelectorAll(".S-colors");

        colors.forEach(newColor => {
            newColor.addEventListener('click', () => {
                colors.forEach(lastColor => lastColor.classList.remove("active"));
                newColor.classList.add("active");

                // Remove todas as classes de cor do body
                document.body.classList.remove(
                    "G-white",
                    "G-red",
                    "G-orange",
                    "G-yellow",
                    "G-green",
                    "G-cyan",
                    "G-blue",
                    "G-purple",
                    "G-pink"
                );

                // Adiciona a classe de cor selecionada ao body
                document.body.classList.add(newColor.classList[1]);
            });
        });
    }

    //Atualiza AS FONTES do site
    function updateFont() {

        //Define o TAMANHO de UMA FONTE ESPECÍFICA do site
        function defineEspecificFontSize() {
            function updateFontSize(className, sizeVarName) {
                const sizeValue = document.querySelector(className + '-value');
                const sizeRange = document.querySelector(className + '-range');

                sizeRange.addEventListener('input', function () {
                    sizeValue.innerHTML = this.value;
                    document.documentElement.style.setProperty(sizeVarName, `${sizeRange.value}px`);
                });
            }

            updateFontSize('.S-title-font-size', '--size-font-title');
            updateFontSize('.S-subtitle-font-size', '--size-font-subtitle');
            updateFontSize('.S-text-font-size', '--size-font-text');
            updateFontSize('.S-icons-font-size', '--size-font-icons');
        }

        //Abre e fecha a ÁREA DE CONFIGURAÇÕES AVANÇADAS DE FONTE
        function openAdvancedFontConfig() {
            const fontAdvancedConfig = document.querySelector('.S-font-advanced-config');
            const fontAdvancedConfigIcon = document.querySelector('.S-font-config');

            fontAdvancedConfigIcon.addEventListener('click', () => {
                fontAdvancedConfig.classList.toggle('close');
            });
        }

        //Define o TAMANHO de TODAS AS FONTES do site
        function defineAllFontSize() {
            const fontSizeValue = document.querySelector('.S-font-size-value');
            const fontSizeRange = document.querySelector('.S-font-size-range');

            const rangeMin = parseInt(fontSizeRange.min);
            const rangeMax = parseInt(fontSizeRange.max);
            const rangeCenter = (rangeMin + rangeMax) / 2;

            const initialFontSize = getComputedStyle(document.documentElement).getPropertyValue('--size-font-title') || rangeCenter;
            const initialFontIcons = getComputedStyle(document.documentElement).getPropertyValue('--size-font-icons') || rangeCenter;
            const initialFontSubtitle = getComputedStyle(document.documentElement).getPropertyValue('--size-font-subtitle') || rangeCenter;
            const initialFontText = getComputedStyle(document.documentElement).getPropertyValue('--size-font-text') || rangeCenter;
            const initialFontDetail = getComputedStyle(document.documentElement).getPropertyValue('--size-font-detail') || rangeCenter;

            fontSizeRange.addEventListener('input', function () {
                const newSize = parseInt(initialFontSize) + parseInt(fontSizeRange.value) - rangeCenter;
                const newIconsSize = parseInt(initialFontIcons) + parseInt(fontSizeRange.value) - rangeCenter;
                const newSubtitleSize = parseInt(initialFontSubtitle) + parseInt(fontSizeRange.value) - rangeCenter;
                const newTextSize = parseInt(initialFontText) + parseInt(fontSizeRange.value) - rangeCenter;
                const newDetailSize = parseInt(initialFontDetail) + parseInt(fontSizeRange.value) - rangeCenter;

                fontSizeValue.innerHTML = fontSizeRange.value;

                document.documentElement.style.setProperty('--size-font-title', `${newSize}px`);
                document.documentElement.style.setProperty('--size-font-icons', `${newIconsSize}px`);
                document.documentElement.style.setProperty('--size-font-subtitle', `${newSubtitleSize}px`);
                document.documentElement.style.setProperty('--size-font-text', `${newTextSize}px`);
                document.documentElement.style.setProperty('--size-font-detail', `${newDetailSize}px`);
            });

            function defineFontSizeByButtons() {
                const fontSizeMinus = document.querySelector('.S-font-size-minus');
                const fontSizePlus = document.querySelector('.S-font-size-plus');

                fontSizePlus.addEventListener('click', () => {
                    fontSizeRange.value = parseInt(fontSizeRange.value) + 1;
                    fontSizeRange.dispatchEvent(new Event('input'));
                });

                fontSizeMinus.addEventListener('click', () => {
                    fontSizeRange.value = parseInt(fontSizeRange.value) - 1;
                    fontSizeRange.dispatchEvent(new Event('input'));
                });
            }
            defineFontSizeByButtons();
        }

        openAdvancedFontConfig();
        defineAllFontSize();
        defineEspecificFontSize();
    }
    updateMode();
    updateColors();
    updateFont();
}

//Abre a BIOGRAFIA de cada um dos MEMBROS do Projeto
function bonfireMembersBio() {
    const memberList = document.querySelectorAll(".S-member");
    const memberBiographys = document.querySelectorAll(".S-member-bio");
    const abouUsContainer = document.querySelector(".S-about-us");
    
    memberList.forEach((member, index) => {
        member.addEventListener("click", () => {
            if (!member.classList.contains("active")) {
                memberBiographys.forEach((bio) => {
                    bio.classList.remove("active");
                });

                memberList.forEach((allMembers) => {
                    allMembers.classList.remove("active");
                    allMembers.style.opacity = 0.4;
                });

                member.style.opacity = 1;
                member.classList.add("active");
                memberBiographys[index].classList.add("active");
                
            } else {
                memberList.forEach((allMembers) => {
                    memberBiographys[index].classList.remove("active");
                    allMembers.classList.remove("active");
                    member.style.opacity = 1;
                    allMembers.style.opacity = 1;
                });                
                
            }
        });
/*
        abouUsContainer.addEventListener("mouseleave", () => {
            member.classList.remove("active");
            memberBiographys.forEach((bio) => {
                bio.classList.remove("active");
            });
        });*/
    });

        
}