<?php
get_header();
?>

<section>
    <div class="container-fluid">
        <div class="row">


            <div class="col-12 px-0 position-relative">

                <div class="main-slider-mobile bg-gradient-blue-mobile py-5 d-xl-none">

                    <?php
                    $args = [
                        'post_type' => 'solucoes',
                        'posts_per_page' => -1
                    ];

                    $query = new WP_Query($args);
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="main-slide-mobile text-center px-3">
                                <h1 class="mb-2 text-blue-900 fw-bold"><?= get_field('titulo_do_banner') ?></h1>
                                <p class="text-white mb-5"><?= get_field('texto_do_banner') ?></p>
                                <div class="d-flex justify-content-center mb-2">
                                    <div class="text-white fw-bold lh-sm h5 mb-4">
                                        <span class="d-inline-block">FX</span> <span class="border border-2 rounded-4 px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary btn-white fw-bold mb-0 mx-2" href="<?= get_the_permalink() ?>">SABER MAIS</a>
                                    </div>


                                </div>
                                <ul class="list-unstyled d-inline-flex mb-4 w-100 justify-content-center">

                                    <?php $i = 0;
                                    if (have_rows('destaques')) : while (have_rows('destaques')) : the_row();
                                            $i++; ?>
                                            <li class="mx-2 text-center d-flex flex-column align-items-center" style="max-width: 100px;">
                                                <div class="product-feature-container-icon mb-2">
                                                    <span class="product-feature-number"><?= $i ?></span>

                                                    <?php
                                                    $img = get_sub_field('imagem')
                                                    ?>
                                                    <img class="img-fluid" src="<?= $img['url'] ?>" alt="<?= get_sub_field('titulo') ?>">
                                                </div>
                                                <h2 style="font-size: .8rem;" class="text-white text-center fw-bold mb-0 text-uppercase"><?= get_sub_field('titulo') ?></h2>

                                            </li>
                                    <? endwhile;
                                    endif; ?>
                                </ul>

                                <?php
                                $img = get_field('imagem_principal')
                                ?>
                                <img style="max-width: 700px;" class="img-fluid w-100 d-inline-block mb-4" src="<?= $img['url'] ?>" alt="<?= get_the_title() ?>">
                            </div>

                    <?php endwhile;
                    endif; ?>


                </div>

                <div class="main-slider position-relative d-none d-xl-block">
                    <?php
                    $args = [
                        'post_type' => 'solucoes'
                    ];

                    $query = new WP_Query($args);

                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                            <div class="position-relative fx-main-slide">
                                <img class="img-fluid position-relative fx-bg-main-banner" src="<?= get_template_directory_uri() ?>/public/imgs/bg-main-banner-fxdata.jpg" alt="FX Data fundo do banner">


                                <div style="left: 50%; transform: translateX(-50%)" class="container position-absolute top-0">
                                    <div class="row">

                                        <div class="col-xl-5 offset-xl-1 d-flex align-items-start pt-5">
                                            <div class="pe-4">
                                                <h1 class="text-blue-900 fw-bold mb-5"><?= get_field('titulo_do_banner') ?></h1>
                                                <p class="text-white lead"><?= get_field('texto_do_banner') ?>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 pt-2 mt-5 position-relative">
                                            <img class="img-fluid bg-square-product-base" src="<?= get_template_directory_uri() ?>/public/imgs/bg-square-base-fxdata.svg" alt="FX Data quadrado">
                                            <div class="position-absolute center-center w-100 pt-5">
                                                <div class="d-flex flex-row align-items-center">
                                                    <ul class="list-unstyled d-flex mb-0">

                                                        <?php $i = 0;
                                                        if (have_rows('destaques')) : while (have_rows('destaques')) : the_row();
                                                                $i++; ?>
                                                                <li class="mx-2 text-center d-flex flex-column align-items-center" style="max-width: 100px;">
                                                                    <div class="product-feature-container-icon mb-2">
                                                                        <span class="product-feature-number"><?= $i ?></span>

                                                                        <?php
                                                                        $img = get_sub_field('imagem')
                                                                        ?>
                                                                        <img class="img-fluid" src="<?= $img['url'] ?>" alt="<?= get_sub_field('titulo') ?>">
                                                                    </div>
                                                                    <h2 style="font-size: .8rem;" class="text-white text-center fw-bold mb-0 text-uppercase"><?= get_sub_field('titulo') ?></h2>

                                                                </li>
                                                        <? endwhile;
                                                        endif; ?>
                                                    </ul>
                                                    <img class="img-fluid mx-2" width="20" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right-fxdata.svg" alt="FX Data seta para a direita">
                                                    <div>
                                                        <div class="text-white fw-bold lh-sm h5 mb-4">
                                                            <span class="d-inline-block">FX</span><br /><span class="border border-2 rounded-4 px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                                        </div>
                                                        <a class="btn btn-primary btn-white fw-bold mb-0" href="<?= get_the_permalink() ?>">SABER MAIS</a>
                                                    </div>
                                                </div>
                                                <?php
                                                $img = get_field('imagem_principal')
                                                ?>
                                                <img class="img-fluid pb-5 mb-3" src="<?= $img['url'] ?>" alt="<?= get_the_title() ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    <?php endwhile;
                    endif; ?>
                </div>
            </div>




        </div>
    </div>
