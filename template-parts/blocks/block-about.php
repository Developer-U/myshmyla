<?php
/*
 ** Block about
 */

// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;

$about_text_block = get_field('about_block', $page_id);
$about_text_block_en = get_field('about_block_en', $page_id);
$about_images_type = get_field('about_images_type_' . get_locale(), $page_id);
$about_images = get_field('about_images_' . get_locale(), $page_id);
?>


<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up" data-parallax="0.7">
        <div class="row about__block d-grid">
            <div class="order-2 about__wrapper" data-aos="zoom-in" data-aos-delay="100">
                <?php
                if ($about_images_type == 'изображение') {
                    echo '<figure class="about_image">';
                    echo '<img src=" ' . $about_images['url'] . '" alt=" ' . $about_images['alt'] . ' ">';
                    echo '</figure>';
                } else {
                    if (have_rows('about_slider_add', $page_id)) { ?>
                        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('about_slider_add', $page_id)): ?>
                                    <?php while (have_rows('about_slider_add', $page_id)):
                                        the_row();
                                        $about_slider_image_en = get_sub_field('about_slider_image', $page_id);
                                        ?>

                                        <div class="swiper-slide event-item">
                                            <img src="<?php echo $about_slider_image_en['url']; ?>" alt="">
                                        </div><!-- End Event item -->
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    <?php } else { ?>
                        <div class="about-img jarallax" data-jarallax data-speed="0.7" data-aos="slide-left"
                            data-aos-easing="linear" data-aos-duration="1500">
                            <div style="background-color: lightgrey; width:100%; height:100%"></div>
                        </div>
                    <?php }
                } ?>
            </div>

            <?php
            if (get_locale() == 'en_US') {
                ?>

                <div class="pt-4 pt-lg-0 order-1 content">
                    <h2 class="mb-lg-5 mb-4"><?php echo $about_text_block_en['title_en']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $about_text_block_en['description_en']; ?>
                    </div>
                </div>

                <?php
            } elseif (get_locale() == 'ru_RU') {
                ?>

                <div class="pt-4 pt-lg-0 order-1 content">
                    <h2 class="mb-lg-5 mb-4"><?php echo $about_text_block['title']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $about_text_block['description']; ?>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>
    </div>
</section>
<!-- End About Section -->