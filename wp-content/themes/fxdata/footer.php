<footer class="bg-gray-900 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid mb-4" width="122" src="<?= get_template_directory_uri() ?>/public/imgs/fxdata-white.svg" alt="FX Data">
                <h2 class="text-blue-500 h6 fw-bold mb-4">Renovando o varejo de hoje e reinventando o de amanhã</h2>
                <small class="text-white">© FX Data - todos os direitos reservados</small>
            </div>
            <div class="col-md-3 mb-4 ps-md-5">
                <nav>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="<?= get_home_url() ?>" alt="Home">Home</a></li>
                        <!-- <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="#" alt="Soluções">Soluções</a></li> -->
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="<?= get_page_link(11) ?>" alt="Sobre nós">Sobre nós</a></li>
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="<?= get_page_link(13) ?>" alt="Clientes">Clientes</a></li>
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="<?= get_post_type_archive_link('blog') ?>" alt="Blog">Blog</a></li>
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" target="_blank" href="https://hipartners.com.br/ipv/" alt="IPV">IPV</a></li>
                        <li class="mb-2"><a class="text-white text-decoration-none hover-opacity" href="<?= get_page_link(9) ?>" alt="Contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 mb-4">
                <nav>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="d-flex align-items-center text-decoration-none hover-opacity" target="_blank" href="https://www.instagram.com/fx_data/" alt="Instagram"><i class="fa-brands fa-instagram text-blue-500 d-block me-2"></i><span class="text-white d-block">Instagram</span></a></li>
                        <li class="mb-2"><a class="d-flex align-items-center text-decoration-none hover-opacity" target="_blank" href="https://www.linkedin.com/company/fx-data/?originalSubdomain=br" alt="LinkedIn"><i class="fa-brands fa-linkedin text-blue-500 d-block me-2"></i><span class="text-white d-block">LinkedIn</span></a></li>
                        <!-- <li class="mb-2"><a class="d-flex align-items-center text-decoration-none hover-opacity" href="#" alt="YouTube"><i class="fa-brands fa-youtube text-blue-500 d-block me-2"></i><span class="text-white d-block">YouTube</span></a></li> -->
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 mb-4">
                <nav>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="d-flex align-items-center text-decoration-none hover-opacity" href="tel:1128585920" alt="Instagram"><i class="fa-brands fa-whatsapp text-blue-500 d-block me-2"></i><span class="text-white d-block">+55 11 2858-5920</span></a></li>
                        <li class="mb-2"><a class="d-flex align-items-center text-decoration-none hover-opacity" href="mailto:contato@fxdata.com.br" alt="LinkedIn"><i class="fa-regular fa-envelope text-blue-500 d-block me-2"></i><span class="text-white d-block">contato@fxdata.com.br</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

</main>
<?php wp_footer(); ?>
</body>

</html>