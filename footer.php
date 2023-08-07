<?php
/**
 * The template for displaying the footer
 *
 */
$copyright = get_field('copyright', 'options');
$copyright_en = get_field('copyright_en', 'options');
$logoImg = get_field('logo_image', 'options');
$logoImg_en = get_field('logo_image_en', 'options');
?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="light">
        <div class="footer-top">
            <div class="container ">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                        <!-- US -->
                        <?php
                            if (get_locale() == 'en_US') {
                        ?>
                            <?php
                            if( $logoImg_en ):?>
                                <a class="logo me-auto me-lg-0 d-block mb-60" href="/en/">                
                                    <img src="<?php echo esc_url($logoImg_en['url']); ?>" alt="<?php echo esc_attr($logoImg_en['alt']); ?>">
                                </a>
                            <?php endif; ?>
                        <!-- RU -->
                        <?php    
                            } elseif (get_locale() == 'ru_RU') {
                        ?>  
                            <?php
                            if( $logoImg ):?>
                                <a class="logo me-auto me-lg-0 d-block mb-60" href="/">                
                                    <img src="<?php echo esc_url($logoImg['url']); ?>" alt="<?php echo esc_attr($logoImg['alt']); ?>">
                                </a>
                            <?php endif; ?>  
                        <?php
                            }
                        ?>
                        <?php
                        $social = get_field('social_icons', 'options');
                        
                        if( $social['telegram'] || $social['vk'] || $social['whatsapp'] ): ?>
                            <div class="social-links mt-3">
                                <?php if( $social['telegram'] ): ?>
                                    <a href="https://t.me/<?php echo $social['telegram']; ?>" class="social"><i class="telegram"></i></a>
                                <?php endif; ?>

                                <?php if( $social['vk'] ): ?>
                                    <a href="<?php echo $social['vk']; ?>" class="social"><i class="vk"></i></a>
                                <?php endif; ?>

                                <?php if( $social['whatsapp'] ): ?>
                                    <a href="<?php echo $social['whatsapp']; ?>" class="social"><i class="whatsapp"></i></a> 
                                <?php endif; ?>                         
                            </div>
                        <?php endif; ?>
                        </div>

                        <!-- US -->
                        <?php
                            if (get_locale() == 'en_US') {
                        ?>                           
                            
                            <a class="mt-4 privacy-title" href="/privacy-2">                
                                Privacy policy
                            </a>
                            
                        <!-- RU -->
                        <?php    
                            } elseif (get_locale() == 'ru_RU') {
                        ?>  
                            <a class="mt-4 privacy-title" href="/privacy">                
                                Политка конфиденциальности
                            </a>
                        <?php
                            }
                        ?>
                    </div>

                    <div class="col-lg-8 col-12 footer-links">                     
                            <?php estore_primary_menu(); ?>            
                        
                    </div>             
                </div>
            </div>
        </div>

        <div class="container">
            <!-- US -->
            <?php
                if (get_locale() == 'en_US') {
            ?>
                <?php if( $copyright_en ): ?>
                    <div class="copyright">
                        &copy;<?php echo $copyright_en; ?>
                    </div> 
                <?php endif; ?>  
            <!-- RU -->
            <?php    
                } elseif (get_locale() == 'ru_RU') {
            ?> 
            
                <?php if( $copyright ): ?>
                    <div class="copyright">
                        &copy;<?php echo $copyright; ?>
                    </div> 
                <?php endif; ?> 
            <?php
                }
            ?> 
        </div>
    </footer><!-- End Footer -->

    <!-- Попап забронировать столик -->    
    <!-- <div class="popup" data-popup="book-popup">
        <div class="popup__wrapper d-flex align-items-center justify-content-center">
            <div class="popup__contain book-a-table">
            </div>  
        </div>              
    </div> -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/jarallax@2/dist/jarallax.min.js"></script>
    
    <script>
    $(document).ready(function() {
        let navbarMobile = $('#navbar');
        let navbarBtn = $('.mobile-nav-toggle');
        console.log(navbarMobile);
        let menuItems = navbarMobile.find('li a');

        menuItems.each(function(){
            $(this).on('click', function(){
                navbarMobile.toggleClass('navbar-mobile');
                navbarBtn.toggleClass('bi-list');
                navbarBtn.toggleClass('bi-x');
            })
        })
    });
</script>
    </body>

</html>

<?php wp_footer(); ?>