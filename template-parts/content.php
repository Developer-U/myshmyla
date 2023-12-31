<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="single-menu">
	<header class="entry-header">
		<!-- breadcrumbs -->
        <div class="breadcrumbs">
            <div class="breadcrumbs__container">
                <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<div class="breadcrumbs__list">','</div>' );
                    }
                ?>
            </div>
        </div>
        <!-- breadcrumbs end -->

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="single-menu__title lg:mb-5 mb-3">', '</h1>' );
		else :
			the_title( '<h2 class="single-menu__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				estore_posted_on();
				estore_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php estore_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'estore' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'estore' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php estore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
