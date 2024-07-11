<?php
/**
 * Default template for individual profiles with MU Profiles
 *
 * @package marsha
 */

get_header();

$toggles = '';
?>
<div class="w-full xl:container mx-auto px-6 pt-4 lg:pt-12 pb-16" id="content" tabindex="-1">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title font-sans uppercase font-semibold text-gray-700 mb-4 text-3xl lg:text-4xl">
					<?php the_title(); ?>
					<?php
					if ( get_field( 'employee_preferred_pronouns' ) ) {
						echo '<span class="lowercase">(' . esc_attr( get_field( 'employee_preferred_pronouns' ) ) . ')</span>';
					}

					if ( ! get_field( 'hide_profile', 'option' ) ) {
						echo ' Profile';
					}
					?>
					</h1>
			</header>

			<div class="entry-content">
				<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
					<div class="lg:col-span-1">
						<?php
						if ( get_field( 'employee_headshot' ) ) {
							$image = get_field( 'employee_headshot' );
							?>
							<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( $image['ID'], 'large' ) ); ?>"  alt="<?php echo esc_attr( $image['alt'] ); ?>" class="rounded-lg" />
						<?php } ?>

						<div class="mt-6 mb-8">
							<?php
							if ( get_field( 'employee_position' ) ) {
								?>
								<div class="my-2 text-lg font-semibold"><?php the_field( 'employee_position' ); ?></div>
							<?php } ?>

							<?php mu_profiles_department_listing( get_the_ID() ); ?>
						</div>

						<?php
						if ( get_field( 'employee_office_location' ) ) {
							?>
								<div class="flex items-start my-4">
									<svg class="fill-gray-200 h-5 w-5 mr-4 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
									<?php the_field( 'employee_office_location' ); ?>
								</div>
						<?php } ?>

						<?php
						if ( get_field( 'employee_phone_number' ) ) {
							?>
								<div class="flex items-center my-4">
									<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>
									<?php echo esc_attr( mu_profiles_format_phone( get_field( 'employee_phone_number' ) ) ); ?>
								</div>
						<?php } ?>

						<?php
						if ( get_field( 'employee_email_address' ) && ( 'both' === get_field( 'profile_show_email_address', 'option' ) || 'both' === get_field( 'profile_show_email_address', 'profile' ) ) ) {
							?>
								<div class="flex items-center my-4">
									<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
									<a href="mailto:<?php the_field( 'employee_email_address' ); ?>"><?php the_field( 'employee_email_address' ); ?></a>

								</div>
						<?php } ?>

						<?php
						if ( get_field( 'employee_website' ) ) {
							?>
							<div class="flex items-center my-4">
								<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg>
								<a href="<?php the_field( 'employee_website' ); ?>">Visit Website</a>
							</div>
						<?php } ?>

						<?php
						if ( get_field( 'more_info_link' ) ) {
							?>
							<div class="flex items-center my-4">
								<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
								<a href="<?php echo esc_url( get_field( 'more_info_link' ) ); ?>">More Info</a>
							</div>
							<?php
						}
						if ( get_field( 'employee_bookings_url' ) ) {
							?>
							<div class="flex items-center my-2">
							<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M1 4c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2 2v12h14V6H3zm2-6h2v2H5V0zm8 0h2v2h-2V0zM5 9h2v2H5V9zm0 4h2v2H5v-2zm4-4h2v2H9V9zm0 4h2v2H9v-2zm4-4h2v2h-2V9zm0 4h2v2h-2v-2z"/></svg>
							<a href="<?php echo esc_url( get_field( 'employee_bookings_url' ) ); ?>">Book a Meeting</a>
							</div>
							<?php
						}
						if ( get_field( 'employee_cvresume' ) ) {
							$cv = get_field( 'employee_cvresume' );
							?>
							<div class="flex items-center my-4">
								<svg class="fill-gray-200 h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
								<a href="<?php echo esc_url( $cv['url'] ); ?>">Curriculum Vitae</a>
							</div>
							<?php
						}
						if ( get_field( 'employee_facebook' ) || get_field( 'employee_twitter' ) || get_field( 'employee_linkedin' ) ) {
							?>
						<div class="flex items-center space-x-4 mt-12">

							<?php
							if ( get_field( 'employee_facebook' ) ) {
								?>
								<a href="<?php the_field( 'employee_facebook' ); ?>" class="py-2 px-2 text-white bg-green rounded hover:bg-green-dark hover:text-white">
									<svg class="fill-white h-5 w-5 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
								</a>
							<?php } ?>

							<?php
							if ( get_field( 'employee_twitter' ) ) {
								?>
								<a href="<?php the_field( 'employee_twitter' ); ?>" class="py-2 px-2 text-white bg-green rounded hover:bg-green-dark hover:text-white">
									<svg class="fill-white h-5 w-5 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
								</a>
								<?php } ?>

							<?php
							if ( get_field( 'employee_linkedin' ) ) {
								?>
								<a href="<?php the_field( 'employee_linkedin' ); ?>" class="py-2 px-2 text-white bg-green rounded hover:bg-green-dark hover:text-white">
									<svg class="fill-white h-5 w-5 hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
								</a>
							<?php } ?>

						</div>
						<?php } ?>

					</div>
					<div class="lg:col-span-3">
						<?php

						if ( get_field( 'videos' )['youtube_videos'] ) {
							if ( get_field( 'videos' )['video_section_title'] ) {
								echo '<h2>' . esc_attr( get_field( 'videos' )['video_section_title'] ) . '</h2>';
							}

							echo '<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-12">';
							foreach ( get_field( 'videos' )['youtube_videos'] as $video ) {
								echo '<div class="aspect-video">';
								echo '<iframe class="h-full w-full" src="https://www.youtube.com/embed/' . esc_attr( $video['youtube_video_id'] ) . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
								echo '</div>';
							}
							echo '</div>';
						}

						if ( get_field( 'employee_biography' ) ) {
							?>
							<h2>Biography</h2>
							<div class="mt-4 mb-12">
								<?php the_field( 'employee_biography' ); ?>
							</div>
							<?php
						}

						if ( get_field( 'employee_contact_for' ) || get_field( 'employee_education' ) || get_field( 'employee_education' ) || get_field( 'employee_teaching_philosophy' ) || get_field( 'employee_awards' ) || get_field( 'employee_scholarship' ) || get_field( 'employee_research' ) || get_field( 'employee_conferences' ) || ( get_field( 'employee_lists' ) || get_field( 'employee_department_service' ) || get_field( 'employee_college_service' ) || get_field( 'employee_university_service' ) || get_field( 'employee_service_profession' ) || get_field( 'employee_service_community' ) ) ) {
							$toggles .= '[mu_toggles]';
						}

						if ( get_field( 'employee_contact_for' ) ) {
							if ( ! empty( get_field( 'profile_row_title', 'option' ) ) ) {
								$list_title = get_field( 'profile_row_title', 'option' );
							} else {
								$list_title = 'Contact For';
							}

							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_contact_for' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['contact_text'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle open=true content_class="overflow-x-auto" id="contactfor" title="' . esc_attr( $list_title ) . '"]' . $profile_toggle_content . '[/mu_toggle]';

						}

						if ( get_field( 'employee_education' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_education' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['education_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" id="education" title="Education Information"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_teaching_philosophy' ) ) {
							$profile_toggle_content = get_field( 'employee_teaching_philosophy' );

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Teaching Philosophy"]' . wp_kses_post( $profile_toggle_content ) . '[/mu_toggle]';
						}

						if ( get_field( 'employee_awards' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_awards' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['award_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Employee Awards and Honors"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_scholarship' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_scholarship' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['scholarship_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Scholarship"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_research' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_research' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['contracts_grants_and_sponsored_research_item'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Contracts, Grants, and Sponsored Research"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_conferences' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_conferences' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['conference_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Conference Presentations"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_lists' ) ) {
							foreach ( get_field( 'employee_lists' ) as $list ) {
								$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
								foreach ( $list['employee_list_item'] as $row ) {
									$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
									$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
									$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
									$profile_toggle_content .= '<span class="flex-1">';
									$profile_toggle_content .= wp_kses_post( $row['list_item_detail'] );
									$profile_toggle_content .= '</span>';
									$profile_toggle_content .= '</div>';
									$profile_toggle_content .= '</div>';
								}
								$profile_toggle_content .= '</div>';

								$toggles .= '[mu_toggle content_class="overflow-x-auto" title="' . esc_attr( $list['list_title'] ) . '"]' . $profile_toggle_content . '[/mu_toggle]';
							}
						}

						if ( get_field( 'employee_department_service' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_department_service' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['service_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Service to the Department"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_college_service' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_college_service' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['service_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Service to the College"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_university_service' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_university_service' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['service_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Service to the University"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_service_profession' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_service_profession' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['service_to_the_profession'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Service to the Profession"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_service_community' ) ) {
							$profile_toggle_content = '<div role="list" class="flex flex-wrap mx-0 lg:-mx-4 justify-center">';
							foreach ( get_field( 'employee_service_community' ) as $row ) {
								$profile_toggle_content .= '<div role="listitem" class="px-0 lg:px-4 w-full lg:w-full flex">';
								$profile_toggle_content .= '<div class="w-full flex items-start px-3 my-2">';
								$profile_toggle_content .= '<svg class="mr-4 h-6 w-6 fill-green mt-1 lg:mt-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/></svg>';
								$profile_toggle_content .= '<span class="flex-1">';
								$profile_toggle_content .= wp_kses_post( $row['service_information'] );
								$profile_toggle_content .= '</span>';
								$profile_toggle_content .= '</div>';
								$profile_toggle_content .= '</div>';
							}
							$profile_toggle_content .= '</div>';

							$toggles .= '[mu_toggle content_class="overflow-x-auto" title="Service to the Community"]' . $profile_toggle_content . '[/mu_toggle]';
						}

						if ( get_field( 'employee_contact_for' ) || get_field( 'employee_education' ) || get_field( 'employee_education' ) || get_field( 'employee_teaching_philosophy' ) || get_field( 'employee_awards' ) || get_field( 'employee_scholarship' ) || get_field( 'employee_research' ) || get_field( 'employee_conferences' ) || ( get_field( 'employee_lists' ) || get_field( 'employee_department_service' ) || get_field( 'employee_college_service' ) || get_field( 'employee_university_service' ) || get_field( 'employee_service_profession' ) || get_field( 'employee_service_community' ) ) ) {
							$toggles .= '[/mu_toggles]';
						}

						echo do_shortcode( $toggles );
						?>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
</div>
<!-- Footer -->
<?php get_footer(); ?>
