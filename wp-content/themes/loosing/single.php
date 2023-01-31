<?php get_header(); the_post(); ?>
    <!-- MAIN -->

    <main>

        <!-- BLOG POST -->

        <article <?php post_class(); ?>>

            <header>

                <a class="button mini" href="<?php echo home_url('/blog/') ?>">Blog stuff</a>
                <h1><?php the_title(); ?></h1>
                <time datetime="<?php the_time ('d.m.Y'); ?>"><?php the_time ('d.m.Y'); ?></time>

            </header>

            <div>

                <div class="content">

                    <?php the_content(); ?>

                </div>

                <aside>

                    <figure id="post-thumbnail">

                        <?php the_post_thumbnail ( 'medium' ); ?>

                        <div class="previous-next">

                            <a class="previous" href="blog-the-usgs-collection-now-at-moma.html"><img src="<?php bloginfo('template_url'); ?>/images/icon-arrow-left.svg" alt="Previous Post"></a>
                            <a class="next" href="blog-the-usgs-collection-now-at-moma.html"><img src="<?php bloginfo('template_url'); ?>/images/icon-arrow-right.svg" alt="Next Post"></a>
                        
                        </div>
                    
                    </figure>

                    <?php dynamic_sidebar ( 'post-sidebar' ); ?>
                    

                </aside>

            </div>

            <div class="buttons">
                
                <a href="<?php echo home_url(); ?>" class="button">Enough reading! Pics!</a>
                <a href="<?php echo home_url('/blog/'); ?>" class="button mini">Wanna read more</a>

            </div>

        </article>

</main>
<?php get_footer() ?>