</section>

<section class="pt-5 mt-5 opacity-50 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center position-relative mb-4">
                <hr style="top: 50%; transform: translateY(-50%)" class="position-absolute d-block w-100 my-0">
                <h2 class="text-gray-500 d-inline-block bg-white mb-0 position-relative px-2">Clientes</h2>
            </div>
            <div class="col-12">
                <div class="fx-clients-slider text-center">
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/centauro.svg" alt="Centauro">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/hering.svg" alt="Hering">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/br-malls.svg" alt="BR Malls">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/boticario.svg" alt="O Boticário">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/grand-vision.svg" alt="Grand Vision">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 d-xl-none">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="text-blue-900 fw-bold">Conheça a jornada do cliente, da vitrine à fila do caixa</h2>
            <p class="text-blue-500 lead fw-normal">Por meio de uma estratégia integrada que utiliza mapeamento por observação e planejamento baseado em dados empíricos</p>
        </div>
    </div>
    <div class="container-fluid bg-gradient-blue-mobile pt-5">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start mb-4">
                                <div class="flex-shrink-0">
                                    <img width="94" src="<?= get_template_directory_uri() ?>/public/imgs/icon-indicadores-performance.svg" alt="Indicadores de performance">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="text-white h4 fw-bold">ACOMPANHE OS INDICADORES DE PERFORMANCE DA LOJA FÍSICA</h3>
                                </div>
                            </div>

                            <ul class="text-white ps-3 lead fw-normal mb-5">
                                <li>Nº de visitas</li>
                                <li>Taxa de rejeição</li>
                                <li>Taxa de conversão</li>
                                <li>Tempo de permanência</li>
                                <li>ROI de campanhas de MKT</li>
                                <li>Taxa de oportunidade</li>
                            </ul>
                            <div class="text-center d-md-none">
                                <a href="#contato" class="btn btn-secondary rounded-pill">ENTRAR EM CONTATO</a>
                            </div>
                            <div class="text-left d-none d-md-block">
                                <a href="#contato" class="btn btn-secondary rounded-pill">ENTRAR EM CONTATO</a>
                            </div>

                        </div>


                        <div class="col-md-6 mt-5">

                            <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                                <div class="card-body d-flex align-items-center">
                                    <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-conversao.svg" alt="+Conversão de vendas">
                                    <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">+ Conversão</strong> de vendas</h4>
                                </div>
                            </div>
                            <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                                <div class="card-body d-flex align-items-center">
                                    <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-informacao.svg" alt="+Informação para tomada de decisão">
                                    <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">+ Informação</strong> para tomada de decisão</h4>
                                </div>
                            </div>
                            <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                                <div class="card-body d-flex align-items-center">
                                    <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-melhoria-experiencia.svg" alt="Melhoria de experiência">
                                    <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">Melhoria da experiência</strong> para fidelização de clientes3</h4>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 text-center">
                            <img style="max-width: 500px;" class="img-fluid w-100 d-inline-block" src="<?= get_template_directory_uri() ?>/public/imgs/fxdata-jornada-cliente.png" alt="FX Data - Jornada do Cliente">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="pt-5 d-none d-xl-block">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-blue-900 fw-bold">Conheça a jornada do cliente, da vitrine à fila do caixa</h2>
                <p class="text-blue-500 lead fw-normal">Por meio de uma estratégia integrada que utiliza mapeamento por observação e planejamento baseado em dados empíricos</p>
            </div>

        </div>
    </div>

    <div style="background: url(<?= get_template_directory_uri() ?>/public/imgs/bg-jornada-cliente-fxdata.jpg) center bottom no-repeat" class="container-fluid">
        <div class="row">
            <div class="col-12 px-0 position-relative">
                <div class="position-relative">

                    <div class="row">

                        <div class="col-lg-4 position-absolute top-50 translate-middle-y ms-5 mt-5">

                            <div class="d-flex align-items-start mb-4">
                                <div class="flex-shrink-0">
                                    <img width="94" src="<?= get_template_directory_uri() ?>/public/imgs/icon-indicadores-performance.svg" alt="Indicadores de performance">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="text-white h4 fw-bold">ACOMPANHE OS INDICADORES DE PERFORMANCE DA LOJA FÍSICA</h3>
                                </div>
                            </div>

                            <ul class="text-white ps-3 lead fw-normal mb-5">
                                <li>Nº de visitas</li>
                                <li>Taxa de rejeição</li>
                                <li>Taxa de conversão</li>
                                <li>Tempo de permanência</li>
                                <li>ROI de campanhas de MKT</li>
                                <li>Taxa de oportunidade</li>
                            </ul>
                            <a href="#contato" class="btn btn-secondary rounded-pill">ENTRAR EM CONTATO</a>

                        </div>

                    </div>

                    <img class="w-75" src="<?= get_template_directory_uri() ?>/public/imgs/performance-loja-fisica-fxdata.png" alt="FX Data">
                </div>

                <div class="col-lg-4 position-absolute top-50 translate-middle-y me-5 mt-5 ps-5" style="right: 0;">
                    <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                        <div class="card-body d-flex align-items-center">
                            <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-conversao.svg" alt="+Conversão de vendas">
                            <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">+ Conversão</strong> de vendas</h4>
                        </div>
                    </div>
                    <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                        <div class="card-body d-flex align-items-center">
                            <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-informacao.svg" alt="+Informação para tomada de decisão">
                            <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">+ Informação</strong> para tomada de decisão</h4>
                        </div>
                    </div>
                    <div class="card mb-5 rounded-3 shadow-sm-lg" style="max-width: 540px;">
                        <div class="card-body d-flex align-items-center">
                            <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-melhoria-experiencia.svg" alt="Melhoria de experiência">
                            <h4 class="card-title h5 mb-0 flex-shrink-1"><strong class="text-blue-500">Melhoria da experiência</strong> para fidelização de clientes3</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

