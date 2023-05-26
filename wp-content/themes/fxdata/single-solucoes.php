<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

        <section class="d-xl-none">
            <div class="container-fluid bg-gradient-blue-mobile">
                <div class="row py-5 mb-5">
                    <div class="col-12">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 text-center text-sm-lef">
                                    <div class="pe-4">
                                        <div class="text-blue-900 fw-bold lh-sm h4 mb-4">
                                            <span class="d-inline-block">FX</span> <span class="border border-2 border-blue-900 rounded-pill px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                        </div>
                                        <div class="text-white mb-4"><?= get_the_content() ?>
                                        </div>
                                        <ul class="list-unstyled">

                                            <?php $i = 0;
                                            if (have_rows('destaques')) : while (have_rows('destaques')) : the_row();
                                                    $i++; ?>

                                                    <li class="mx-2 d-flex align-items-center mb-2">
                                                        <div class="product-feature-container-icon mb-2 flex-shrink-0">
                                                            <span class="product-feature-number"><?= $i ?></span>
                                                            <?php
                                                            $img = get_sub_field('imagem')
                                                            ?>
                                                            <img class="img-fluid" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                                                        </div>
                                                        <div class="text-white ms-4 flex-grow-1">
                                                            <h2 class="h6 text-start fw-bold mb-0 text-uppercase"><?= get_sub_field('titulo') ?></h2>
                                                            <p class="text-start"><?= get_sub_field('descricao') ?></p>
                                                        </div>
                                                    </li>
                                            <?php endwhile;
                                            endif; ?>

                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <?php
                                    $img = get_field('imagem_principal')
                                    ?>
                                    <img class="img-fluid" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="d-none d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0 pb-5">
                        <div class="position-relative">

                            <img class="img-fluid position-relative" src="<?= get_template_directory_uri() ?>/public/imgs/bg-main-banner-fxdata.jpg" alt="FX Data fundo do banner">

                            <div class="container position-absolute top-0 left-center">
                                <div class="row">
                                    <div class="col-xl-5 offset-xl-1 d-flex pt-4">

                                        <div class="pe-4">
                                            <div class="text-blue-900 fw-bold lh-sm h4 mb-4">
                                                <span class="d-inline-block">FX</span> <span class="border border-2 border-blue-900 rounded-pill px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                            </div>
                                            <div class="text-white mb-4"><?= get_the_content() ?>
                                            </div>
                                            <ul class="list-unstyled">

                                                <?php $i = 0;
                                                if (have_rows('destaques')) : while (have_rows('destaques')) : the_row();
                                                        $i++; ?>

                                                        <li class="mx-2 d-flex align-items-center mb-2">
                                                            <div class="product-feature-container-icon mb-2 flex-shrink-0">
                                                                <span class="product-feature-number"><?= $i ?></span>
                                                                <?php
                                                                $img = get_sub_field('imagem')
                                                                ?>
                                                                <img class="img-fluid" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                                                            </div>
                                                            <div class="text-white ms-4 flex-grow-1">
                                                                <h2 class="h6 text-left fw-bold mb-0 text-uppercase"><?= get_sub_field('titulo') ?></h2>
                                                                <p><?= get_sub_field('descricao') ?></p>
                                                            </div>
                                                        </li>
                                                <?php endwhile;
                                                endif; ?>

                                            </ul>

                                        </div>

                                    </div>
                                    <div class="col-xl-6 pt-2 mt-5 position-relative">
                                        <img class="img-fluid bg-square-product-base" src="<?= get_template_directory_uri() ?>/public/imgs/bg-square-base-fxdata.svg" alt="FX Data quadrado">
                                        <div class="position-absolute center-center w-100 pt-5">
                                            <div class="d-flex flex-row justify-content-center mb-4">

                                                <!-- <a class="btn btn-primary btn-white fw-bold mb-0" href="#">AGENDAR APRESENTAÇÃO</a> -->

                                            </div>
                                            <?php
                                            $img = get_field('imagem_principal')
                                            ?>
                                            <img class="img-fluid pb-5 mb-3" src="<?= $img['url'] ?>" alt="<?= $img['alt'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div style="max-width: 300px;" class="text-center position-relative d-inline-block">
                            <div class="w-75 position-absolute center-center">
                                <h2 class="text-white fw-bold">Dashboard simples e intuitivo</h2>
                                <a href="#contato" class="btn fw-bold btn-secondary rounded-pill mt-4">QUERO CONHECER</a>
                            </div>
                            <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/public/imgs/fx-data-square.svg" alt="FX Data">
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/public/imgs/dashboard-simples-intuitivo.png" alt="Dashboard simples e intuitivo">
                    </div>
                </div>
            </div>
        </section>

        <section class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 position-relative">
                        <img style="width: 90%; margin-left: 10%" class="img-fluid" src="<?= get_template_directory_uri() ?>/public/imgs/dashboard-simples-intuitivo.png" alt="Dashboard simples e intuitivo">

                        <div style="top: 0; max-width: 300px;" class="text-center position-absolute">
                            <div class="w-75 position-absolute center-center text-start" style="margin-left: 20px;">
                                <h2 class="text-white fw-bold">Dashboard simples e intuitivo</h2>
                                <a href="#contato" class="btn fw-bold btn-secondary rounded-pill mt-4">QUERO CONHECER</a>
                            </div>
                            <img class="img-fluid w-100" src="<?= get_template_directory_uri() ?>/public/imgs/fx-data-square.svg" alt="FX Data">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-light py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="col-12">
                            <h2 class="text-blue-900 fw-bold mb-5 text-center text-lg-start">Implementação ágil e fácil em apenas <span class="text-blue-500">3 passos</span></h2>
                            <ul class="list-unstyled">

                                <li class="d-flex mb-4 align-items-start"><img class="flex-shrink-0" width="74" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-analise-planejamento.svg" alt="Análise e Planejamento">
                                    <div class="ms-3">
                                        <h3 class="text-blue-500 fw-bold h6">ANÁLISE E PLANEJAMENTO</h3>
                                        <p>Mapeamento da estrutura física e de indicadores mais importantes para gestão do negócio</p>
                                    </div>
                                </li>

                                <li class="d-flex mb-4 align-items-start"><img class="flex-shrink-0" width="74" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-implementacao.svg" alt="Análise e Planejamento">
                                    <div class="ms-3">
                                        <h3 class="text-blue-500 fw-bold h6">IMPLEMENTAÇÃO</h3>
                                        <p>Técnicos da FX realizam o setup, necessitando apenas de acesso à internet e ponto de energia elétrica</p>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-start"><img class="flex-shrink-0" width="74" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fxdata-parametrizacao.svg" alt="Análise e Planejamento">
                                    <div class="ms-3">
                                        <h3 class="text-blue-500 fw-bold h6">PARAMETRIZAÇÃO</h3>
                                        <p>Plataforma FX coleta dados e cria parâmetros comparativos personalizados para a necessidade do seu negócio</p>
                                    </div>
                                </li>

                            </ul>
                            <p class="text-blue-500 lead mb-5 text-center text-md-start"><strong>E pronto!</strong> Sua empresa já pode acessar os melhores indicadores de performance da loja em tempo real e por meio de qualquer dispositivo.</p>
                            <div class="text-center text-md-start mb-5 mb-md-0">
                                <a href="#contato" class="btn rounded-pill btn-primary">ENTRAR EM CONTATO</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7 text-center text-md-start">
                        <img class="img-fluid" src="<?= get_template_directory_uri() ?>/public/imgs/fxdata-implementacao-agil-facil.png" alt="FX Data Implementação ágil e fácil">
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

        <section class="pt-5 overflow-hidden pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="text-blue-900 fw-bold mb-4">Conheça outras soluções</h2>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-12 px-5 px-sm-0">
                    <div class="container position-relative container-features-blue bg-gradient-blue rounded-5 pb-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <div class="fx-features-slider-single">
                                        <?php
                                        global $post;

                                        $args = [
                                            'post_type' => 'solucoes',
                                            'post__not_in'  => [$post->ID]
                                        ];

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                                                <div class="mb-4 d-flex flex-column px-2 h-100">

                                                    <?php $img = get_field('icone'); ?>

                                                    <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= $img['url'] ?>" alt="<?= get_the_title() ?>">

                                                    <div class="card bg-white rounded-3 shadow-sm h-100 w-100 position-relative">

                                                        <div class="card-body pt-5" style="width: 300px">
                                                            <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-0">
                                                                <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-4 px-2 py-1 d-inline-block text-uppercase"><?= get_field('nome_da_solucao') ?></span>
                                                            </div>

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

        <section class="pt-5 mt-5 opacity-50 mb-5 pb-5">
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

        <section class="pt-3 mt-5 opacity-50 mb-5 pb-5">
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

        <?php get_template_part('template_parts/form', 'footer'); ?>

<?php endwhile;
endif; ?>

<?php
get_footer();
