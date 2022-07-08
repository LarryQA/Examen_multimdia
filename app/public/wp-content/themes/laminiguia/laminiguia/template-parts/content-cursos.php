<article id="post-<?php the_ID(); ?>" <?php post_class("curso-wrap") ?>>




    <div class="contenido-lateral">
        <div class="seccion">
            <h2>Descubre</h2>

            <div class="location">
                <p>Cursos</p>
                <p>></p> <span>
                    <p><?php the_title() ?></p>
                </span>
            </div>


        </div>


        <div class="cuadro-lateral">

            <img class="imagen-grande" src="<?php the_post_thumbnail_url(); ?>" alt="Imagen">

            <div class="h1">

                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <h5 class="By">By Simon Shaw, Illustrator and 3D designer</h5>
            </div>

            <ul class="barra-contenido">
                <li class="im">Informacion</li>
                <li>Content</li>
                <li>Community</li>
                <li>Students</li>

            </ul>

            <div class="Contenedor-texto">

                <p> <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'laminiguia'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post(get_the_title())
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'laminiguia'),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </p>


            </div>

            <?php

            //If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>


        </div>


    </div>

    <div class="container">

        <button id="button" type="button">
            <h1> USD 199.00</h1>
            <h2>$250.00</h2>


        </button>




        <div class="carito" id="carito">

            <h4>Buy Now</h4>


        </div>

        <div lass="li" id="li"></div>
        <h5>What you'll learn</h5>
        <h5 class="By">Access to IBM Cloud modelling what is I was looking for and Aaron got me the solution.</h5>

        <div class="otro" id="otro"></div>



        <h1> This course includes:</h1>

        <ul>
            <li>100% Positive reviews (45)</li>
            <li>2167 students</li>
            <li>59 Lessons (9h 11m)</li>
            <li>6 courses</li>
            <li>70 downloads (70 files)</li>
            <li>Available from the app</li>
            <li>Audio: Spanish</li>
            <li>Level:</li>

        </ul>

    </div>





</article><!-- #post-<?php the_ID(); ?> -->
<footer class="entry-footer">
    <?php laminiguia_entry_footer(); ?>
</footer><!-- .entry-footer -->