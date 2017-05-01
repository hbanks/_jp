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
	$travelImage = get_field('travel_image');
	$registryImage = get_field('registry_image');
	
?>

<!-- wedding details section -->
<section class="secondary-header when-where-header" style="background-image: url('<?php echo $headerImage ?>')">
	<!-- <h2 class="secondary-header-text when-when-header-text"> <?php the_field('wedding_details_heading'); ?> </h2> -->
</section>

<section id="the-details"  class="section-info when-where-details">
	<h3 class="section-subheading when-when-subheading when-when-details-heading"> <?php the_field('wedding_details_subheading'); ?> </h3>

	<div class="date-time">
		<p class="wedding-date"><?php the_field('wedding_date'); ?> </p>
		<p class="wedding-time"><span>at</span> <?php the_field('wedding_time'); ?> </p>
		<p class="wedding-venue"><?php the_field('wedding_venue'); ?> </p>
		<p class="wedding-address"><?php the_field('venue_address'); ?> </p>
	</div>
</section>

<!-- transportation section -->
<section id="travel" class="section-header center-image-header travel-header" style="background-image: url('<?php echo $travelImage ?>')">
	<h2 class="when-when-heading travel-heading"> <?php the_field('travel_heading'); ?> </h2>
</section>

<section class="section-info travel-details">

	<div class="directions">
		<?php if( have_rows('travel_directions') ): ?>
				<?php while( have_rows('travel_directions') ): the_row(); ?>

				<div class="travel-types">
						<h4 class="travel-name"><?php the_sub_field('directions_title') ?></h4>
						<p class="travel-directions"> <?php the_sub_field('instructions') ?> </p>
				</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<!-- parking section -->
	<h3 class="when-when-subheading travel-subheading"> <?php the_field('parking_heading'); ?> </h3>

	<p class="parking-info"><?php the_field('parking_info'); ?></p>

	<div class="tavel-map">
		<?php the_field('travel_map'); ?>
	</div>

</section>

<!-- accommodations section -->
<section id="accommodations" class="section-header center-image-header accommodations-header" style="background-image: url('<?php echo $accommodationsImage ?>')">
	<h2 class="when-when-heading accommodation-heading"> <?php the_field('accommodations_heading'); ?> </h2>
</section>

<section class="section-info accommodation-details">
	<h3 class="when-when-subheading accommodation-subheading"> <?php the_field('accommodation_subheading'); ?> </h3>

	<div class="section-repeater accommodations-repeater">
		<?php if( have_rows('accommodations_details') ): ?>
				<?php while( have_rows('accommodations_details') ): the_row(); ?>

				<div class="accommodation-detail">
						<h4 class="section-name accommodation-name"><?php the_sub_field('accommodation_name') ?></h4>
						<p class="accommodation-address"> <?php the_sub_field('accommodation_address') ?> </p>
						<p class="accommodation-phone"> <?php the_sub_field('accommodation_phone') ?> </p>
						<a href="<?php the_sub_field('accommodation_site') ?>" target="_blank" class="section-site-link accommodation-site">View</a>
				</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<!-- registry section -->
<section id="registry" class="section-header center-image-header registry-header" style="background-image: url('<?php echo $registryImage ?>')">
	<h2 class="when-when-heading registry-heading"> <?php the_field('registry_heading'); ?> </h2>
</section>

<section class="section-info registry-details">
	<h3 class="when-when-subheading registry-subheading"> <?php the_field('registry_subheading'); ?> </h3>

	<div class="section-repeater registry-repeater">
		<?php if( have_rows('registry_locations') ): ?>
				<?php while( have_rows('registry_locations') ): the_row(); ?>

				<div class="registry-detail">
						<h4 class="section-name registry-location"><?php the_sub_field('registry_location') ?></h4>
						<a href="<?php the_sub_field('registry_link') ?>" target="_blank" class="section-site-link registry-link">View</a>
				</div>

				<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>