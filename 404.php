<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package estore
 */

get_header();
?>

    <div class="background-plashka bg-right-six-grey"></div>

    <section class="hero-section underfined">
        <div class="underfined__cont row align-items-end">
            <div class="underfined__left col-md-6 col-12">
                <h1 class="underfined__heading">
                    #404
                </h1>

                <p class="underfined__text">
                    <?php the_field('404_text', 'options'); ?>
                </p>
            </div>

            <figure class="underfined__image">
                <?php $imgNone = get_field('image_404', 'options'); ?>
                <img class="underfined__img" src="<?php echo esc_url($imgNone['url']); ?>" alt="<?php echo esc_attr($imgNone['alt']); ?>">
            </figure>
        </div>
    </section>

    <section class="types-404">
        <div class="types__bg"></div>

        <div class="container types__cont row align-items-center">
            <h2 class="types__heading col-5">
                <?php the_field('404_services_head', 'options'); ?>
            </h2>

            <p class="types__text col">ЦЕНА: от <b class="types__price"><?php the_field('404_services_price', 'options'); ?> ₽</b></p>
        </div>

        <?php get_template_part( 'template-parts/services', 'block' ); ?>

        <?php echo estore_services_tags_menu(); ?>
    </section>

<?php
get_footer();
