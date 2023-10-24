<!-- NAV  -->
<!-- coloquei um id pra chamar la no js --jayron-- -->
<nav class="navbar shadow-sm" id="navmenu">
    <div class="container-fluid">

        <!-- RESPONSIVIDADE -->

        <!-- MENU HAMBURGUER -->
        <button class="btn" id="btn_menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-2"></i></button>
        <!-- FIM DO MENU HAMBURGUER -->

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel"><img src="imgs/logoEGP2.png" alt="logo"
                        id="img_logo">
                </h5>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

                <!-- CONTEÚDO DO MENU LATERAL RESPONSIVO -->
                <nav class="menulateral-responsivo">
                    <ul>
                        <li class="menu">
                            <a href="index.php">
                                <span class="icon "><i class="bi bi-bullseye"></i></span>
                                <span class="txt">Objetivos</span>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="topico01.php">
                                <span class="icon "><i class="bi bi-1-circle"></i>
                                </span>
                                <span class="txt">Apresentação</i></span>
                            </a>
                        </li>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico02.php">
                                    <span class="icon space"><i class="bi bi-2-circle"></i></span>
                                    <span class="txt">Usabilidade</span>
                                        <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico02.php">
                                <i class="fa-regular fa-pen-to-square circulo"></i>Início</a>
                            <a href="#item2.1">
                                <i class="fa-regular fa-pen-to-square circulo"></i>2.1 - NBR ISO 9241-11</a>
                            <a href="#item2.2">
                                <i class="fa-regular fa-pen-to-square circulo"></i>2.2 -ISO/IEC 25000 (SQuaRE)</a>
                            <a href="#item2.3">
                                <i class="fa-regular fa-pen-to-square circulo"></i>2.3 - Heurísticas de Nielsen</a>
                            <a href="#item2.4">
                                <i class="fa-regular fa-pen-to-square circulo"></i>2.4 - O que não é usual?</a>
                        </div>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico03.php">
                                    <span class="icon space"><i class="bi bi-3-circle"></i></span>
                                    <span class="txt">Heurísticas de Nielsen</span>
                                        <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico03.php">
                                <i class="fa-regular fa-pen-to-square circulo"></i>Início</a>
                            <a href="#item3.1">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.1 - Visibilidade de qual estado
                                estamos no sistema</a>
                            <a href="#item3.2">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.2 - Correspondência entre o sistema
                                e o mundo real</a>
                            <a href="#item3.3">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.3 - Liberdade de controle fácil pro
                                usuário</a>
                            <a href="#item3.4">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.4 - Consistência e Padrões</a>
                            <a href="#item3.5">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.5 - Prevenção de Erros</a>
                            <a href="#item3.6">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.6 - Reconhecimento em vez de
                                memorização</a>
                            <a href="#item3.7">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.7 - Flexibilidade e Eficiência de
                                Uso</a>
                            <a href="#item3.8">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.8 - Estética e design
                                minimalista</a>
                            <a href="#item3.9">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.9 - Ajude os Usuários a
                                Reconhecerem, Diagnosticarem e
                                Recuperarem-se de Erros</a>
                            <a href="#item3.10">
                                <i class="fa-regular fa-pen-to-square circulo"></i>3.10 - Ajuda e Documentação</a>
                        </div>

                        <!-- topico com Subtópico -->
                        <button class="dropdown-btn">
                            <li class="menu">
                                <a data-valor="topico04.php">
                                    <span class="icon space"><i class="bi bi-4-circle"></i></span>
                                    <span class="txt">Avaliação de Usabilidade</span>
                                        <i class="bi bi-caret-down-fill barra-sub"></i>
                                </a>
                            </li>
                        </button>
                        <!-- subtopicos aqui  -->
                        <div class="dropdown-container">
                            <a href="topico04.php">
                                <i class="fa-regular fa-pen-to-square circulo"></i>Início</a>
                            <a href="#item4.1">
                                <i class="fa-regular fa-pen-to-square circulo"></i>4.1 - Por que avaliar?</a>
                            <a href="#item4.2">
                                <i class="fa-regular fa-pen-to-square circulo"></i>4.2 - Como Avaliar</a>
                        </div>

                        <li class="menu">
                            <a href="referencias.php">
                                <span class="icon"><i class="bi bi-book-half"></i></span>
                                <span class="txt">Referências</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- FIM DA RESPONSIVIDADE -->

        <!-- CONTEÚDO DA NAV -->
        <a class="navbar-brand"></a>
        <form class="form" role="search">
            <a class="nav-link active nonedec me-3" aria-current="page" href="#">Nome_Completo</a>

            <button type="button" class="btn btn-outline-success" id="moodle">Ir para o Moodle</button>

            <!--BOTÃO MODO ESCURO -->
            <button type="button" id="btn_tema">
                <div id="icone"></div>
                <div id="txtBtn"> Mudar Tema</div>
            </button>
            <!--BOTÃO MODO ESCURO -->

        </form>
    </div>
</nav>
<!-- FIM DA NAV -->