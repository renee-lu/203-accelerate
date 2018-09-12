<?php
/**
 * The template for displaying services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


 get_header(); ?>


	 <div id="primary" class="home-page hero-content">
		 <div class="main-content" role="main">
			 <?php while ( have_posts() ) : the_post();



 				$description = get_field('description');
 				$icon_1 = get_field('icon_1');



 				$size = "full";?>

				<article class="service">
					<aside class="service-sidebar">
						<h2><?php the_title();?></h2>
						<h4><?php echo $description;?></h4>

						<?php the_content(); ?>
							</aside>

						<div class ="service-icons">
								<?php if($icon_1) {
									echo wp_get_attachment_image( $icon_1, $size );
								 } ?>

							</div>

						</article>


 			<?php endwhile; // end of the loop. ?>
 		</div><!-- .main-content -->



 	</div><!-- #primary -->

 <?php get_footer(); ?>
