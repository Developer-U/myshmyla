<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
$underfined_subheading = get_field('underfined_subheading', 'options');
$underfined_subheading_en = get_field('underfined_subheading_en', 'options');
$underfined_text = get_field('underfined_text', 'options');
$underfined_text_en = get_field('underfined_text_en', 'options');
$underfined_btn = get_field('underfined_btn', 'options');
$underfined_btn_en = get_field('underfined_btn_en', 'options');
?>

    <section id="underfined" class="book-a-table decor light">
        <div class="container col-xl-6 col-lg-8 col-12" data-aos="fade-up">       
            <div class="head-title">
                <span class="col"></span>
                    <h1 class="col-auto text-center">#404</h1>
                <span class="col"></span>
            </div> 

            <!-- US -->
            <?php
                if (get_locale() == 'en_US') {
            ?>

                <h2 class="col-auto text-center">
                    <?php echo $underfined_subheading_en; ?>
                </h2>

                <?php if( $underfined_text_en ): ?>
                    <div class="text-center">
                        <?php echo $underfined_text_en; ?>
                    </div>
                <?php endif; ?>

                <?php if( $underfined_btn_en['link_en'] && $underfined_btn_en['name_en'] ): ?>
                    <div class="text-center mt-5 underfinded-text">             
                        <a class="btn-book animated fadeInUp scrollto" href="<?php echo $underfined_btn_en['link_en']; ?>"><?php echo $underfined_btn_en['name_en']; ?></a>                      
                    </div>
                <?php endif; ?>

            <!-- RU -->
            <?php    
                } elseif (get_locale() == 'ru_RU') {
            ?>

                <h2 class="col-auto text-center">
                    <?php echo $underfined_subheading; ?>
                </h2>

                <?php if( $underfined_text ): ?>
                    <div class="text-center">
                        <?php echo $underfined_text; ?>
                    </div>
                <?php endif; ?>

                <?php if( $underfined_btn['link'] && $underfined_btn['name'] ): ?>
                    <div class="text-center mt-5 underfinded-text">             
                        <a class="btn-book animated fadeInUp scrollto" href="<?php echo $underfined_btn['link']; ?>"><?php echo $underfined_btn['name']; ?></a>                      
                    </div>
                <?php endif; ?>

            <?php    
                } 
            ?>


        </div>
    </section>

<?php
get_footer();
