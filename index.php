<?php
get_header('tintuc');
?>
<div class="container">
  <div class="row">

  <?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>			
				
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
  </div>  
    <div class="phantrang my-4 row bg-light mx-auto d-flex">
    <?php   
    the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( 'Back', 'textdomain'),
      'next_text' => __( 'Next', 'textdomain'),
      'screen_reader_text' => ' '
    )
    );?>
  
    </div>
</div>


<?php
get_footer();
?>