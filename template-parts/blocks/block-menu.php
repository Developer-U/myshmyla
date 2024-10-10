<?php
/*
** Block menu
*/
?>

<!-- ======= Menu Section ======= -->
<?php

?>

    <?php
        if (get_locale() == 'en_US') {
    ?>
    
      <section id="menu" class="menu dark">
        <div class="container" data-aos="fade-up">        
          <h2 class="mb-5">Our menu</h2>

          <div class="row menu-container menu-wrapper" data-aos="fade-up" data-aos-delay="200">
            <?php              
              $arg_posts =  array(
                'orderby'      => 'name',
                'order'        => 'ASC',
                'posts_per_page' => 100,
                'post_type' => 'works',
                'post_status' => 'publish',                           
              );
              $query = new WP_Query($arg_posts);                  
              ?>                      
              
              <?php if ($query->have_posts() ) ?>
              <?php while ( $query->have_posts() ) : $query->the_post();   
              
              // Подключим курс доллара
              $url = "https://www.cbr-xml-daily.ru/daily_json.js";
              // Создаём запрос
              $ch = curl_init();
              // Настройки запроса
              curl_setopt( $ch, CURLOPT_URL, $url );
              curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
              // Отправка и декодинг ответа
              $data = json_decode( curl_exec( $ch ), $assoc = true );
              // Закрытие запроса
              curl_close( $ch );

              $USD = ($data["Valute"]["USD"]["Value"] ); // Получаем стоимость доллара   

              ?>

                <div class="col-lg-6 menu-wrapper__item">
                  <a href="<?php the_permalink(); ?>" class="menu-item__image" data-gall="menu-item">
                    <img src="<?php the_post_thumbnail( 'widgetfull' );?>" class="menu-img" alt="">
                  </a>

                  <div class="menu-item__right pt-4 col">
                    <div class="menu-content">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <?php 
                      $price = get_field('menu_price');
                      $price_params_en = get_field('price_params_en'); 
                      
                     

                      $get_usd = $price / $USD; // Получаем стоимость блюда в долларах
                      $new_price = substr($get_usd, 0, 3); // Округляем ценник                                       
                
                      if( $price ): ?>
                        <span class="price__box">
                          <?php if( $price_params_en ): ?>
                          <?php echo $price_params_en;?>&nbsp;/
                          <?php endif;?>
                          <?php echo $new_price;?>&nbsp;$
                        </span> 
                      <?php endif;?>
                    </div>
                    <div class="menu-ingredients">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>            
                </div>

              <?php endwhile; wp_reset_postdata()?>              
          </div>          
        </div>

        <?php if( have_rows( 'new_menu_document_en') ): ?>
          <ul class="container menu-docs__list" data-aos="fade-up" data-aos-delay="300">

            <?php if( have_rows( 'new_menu_document_en') ): ?>
              <?php while( have_rows('new_menu_document_en') ): the_row();           
              $menu_document_title_en = get_sub_field('menu_document_title_en');      
              $menu_document_link_en = get_sub_field('menu_document_link_en');           
              ?>

                <li class="menu-docs__item">
                    <a href="<?php echo $menu_document_link_en['url']; ?>" class="menu-docs__link" target="_blank">
                      <svg fill="#f2eb1f" width="200px" height="200px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="list-1"  enable-background="new 0 0 32 32" xml:space="preserve">
                        <rect x="9" y="14" width="1" height="1"/>
                        <rect x="13" y="18" width="10" height="1"/>
                        <rect x="9" y="18" width="1" height="1"/>
                        <rect x="13" y="22" width="10" height="1"/>
                        <rect x="9" y="22" width="1" height="1"/>
                        <rect x="13" y="14" width="10" height="1"/>
                        <path d="M23 6V4h-6V2h-2v2H9v2H4v24h24V6H23zM11 6h10v2H11V6zM26 28H6V8h3v2h14V8h3V28z"/>
                      </svg>

                      <p class="menu-docs__title">
                          <?php echo $menu_document_title_en; ?>
                      </p>
                    </a>                
                </li>

              <?php endwhile; ?>
              <?php endif; ?>

          </ul>
        <?php endif; ?>        
      </section>     

    <!-- RU -->
    <?php    
        } elseif (get_locale() == 'ru_RU') {
    ?>

      <section id="menu" class="menu dark"> 
        <div class="container" data-aos="fade-up">        
          <h2 class="mb-5">Наше меню</h2>         

          <div class="row menu-container menu-wrapper" data-aos="fade-up" data-aos-delay="200">
            <?php            
              $arg_posts =  array(
                'orderby'      => 'name',
                'order'        => 'ASC',
                'posts_per_page' => 100,
                'post_type' => 'works',
                'post_status' => 'publish',                  
              );
              $query = new WP_Query($arg_posts);                  
              ?>                      
              
              <?php if ($query->have_posts() ) ?>
              <?php while ( $query->have_posts() ) : $query->the_post();             
              ?>

                <div class="col-lg-6 menu-wrapper__item">
                  <a href="<?php the_permalink(); ?>" class="menu-item__image" data-gall="menu-item">
                    <img src="<?php the_post_thumbnail( 'widgetfull' );?>" class="menu-img" alt="">
                  </a>

                  <div class="menu-item__right pt-4 col">
                    <div class="menu-content">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      
                      <?php 
                      $price_params = get_field('price_params');
                      if( get_field('menu_price') ): ?>
                        <span class="price__box">
                          <?php if( $price_params ): ?>
                          <?php echo $price_params;?>&nbsp;/
                          <?php endif;?>
                          <?php echo the_field('menu_price');?>&nbsp;₽
                        </span> 
                      <?php endif;?>

                    </div>
                    <div class="menu-ingredients">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>            
                </div>

              <?php endwhile; wp_reset_postdata()?>                                   
          </div>

          
        </div>

        <?php if( have_rows( 'new_menu_document') ): ?>
          <ul class="container menu-docs__list" data-aos="fade-up" data-aos-delay="300">

              <?php if( have_rows( 'new_menu_document') ): ?>
              <?php while( have_rows('new_menu_document') ): the_row();           
              $menu_document_title = get_sub_field('menu_document_title');      
              $menu_document_link = get_sub_field('menu_document_link');           
              ?>

                <li class="menu-docs__item">
                    <a href="<?php echo $menu_document_link['url']; ?>" class="menu-docs__link" target="_blank">
                      <svg fill="#f2eb1f" width="200px" height="200px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="list-1"  enable-background="new 0 0 32 32" xml:space="preserve">
                        <rect x="9" y="14" width="1" height="1"/>
                        <rect x="13" y="18" width="10" height="1"/>
                        <rect x="9" y="18" width="1" height="1"/>
                        <rect x="13" y="22" width="10" height="1"/>
                        <rect x="9" y="22" width="1" height="1"/>
                        <rect x="13" y="14" width="10" height="1"/>
                        <path d="M23 6V4h-6V2h-2v2H9v2H4v24h24V6H23zM11 6h10v2H11V6zM26 28H6V8h3v2h14V8h3V28z"/>
                      </svg>

                      <p class="menu-docs__title">
                          <?php echo $menu_document_title; ?>
                      </p>
                    </a>                
                </li>

              <?php endwhile; ?>
              <?php endif; ?>
          </ul>
        <?php endif; ?>
      </section>
    <?php
      }
    ?>
    
    <!-- End Menu Section -->
