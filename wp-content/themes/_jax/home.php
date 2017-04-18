<?php /* Template Name: Home Page */ ?>

<?php
/**
 * The template for the home page
 *
 *
 * @package Jax_and_Mark
 */

get_header(); ?>

<?php 
	//image variables
	$headerImage = get_field('hero_image');
	$ourStoryImage = get_field('our_story_image');
	$weddingPartyImage = get_field('wedding_party_heading_image');

?>

<section id="home" class="hero-section" style="background-image: url('<?php echo $headerImage ?>')">
<!-- 	<div class="text-overlay">	
		<div class="header-text-container">	
			<h1 class="hero-text"> <?php the_field('hero_text'); ?> </h1>

			<h2 class="hero-subtext"> <?php the_field('hero_subtext'); ?> </h2>
		</div>
	</div> -->
</section>

<section id="our-story" class="our-story">
	<div class="section-wrapper">
		<h3 class="section-heading our-story-heading"><?php the_field('our_story_heading'); ?> </h3>

	<div class="section-content our-story-container">		
		<div class="our-story-img" style="background-image: url('<?php echo $ourStoryImage ?>')"></div>

		<p class="our-story-desc"><?php the_field('our_story_description'); ?> </p></div>
	</div>
</section>

<section class="wedding-party-heading-container" style="background-image: url('<?php echo $weddingPartyImage ?>')">
	<h2 class="wedding-party-heading"> <?php the_field('wedding_party_heading'); ?> </h2>
</section>