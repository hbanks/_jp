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
	$headerImage = get_field('hero_image');
?>
<section class="hero-section" style="background-image: url('<?php echo $headerImage ?>')">
	<div class="text-overlay">	
		<div class="header-text-container">	
			<h1 class="hero-text"> <?php the_field('hero_text'); ?> </h1>

			<h2 class="hero-subtext"> <?php the_field('hero_subtext'); ?> </h2>
		</div>
	</div>
</section>