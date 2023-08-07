<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package estore
 */

get_header();
?>

	<section class="single-main">
		<div class="container">
			<div class="single-wrapper row">
				<main id="primary" class="site-main col-xl-8 col-12">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'estore' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'estore' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					endwhile; // End of the loop.					
					?>
				</main><!-- #main -->

				<div class="sidebar col-xl-4 col-12" data-aos="fade-left">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>		
	</section>
	
	<?php get_template_part( 'template-parts/blocks/block-book-table' ); ?>

<?php
get_footer();
