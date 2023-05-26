<!doctype html>
<html class="no-js" lang="">

<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="pt-BR">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light border-bottom ">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="<?= get_home_url() ?>"><img width="136" height="66" class="img-fluid" src="<?= get_template_directory_uri() ?>/public/imgs/fxdata.svg" alt="FX Data"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= get_home_url() ?>">HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SOLUÇÕES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php ?>
                            <?php
                            $args = [
                                'post_type' => 'solucoes'
                            ];

                            $query = new WP_Query($args);

                            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                                    <li><a class="dropdown-item text-uppercase" href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a></li>

                            <?php endwhile;
                            endif; ?>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_page_link(11) ?>">SOBRE NÓS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_page_link(13) ?>">CLIENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_post_type_archive_link('blog') ?>">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://hipartners.com.br/ipv/">IPV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= get_page_link(9) ?>">CONTATO</a>
                    </li>

                </ul>
                <ul class="navbar-nav navbar-nav-social">
                    <li class="nav-item-social">
                        <a class="nav-link" aria-current="page" target="_blank" href="https://www.instagram.com/fx_data/" alt="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="nav-item-social">
                        <a class="nav-link" aria-current="page" target="_blank" href="https://www.linkedin.com/company/fx-data/?originalSubdomain=br" alt="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <!-- <li class="nav-item-social">
                        <a class="nav-link" aria-current="page" href="#" alt="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </li> -->
                    <!-- <li class="nav-item-social">
                        <a class="nav-link" aria-current="page" href="#" alt="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <main>