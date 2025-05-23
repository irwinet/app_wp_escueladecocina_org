    <footer class="footer p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <nav class="nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left">
                            <a href="nosotros.html" class="nav-link">Nosotros</a>
                            <a href="blog.html" class="nav-link">Blog</a>
                            <a href="clases.html" class="nav-link">Clases</a>
                            <a href="galeria.html" class="nav-link">Galería</a>
                            <a href="contacto.html" class="nav-link">Contacto</a>
                        </nav> -->

                        <?php 
                            $args = array(
                                'menu_class' => 'nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left', // ul
                                'theme_location' => 'menu_principal'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <p class="text-center text-md-right copyright mt-4 mt-md-0">Todos los derechos reservados <?php echo date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Viene desde functions: edc_scripts -->
        <?php wp_footer(); ?>
    </body>
</html>