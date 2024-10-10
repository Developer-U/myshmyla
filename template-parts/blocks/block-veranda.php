<?php
/*
 ** Block Veranda
 */

// Получаем ID текущей страницы
$page_id = get_the_ID();

$veranda_text_block = get_field('veranda_block_' . get_locale(), $page_id);
if ($veranda_text_block['title']) {
    ?>

    <!-- ======= Veranda Section ======= -->
    <section id="veranda" class="about">
        <div class="container" data-aos="fade-up" data-parallax="0.7">
            <div class="row about_vip__wrap">
                <div class="pt-4 pt-lg-0">
                    <h2 class="mb-lg-5 mb-4"><?php echo $veranda_text_block['title']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $veranda_text_block['description']; ?>
                    </div>
                </div>

                <?php if (have_rows('add_new_veranda_image')): ?>
                    <div class="tab-pane" id="menu-dinner">
                        <!-- ======= veranda Section ======= -->
                        <div id="veranda" class="gallery">
                            <div class="container-fluid row" data-aos="fade-up" data-aos-delay="100">
                                <div class="row g-0">
                                    <?php if (have_rows('add_new_veranda_image')): ?>
                                        <?php while (have_rows('add_new_veranda_image')):
                                            the_row();
                                            $veranda_image = get_sub_field('veranda_image');
                                            ?>

                                            <div class="col-lg-3 col-md-4">
                                                <div class="gallery-item gallery-item__veranda">
                                                    <a href="<?php echo $veranda_image['url']; ?>" class="veranda-lightbox"
                                                        data-gall="veranda-item">
                                                        <img src="<?php echo $veranda_image['url']; ?>"
                                                            alt="<?php echo $veranda_image['alt']; ?>" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- End veranda Section -->
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php }