<?php
/*
** Block about VIP
*/ 

// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;    

$vip_about_text_block = get_field('vip_about_block_' . get_locale(), $page_id );  
?>

    <!-- ======= About Section ======= -->    
    <section id="about" class="about dark">
        <div class="container" data-aos="fade-up" data-parallax="0.7">
            <div class="row about_vip__wrap">              
                <div class="pt-4 pt-lg-0 content">
                    <h2 class="mb-lg-5 mb-4"><?php echo $vip_about_text_block['title']; ?></h2>

                    <div class="mb-lg-5 mb-4">
                        <?php echo $vip_about_text_block['description']; ?>   
                    </div>
                </div>             

                <div class="col-lg-12 about__wrapper" data-aos="zoom-in" data-aos-delay="100">
                    <?php if( have_rows('vip_about_slider_add', $page_id) ): ?>
                        <div class="slides_vip swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">                                
                                <?php if( have_rows('vip_about_slider_add', $page_id) ): ?>
                                <?php while( have_rows('vip_about_slider_add', $page_id) ): the_row();
                                $vip_about_slider_image_en = get_sub_field('vip_about_slider_image' , $page_id);                                    
                                ?>

                                    <div class="swiper-slide event-item">
                                        <img src="<?php echo $vip_about_slider_image_en['url']; ?>" alt="">
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
            </div>
        </div>
    </section>
    <!-- End About Section -->
   
