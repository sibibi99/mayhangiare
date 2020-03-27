<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tctheme
 */

get_header('tintuc');
?>

	<section id="primary" class="hero-section hero-section-3  wow bounceInDown bg-light">
		<main id="main" class="site-main container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title text-danger">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Kết quả tìm kiếm cho: %s', 'tctheme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
			</header><!-- .page-header -->
			<div class="row">
		
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

		

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
	<div class="row phantrang mb-4">
	<?php   
    the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( 'Back', 'textdomain'),
      'next_text' => __( 'Next', 'textdomain'),
      'screen_reader_text' => ' '
    )
    );?> 
	</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
