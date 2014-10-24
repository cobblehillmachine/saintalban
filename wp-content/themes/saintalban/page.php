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
<div class="wrapper">
	<div class="inside">
		<div class="mainContainer">
			<div class="headerInfo">
				<div class="logoContainer">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Saint Alban">
				</div>
				<div class="addressContainer">
					<p class="effra headerAddress"><a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank"><?php the_field('address'); ?></a></p>
				</div>
				<div class="phoneContainer">
					<p class="effra headerPhone"><?php the_field('phone_number'); ?></p>
				</div>
			</div>

			<div class="mapContainer">
				<a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank"><img class="desktopMap" src="<?php echo get_template_directory_uri(); ?>/images/desktop-map.jpg" alt=""></a>
				<a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank"><img class="mobileMap"src="<?php echo get_template_directory_uri(); ?>/images/mobile-map.jpg" alt=""></a>
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
	</div>
</div>
<div class="bottom"></div>

<?php get_footer(); ?>
