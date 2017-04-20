<?php /* Template Name: What To Do Page*/ ?>

<?php
/**
 * The template for the What to Do page
 *
 *
 * @package Jax_and_Mark
 */

get_header(); ?>

<?php 
	//image variables
	$headerImage = get_field('what_to_do_header_image');
	
?>

<section class="secondary-header what-to-do-header" style="background-image: url('<?php echo $headerImage ?>')">
	<!-- <h2 class="secondary-header-text when-when-header-text"> <?php the_field('wedding_details_heading'); ?> </h2> -->
</section>

<section id="what-to-do"  class="section-info what-to-do-details">
	<h3 class="section-subheading what-to-do-subheading"> <?php the_field('what_to_do_heading'); ?> </h3>

	<div class="activity-repeater">
		<?php if( have_rows('activity') ): ?>
				<?php while( have_rows('activity') ): the_row(); ?>

				<div class="activity-detail">
						<h4 class="activity-name"><?php the_sub_field('activity_name') ?></h4>
						
							<p class="activity-address"> 
								<?php if( the_sub_field('activity_address') ): ?>
									<?php the_sub_field('activity_address') ?>
								<?php endif; ?>	
							</p>

						<p class="activity-description"> <?php the_sub_field('activity_description') ?> </p>

						<a href="<?php the_sub_field('activity_website') ?>" target="_blank" class="activity-site">View</a>
				</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>