</section>

<section class="pt-3 mt-5 opacity-50 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center position-relative mb-4">
                <hr style="top: 50%; transform: translateY(-50%)" class="position-absolute d-block w-100 my-0">
                <h2 class="text-gray-500 d-inline-block bg-white mb-0 position-relative px-2">Parceiros de Tecnologia</h2>
            </div>
            <div class="col-12">
                <div class="fx-clients-slider text-center">
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/intel.svg" alt="Intel">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/aws.svg" alt="Amazon AWS">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/google.svg" alt="Google">
                    </div>
                    <div class="text-center">
                        <img class="d-inline-block" height="71" src="<?= get_template_directory_uri() ?>/public/imgs/panasonic.svg" alt="Panasonic">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 overflow-hidden pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-blue-900 fw-bold mb-4">Soluções de Ponta a Ponta</h2>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-12 px-5 px-sm-0">
            <div class="container position-relative container-features-blue bg-gradient-blue rounded-5 pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="fx-features-slider">
                                <?php
                                $args = [
                                    'post_type' => 'solucoes'
                                ];

                                $query = new WP_Query($args);

                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                                        <div class="mb-5 d-flex flex-column px-2 h-100">

                                            <?php $img = get_field('icone'); ?>

                                            <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= $img['url'] ?>" alt="<?= get_the_title() ?>">

                                            <div class="card bg-white rounded-3 shadow-sm h-100 position-relative">

                                                <div class="card-body pt-5">
                                                    <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-4">
                                                        <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-4 px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                                    </div>
                                                    <p class="mb-0"><?= get_field('descricao_breve') ?></p>
                                                </div>
                                                <div class="card-footer bg-transparent">
                                                    <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="<?= get_the_permalink() ?>"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                                </div>
                                            </div>
                                        </div>

                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center position-relative">
                <div class="w-50 position-absolute center-center text-center text-lg-start">
                    <h2 class="text-white ">Jogamos luz na sua operação com <strong class="fw-bold">Dados em tempo real!</strong></h2>
                    <a href="#contato" class="btn btn-secondary rounded-pill mt-4">QUERO CONHECER</a>
                </div>
                <img class="img-fluid w-100 mb-4 mb-lg-0" src="<?= get_template_directory_uri() ?>/public/imgs/fx-data-square.svg" alt="FX Data">
                <img style="right: -45%;" class="w-100 position-absolute bottom-0 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/public/imgs/tablet-fxdata.png" alt="FX Data">
            </div>
            <div class="col-lg-4 offset-lg-2 d-flex align-items-center">
                <div>

                    <div class="card mb-2 rounded-3 shadow-sm-lg border-0">
                        <div class="card-body d-flex">
                            <div>
                                <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-sass.svg" alt="Plataforma SAAS">
                            </div>

                            <div>
                                <h3 class="text-blue-500 text-uppercase h5 fw-bolder">PLATAFORMA SAAS</h3>
                                <h4 class="lead mb-0 flex-shrink-1">Para visualizar todos os indicadores em tempo real pela web ou pelo app</h4>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-2 rounded-3 shadow-sm-lg border-0">
                        <div class="card-body d-flex">
                            <div>
                                <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-agil.svg" alt="Implementação ágil">
                            </div>

                            <div>
                                <h3 class="text-blue-500 text-uppercase h5 fw-bolder">IMPLEMENTAÇÃO ÁGIL</h3>
                                <h4 class="lead mb-0 flex-shrink-1">Integração via API e sistemas BI</h4>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-2 rounded-3 shadow-sm-lg border-0">
                        <div class="card-body d-flex">
                            <div>
                                <img class="flex-grow-0 me-2" width="68" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-multiplataforma.svg" alt="Multiplataformas">
                            </div>

                            <div>
                                <h3 class="text-blue-500 text-uppercase h5 fw-bolder">MULTIPLATAFORMAS</h3>
                                <h4 class="lead mb-0 flex-shrink-1">Todos os dispositivos podem ser acessados para garantir precisão dos dados</h4>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
