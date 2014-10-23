<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="border"></div>
<div class="mainContainer">
	<div class="headerInfo">
		<div class="logoContainer">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Saint Alban">
		</div>
		<div class="addressContainer">
			<p class="effra headerAddress"><?php the_field('address'); ?></p>
		</div>
		<div class="phoneContainer">
			<p class="effra headerPhone"><?php the_field('phone_number'); ?></p>
		</div>
	</div>

	<div class="mapContainer">
		<img class="desktopMap" src="<?php echo get_template_directory_uri(); ?>/images/desktop-map.jpg" alt="">
		<img class="mobileMap"src="<?php echo get_template_directory_uri(); ?>/images/mobile-map.jpg" alt="">
		<div class="parkingInfoContainer">
			<div class="parkingInfoContent">
				<span class="gothic parkingInfo"><em><?php the_field('parking_info'); ?></em></span>
				<p class="effra"><?php the_field('address'); ?></p>
			</div>
		</div>
	</div>

	<div class="footerInfo">
		<h2 class="gothic footerContent"><?php the_field('footer_information'); ?></h2>
	</div>

</div>


<?php get_footer(); ?>
