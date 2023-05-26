<?php
get_header();
?>

<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-blue-500">Parece que essa página não existe.</h1>
                <p class="lead fw-normal">Que tal acessar o nosso site e descobrir como jogar luz na operação da sua loja física?</p>
                <a class="btn btn-lg btn-primary rounded-pill" href="<?= get_home_url() ?>">SABER MAIS</a>
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

<section class="py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-blue-900 fw-bold mb-4">Conheça nossas soluções de Ponta a Ponta</h2>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="container position-relative container-features-blue bg-gradient-blue rounded-5 pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="fx-features-slider">

                                <div class="mb-5 d-flex flex-column px-2 h-100">

                                    <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fx-go-analytics.svg" alt="FX Go Analytics">

                                    <div class="card bg-white rounded-3 shadow-sm h-100 position-relative">

                                        <div class="card-body pt-5">
                                            <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-4">
                                                <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-pill px-2 py-1 d-inline-block">GO ANALYTICS</span>
                                            </div>
                                            <p class="mb-0">Entrantes e passantes,
                                                classificação do público (adultos x crianças) e horários de maior movimentação.</p>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="#"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 d-flex flex-column px-2 h-100">

                                    <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fx-heat-map.svg" alt="FX Go Analytics">

                                    <div class="card bg-white rounded-3 shadow-sm h-100 position-relative">

                                        <div class="card-body pt-5">
                                            <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-4">
                                                <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-pill px-2 py-1 d-inline-block">HEAT MAP</span>
                                            </div>
                                            <p class="mb-0">Trajeto do cliente, tempo de permanência e espaços com maior movimentação.</p>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="#"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 d-flex flex-column px-2 h-100">

                                    <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fx-cashier-line.svg" alt="FX Go Analytics">

                                    <div class="card bg-white rounded-3 shadow-sm h-100 position-relative">

                                        <div class="card-body pt-5">
                                            <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-4">
                                                <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-pill px-2 py-1 d-inline-block">CASHIER LINE</span>
                                            </div>
                                            <p class="mb-0">Tempo de espera nas filas, horários de pico e taxas de conversão.</p>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="#"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5 d-flex flex-column px-2 h-100">

                                    <img style="transform: translateY(50%); z-index: 1;" class="position-relative align-self-center" width="90" src="<?= get_template_directory_uri() ?>/public/imgs/icon-fx-go-analytics-street.svg" alt="FX Go Analytics">

                                    <div class="card bg-white rounded-3 shadow-sm h-100 position-relative">

                                        <div class="card-body pt-5">
                                            <div style="min-height: 100px;" class="text-blue-500 fw-bold lh-sm h4 mb-4">
                                                <span class="d-inline-block text-blue-900 ps-2">FX</span><br /><span class="border border-2 border-blue-500 rounded-4 px-2 py-1 d-inline-block">GO ANALYTICS STREET</span>
                                            </div>
                                            <p class="mb-0">Atividade e comportamento do público no entorno do estabelecimento.</p>
                                        </div>
                                        <div class="card-footer bg-transparent">
                                            <a class="btn px-0 text-blue-500 w-100 d-flex justify-content-between" href="#"><span>Ver detalhes</span><img width="24" src="<?= get_template_directory_uri() ?>/public/imgs/icon-arrow-right.svg" alt="Seta para direita"></a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