</section>

<section class="pt-5 pb-2 d-xxl-none">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="text-blue-900 fw-bold">Garantindo a <span class="text-blue-500">segurança dos dados</span> da sua organização</h2>
            </div>
            <div class="col-lg-6">
                <img class="w-100 img-fluid mb-4" src="<?= get_template_directory_uri() ?>/public/imgs/fxdata-seguranca-dados.jpg" alt="FX Data - Proteção de Dados">
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled ps-2">
                    <li class="d-flex text-blue-900 align-items-center py-1">
                        <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-armazenamento-nuvem-fx-data.svg" alt="Armazenamento de dados na nuvem"></div><span class="lead">Armazenamento de dados na nuvem</span>

                    </li>
                    <li class="d-flex text-blue-900 align-items-center py-1">
                        <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-conformidade-lgpd-fx-data.svg" alt="Atuação em conformidade com a LGPD"></div><span class="lead">Atuação em conformidade com a LGPD
                        </span>

                    </li>
                    <li class="d-flex text-blue-900 align-items-center py-1">
                        <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-dados-criptografados-fx-data.svg" alt="Dados criptografados e tráfego em rede segura"></div><span class="lead">Dados criptografados e tráfego em rede segura
                        </span>

                    </li>
                    <li class="d-flex text-blue-900 align-items-center py-1">
                        <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-politicas-internas-fx-data.svg" alt="Políticas internas de segurança"></div><span class="lead">Políticas internas de segurança
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 d-none d-xxl-block">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-blue-900 fw-bold">Garantindo a <span class="text-blue-500">segurança dos dados</span> da sua organização</h2>
            </div>

            <div class="col-12 position-relative">
                <div style="left: 0; top: 0; margin-top: 2.3rem" class="w-100 h-100 row position-absolute pt-5">
                    <div style="right: 30px; top: 50px; width: 64px" class="position-absolute">
                        <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/public/imgs/icon-cadeado-fx-data.svg" alt="FX Data Segurança de Dados">
                    </div>

                    <div class="col-6 offset-6">
                        <ul class="list-unstyled ps-5">
                            <li class="d-flex text-white align-items-center py-1">
                                <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-armazenamento-nuvem-fx-data.svg" alt="Armazenamento de dados na nuvem"></div><span class="lead">Armazenamento de dados na nuvem</span>

                            </li>
                            <li class="d-flex text-white align-items-center py-1">
                                <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-conformidade-lgpd-fx-data.svg" alt="Atuação em conformidade com a LGPD"></div><span class="lead">Atuação em conformidade com a LGPD
                                </span>

                            </li>
                            <li class="d-flex text-white align-items-center py-1">
                                <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-dados-criptografados-fx-data.svg" alt="Dados criptografados e tráfego em rede segura"></div><span class="lead">Dados criptografados e tráfego em rede segura
                                </span>

                            </li>
                            <li class="d-flex text-white align-items-center py-1">
                                <div class="me-2"><img width="64" src="<?= get_template_directory_uri() ?>/public/imgs/icon-politicas-internas-fx-data.svg" alt="Políticas internas de segurança"></div><span class="lead">Políticas internas de segurança
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <img class="w-100 img-fluid" src="<?= get_template_directory_uri() ?>/public/imgs/fx-data-seguranca-de-dados.jpg" alt="FX Data - Proteção de Dados">
            </div>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-blue-900 fw-bold">Depoimentos</h2>
            </div>

            <div class="col-12">
                <div class="fx-testomonials-slider">


                    <?php

                    $args = [
                        'post_type' => 'depoimentos'
                    ];

                    $query = new WP_Query($args);

                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

                    ?>

                            <div class="mb-5 d-flex flex-column px-2 h-100">

                                <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-start ms-3" width="70" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-quote.svg" alt="FX Go Analytics">

                                <div class="card bg-white flex-grow-1 rounded-3 shadow-sm position-relative mb-4">

                                    <div class="card-body pt-5 pb-3">

                                        <div class="no-margin"><?= get_the_content() ?></div>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center">
                                    <?php
                                    $img = get_field('foto')
                                    ?>
                                    <img class="rounded-circle align-self-start me-2" width="78" src="<?= $img['url'] ?>" alt="<?= get_the_title() ?>">
                                    <div>
                                        <h3 class="text-blue-500 fw-bold h5 mb-1"><?= get_the_title() ?></h3>
                                        <h4 class="h6"><?= get_field('cargo') ?></h4>
                                    </div>

                                </div>
                            </div>

                    <?php endwhile;
                    endif; ?>


                </div>
            </div>

        </div>
    </div>
