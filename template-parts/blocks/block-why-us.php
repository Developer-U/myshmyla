<?php
/*
** Block why us
*/
?>

<!-- US -->
<?php
    if (get_locale() == 'en_US') {
?>

    <!-- ======= Why Us Section ======= -->
    <?php if( get_field('advantages_title_en', 'options') ): ?>
        <section id="why-us" class="why-us light">
            <div class="container" data-aos="fade-up">                      
                <h2 class="lg:mb-5 mb-3"><?php the_field('advantages_title_en', 'options'); ?></h2>
                <div class="row">
                    <?php
                    $counter = 1;
                    ?>
                    <?php if( have_rows( 'add_new_advantage_en', 'options' ) ): ?>
                    <?php while( have_rows( 'add_new_advantage_en', 'options' ) ): the_row();
                    $advantage_image_en = get_sub_field('advantage_image_en', 'options');    
                    $advantage_title_en = get_sub_field('advantage_title_en', 'options');      
                    $advantage_descr_en = get_sub_field('advantage_descr_en', 'options');                            
                    ?>
                        <div class="col-lg-4 why-us__wrapper">
                            <div class="why-us__bg" style="background-image: url('<?php echo $advantage_image_en['url']; ?>"></div>

                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>0<?php echo $counter++; ?></span>
                            <h4><?php echo $advantage_title_en; ?></h4>
                            <p><?php echo $advantage_descr_en; ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>                 
                </div>
            </div>
        </section>
    <?php endif; ?> 
    <!-- End Why Us Section -->

<!-- RU -->
<?php    
    } elseif (get_locale() == 'ru_RU') {
?>

    <!-- ======= Why Us Section ======= -->
    <?php if( get_field('advantages_title', 'options') ): ?>
        <section id="why-us" class="why-us light">
            <div class="container" data-aos="fade-up">                      
                <h2 class="lg:mb-5 mb-3"><?php the_field('advantages_title', 'options'); ?></h2>
                <div class="row">
                    <?php
                    $counter = 1;
                    ?>
                    <?php if( have_rows( 'add_new_advantage', 'options' ) ): ?>
                    <?php while( have_rows( 'add_new_advantage', 'options' ) ): the_row();
                    $advantage_image = get_sub_field('advantage_image', 'options');    
                    $advantage_title = get_sub_field('advantage_title', 'options');      
                    $advantage_descr = get_sub_field('advantage_descr', 'options');                            
                    ?>
                        <div class="col-lg-4 why-us__wrapper">
                            <div class="why-us__bg" style="background-image: url('<?php echo $advantage_image['url']; ?>"></div>

                            <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>0<?php echo $counter++; ?></span>
                            <h4><?php echo $advantage_title; ?></h4>
                            <p><?php echo $advantage_descr; ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>                 
                </div>
            </div>
        </section>
    <?php endif; ?> 
    <!-- End Why Us Section -->

<?php
    }
?>