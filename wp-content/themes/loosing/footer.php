<!-- PREFOOTER -->

        <section id="prefooter">

            <div>

                <h2>Hey! Just blogged...</h2>
                
                <!--consulta-->
                <?php
                    $news = new WP_Query ( array
                    (
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ));
                ?>

                <!--inicio loop-->
                <?php while ( $news -> have_posts() ) : $news -> the_post(); ?>

                <article <?php post_class(); ?>>

                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <!--cuidao las comillas-->
                    <time datetime="<?php the_time ('d.m.Y'); ?>"><?php the_time ('d.m.Y'); ?></time>

                </article>

                <!--fin loop-->
                <?php endwhile; ?>

                <div class="buttons">
                    
                    <a href="<?php echo home_url ('/blog/'); ?>" class="button mini">More articles here</a>

                </div>

            </div>

        </section>

        <!-- FOOTER -->

        <footer>

        <?php bloginfo ( 'description' ); // Descripción corta del sitio. Previamente -> A project by Giuseppe Pepe ?>

            <?php wp_nav_menu ( array ( 'theme_location' => 'footer-left', 'container' => false, 'menu_class' => 'left' ) ); ?>

            <?php wp_nav_menu ( array ( 'theme_location' => 'footer-right', 'container' => false, 'menu_class' => 'right' ) ); ?>

        </footer>

        <?php wp_footer(); ?> <!-- siempre antes de cerrar body -->

    </body>

</html>