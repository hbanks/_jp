<?php /* Template Name: RSVP Page*/ ?>

<?php
/**
 * The template for the RSVP page
 *
 *
 * @package Jax_and_Mark
 */

get_header(); ?>

<?php 
	//image variables
	$headerImage = get_field('rsvp_image');
	
?>

<section class="secondary-header rsvp-header" style="background-image: url('<?php echo $headerImage ?>')">
</section>

<section id="rsvp"  class="section-info rsvp-section">
	<h3 class="section-subheading rsvp-subheading"> <?php the_field('rsvp_heading'); ?> </h3>

		<h4 class="section-subheading rsvp-subheading"> <?php the_field('rsvp_subheading'); ?> </h4>

	<div class="rsvp-form">
		    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="rsvp-content">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
	</div>
</section>

<?php
/**
 * The template for the RSVP page
 *
 *
 * @package Jax_and_Mark
 */

get_footer(); ?>