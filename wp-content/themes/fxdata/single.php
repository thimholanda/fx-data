<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
?>

        <section class="pt-5 py-md-5 fx-header-blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 px-0">

                        <div class="container position-relative">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h1 class="text-blue-900 fw-bold mb-4"><?= get_the_title() ?></h1>
                                    <div class="d-flex align-item-center">
                                        <div class="d-flex align-items-center">
                                            <span class=" text-blue-500 border-1 border-blue-500 mb-4 mb-md-0">Compartilhe:</span>
                                        </div>
                                        <div>
                                            <nav>
                                                <ul class="list-unstyled d-flex mb-0">
                                                    <?php
                                                    $url = get_permalink();
                                                    ?>
                                                    <li style="border-right: 1px solid #bbb;"><a target="_blank" class="text-gray btn btn-lg py-0 hover-opacity" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>"><i class=" fa-brands fa-linkedin"></i></a></li>
                                                    <li style="border-right: 1px solid #bbb;"><a target="_blank" class="text-gray btn btn-lg py-0 hover-opacity" href="http://www.facebook.com/sharer/sharer.php?u=$url"><i class="fa-brands fa-facebook"></i></a></li>
                                                    <li style="border-right: 1px solid #bbb;"><a target="_blank" class="text-gray btn btn-lg py-0 hover-opacity" href="https://twitter.com/intent/tweet?url=<?= $url ?>"><i class="fa-brands fa-twitter"></i></a></li>
                                                    <li><a target="_blank" class="text-gray btn btn-lg py-0 hover-opacity" href="https://web.whatsapp.com/send?text=<?= $url ?>"><i class="fa-brands fa-whatsapp"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6 position-relative">
                                    <?php
                                    $img =  get_the_post_thumbnail_url('', 'publications-thumb');
                                    ?>
                                    <img class="img-fluid rounded-3 border border-2 border-blue-500" src="<?= $img ?>" alt="Título post">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </section>

        <?php
        global $post;

        $args = [
            'post_type' => 'blog',
            'posts_per_page' => -1,
            'post__not_in' => array($post->ID)
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <hr style="border-top: 2px solid black" class="border-blue-500">

            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-blue-900 fw-bold text-center mb-5">Você também vai gostar</h2>
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

                    </div>
                </div>
            </section>


        <?php endif; ?>



<?php endwhile;
endif; ?>

<?php
get_footer();
