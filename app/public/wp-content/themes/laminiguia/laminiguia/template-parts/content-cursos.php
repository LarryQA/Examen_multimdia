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
                <p class="By">Por <b><?php $disponible = get_post_meta(get_the_ID(), 'informacion_del_curso_autor-del-curso', true);
                                        echo $disponible ?>,</b> <?php $disponible = get_post_meta(get_the_ID(), 'informacion_del_curso_ocupacion', true);
                                                                    echo $disponible ?></p>
            </div>

            <ul class="barra-contenido">
                <li id="btn-info" class="li-activo">Información</li>
                <li id="btn-cont" class="li-norm">Contenido</li>
                <li>Comunidad</li>
                <li>Estudiantes</li>

            </ul>

            <div id = "cont-info" class="cont cont-active">
                <div class="Contenedor-texto" >

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

            </div> <!-- cont-info -->

            <div id = "cont-cont" class="cont">


            </div>  <!-- cont-cont -->



        </div>


    </div>

    <div class="barra-der">

        <div class="carito">

            <?php
            $desc = get_post_meta(get_the_ID(), 'informacion_del_curso_descuento', true);
            $precio = get_post_meta(get_the_ID(), 'informacion_del_curso_precio', true);

            if ($precio) {
                $precio_f =  ($desc > 0) ? $precio - ($precio * ($desc / 100)) : $precio;
                $signo = '$';
            } else {
                $precio_f = 'Gratis';
                $signo = null;
            }

            $precio_ant = ($desc > 0) ? $precio : null;
            ?>
            <div class="el_precio">
                <p>
                    USD
                    <?php
                    echo $precio_f;
                    ?>
                </p>
            </div>

            <div class="el_precio_ant">
                <p>$</p>
                <p id="id_descuento">
                    <?php
                    echo $precio_ant;
                    ?>
                </p>

                <div class="rayita">

                </div>

            </div>


        </div>



        <button id="btn-comprar" type="button">
            Comprar ahora
        </button>

        <div class="datos-generales">

            <div>
                <h2>Qué aprenderás</h2>
                <p>
                    <?php
                    $desc = get_post_meta(get_the_ID(), 'informacion_del_curso_resumen', true);
                    echo $desc
                    ?>
                </p>
            </div>

            <div>
                <h2>Este curso incluye:</h2>
                <ul class="lista-info">
                    <li>
                        <p>59 Lessons (9h 11m)</p>
                    </li>
                    <li>
                        <p>6 courses</p>
                    </li>
                    <li>
                        <p> <?php $disponible = get_post_meta(get_the_ID(), 'informacion_del_curso_disponible-en-la-app', true);
                            echo $disponible ?></p>
                    </li>
                    <li>
                        <p>Audio: <?php $audio = get_post_meta(get_the_ID(), 'informacion_del_curso_audio', true);
                                    echo $audio ?></p>
                    </li>
                    <li>
                        <p>Nivel: <?php $audio = get_post_meta(get_the_ID(), 'informacion_del_curso_dificultad-del-curso', true);
                                    echo $audio ?></p>
                    </li>
                </ul>

            </div>

            <div class="caja-cat">
                <h2>Categorías</h2>
                <span>
                    <?php
                    $arregloCat = get_the_category();
                    if ($arregloCat) {
                        foreach ($arregloCat as $cat) {
                    ?>
                            <a href="#"><span class="tag"><?php echo $cat->name ?></span></a>
                        <?php
                        }
                    } else {
                        ?>
                        <p>Curso sin categorizar</p>

                    <?php
                    }
                    ?>

                </span>

            </div>

            <div class="caja-cat">
                <h2>Etiquetas</h2>
                <span>
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                        foreach ($posttags as $tag) {
                    ?>

                            <a href="#"><span class="tag"><?php echo $tag->name ?></span></a>

                        <?php
                        }
                    } else {
                        ?>
                        <p>Curso no etiquetado</p>

                    <?php
                    }
                    ?>
                </span>

            </div>

        </div>

    </div>
</article><!-- #post-<?php the_ID(); ?> -->


<footer class="entry-footer">
    <?php laminiguia_entry_footer(); ?>
</footer><!-- .entry-footer -->