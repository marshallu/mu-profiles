<?php
/**
 * Template part for displaying profiles as Card.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MU Profiles
 */

?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
<?php
while ( have_posts() ) {
	the_post();

	$image    = get_field( 'employee_headshot' );
	$position = get_field( 'employee_position' );
	$office   = get_field( 'employee_office_location' );
	$phone    = get_field( 'employee_phone_number' );
	$email    = get_field( 'employee_email_address' );
	?>
	<div class="flex">
		<div class="w-full px-4 py-4">
			<div class="flex flex-col space-y-4">
			<div class="">
				<?php if ( get_field( 'employee_headshot' ) ) { ?>
					<img class="h-full w-full" src="<?php echo esc_url( $image['url'] ); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( $image['ID'], 'large' ) ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php } ?>
			</div>
			<div>
				<?php
				if ( get_field( 'profile_link_to_profile', 'option' ) ) {
					?>
					<div class="text-xl font-semibold"><a href="<?php echo esc_url( get_post_permalink() ); ?>"><?php the_title(); ?></a></div>
					<?php
				} else {
					?>
					<div class="text-xl font-semibold"><?php the_title(); ?></div>
				<?php } ?>
				<?php if ( get_field( 'employee_position' ) ) { ?>
					<div class="mt-1"><?php esc_attr( get_field( 'employee_position' ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_office_location' ) ) { ?>
					<div class="mt-1">Office: <?php esc_attr( get_field( 'employee_office_location' ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_phone_number' ) ) { ?>
					<div class="mt-1">Phone: <?php echo esc_attr( mu_profiles_format_phone( get_field( 'employee_phone_number' ) ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_email_address' ) && ( 'both' === get_field( 'profile_show_email_address', 'option' ) || 'listing' === get_field( 'profile_show_email_address', 'option' ) ) ) { ?>
					<div class="flex items-center my-2"><a href="mailto:<?php esc_attr( get_field( 'employee_email_address' ) ); ?>"><?php esc_attr( get_field( 'employee_email_address' ) ); ?></a></div>
				<?php } ?>

				<?php if ( get_field( 'employee_website' ) ) { ?>
					<div><a href="<?php esc_attr( get_field( 'employee_website' ) ); ?>">Visit Website</a></div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div>
