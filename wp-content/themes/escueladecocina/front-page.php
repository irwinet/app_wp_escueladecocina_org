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

    <div class="container">
        <section class="nosotros mt-5">
            <h2 class="text-center mb-5 separador">
                ¿Porqué estudiar con nosotros?
            </h2>

            <div class="row">
                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_chef.png" alt="icono chef" class="img-fluid mb-3">
                    <h3>Chef's Especialistas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, reiciendis voluptatibus placeat fugit ea quos eius saepe sapiente iure! Possimus unde modi quod consequatur illum asperiores magnam odit praesentium voluptatum?</p>
                </div>

                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_vino.png" alt="icono vino" class="img-fluid mb-3">
                    <h3>Incluye todo sobre Bebidas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, reiciendis voluptatibus placeat fugit ea quos eius saepe sapiente iure! Possimus unde modi quod consequatur illum asperiores magnam odit praesentium voluptatum?</p>
                </div>

                <div class="col-md-4 text-center informacion">
                    <img src="img/icono_menu.png" alt="icono menu" class="img-fluid mb-3">
                    <h3>Siempre Actualizado</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, reiciendis voluptatibus placeat fugit ea quos eius saepe sapiente iure! Possimus unde modi quod consequatur illum asperiores magnam odit praesentium voluptatum?</p>
                </div>
            </div>
        </section>
    </div>

    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3">Próximas Clases</h1>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase1.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Italiana para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase2.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Mexicana para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase3.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Peruana para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase4.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Arabe para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase5.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Chilena para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="img/clase6.jpg" class="card-img-top">

                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">24/11/2024 18:00 hrs</p>
                            <span class="badge badge-secondary p-2">$300</span>
                        </div>

                        <div class="card-body">
                            <h3 class="card-title">Comida Argentina para principiantes</h3>
                            <p class="card-subtitle mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, nisi.
                            </p>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis natus consequuntur nihil similique saepe magnam mollitia, accusantium adipisci in reiciendis!
                            </p>
                            <a href="clase.html" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div>
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