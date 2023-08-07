<?php

get_header();
?>

    <main class="main container-fluid2  row">
    
        <?php get_sidebar(); ?>

        <div class="main-content col">
            <section class="reviews-page">
                <?php estore_add_breadcrumbs( );?>

                <div class="container-fluid2 hero__cont row justify-content-between align-items-stretch">

                    <div class="reviews-page__main">
                        <h1 class="pages-heading">
                            <?php the_title(); ?>
                        </h1> 
                        
                        <div class="reviews-page__box row">
                            <ul class="reviews-page__list list-rew row">

                                <?php if( have_rows('new_reviews_type') ): ?>
                                <?php while( have_rows('new_reviews_type') ): the_row();
                                    $revTypeKey = get_sub_field('reviews_type_key');
                                    $revTypeName = get_sub_field('reviews_type_name');                               
                                ?>

                                <li class="list-rew__item col-auto">
                                    <a href="#" class="list-rew__link" data-path3="<?= $revTypeKey ?>">
                                        <?= $revTypeName ?>
                                    </a>
                                </li>

                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>

                            <button id="js-openRew" class="reviews-page__btn">оставить отзыв</button>
                        </div>

                        <article class="reviews-page__page" data-target3="one">
                            <h2 class="visually-hidden">Видеоотзывы</h2>

                            <div class="reviews-page__article article-rew article-rew-active" data-target2="one">                                
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
            
                            <div class="reviews-page__article article-rew" data-target2="two">
                                <!-- Блок для того, чтобы понять какая страница -->
                                <span class="none-block">2</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
            
                            <div class="reviews-page__article article-rew" data-target2="three">
                                <span class="none-block">3</span>
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
            
                            <div class="reviews-page__article article-rew" data-target2="four">
                                <span class="none-block">4</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
            
                            <div class="reviews-page__article article-rew" data-target2="five">
                                <span class="none-block">5</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div>
            
                            <div class="reviews-page__article article-rew" data-target2="eight">
                                <span class="none-block">8</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div>
                            
                            <div class="reviews-page__article article-rew" data-target2="nine">
                                <span class="none-block">9</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
            
                            <div class="reviews-page__article article-rew" data-target2="ten">
                                <span class="none-block">10</span>
            
                                <div class="article-rew__page">
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>
                
                                    <div class="reviews__list reviews-list article-rew container row justify-content-between">
                                        <div class="reviews-list__left col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>                
                                    </div>
                
                                    <div class="reviews__list reviews-list container row justify-content-between">
                                        <div class="reviews-list__left col-md-5 col-12">
                                            <article class="reviews-list__review">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                        
                                            <article class="reviews-list__review reviews-list__review_two">
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>
                        
                                                <div class="reviews-list__video reviews-list__video_two">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>                        
                                            </article>
                                        </div>
                        
                                        <div class="reviews-list__right col-md-7 col-12">
                                            <article class="reviews-list__wide">
                                                <div class="reviews-list__video reviews-list__video_wide">
                                                    <img src="/images/potolok-img.jpg" alt="отзыв" class="reviews-list__img">
                                                    
                                                    <svg class="reviews-list__icon">
                                                        <use xlink:href="images/icons/sprite.svg#video"></use>                                                   
                                                    </svg>
                                                </div>
                                                
                                                <date class="reviews-list__date">27 августа 2020 г.</date>
                        
                                                <h3 class="reviews-list__heading reviews-list__heading_wide">
                                                    Установка натяжного потолка, белый матовый
                                                </h3>                                                
                                            </article>
                                        </div>
                                    </div>                       
                                </div>                    
                            </div> 
                            
                            <ul id="pagination" class="article-rew__list list-digits row">
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2 black" data-path2="one">1</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="two">2</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="three">3</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="four">4</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="five">5</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link">...</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="eight">8</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="nine">9</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links2" data-path2="ten">10</a>
                                </li>
                            </ul>
                        </article>

                        <article class="reviews-page__page" data-target3="two">
                            <h2 class="visually-hidden">Наши клиенты</h2>

                            <div class="reviews-page__article article-text-rew article-rew-active" data-target4="one">                               
                                <div class="reviews-page__box row">
                                    <ul class="reviews-page__child text-reviews">
                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>

                                    <ul class="reviews-page__child text-reviews">
                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="reviews-page__article article-text-rew" data-target4="two">
                                <span class="none-block">2</span>

                                <div class="reviews-page__box row">
                                    <ul class="reviews-page__child text-reviews">
                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>

                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam 
                                                elementum pulvinar etiam non. Nunc aliquet bibendum enim facilisis gravida. 
                                                Egestas quis ipsum suspendisse ultrices gravida dictum fusce. Facilisis gravida 
                                                neque convallis a cras semper. In fermentum et sollicitudin ac. Scelerisque 
                                                mauris pellentesque pulvinar pellentesque habitant morbi tristique. Sem fringilla
                                                ut morbi tincidunt. Fames ac turpis egestas maecenas pharetra. Ac tortor vitae 
                                                purus faucibus ornare suspendisse sed nisi lacus. Egestas sed sed risus pretium. 
                                                Mauris ultrices eros in cursus. Non nisi est sit amet facilisis. Et tortor 
                                                consequat id porta nibh. Pulvinar etiam non quam lacus suspendisse faucibus 
                                                interdum posuere lorem. Id diam vel quam elementum pulvinar etiam non. 
                                                Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis.
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                        
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div> 
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>

                                    <ul class="reviews-page__child text-reviews">
                                        <li class="text-reviews__item">
                                            <date class="reviews-list__date">27 августа 2020 г.</date>
                                
                                            <h3 class="reviews-list__heading">
                                                Установка натяжного потолка, белый матовый
                                            </h3>
                
                                            <p class="text-reviews__text">
                                                Lectus arcu bibendum at varius vel pharetra. Quisque id diam vel quam elementum pulvinar 
                                                etiam non. Nunc aliquet bibendum enim facilisis gravida. Egestas quis ipsum suspendisse 
                                                ultrices gravida dictum fusce. Facilisis gravida neque convallis a cras semper. 
                                                In fermentum et sollicitudin ac. Scelerisque mauris pellentesque pulvinar pellentesque 
                                                habitant morbi tristique. Sem fringilla ut morbi tincidunt. Fames ac turpis egestas 
                                                maecenas pharetra. Ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus. 
                                                Egestas sed sed risus pretium. 
                                            </p>
                
                                            <!-- Slider swiper -->
                                            <div class="for-slider">
                                                <div class="text-reviews__slider swiper swiper-container text-reviews-slider">                        
                                                    <div class="swiper-wrapper text-reviews__wrapper"> 
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                    
                                                        <div class="swiper-slide text-reviews__slide">
                                                            <img class="potolok-slider__img" src="/images/potolok-img.jpg" alt="Изображение потолка">                                
                                                        </div>
                                                    </div>
                    
                                                    <div class="swiper-button-prev button-prev-el2"></div>
                                                    <div class="swiper-button-next button-next-el2"></div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <ul class="article-rew__list list-digits row">
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4 black" data-path4="one">1</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="two">2</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="three">3</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="four">4</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="five">5</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link">...</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="eight">8</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="nine">9</a>
                                </li>
                                <li class="list-digits__item col-auto">
                                    <a href="#" class="list-digits__link js-links4" data-path4="ten">10</a>
                                </li>
                            </ul>
                        </article>

                        <article class="reviews-page__page reviews-page__article" data-target3="three">
                            <h2 class="visually-hidden">Отзовики</h2>

                            <div class="reviews-page__box reviews-page__cont">
                                <p class="reviews-page__descr">
                                    За&nbsp;многолетний опыт более 1000 клиентов оценили результат, написали 
                                    рекомендации. Большинство заказчиков остались полностью довольны. Отзывы 
                                    о&nbsp;натяжных потолках есть на&nbsp;разных площадках: OTZOVIK.COM, 
                                    IRECOMMEND.RU, PRO- FIRMY.RU, ZOON.RU, YELL.RU. Мы&nbsp;собираем мнения 
                                    в&nbsp;письменной форме, делаем фотографии и&nbsp;записываем видео ролики. 
                                    Хорошая репутация компании&nbsp;&mdash; это огромный труд и&nbsp;контроль 
                                    качества.
                                </p>

                                <ul class="reviews-page__logos row">
                                    <li class="reviews-page__logo">
                                        <img src="/images/otziv1.png" alt="Лого отзовика" class="reviews-page__image">

                                        <p class="reviews-page__name">
                                            Отзовик
                                        </p>
                                    </li>

                                    <li class="reviews-page__logo">
                                        <img src="/images/otziv2.png" alt="Лого отзовика" class="reviews-page__image">

                                        <p class="reviews-page__name">
                                            PRO
                                        </p>
                                    </li>

                                    <li class="reviews-page__logo">
                                        <img src="/images/otziv3.png" alt="Лого отзовика" class="reviews-page__image">

                                        <p class="reviews-page__name">
                                            IRecommend.ru
                                        </p>
                                    </li>

                                    <li class="reviews-page__logo">
                                        <img src="/images/otziv4.png" alt="Лого отзовика" class="reviews-page__image">

                                        <p class="reviews-page__name">
                                            Zoon
                                        </p>
                                    </li>

                                    <li class="reviews-page__logo">
                                        <img src="/images/otziv5.png" alt="Лого отзовика" class="reviews-page__image">

                                        <p class="reviews-page__name">
                                            YELL
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>           
                </div>
            </section>

            <section class="about-page__contact">
                <div class="container cta__contain">
                    <div class="cta__box cta-box row justify-content-between">
                        <div class="cta-box__img"></div>

                        <div class="cta-box__text">
                            <h2 class="cta-box__heading">
                                есть вопросы?
                            </h2>

                            <p class="cta-box__descr">
                                Задать их по номеру телефона +7&nbsp;(495)&nbsp;000-00-00 или оставте свой номер 
                                телефона и наш инженер перезвонит вам через 15 минут
                            </p>
                        </div>

                        <div class="cta-box__cta row justify-content-between align-items-end">
                            <form class="cta-box__form col-xxl-6 col-12" action="#" method = "POST">
                                <input type="tel" class="hero-cta__input" placeholder="+ 7 ( _ _ _ )  _ _ _   _ _   _ _">

                                <button class="hero-cta__button cta-box__btn" type="submit">оставить заявку</button> 
                            </form>

                            <p class="cta-box__agree col-xxl-6 col-12">
                                Нажимая «Оставить завку», я соглашаюсь c&nbsp;обработкой персональных данных на 
                                условиях Политики конфиденциальности.
                            </p>
                        </div>
                    </div>
                </div>
            </section>           
        </div>
    </main>       

<?php get_footer(); ?>