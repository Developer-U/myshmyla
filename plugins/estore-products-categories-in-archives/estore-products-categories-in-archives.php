<?php
/**
 * Plugin Name: Estore display WooCommerce products and categories/subcategories separately in archive pages
 * Plugin URI: 
 * Description: Display products and catgeories / subcategories as two separate lists in product archive pages
 * Version: 1.0
 * Author: Moiseev Yury
 * Author URI: 
 *
 *
 */

function estore_product_subcategories( $args = array() ) {  

  $parentid = get_queried_object_id();
         
  $args = array(
      'parent' => $parentid
  );
   
  $terms = get_terms( 'product_cat', $args );
   
  if ( $terms ) {

    echo '<div class="catalog__article">';

      echo '<div class="container about__contain">';
            
        echo '<ul class="catalog__list catalog-list row align-items-stretch">';
        
          foreach ( $terms as $term ) {
                          
              echo '<li class="catalog-list__item col-xxl-4 col-sm-6 col-12 row justify-content-between">';
              
                echo '<figure class="catalog-list__image">';                     
                  woocommerce_subcategory_thumbnail( $term );
                echo '</figure>';
                 
                echo '<div class="catalog-list__box col">';
                  echo '<h2 class="catalog-list__heading">';
                      echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
                          echo $term->name;
                      echo '</a>';
                  echo '</h2>';
                echo '</div>';                                                      
              echo '</li>';
          }
        
        echo '</ul>';

      echo '</div>';

    echo '</div>';
   
  }

}

add_action( 'woocommerce_before_shop_loop', 'estore_product_subcategories', 50 );