</section>

<?php
global $post;

$args = [
    'post_type' => 'blog',
    'posts_per_page' => 3,
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-blue-900 fw-bold text-center mb-5">Publicações recentes</h2>
                </div>

                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <article class="card rounded-3 overflow-hidden shadow-sm h-100">
                            <div class="card-body p-0">

                                <?php
                                $img =  get_the_post_thumbnail_url('', 'publications-thumb');
                                ?>

                                <a href="<?= get_the_permalink() ?>"><img class="img-fluid hover-opacity" src="<?= $img ?>" alt="Título"></a>

                                <div class="pt-4">
                                    <div class="card-body">
                                        <!-- <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <nav>
                                                        <ul class="list-unstyled mb-0">
                                                            <li><a class="badge btn bg-secondary text-decoration-none fs-6 fw-normal mb-2" href="#">Categoria</a></li>
                                                        </ul>
                                                    </nav>
                                                    <span class="fs-6 text-muted text-gray-500 fw-light mb-2"><?= get_the_date('d/m/Y') ?></span>
                                                </div> -->

                                        <h3 class="h4 mb-4" style="font-weight: 600;"><a class="text-blue-900 text-decoration-none hover-blue-500 transition-all" href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></h3>
                                    </div>


                                    <div class="card-footer bg-transparent">
                                        <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="<?= get_the_permalink() ?>"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                    </div>

                                </div>
                            </div>

                        </article>
                    </div>
                <?php endwhile; ?>

                <div class="col-12 text-center py-2 mb-5">
                    <a class="btn btn-primary rounded-pill" href="<?= get_post_type_archive_link('blog') ?>">VER MAIS</a>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('template_parts/form', 'footer'); ?>


<?php endif; ?>



<?php
get_footer();
