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

	<div class="inside">
		<div class="main-container">
			<div class="header">
				<div class="logo-wrapper">
					<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Saint Alban">
					<p class="effra">All Day</p>
				</div>
				<div class="address-wrapper">
					<p class="effra address"><a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank"><?php the_field('address'); ?></a></p>
				</div>
				<div class="phone-wrapper">
					<p class="effra phone"><?php the_field('phone_number'); ?></p>
				</div>
			</div>
			<div class="flexslider">
				<ul class="slides">
				<?php while( have_rows('homepage_slider') ): the_row(); 
				$image = get_sub_field('slider_image'); ?>
					<li>
						<img src="<?php echo $image ?>">
					</li>
				<?php endwhile; ?>
				</ul>
			</div>

			<div class="bottom-cont">
				<div class="left-cont  ">
					<div class="shop-hours row">
						<img src="<?php echo get_template_directory_uri(); ?>/images/shop_hours.png" alt="">
						<div class="hours gothic">
							<?php the_field('hours'); ?>
						</div>
					</div>
					<div class="slogan row effra">
						<?php the_field('slogan'); ?>
					</div>
					<?php $menu = get_field('menu_pdf');
					if ($menu) { ?>
					<div class="menu-cta-wrapper row">
						<div class="menu-cta">
							<div class="top">
								<div class="table-cell"><img src="<?php echo get_template_directory_uri(); ?>/images/our_menu.png" alt=""></div>
								<div class="table-cell effra"><a target=_blank href="<?php the_field('drink_menu'); ?>">Drinks</a></div>
							</div>
							<div class="bottom effra">
								<div class="table-cell"><a target=_blank href="<?php the_field('breakfast_menu'); ?>">Breakfast</a></div>
								<div class="table-cell"><a target=_blank href="<?php the_field('lunch_menu'); ?>">Lunch</a></div>
								<div class="table-cell"><a target=_blank href="<?php the_field('dinner_menu'); ?>">Dinner</a></div>
							</div>
						</div>
					</div>
					<?php } else {?>
						<div class="menu-cta row empty">
	
						</div>
						<?php } ?>
				</div>

				<div class="map-wrapper">
					<a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank" class="mobile"><img class="map" src="<?php echo get_template_directory_uri(); ?>/images/desktop-map.png" alt=""></a>
					<a href="https://www.google.com/maps/place/710+King+St,+Charleston,+SC+29403/@32.798969,-79.946458,17z/data=!3m1!4b1!4m2!3m1!1s0x88fe7a5cbd6a1605:0x863feefdd436a06f" target="_blank"></a>
					<!--
<div class="parking-info-wrapper">
						<div class="parking-info">
							<span class="gothic parking"><em><?php the_field('parking_info'); ?></em></span>
							<p class="effra"><?php the_field('address'); ?></p>
						</div>
					</div>
-->
				</div>
			</div>
		</div>
	</div>

<div class="bottom"></div>

<?php get_footer(); ?>
