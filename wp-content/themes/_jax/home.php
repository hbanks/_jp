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

<section id="home" class="secondary-header hero-section" style="background-image: url('<?php echo $headerImage ?>')">
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

<section class="wedding-party-container">
	<!-- start wedding party ladies -->
	<?php if( have_rows('wedding_party_ladies') ): ?>
		<div class="the-ladies">
			<h3 class="wedding-party-subheading"><?php the_field('wedding_party_subheading_ladies') ?></h3>
			<?php while( have_rows('wedding_party_ladies') ): the_row(); 

				// vars
				$partyMemberImage = get_sub_field('wedding_party_image');
				$partyMemberName = get_sub_field('wedding_party_name');
				$partyMemberIntro = get_sub_field('wedding_party_intro');

			?>

			<div class="party-member lady">
  			<div class="party-member-img" style="background-image: url('<?php echo $partyMemberImage ?>')">
				</div>
				<div class="party-member-intro">
					<h4 class="party-member-name"><?php echo $partyMemberName ?></h4>
					<p class="party-member-desc">
						<?php echo $partyMemberIntro ?>
					</p>
				</div>
			</div>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<!-- end wedding party ladies -->

	<!-- start wedding party gents -->
	<?php if( have_rows('wedding_party_gents') ): ?>
		<div class="the-gents">
			<h3 class="wedding-party-subheading"><?php the_field('wedding_party_subheading_gents') ?></h3>
			<?php while( have_rows('wedding_party_gents') ): the_row(); 

				// vars
				$partyMemberImage = get_sub_field('gentlemen_image');
				$partyMemberName = get_sub_field('gentlemen_name');
				$partyMemberIntro = get_sub_field('gentlemen_intro');

			?>

			<div class="party-member gent">
  			<div class="party-member-img" style="background-image: url('<?php echo $partyMemberImage ?>')">
				</div>
				<div class="party-member-intro">
					<h4 class="party-member-name"><?php echo $partyMemberName ?></h4>
					<p class="party-member-desc">
						<?php echo $partyMemberIntro ?>
					</p>
				</div>
			</div>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<!-- end wedding party gents -->
</section>

<?php
/**
 * The template for the RSVP page
 *
 *
 * @package Jax_and_Mark
 */

get_footer(); ?>