<?php
include('layout/header.php');
 ?>
<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação e Boas Vindas</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->


                        <p>Neste curso você conhecerá mais sobre os eventos presenciais, digitais e híbridos
                 como ferramenta de educação. 
                  Apresentaremos o panorama do comportamento do novo estudante digital, os
formatos e exemplos de eventos presenciais, híbridos e 100% virtuais como ferramenta
de educação e tópicos relevantes para criar e planejar eventos digitais.
                        </p>

                        <h2 class="Titulo fw-bolder">Objetivo</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->


                        <p>Construir um repertório básico para o planejamento de eventos digitais de caráter técnico, científico, educacional e corporativo. </p>
                    
                        

                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Gestão do tempo. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
<?php
include('layout/footer.php');
?>
</body>

</html>