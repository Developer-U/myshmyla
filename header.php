<?php
/**
 * @package header
 */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.ico"> 

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
	
	
    <style>
    #header {
        background-size: 100% auto;
        background-position: center;
    }
</style>

	
	
	<?php wp_head(); ?>
</head>

<body >   

   <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <?php
            if( is_front_page() || is_page('reservations') || is_category() ) {
                if( get_field('tel', 'options') ): ?>
                    <a class="bi bi-phone d-flex align-items-center" href="tel:+7<?php the_field('tel-link', 'options'); ?>"><span><?php the_field('tel', 'options'); ?></span></a>
                <?php endif; ?>
                
                <?php
                if (get_locale() == 'en_RU') {            
                    if( get_field('work-time', 'options') ): ?>
                        <i class="bi bi-clock d-flex align-items-center ms-4"><span><?php the_field('work-time', 'options'); ?></span></i>
                    <?php endif; ?>

                <?php } elseif( get_locale() == 'en_EN' ) {
                    if( get_field('work-time_en', 'options') ): ?>
                        <i class="bi bi-clock d-flex align-items-center ms-4"><span><?php the_field('work-time_en', 'options'); ?></span></i>
                    <?php endif; 
                } ?>
                <?php
                if( get_field('address', 'options') ): ?>
                    <i class="bi bi-address d-flex align-items-center ms-4"><span><?php the_field('address', 'options'); ?></span></i>
                <?php endif; ?>
            <?php } else {
                if( get_field('tel', 'options') ): ?>
                    <a class="bi bi-phone d-flex align-items-center text-black" href="tel:+7<?php the_field('tel-link', 'options'); ?>"><span ><?php the_field('tel', 'options'); ?></span></a>
                <?php endif; ?>
                
                <?php
                if (get_locale() == 'en_RU') {            
                    if( get_field('work-time', 'options') ): ?>
                        <i class="bi bi-clock d-flex align-items-center ms-4"><span><?php the_field('work-time', 'options'); ?></span></i>
                    <?php endif; ?>

                <?php } elseif( get_locale() == 'en_EN' ) {
                    if( get_field('work-time_en', 'options') ): ?>
                        <i class="bi bi-clock d-flex align-items-center ms-4"><span><?php the_field('work-time_en', 'options'); ?></span></i>
                    <?php endif; 
                } ?>
                <?php
                if( get_field('address', 'options') ): ?>
                    <i class="bi bi-address d-flex align-items-center ms-4 text-black"><span class="text-black"><?php the_field('address', 'options'); ?></span></i>
                <?php endif; ?>
            <?php } ?>
        </div>        
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <?php
        $logoImg = get_field('logo_image', 'options');
        $logoImg_en = get_field('logo_image_en', 'options');
        if (get_locale() == 'en_US') {            
      
            if( $logoImg_en ):?>
                <a class="logo me-auto me-lg-0 d-block" href="/en/">                
                    <img src="<?php echo esc_url($logoImg_en['url']); ?>" alt="<?php echo esc_attr($logoImg_en['alt']); ?>">
                </a>
            <?php endif; ?>

        <!-- RU -->
        <?php    
            } elseif (get_locale() == 'ru_RU') {        

            if( $logoImg ):?>
                <a class="logo me-auto me-lg-0 d-block" href="/">                
                    <img src="<?php echo esc_url($logoImg['url']); ?>" alt="<?php echo esc_attr($logoImg['alt']); ?>">
                </a>
            <?php endif; ?>
        <?php
            }
        ?>

        <nav id="navbar" class="navbar order-last order-lg-0">
        <!-- US -->
        <?php
            if ( is_front_page() ) {       
                estore_primary_menu();
            } else {
                estore_secondary_menu();
            }
        ?>  
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <?php
            if (get_locale() == 'en_US') {       

            if( get_field('book-title_en', 'options') ): ?>
                <a href="<?php the_field('book-link_en', 'options'); ?>" class="book-a-table-btn scrollto d-none d-lg-flex"><?php the_field('book-title_en', 'options'); ?></a>
            <?php else: ?>
                <div style="width: 140px"></div>
            <?php endif; ?>  

        <?php
            } elseif(get_locale() == 'ru_RU') {

            if( get_field('book-title', 'options') ): ?>
                <a href="<?php the_field('book-link', 'options'); ?>" class="book-a-table-btn scrollto d-none d-lg-flex"><?php the_field('book-title', 'options'); ?></a>
            <?php else: ?>
                <div style="width: 140px"></div>
            <?php endif; ?>   

        <?php } ?>

        <?php
        pll_the_languages();
        ?>
        
  

    
  </header><!-- End Header -->
	


