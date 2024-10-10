<?php
/*
 ** Block hero
 */
?>

<!-- ======= Hero Section ======= -->
<?php
global $wp_query;
$page_id = $wp_query->post->ID;
$hero_params = get_field('hero_params', $page_id);
$hero_params_en = get_field('hero_params_en', $page_id);
$front_page_hero_type = get_field('front_page_hero_type', $page_id);
?>

<!-- US -->
<?php
if (get_locale() == 'en_US') {
    ?>
    <?php if (is_front_page()):

        if ($front_page_hero_type == 'видео') { ?>
            <section id="hero" class="d-flex align-items-center">
                <video loop muted autoplay playsinline class="hero__mp" poster="<?php echo $hero_params['image']['url']; ?>">
                    <source src="<?php echo $hero_params['video']; ?>" type="video/mp4">
                </video>
            <?php } else { ?>
                <section id="hero" class="d-flex align-items-center page-hero"
                    style="background-image: url('<?php echo $hero_params['image']['url']; ?>');">
                <?php } ?>

                <div class="container position-relative text-center text-lg-start">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="mb-4"><?php echo $hero_params_en['title']; ?></h1>
                            <h2><?php echo $hero_params_en['sub-title']; ?></h2>

                            <div class="btns">
                                <?php if ($hero_params_en['menu-link']): ?>
                                    <a href="<?php echo $hero_params_en['menu-link']['url']; ?>" target="_blank"
                                        class="btn-menu md:mb-0 mb-3"><?php echo $hero_params_en['menu-title']; ?></a>
                                <?php endif;
                                if ($hero_params_en['menu-link-2']): ?>
                                    <a href="<?php echo $hero_params_en['menu-link-2']['url']; ?>" target="_blank"
                                        class="btn-book btn-menu md:mb-0 mb-3"><?php echo $hero_params_en['menu-title-2']; ?></a>
                                <?php endif;
                                ?>

                                <?php if (get_field('book-link_en', 'options')): ?>
                                    <a href="<?php the_field('book-link_en', 'options'); ?>"
                                        class="btn-book animated fadeInUp scrollto"><?php the_field('book-title_en', 'options'); ?></a>
                                <?php endif; ?>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (is_category()): ?>
            <?php
            $term = get_queried_object();
            $hero_cat_image_en = get_field('hero_cat_image_en', $term); ?>
            <?php if ($hero_cat_image_en): ?>
                <section id="hero" class="d-flex align-items-center page-hero"
                    style="background-image: url('<?php echo $hero_cat_image_en['url']; ?>');">
                <?php else: ?>
                    <section id="hero" class="d-flex align-items-center page-hero" style="background-color: #212121;">
                    <?php endif; ?>
                    <div class="container position-relative text-center text-lg-start">
                        <!-- breadcrumbs -->
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <?php
                                if (function_exists('yoast_breadcrumb')) {
                                    yoast_breadcrumb('<div class="breadcrumbs__list">', '</div>');
                                }
                                ?>
                            </div>
                        </div>
                        <!-- breadcrumbs end -->

                        <h1 class="single-menu__title mb-5">
                            <?php single_cat_title('', true); ?>
                        </h1>
                    </div>
                </section>
            <?php else: ?>
                <?php
                $hero_others_params = get_field('hero_others_params', $page_id);
                if ($hero_others_params['image']): ?>
                    <section id="hero" class="d-flex align-items-center other_hero"
                        style="background-image: url('<?php echo $hero_others_params['image']['url']; ?>');">
                    <?php else: ?>
                        <section id="hero" class="d-flex align-items-center other_hero" style="background-color: #212121;">
                        <?php endif; ?>
                        <div class="container position-relative text-center text-lg-start">
                            <!-- breadcrumbs -->
                            <div class="breadcrumbs">
                                <div class="breadcrumbs__container">
                                    <?php
                                    if (function_exists('yoast_breadcrumb')) {
                                        yoast_breadcrumb('<div class="breadcrumbs__list text-center">', '</div>');
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- breadcrumbs end -->

                            <h1 class="single-menu__title mb-5 text-center">
                                <?php if ($hero_others_params_en['title']): ?>
                                    <?php echo $hero_others_params_en['title']; ?>
                                <?php else: ?>
                                    <?php the_title(); ?>
                                <?php endif; ?>
                            </h1>
                        </div>
                    </section>
                <?php endif; ?>
                <!-- End Hero US-->

                <!-- RU -->

                <?php
} elseif (get_locale() == 'ru_RU') { ?>
                <?php if (is_front_page()):

                    if ($front_page_hero_type == 'видео') { ?>
                        <section id="hero" class="d-flex align-items-center">
                            <video loop muted autoplay playsinline class="hero__mp"
                                poster="<?php echo $hero_params['image']['url']; ?>">
                                <source src="<?php echo $hero_params['video']; ?>" type="video/mp4">
                            </video>
                        <?php } else { ?>
                            <section id="hero" class="d-flex align-items-center page-hero"
                                style="background-image: url('<?php echo $hero_params['image']['url']; ?>');">
                            <?php } ?>

                            <div class="container position-relative text-center text-lg-start">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h1 class="mb-4"><?php echo $hero_params['title']; ?></h1>
                                        <h2><?php echo $hero_params['sub-title']; ?></h2>

                                        <div class="btns">
                                            <?php if ($hero_params['menu-link']): ?>
                                                <a href="<?php echo $hero_params['menu-link']['url']; ?>" target="_blank"
                                                    class="btn-menu md:mb-0 mb-3"><?php echo $hero_params['menu-title']; ?></a>
                                            <?php endif;
                                            if ($hero_params['menu-link-2']): ?>
                                                <a href="<?php echo $hero_params['menu-link-2']['url']; ?>" target="_blank"
                                                    class="btn-book btn-menu md:mb-0 mb-3"><?php echo $hero_params['menu-title-2']; ?></a>
                                            <?php endif;
                                            ?>

                                            <?php if (get_field('book-link', 'options')): ?>
                                                <a href="<?php the_field('book-link', 'options'); ?>"
                                                    class="btn-book animated fadeInUp scrollto"><?php the_field('book-title', 'options'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php elseif (is_category()): ?>
                        <?php
                        $term = get_queried_object();
                        $hero_cat_image = get_field('hero_cat_image', $term); ?>
                        <?php if ($hero_cat_image): ?>
                            <section id="hero" class="d-flex align-items-center page-hero"
                                style="background-image: url('<?php echo $hero_cat_image['url']; ?>');">
                            <?php else: ?>
                                <section id="hero" class="d-flex align-items-center page-hero" style="background-color: #212121;">
                                <?php endif; ?>
                                <div class="container position-relative text-center text-lg-start">
                                    <!-- breadcrumbs -->
                                    <div class="breadcrumbs">
                                        <div class="breadcrumbs__container">
                                            <?php
                                            if (function_exists('yoast_breadcrumb')) {
                                                yoast_breadcrumb('<div class="breadcrumbs__list">', '</div>');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- breadcrumbs end -->

                                    <h1 class="single-menu__title mb-5">
                                        <?php single_cat_title('', true); ?>
                                    </h1>
                                </div>
                            </section>
                        <?php else: ?>
                            <?php
                            $hero_others_params = get_field('hero_others_params', $page_id);
                            if ($hero_others_params['image']): ?>
                                <section id="hero" class="d-flex align-items-center other_hero"
                                    style="background-image: url('<?php echo $hero_others_params['image']['url']; ?>');">
                                <?php else: ?>
                                    <section id="hero" class="d-flex align-items-center other_hero"
                                        style="background-color: #212121;">
                                    <?php endif; ?>
                                    <div class="container position-relative text-center text-lg-start">
                                        <!-- breadcrumbs -->
                                        <div class="breadcrumbs">
                                            <div class="breadcrumbs__container">
                                                <?php
                                                if (function_exists('yoast_breadcrumb')) {
                                                    yoast_breadcrumb('<div class="breadcrumbs__list text-center">', '</div>');
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- breadcrumbs end -->

                                        <h1 class="single-menu__title mb-5 text-center">
                                            <?php if ($hero_others_params['title']): ?>
                                                <?php echo $hero_others_params['title']; ?>
                                            <?php else: ?>
                                                <?php the_title(); ?>
                                            <?php endif; ?>
                                        </h1>
                                    </div>
                                </section>
                            <?php endif; ?>
                            <!-- End Hero RU-->
                            <?php
}
?>