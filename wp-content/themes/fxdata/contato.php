<?php
/* Template Name: Contato */
get_header();
?>

<section class="container pt-5">

    <div class="row">
        <div class="col-12">
            <h1 class="text-blue-900 mb-4">Contato</h1>
        </div>
    </div>

</section>

<section class="container pb-5">
    <div class="row">
        <div class="col-xl-5 col-md-6 mb-4 mb-md-0" data-aos="fade-right">
            <div class="card card-hover rounded-3 shadow-sm mb-3">
                <div class="card-body d-flex align-items-start">
                    <i class="bx bx-envelope fs-3 bg-gray-400 text-white d-inline-block rounded-circle p-3"></i>
                    <div class="ps-4">
                        <h3 class="h4 pb-1 mb-2" style="font-weight: 500;">Envie um e-mail</h3>
                        <p class="pb-1 mb-2">Fique à vontade para falar conosco por e-mail. Responderemos o mais rápido possível.</p>
                        <a href="#contato" class="btn btn-link fs-base px-0 align-items-center d-flex text-red">
                            Enviar uma mensagem
                            <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card card-hover rounded-3 shadow-sm mb-3">
                <div class="card-body d-flex align-items-start">
                    <i class="bx bx-phone-call fs-3 bg-gray-400 text-white d-inline-block rounded-circle p-3"></i>
                    <div class="ps-4">
                        <h3 class="h4 pb-1 mb-2" style="font-weight: 500;">Fale conosco</h3>
                        <p class="pb-1 mb-2">Ligue pra gente, será um prazer atendê-lo</p>
                        <a href="tel:112858-5920" class="btn btn-link fs-base px-0 align-items-center d-flex text-red">(11) 2858-5920</a>
                    </div>
                </div>
            </div>
            <div class="card card-hover rounded-3 shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <i class="bx bx-map fs-3 bg-gray-400 text-white d-inline-block rounded-circle p-3"></i>
                    <div class="ps-4">
                        <h3 class="h4 pb-1 mb-2" style="font-weight: 500;">Visite-nos</h3>
                        <p class="pb-1 mb-2">R. Cel. Joaquim Ferreira Lobo, 357 - São Paulo</p>
                        <a target="_blank" href="https://goo.gl/maps/BW2i8uKrwytFU9cz9" class="btn btn-link fs-base px-0 align-items-center d-flex text-red">
                            Ver no Google Maps
                            <i class="bx bx-right-arrow-alt fs-4 ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-xl-1" data-aos="fade-left">
            <div class="rounded-3 overflow-hidden h-100 shadow-sm border border-gray">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.295842369301!2d-46.68516408493043!3d-23.593720684666803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce574f55b83d8f%3A0xfef96d90d762528e!2sFX%20Retail%20Analytics!5e0!3m2!1spt-BR!2sbr!4v1673384035283!5m2!1spt-BR!2sbr" width="100%" style="border:0; height: 100%; min-height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</section>

<?php get_template_part('template_parts/form', 'footer'); ?>

<?php
get_footer();
