<?php
/**
 * Template part for displaying profiles as Card.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MU Profiles
 */

?>
<div class="flex flex-wrap mx-0 lg:-mx-4">
<?php
while ( have_posts() ) {
	the_post();

	$image    = get_field( 'employee_headshot' );
	$position = get_field( 'employee_position' );
	$office   = get_field( 'employee_office_location' );
	$phone    = get_field( 'employee_phone_number' );
	$email    = get_field( 'employee_email_address' );
	?>
	<div class="w-full lg:w-1/3 px-0 lg:px-4 mb-4 lg:mb-8 flex flex-row">
		<div class="w-full bg-gray-100 border border-gray-200 px-4 py-4">
			<?php
			if ( get_field( 'profile_link_to_profile', 'option' ) ) {
				?>
				<div class="text-xl font-semibold"><a href="<?php echo esc_url( get_post_permalink() ); ?>"><?php the_title(); ?></a></div>
				<?php
			} else {
				?>
				<div class="text-xl font-semibold"><?php the_title(); ?></div>
			<?php } ?>

			<div class="pt-3 flex space-x-4">
			<div class="w-1/3">
				<?php if ( get_field( 'employee_headshot' ) ) { ?>
					<img class="rounded-lg" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php } ?>
			</div>
			<div class="w-2/3">
				<?php if ( get_field( 'employee_position' ) ) { ?>
					<div class="font-semibold"><?php echo esc_attr( get_field( 'employee_position' ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_office_location' ) ) { ?>
					<div>Office: <?php echo esc_attr( get_field( 'employee_office_location' ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_phone_number' ) ) { ?>
					<div>Phone: <?php echo esc_attr( mu_profiles_format_phone( get_field( 'employee_phone_number' ) ) ); ?></div>
				<?php } ?>

				<?php if ( get_field( 'employee_email_address' ) && ( 'both' === get_field( 'profile_show_email_address', 'option' ) || 'listing' === get_field( 'profile_show_email_address', 'option' ) ) ) { ?>
					<div class="flex items-center my-2"><a href="mailto:<?php echo esc_attr( get_field( 'employee_email_address' ) ); ?>"><?php echo esc_attr( get_field( 'employee_email_address' ) ); ?></a></div>
				<?php } ?>

				<?php if ( get_field( 'employee_website' ) ) { ?>
					<div><a href="<?php echo esc_attr( get_field( 'employee_website' ) ); ?>">Visit Website</a></div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div>
