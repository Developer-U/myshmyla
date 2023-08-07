<?php
/*
Template Name: Главная страница
*/
get_header();
?>
    <?php get_template_part( 'template-parts/blocks/block-hero' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-about' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-restraunt-tabs' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-why-us' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-menu' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-specials' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-events' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-book-table' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-reviews' ); ?>

    <?php get_template_part( 'template-parts/blocks/block-contacts' ); ?>
<?php ?>

<?php
get_footer(); ?>