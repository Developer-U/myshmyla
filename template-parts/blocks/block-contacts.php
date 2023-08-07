<?php
/*
** Block contacts
*/
$contacts_title = get_field('contacts_title', 'options');
$contacts_address = get_field('address', 'options');
$contacts_worktime = get_field('work-time', 'options');
$contacts_tellink = get_field('tel-link', 'options');
$contacts_tel = get_field('tel', 'options');

$contacts_title_en = get_field('contacts_title_en', 'options');
$contacts_address_en = get_field('address_en', 'options');
$contacts_worktime_en = get_field('work-time_en', 'options');
$lang = get_locale();
?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=<?php echo $lang; ?>"></script>

<!-- US -->
<?php
    if (get_locale() == 'en_US') {
        
?>

    <?php if( $contacts_title_en && $contacts_address_en ): ?>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">            
                <h2 class="mb-lg-5 mb-4"><?php echo $contacts_title_en; ?></h2>           
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 gx-5" data-aos="slide-right">
                        <div class="info">
                            <?php if( $contacts_address_en ): ?>
                                <div class="address d-flex row gx-4 align-items-center">
                                    <i class="bi bi-geo-alt"></i>                            
                                    <h4 class="text-black col"><?php echo $contacts_address_en; ?></h4>
                                </div>
                            <?php endif; ?>

                            <?php if( $contacts_worktime_en ): ?>
                                <div class="open-hours d-flex row gx-4 align-items-center">
                                    <i class="bi bi-clock"></i>
                                    <h4 class="text-black col"><?php echo $contacts_worktime_en; ?></h4>
                                </div>                        
                            <?php endif; ?>

                            <?php if( $contacts_tellink && $contacts_tel ): ?>
                                <div class="phone d-flex row gx-4 align-items-center">
                                    <i class="bi bi-phone"></i>
                                    <h4 class="text-black col">
                                        <a class="text-black" href="tel:+7<?php echo $contacts_tellink; ?>"><?php echo $contacts_tel; ?></a>
                                    </h4>
                                </div>
                            <?php endif; ?>

                            <button class="btn-book mt-5 animated fadeInUp scrollto"><?php the_field('book-title_en', 'options'); ?></button>
                        </div>
                    </div>

                    <div class="col-md-7 col-12" data-aos="slide-left">
                        <?php if( get_field('map_center_coords', 'options') ): ?>
                            <?php $mapBal_en = get_field('map_baloon_en', 'options'); ?>
                            <div id="map" class="map">
                            </div>    

                            <script type="text/javascript"> 
                                ymaps.ready(init);

                                function init() {
                                    var myMap = new ymaps.Map('map', {
                                        center: [<?php the_field('map_center_coords', 'options'); ?>],
                                        zoom: <?php the_field('map_center_zoom', 'options'); ?>,
                                        controls: ['zoomControl']
                                    }, {
                                        searchControlProvider: 'yandex#search'
                                });                            

                                myGeoObject = new ymaps.GeoObject({                           
                                    // Описание геометрии.
                                    geometry: {
                                        type: "Point",
                                        coordinates: [<?php the_field('map_center_coords', 'options'); ?>]
                                    },
                                    // Свойства.
                                    properties: {
                                        balloonContentHeader: '',
                                        balloonContentBody:  `
                                        <figure class="map__image"><img src="<?php echo esc_url($mapBal_en['image']['url']); ?>"></figure>                                
                                        <div class="baloon__box">
                                            <div class="icon-content__work-time">
                                                <?php echo $mapBal_en['text'] ?>
                                            </div>                      
                                        </div>`
                                    }
                                }, {
                                    // Опции.           
                                    preset: 'islands#redGlyphIcon'          
                                    }            
                                );

                                myMap.geoObjects.add(myGeoObject); 

                                // Отключим зуммирование при скролле
                                myMap.behaviors.disable('scrollZoom');
                                }
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Contact Section -->
    <?php endif; ?>
<!-- RU -->

<?php    
    } elseif (get_locale() == 'ru_RU') {
?>

    <?php if( $contacts_title && $contacts_address ): ?>
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">            
                <h2 class="mb-lg-5 mb-4"><?php echo $contacts_title; ?></h2>           
            </div>            

            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12 gx-5" data-aos="slide-right">
                        <div class="info">
                            <?php if( $contacts_address ): ?>
                                <div class="address d-flex row gx-4 align-items-center">
                                    <i class="bi bi-geo-alt"></i>                            
                                    <h4 class="text-black col"><?php echo $contacts_address; ?></h4>
                                </div>
                            <?php endif; ?>

                            <?php if( $contacts_worktime ): ?>
                                <div class="open-hours d-flex row gx-4 align-items-center">
                                    <i class="bi bi-clock"></i>
                                    <h4 class="text-black col"><?php echo $contacts_worktime; ?></h4>
                                </div>                        
                            <?php endif; ?>

                            <?php if( $contacts_tellink && $contacts_tel ): ?>
                                <div class="phone d-flex row gx-4 align-items-center">
                                    <i class="bi bi-phone"></i>
                                    <h4 class="text-black col">
                                        <a class="text-black" href="tel:+7<?php echo $contacts_tellink; ?>"><?php echo $contacts_tel; ?></a>
                                    </h4>
                                </div>
                            <?php endif; ?>

                            <button class="btn-book mt-5 animated fadeInUp scrollto"><?php the_field('book-title', 'options'); ?></button>
                        </div>
                    </div>

                    <div class="col-md-7 col-12" data-aos="slide-left">
                        <?php if( get_field('map_center_coords', 'options') ): ?>
                            <?php $mapBal = get_field('map_baloon', 'options'); ?>
                            <div id="map" class="map">
                            </div>    

                            <script type="text/javascript"> 
                                ymaps.ready(init);

                                function init() {
                                    var myMap = new ymaps.Map('map', {
                                        center: [<?php the_field('map_center_coords', 'options'); ?>],
                                        zoom: <?php the_field('map_center_zoom', 'options'); ?>,
                                        controls: ['zoomControl']
                                    }, {
                                        searchControlProvider: 'yandex#search'
                                });                            

                                myGeoObject = new ymaps.GeoObject({                           
                                    // Описание геометрии.
                                    geometry: {
                                        type: "Point",
                                        coordinates: [<?php the_field('map_center_coords', 'options'); ?>]
                                    },
                                    // Свойства.
                                    properties: {
                                        balloonContentHeader: '',
                                        balloonContentBody:  `
                                        <figure class="map__image"><img src="<?php echo esc_url($mapBal['image']['url']); ?>"></figure>                                
                                        <div class="baloon__box">
                                            <div class="icon-content__work-time">
                                                <?php echo $mapBal['text'] ?>
                                            </div>                      
                                        </div>`
                                    }
                                }, {
                                    // Опции.           
                                    preset: 'islands#redGlyphIcon'          
                                    }            
                                );

                                myMap.geoObjects.add(myGeoObject); 

                                // Отключим зуммирование при скролле
                                myMap.behaviors.disable('scrollZoom');
                                }
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Contact Section -->
    <?php endif; ?>

<?php
    }
?>