<script>
  window.addEventListener('DOMContentLoaded', function(){
		var pathNums = document.querySelectorAll('#menu-flters .menu-name'); // все кнопки Табов  
    var targetNums = document.querySelectorAll('.menu-container .menu-item'); // все артиклы табов
 
    // Объявляем функцию присвоения дата-атрибутов
    const tabsSetAttribute = function() {
      if(targetNums.length == pathNums.length) {
        var lenType = targetNums.length;  
      }
      
      var Num  = "1";  // Обозначим переменную, в которую будм заносить число           
      
      for(let n=0; n< lenType; n++) { // перебираем все циклом 
          // console.log(n);             
          Num = n; // Присвоим переменной число цикла        
          pathNums[n].setAttribute('data-filter', '.filter-' + Num); // Добавляем атрибут кнопкам
          targetNums[n].classList.add('.filter-' + Num); // Добавляем атрибут артиклам        
      }
    }

    // Функционал подгрузки меню
    var newsCont = document.querySelector('.menu-wrapper');

    var allnewsPosts = newsCont.querySelectorAll('.menu-wrapper__item'); // Все публикации    

    var newsMoreBtn = document.createElement('button'); // Создаём кнопку Добавить ещё  
    
    if(window.location.pathname == '/en/') {
      newsMoreBtn.innerText = 'Show more';
    } else {
      newsMoreBtn.innerText = 'Показать ещё';
    }

    newsMoreBtn.classList.add('more-button', 'book-a-table-btn'); // Присваиваем её стили 


    if(allnewsPosts.length > 12) {  // Добавляем кнопку, если дипломов более 9
        newsCont.append(newsMoreBtn);
    }

    for(let i=12; i<allnewsPosts.length; i++) {
        allnewsPosts[i].style.display = 'none';             
    }   

    var countD = 12; //Установим счётчик 

    newsMoreBtn.addEventListener('click', function(){
        countD += 6;

        if(countD <= allnewsPosts.length) { 
            for(let i=0; i<countD; i++) {
                allnewsPosts[i].style.display = 'block'; // При клике на кнопку добавляем дипломы
            }
        
            if(countD == allnewsPosts.length) {
                newsMoreBtn.style.display = 'none';
            }          
        } else {              
          allnewsPosts.forEach(function(elsePost){
              elsePost.style.display = 'block'; // При клике на кнопку добавляем дипломы

              newsMoreBtn.style.display = 'none';
          });        
        }
      });
	});
</script>