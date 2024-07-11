<?php
/**
 * Customize the Dashboard and Editor for Profiles and Departments
 *
 * @package mu-profiles
 */

/**
 * Remove YoastSEO metaboxes from Profiles
 */
function mu_profiles_remove_yoast_metabox_employees() {
	remove_meta_box( 'wpseo_meta', 'employee', 'normal' );
}
add_action( 'add_meta_boxes', 'mu_profiles_remove_yoast_metabox_employees', 11 );

/**
 * Remove Date, Last Modified, and Yoast SEO Columns from Profile listing page
 *
 * @param type $columns Default WordPress post columns.
 */
function set_custom_edit_employee_columns( $columns ) {
	if ( ! is_super_admin() ) {
		unset( $columns['date'] );
		unset( $columns['modified'] );
	}

	unset( $columns['wpseo-score'] );
	unset( $columns['wpseo-score-readability'] );
	unset( $columns['wpseo-title'] );
	unset( $columns['wpseo-metadesc'] );
	unset( $columns['wpseo-focuskw'] );
	unset( $columns['wpseo-links'] );
	unset( $columns['wpseo-linked'] );
	$columns['title'] = __( 'Name', 'mu-profiles' );
	return $columns;
}
add_filter( 'manage_employee_posts_columns', 'set_custom_edit_employee_columns' );
add_filter( 'manage_edit-employee_sortable_columns', 'mu_profiles_add_custom_column_make_sortable' );

/**
 * Make the Last Modified column sortable
 *
 * @param object $columns The list of columns.
 * @return object
 */
function mu_profiles_add_custom_column_make_sortable( $columns ) {
	$columns['modified'] = 'modified';
	return $columns;
}

/**
 * Change placeholder text on Create/Edit Profile page to 'Enter Name Here'
 *
 * @param string $title Current Post title.
 */
function mu_profiles_change_default_title_to_name( $title ) {
	$screen = get_current_screen();

	if ( 'employee' === $screen->post_type ) {
		return 'Enter Name Here';
	}
}
add_filter( 'enter_title_here', 'mu_profiles_change_default_title_to_name' );

/**
 * Modify the title to the name on save.
 *
 * @param array $data The array of data.
 * @return array
 */
function mu_profiles_modify_title( $data ) {
	if ( 'employee' === $data['post_type'] && ( isset( $_POST['acf']['field_60d9fadc1cb1d'] ) && isset( $_POST['acf']['field_60d9faf11cb1f'] ) ) ) {
		$employee_first = sanitize_text_field( wp_unslash( $_POST['acf']['field_60d9fadc1cb1d'] ) );
		$employee_last  = sanitize_text_field( wp_unslash( $_POST['acf']['field_60d9faf11cb1f'] ) );

		if ( isset( $_POST['acf']['field_60d9fb1ad119e'] ) ) {
			$employee_title = sanitize_text_field( wp_unslash( $_POST['acf']['field_60d9fb1ad119e'] ) );
		} else {
			$employee_title = '';
		}

		if ( isset( $_POST['acf']['field_60d9fae71cb1e'] ) ) {
			$employee_middle = sanitize_text_field( wp_unslash( $_POST['acf']['field_60d9fae71cb1e'] ) );
		} else {
			$employee_middle = '';
		}

		$full_name = '';

		if ( $employee_title ) {
			$full_name .= $employee_title . ' ';
		}

		$full_name .= $employee_first . ' ';

		if ( $employee_middle ) {
			$full_name .= $employee_middle . ' ';
		}

		$full_name .= $employee_last;

		$data['post_title'] = trim( $full_name );
	}
	return $data; // Returns the modified data.
}
add_filter( 'wp_insert_post_data', 'mu_profiles_modify_title', '99', 1 );
