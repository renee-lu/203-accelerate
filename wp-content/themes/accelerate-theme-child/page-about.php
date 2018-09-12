<?php
/**
 * The template for displaying services
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


 get_header(); ?>

 <div id="primary" class="about-page-hero-content">

	 <div class="main-content" role="main">
		 <?php while ( have_posts() ) : the_post(); ?>
		 <?php the_content(); ?>
	 <?php endwhile; // end of the loop. ?>
	 </div><!-- .main-content -->
</div><!-- #primary -->



		 <?php while ( have_posts() ) : the_post();
			 $service_1 = get_field('service_1');
			 $description_1 = get_field('description_1');
			 $icon_1 = get_field('icon_1');
			 $service_2 = get_field('service_2');
			 $description_2 = get_field('description_2');
			 $icon_2 = get_field('icon_2');
			 $service_3 = get_field('service_3');
			 $description_3 = get_field('description_4');
			 $icon_3 = get_field('icon_3');
			 $service_4 = get_field('service_4');
			 $description_4 = get_field('description_4');
			 $icon_4 = get_field('icon_4');
			 $size = "full";?>



			 <section class="about-us">
				 <div class="service-overview">

				 	<h2> Our Services</h2>
					<p> We take pride in our clients and the work we create for them. <br> Here is a brief view of our offered services.</p>

					<div id="icon-1" class="icon-1">
					<?php if($icon_1) {
					 echo wp_get_attachment_image( $icon_1, $size );
					} ?>
				</div>
				<div id="service-1" class="service-1">
					 <h4><?php echo $service_1;?></h4>
					 <p><?php echo $description_1;?></p>
				 </div>


				 	<div id="service-2" class="service-2"
					 <h4><?php echo $service_2;?></h4>
					 <p><?php echo $description_2;?></p>
				 </div>
				 <div id="icon-2" class="icon-2">
					 <?php if($icon_2) {
	 					echo wp_get_attachment_image( $icon_2, $size );
	 				 } ?>
				 </div>

				 <div id="icon-3" class="icon-3">
				 <?php if($icon_3) {
					echo wp_get_attachment_image( $icon_3, $size );
				 } ?>
			 </div>
					 <div id="service-3" class="service-3"
					 <h4><?php echo $service_3;?></h4>
					 <p><?php echo $description_3;?></p>
				 </div>



				 		<div id="service-4" class="service-4"
					 <h4><?php echo $service_4;?></h4>
					 <p><?php echo $description_4;?></p>
				 </div>
				 <div id="icon-4" class="icon-4">
					 <?php if($icon_4) {
	 					echo wp_get_attachment_image( $icon_4, $size );
	 				 } ?>
				 </div>

				 <div class=work-with-us>
				 <h2> Interested in working with us? </h2>
				 <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact us</a>
			 </div>



			</div>
<?php endwhile; // end of the loop. ?>
		</section>






 <?php get_footer(); ?>
