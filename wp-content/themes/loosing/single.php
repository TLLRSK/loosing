<?php get_header(); the_post(); ?>
    <!-- MAIN -->

    <main>

        <!-- BLOG POST -->

        <article>

            <header>

                <a class="button mini" href="<?php echo home_url('/blog/') ?>">Blog stuff</a>
                <h1><?php the_title(); ?></h1>
                <time datetime="2022-11-25">25.11.2022</time>

            </header>

            <div>

                <div class="content">

                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed ultrices placerat at, vulputate metus vel arcu praesent vestibulum senectus est phasellus consequat morbi gravida, ultricies fermentum diam platea iaculis <a href="https://behance.net/" target="_blank">auctor habitant curae</a> accumsan non. Eleifend litora congue ultrices dapibus nec habitant purus egestas, tristique etiam facilisi montes magna eu arcu, auctor erat et primis justo sociis dictum. Varius vel magnis phasellus tempus vivamus sodales euismod, imperdiet eu lacinia auctor hac sociis tortor, commodo himenaeos mi vestibulum sapien metus.</p>
                    <p>Mi maecenas feugiat inceptos neque dui donec urna laoreet rhoncus malesuada quam, in fringilla est senectus sollicitudin bibendum cras risus fames conubia, hendrerit aliquam suspendisse tristique metus felis aptent elementum odio non. Erat neque quis felis nunc velit nullam, aenean lectus consequat sociosqu ultricies ligula arcu, viverra ridiculus suspendisse massa taciti venenatis, curabitur purus vel elementum lobortis. Auctor luctus inceptos magnis condimentum vulputate porttitor lacinia eros.</p>
                    <figure><img src="images/placeholder-landscape.png" alt="Very cool and SEO friendly description" class="post-image"></figure>
                    <p>Aliquam sem metus non dictumst inceptos platea nulla, vel fermentum facilisis mauris condimentum massa fringilla, blandit vestibulum convallis pulvinar diam imperdiet. Quisque posuere scelerisque accumsan proin integer ut etiam, commodo dictumst sollicitudin litora ac sed hendrerit pulvinar, vivamus varius natoque ad pretium torquent. Commodo ullamcorper faucibus senectus vehicula placerat elementum pulvinar magnis phasellus.</p>

                </div>

                <aside>

                    <figure id="post-thumbnail">

                        <img src="images/placeholder-square.png" alt="Very cool and SEO friendly description">

                        <div class="previous-next">

                            <a class="previous" href="blog-the-usgs-collection-now-at-moma.html"><img src="images/icon-arrow-left.svg" alt="Previous Post"></a>
                            <a class="next" href="blog-the-usgs-collection-now-at-moma.html"><img src="images/icon-arrow-right.svg" alt="Next Post"></a>
                        
                        </div>
                    
                    </figure>

                    <div class="widget widget-recent-entries">

                        <h4>Different articles</h4>

                        <ul>
                            <li><a href="blog-the-usgs-collection-now-at-moma.html">Celebrating the best of the best of Unsplash</a> <time datetime="2022-10-16">16.10.2022</time></li>
                            <li><a href="blog-the-usgs-collection-now-at-moma.html">Andy Warhol's exhibition is a Superpop whatever</a> <time datetime="2022-09-08">08.09.2022</time></li>
                        </ul>

                    </div>

                    <div class="widget widget-random">

                        <h4>Different authors</h4>

                        <ul>
                            <li><a href="https://behance.net/" target="_blank">Some article published on a very cool and really well curated blog</a> <time datetime="2022-09-22">22.09.2022</time></li>
                            <li><a href="https://behance.net/" target="_blank">Random writing off this site</a> <time datetime="2022-08-16">16.08.2022</time></li>
                            <li><a href="https://behance.net/" target="_blank">Lorem ipsum is always handy when you need to random</a> <time datetime="2022-07-14">14.07.2022</time></li>
                        </ul>

                    </div>

                </aside>

            </div>

            <div class="buttons">
                
                <a href="<?php echo home_url(); ?>" class="button">Enough reading! Pics!</a>
                <a href="<?php echo home_url('/blog/'); ?>" class="button mini">Wanna read more</a>

            </div>

        </article>

</main>
<?php get_footer() ?>