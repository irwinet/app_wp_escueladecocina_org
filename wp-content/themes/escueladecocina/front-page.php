<!-- Viene desde el archivo: header.php -->
<?php get_header(); ?> 

<?php while(have_posts()): the_post(); ?>
<!-- <?php echo get_the_ID(); ?> -->

<!-- <?php 
    $id_home = get_option('page_on_front');
    echo $id_home;
?> -->

    <div class="container-fluid imagenes-principales">
        <div class="row imagen-superior imagen">
            <div class="col-md-6 bg-primary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                            <?php echo get_post_meta(get_the_ID(), 'edc_homepage_text_superior_1', true); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_1', true); ?>);">

            </div>
        </div>

        <div class="row imagen-inferior imagen">
            <div class="col-md-6 bg-secondary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center py-3">
                            <?php echo get_post_meta(get_the_ID(), 'edc_homepage_text_superior_2', true); ?>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum harum temporibus eaque repudiandae nulla adipisci?</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum harum temporibus eaque repudiandae nulla adipisci?</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 imagen-fondo" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_superior_2', true); ?>);">
                
            </div>
        </div>
    </div>

    <?php 
        $nosotros = new WP_Query('pagename=nosotros');
        while($nosotros->have_posts()): $nosotros->the_post();
            get_template_part('template', 'parts/iconos');
        endwhile; wp_reset_postdata(); // Reiniciar el query
    ?>

    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3">Próximas Clases</h1>

        <div class="container">
            <div class="row">
                <?php 
                    $opciones = get_option('edc_theme_options');
                    // echo "<pre>";
                    // var_dump($opciones); // Para ver las opciones del theme
                    // echo "</pre>";
                    if(isset($opciones['numero_clases'])){
                        $clases =  (int)$opciones['numero_clases'];
                    } else {
                        $clases = 3; // Valor por defecto si no se ha configurado
                    }
                    
                    edc_query_cursos($clases); 
                ?>
            </div>
            <div class="row justify-content-end">
                <div class="col-sm-5 col-md-3">
                    <a href="<?php echo get_permalink(get_page_by_title('Próximas Clases')); ?>" class="btn btn-primary d-block">Ver Todas las Clases</a>
                </div>
            </div>
        </div>
    </section>

    <!-- <?php printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true)); ?> -->

    <div class="licenciatura" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'edc_homepage_imagen_licenciatura', true); ?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="contenido text-light text-center">
                        <p><?php echo get_post_meta(get_the_ID(), 'edc_homepage_text_licenciatura', true); ?></p>
                        <?php 
                            $contacto = get_page_by_title('Contacto');
                            // echo "<pre>";
                            // var_dump($contacto);                        
                            // echo "</pre>";                        
                        ?>
                        <a href="<?php echo get_permalink($contacto->ID); ?>" class="btn btn-primary text-uppercase">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
<!-- Viene desde el archivo: footer.php -->