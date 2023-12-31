<?php
/*
** Block about
*/ 

// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;    

$about_text_block = get_field('about_block', $page_id );  
$about_text_block_en = get_field('about_block_en', $page_id );  
?>

<!-- US -->
<?php
    if (get_locale() == 'en_US') {
?>

    <!-- ======= About Section ======= -->    
    <section id="about" class="about dark">
        <div class="container" data-aos="fade-up" data-parallax="0.7">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 about__wrapper" data-aos="zoom-in" data-aos-delay="100">
                    <?php if( have_rows('about_slider_add', $page_id) ): ?>
                        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">                                
                                <?php if( have_rows('about_slider_add', $page_id) ): ?>
                                <?php while( have_rows('about_slider_add', $page_id) ): the_row();
                                $about_slider_image_en = get_sub_field('about_slider_image' , $page_id);                                    
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
                            
                    <?php else: ?>
                        <div class="about-img jarallax" data-jarallax data-speed="0.7"  data-aos="slide-left" data-aos-easing="linear" data-aos-duration="1500">
                            <div style="background-color: lightgrey; width:100%; height:100%"></div>
                        </div>
                    <?php endif; ?>                    
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h2 class="mb-lg-5 mb-4"><?php echo $about_text_block_en['title']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $about_text_block_en['description']; ?>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- RU -->

<?php    
    } elseif (get_locale() == 'ru_RU') {
?>
    <!-- ======= About Section ======= -->    
    <section id="about" class="about dark">
        <div class="container" data-aos="fade-up" data-parallax="0.7">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 about__wrapper" data-aos="zoom-in" data-aos-delay="100">
                    <?php if( have_rows('about_slider_add', $page_id) ): ?>
                        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">                                
                                <?php if( have_rows('about_slider_add', $page_id) ): ?>
                                <?php while( have_rows('about_slider_add', $page_id) ): the_row();
                                $about_slider_image = get_sub_field('about_slider_image' , $page_id);                                    
                                ?>

                                    <div class="swiper-slide event-item">
                                        <img src="<?php echo $about_slider_image['url']; ?>" alt="">
                                    </div><!-- End Event item --> 
                                <?php endwhile; ?>
                                <?php endif; ?>                                
                            </div>                
                        </div> 
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>                   
                            
                    <?php else: ?>
                        <div class="about-img jarallax" data-jarallax data-speed="0.7"  data-aos="slide-left" data-aos-easing="linear" data-aos-duration="1500">
                            <div style="background-color: lightgrey; width:100%; height:100%"></div>
                        </div>
                    <?php endif; ?>                    
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h2 class="mb-lg-5 mb-4"><?php echo $about_text_block['title']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $about_text_block['description']; ?>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- RU end-->
    
<?php
    }
?>