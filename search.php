<?php
/*
Estore Template Search
*/
get_header();
?>

    <div class="background-plashka bg-right-top-grey cat"></div> 
    <div class="background-plashka bg-right-six-grey"></div>

    <section class="hero-section services">
        <div class="container services__cont">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>  
            
            <div class="types__bg services__bg"></div>

                <?php if ( have_posts() ) : ?>               

                    <h1 class="avtopark__heading services__heading">
                        <?php echo $wp_query->found_posts; ?> 
                        <?php _e( 'результатов найдено для', 'locale' ); ?>: "<?php the_search_query(); ?>"
                    </h1> 
                    
                    <article class="services__article services-article row">
                    
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation(); ?>
                    </article>

                <?php else :

                    get_template_part( 'template-parts/content', 'none' );
                ?>
                            

                <?php endif;
                ?>

            </div>
        </div>
    </section>

<?php

get_footer(); ?>