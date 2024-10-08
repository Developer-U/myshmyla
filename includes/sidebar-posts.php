<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<!-- US -->
<?php
    if (get_locale() == 'en_US') {
?>

    <h3 class="mb-3 wp-block-heading">
        See more...
    </h3>

    <ul class="sidebar-posts row">
        <?php
        $arg_cat = array(
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'exclude'      => '',
            'include'      => '',
            'taxonomy'     => 'category',
        );
        $categories = get_categories( $arg_cat );        

        $arg_posts =  array(
            'orderby'      => 'rand',
            'order'        => 'DESC',
            'posts_per_page' => 6,
            'post_type' => 'works',
            'exclude'   => array(get_the_id()),
            'post_status' => 'publish',                   
        );
        $query = new WP_Query($arg_posts);                    
        
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <li class="row mb-3 align-items-center">
                <a href="<?php the_permalink(); ?>" class="sidebar-posts__image">
                    <img src="<?php the_post_thumbnail( 'widgetfull' );?>" class="menu-img" alt="">
                </a>

                <a class="col sidebar-posts__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; wp_reset_postdata();?> 
    </ul>

<!-- RU -->
<?php    
    } elseif (get_locale() == 'ru_RU') {
?>

    <h3 class="mb-3 wp-block-heading">
        У нас ещё много вкусного!
    </h3>

    <ul class="sidebar-posts row">
        <?php
        $arg_cat = array(
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'exclude'      => '',
            'include'      => '',
            'taxonomy'     => 'category',
        );
        $categories = get_categories( $arg_cat );     

        $arg_posts =  array(
            'orderby'      => 'rand',
            'order'        => 'DESC',
            'posts_per_page' => 6,
            'post_type' => 'works',
            'exclude'   => array(get_the_id()),
            'post_status' => 'publish',
        
        );
        $query = new WP_Query($arg_posts);                    
        
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <li class="row mb-3 align-items-center">
                <a href="<?php the_permalink(); ?>" class="sidebar-posts__image">
                    <img src="<?php the_post_thumbnail( 'widgetfull' );?>" class="menu-img" alt="">
                </a>

                <a class="col sidebar-posts__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; wp_reset_postdata();?> 
    </ul>
<?php
    }
?>