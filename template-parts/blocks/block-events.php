<?php
/*
** Block events
*/

// Получаем ID текущей страницы
global $wp_query;
$page_id = $wp_query->post->ID;    

$events_title = get_field('events_title', $page_id );
$events_image = get_field('events_image', $page_id );
$events_title_en = get_field('events_title_en', $page_id );
$events_image_en = get_field('events_image_en', $page_id );
?>

<!-- US -->
<?php
    if (get_locale() == 'en_US') {
?>
    <?php if( $events_title_en ): ?>
        <!-- ======= Events Section ======= -->
    <?php if( $events_image_en['image'] ): ?>
        <section id="events" class="events" style="background-image: url('<?php echo $advantage_image_en['url']; ?>">
    <?php else: ?>
        <section id="events" class="events" style="background-color: #212121;">
    <?php endif; ?>
            <div class="container" data-aos="fade-up">                       
                <h2 class="mb-5 text-white"><?php echo $events_title_en; ?></h2>            

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php if( have_rows('events_slider_add_en', $page_id) ): ?>
                        <?php while( have_rows('events_slider_add_en', $page_id) ): the_row();
                        $event_slide_image_en = get_sub_field('event_slide_image_en' , $page_id);    
                        $event_slide_title_en = get_sub_field('event_slide_title_en' , $page_id);        
                        $event_slide_price_en = get_sub_field('event_slide_price_en' , $page_id);   
                        $event_slide_descr_en = get_sub_field('event_slide_descr_en' , $page_id);                      
                        ?>
                            <div class="swiper-slide" style="padding:0 10px">
                                <div class="row event-item align-items-stretch">
                                    <div class="col-lg-6 event-item__image">
                                        <img src="<?php echo $event_slide_image_en['url']; ?>" class="img-fluid" alt="<?php echo $event_slide_image_en['alt']; ?>">
                                    </div>

                                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                                        <h3 class="lg:mb-4 mb-3"><?php echo $event_slide_title_en; ?></h3>

                                        <?php if( $event_slide_price_en ): ?>
                                            <div class="price lg:mb-4 mb-3">
                                                <p><span class="lg:mb-4 mb-3"><?php echo $event_slide_price_en; ?>&nbsp;$</span></p>
                                            </div>  
                                        <?php endif; ?>  
                                        
                                        <?php if( $event_slide_descr_en ): ?>
                                            <div>
                                                <?php echo $event_slide_descr_en; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                        <?php endwhile; ?>
                        <?php endif; ?>  
                        

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->
    <?php endif; ?>

<!-- RU -->
<?php    
    } elseif (get_locale() == 'ru_RU') {
?>

    <?php if( $events_title ): ?>
        <!-- ======= Events Section ======= -->
        <?php if( $events_image['image'] ): ?>
            <section id="events" class="events" style="background-image: url('<?php echo $advantage_image['url']; ?>">
        <?php else: ?>
            <section id="events" class="events" style="background-color: #212121;">
        <?php endif; ?>
            <div class="container" data-aos="fade-up">                       
                <h2 class="mb-5 text-white"><?php echo $events_title; ?></h2>            

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <?php if( have_rows('events_slider_add', $page_id) ): ?>
                        <?php while( have_rows('events_slider_add', $page_id) ): the_row();
                        $event_slide_image = get_sub_field('event_slide_image' , $page_id);    
                        $event_slide_title = get_sub_field('event_slide_title' , $page_id);        
                        $event_slide_price = get_sub_field('event_slide_price' , $page_id);   
                        $event_slide_descr = get_sub_field('event_slide_descr' , $page_id);                      
                        ?>
                            <div class="swiper-slide" style="padding:0 10px">
                                <div class="row event-item align-items-stretch">
                                    <div class="col-lg-6 event-item__image">
                                        <img src="<?php echo $event_slide_image['url']; ?>" class="img-fluid" alt="<?php echo $event_slide_image['alt']; ?>">
                                    </div>

                                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                                        <h3 class="lg:mb-4 mb-3"><?php echo $event_slide_title; ?></h3>

                                        <?php if( $event_slide_price ): ?>
                                            <div class="price lg:mb-4 mb-3">
                                                <p><span class="lg:mb-4 mb-3"><?php echo $event_slide_price; ?>&nbsp;₽</span></p>
                                            </div>  
                                        <?php endif; ?>  
                                        
                                        <?php if( $event_slide_descr ): ?>
                                            <div>
                                                <?php echo $event_slide_descr; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->

                        <?php endwhile; ?>
                        <?php endif; ?>  
                        

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->
    <?php endif; ?>
<?php
    }
?>