<?php /* Template Name: When & Where Page*/ ?>

<?php
/**
 * The template for the wedding details page
 *
 *
 * @package Jax_and_Mark
 */

get_header(); ?>

<?php 
	//image variables
	$headerImage = get_field('wedding_details_image');
	$accommodationsImage = get_field('accommodations_image');
	$travelImage = get_field('wedding_party_heading_image');
	
?>

<section class="secondary-header when-when-header" style="background-image: url('<?php echo $headerImage ?>')">
	<h2 class="secondary-header-text when-when-heading"> <?php the_field('wedding_details_heading'); ?> </h2>
</section>

<section id="the-details"  class="section-info when-when-details">
	<h3 class="section-subheading when-when-subheading when-when-details-heading"> <?php the_field('wedding_details_subheading'); ?> </h3>

	<div class="date-time">
		<p class="wedding-date"><?php the_field('wedding_date'); ?> </p>
		<p class="wedding-time"><?php the_field('wedding_time'); ?> </p>
		<p class="wedding-venue"><?php the_field('wedding_venue'); ?> </p>
		<p class="wedding-address"><?php the_field('venue_address'); ?> </p>
	</div>
</section>

<section id="accommodations" class="section-header accommodations-header" style="background-image: url('<?php echo $accommodationsImage ?>')">
	<h2 class="when-when-heading accommodation-heading"> <?php the_field('accommodations_heading'); ?> </h2>
</section>

<section class="section-info accommodation-details">
	<h3 class="when-when-subheading accommodation-subheading"> <?php the_field('accommodation_subheading'); ?> </h3>

	<div class="accommodations-repeater">
		<?php if( have_rows('accommodations_details') ): ?>
				<?php while( have_rows('accommodations_details') ): the_row(); ?>

				<div class="accommodation-detail">
						<h4 class="accommodation-name"><?php the_sub_field('accommodation_name') ?></h4>
						<p class="accommodation-address"> <?php the_sub_field('accommodation_address') ?> </p>
						<p class="accommodation-phone"> <?php the_sub_field('accommodation_phone') ?> </p>
						<a href="<?php the_sub_field('accommodation_site') ?>" class="accommodation-site">View</a>
				</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>