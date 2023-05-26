<?php
get_header();
?>

<section class="pt-5 pb-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-blue-900 mb-4">Publicações</h1>
            </div>
        </div>
        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="col-md-4 mb-4">
                        <article class="card rounded-3 overflow-hidden shadow-sm h-100">
                            <div class="card-body p-0">



                                <?php
                                $img =  get_the_post_thumbnail_url('', 'publications-thumb');
                                ?>

                                <a href="<?= get_the_permalink() ?>"><img class="img-fluid hover-opacity" src="<?= $img ?>" alt="<?= get_the_title() ?>"></a>

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

            <?php endwhile;
            endif; ?>

        </div>
    </div>
</section>


<?php
get_footer();
