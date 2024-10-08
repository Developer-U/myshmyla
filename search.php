<?php
/*
Estore Template Search
*/
get_header();
?>
    <section class="hero-section search-wrapper">
        <div class="container services__cont"> 
            <?php         
            $args = array(
                'post_type' => 'works',
                'post__not_in' => array(327),
            );
            if ( have_posts() ) : ?>               

                <h1 class="single-menu__title search-wrapper__title">
                    <?php echo $wp_query->found_posts; ?>
                    <!-- US -->
                    <?php
                        if (get_locale() == 'en_US') {
                    ?> 

                        <?php _e( 'results for', 'locale' ); ?>: "<?php the_search_query(); ?>"

                    <!-- RU -->
                    <?php    
                        } elseif (get_locale() == 'ru_RU') {
                    ?>

                        <?php _e( 'результатов найдено для', 'locale' ); ?>: "<?php the_search_query(); ?>"

                    <?php
                        }
                    ?>
                </h1> 
                                  
                <div class="search-list">
                
                    <?php
                    /* Start the Loop */
                    while ( have_posts($args) ) :
                        the_post($args);

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'search' );

                    endwhile;

                    wp_reset_postdata(); 
                     ?>
                </div> 

            <?php else :
                get_template_part( 'template-parts/content', 'none' );                                           

            endif;          

            ?>            
        </div>
    </section>

<?php

get_footer(); ?>