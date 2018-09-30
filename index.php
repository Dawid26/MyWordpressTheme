<?php get_header(); ?>


<div class="wrapper">
    <section class="portfolio">

        <?php 
     
        if ( have_posts() ) {
            while ( have_posts() ) {
               
                
                
                the_post(); ?>
        <div>
            <h2>
                <?php the_title(); ?>
            </h2>
            <?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>

            <?php the_content(); ?>
        </div>
        <?php }
        }
        ?>


    </section>

    <?php get_footer(); ?>
    </body>

    </html>
