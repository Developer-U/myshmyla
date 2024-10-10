<?php
/*
 ** Block gallery
 */
$gallery_title = get_field('gallery_title_' . get_locale());
$gallery_description = get_field('gallery_description_' . get_locale());
?>

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <h2 class="mb-lg-5 mb-4"><?php echo $gallery_title; ?></h2>

        <div class="mb-lg-5 mb-4">
            <?php echo $gallery_description; ?>
        </div>

        <?php if (have_rows('add_new_gallery_image')): ?>
            <div class="tab-pane" id="menu-dinner">
                <!-- ======= Gallery Section ======= -->
                <div id="gallery" class="gallery">
                    <div class="container-fluid row" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-0">
                            <?php if (have_rows('add_new_gallery_image')): ?>
                                <?php while (have_rows('add_new_gallery_image')):
                                    the_row();
                                    $gallery_image = get_sub_field('gallery_image');
                                    ?>

                                    <div class="col-lg-3 col-md-4">
                                        <div class="gallery-item">
                                            <a href="<?php echo $gallery_image['url']; ?>" class="gallery-lightbox"
                                                data-gall="gallery-item">
                                                <img src="<?php echo $gallery_image['url']; ?>"
                                                    alt="<?php echo $gallery_image['alt']; ?>" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- End Gallery Section -->
            </div><!-- End Dinner Menu Content -->
        <?php endif; ?>

    </div>
</section>
<!-- End Gallery Section -->