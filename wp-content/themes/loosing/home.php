<?php get_header(); ?>

        <!-- MAIN -->

        <main>

            <!-- BLOG -->

            <section id="blog">

                <header id="intro">

                    <h1>Blog <span>mind and copy</span></h1>
                    <p>A truly fun and rewarding compilation of freak stuff written and written by myself, the author.</p>

                </header>

                <?php while ( have_posts() ) : the_post(); ?>

                    <article>

                        <header>

                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <a class="button mini" href="<?php the_permalink(); ?>">Wanna read more</a>

                        </header>

                        <figure>

                            <a href="blog-the-usgs-collection-now-at-moma.html"><img src="images/placeholder-square.png" alt="Very cool and SEO friendly description"></a>

                        </figure>

                    </article>

                <?php endwhile; ?>


            </section>

        </main>







<?php get_footer(); ?>