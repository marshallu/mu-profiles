<?php
/**
 * MU Profiles
 *
 * This plugin was built to allow for Marshall University websites to display employee profiles.
 *
 * @package MU Profiles
 */
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_5f591b3bb909c',
	'title' => 'Employee',
	'fields' => array(
		array(
			'key' => 'field_60d9fb1ad119e',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'Dr, Mr, etc.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_60d9fadc1cb1d',
			'label' => 'First Name',
			'name' => 'first_name',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'If you enter a First Name and Last Name it will overwrite the title box.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_60d9fae71cb1e',
			'label' => 'Middle Name (or Initial)',
			'name' => 'middle_name_or_initial',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_60d9faf11cb1f',
			'label' => 'Last Name',
			'name' => 'last_name',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'If you enter a First Name and Last Name it will overwrite the title box.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_604a61584b9c7',
			'label' => 'Preferred Pronouns',
			'name' => 'employee_preferred_pronouns',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f592a22e90f6',
			'label' => 'Headshot',
			'name' => 'employee_headshot',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'The headshot file size should be no larger than 1MB.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => 1500,
			'max_height' => 1500,
			'max_size' => 1,
			'mime_types' => 'jpg',
		),
		array(
			'key' => 'field_5f5a2ce9645f5',
			'label' => 'Office Location',
			'name' => 'employee_office_location',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f5fb385b2150',
			'label' => 'Office Campus',
			'name' => 'employee_office_campus',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Huntington' => 'Huntington',
				'South Charleston' => 'South Charleston',
			),
			'default_value' => 'Huntington',
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f592355b12ff',
			'label' => 'Position',
			'name' => 'employee_position',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f59235e2c433',
			'label' => 'Email Address',
			'name' => 'employee_email_address',
			'aria-label' => '',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'w-full lg:w-1/3',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5f5923751ebf5',
			'label' => 'Phone Number',
			'name' => 'employee_phone_number',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'w-full lg:w-1/3',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f592367d5e18',
			'label' => 'Website',
			'name' => 'employee_website',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'w-full lg:w-1/3',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f5924737ea31',
			'label' => 'Facebook',
			'name' => 'employee_facebook',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f59247a49615',
			'label' => 'Twitter',
			'name' => 'employee_twitter',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f5924808c637',
			'label' => 'LinkedIn',
			'name' => 'employee_linkedin',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5f592a7845477',
			'label' => 'Biography',
			'name' => 'employee_biography',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_5f71d368f7df4',
			'label' => 'Teaching Philosophy',
			'name' => 'employee_teaching_philosophy',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_5f5924c9d7b58',
			'label' => 'Education',
			'name' => 'employee_education',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Education Entry',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c891d6d04',
					'label' => 'Education Information',
					'name' => 'education_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5924c9d7b58',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5924f5e1f8f',
			'label' => 'Awards',
			'name' => 'employee_awards',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Award',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c8b1d6d05',
					'label' => 'Award Information',
					'name' => 'award_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5924f5e1f8f',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5928c687deb',
			'label' => 'Scholarship',
			'name' => 'employee_scholarship',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Scholarship Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c8c6d6d06',
					'label' => 'Scholarship Information',
					'name' => 'scholarship_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5928c687deb',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5928e1e62d1',
			'label' => 'Contracts, Grants, and Sponsored Research',
			'name' => 'employee_research',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Research Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c8d5d6d07',
					'label' => 'Contracts, Grants, and Sponsored Research Item',
					'name' => 'contracts_grants_and_sponsored_research_item',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5928e1e62d1',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f592925412e2',
			'label' => 'Conference Presentations',
			'name' => 'employee_conferences',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Conference Presentation',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c8e2d6d08',
					'label' => 'Conference Information',
					'name' => 'conference_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f592925412e2',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f71d1f0ee787',
			'label' => 'Service to the Department',
			'name' => 'employee_department_service',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Department Service Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c8ebd6d09',
					'label' => 'Service Information',
					'name' => 'service_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f71d1f0ee787',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5929473a04c',
			'label' => 'Service to the College',
			'name' => 'employee_college_service',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add College Service Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c903d6d0a',
					'label' => 'Service to the College',
					'name' => 'service_to_the_college',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5929473a04c',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f592973b9e02',
			'label' => 'Service to the University',
			'name' => 'employee_university_service',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add University Service Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c90fd6d0b',
					'label' => 'Service to the University',
					'name' => 'service_to_the_university',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f592973b9e02',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f592988a5d79',
			'label' => 'Service to the Profession',
			'name' => 'employee_service_profession',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Profession Service Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c91dd6d0c',
					'label' => 'Service to the Profession',
					'name' => 'service_to_the_profession',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f592988a5d79',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5929deff949',
			'label' => 'Service to the Community',
			'name' => 'employee_service_community',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Community Service Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c92dd6d0d',
					'label' => 'Service Information',
					'name' => 'service_information',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5929deff949',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5a5bb9b4f85',
			'label' => 'Contact For',
			'name' => 'employee_contact_for',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Contact For Item',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c93dd6d0e',
					'label' => 'Contact Text',
					'name' => 'contact_text',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f5a5bb9b4f85',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_5f5f5f1139913',
			'label' => 'CV/Resume',
			'name' => 'employee_cvresume',
			'aria-label' => '',
			'type' => 'file',
			'instructions' => 'You may upload a PDF version of your cv/resume.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => 'pdf',
		),
		array(
			'key' => 'field_5f71d3c4f7df5',
			'label' => 'Lists',
			'name' => 'employee_lists',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add List',
			'sub_fields' => array(
				array(
					'key' => 'field_61b0c94ed6d0f',
					'label' => 'List Title',
					'name' => 'list_title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'parent_repeater' => 'field_5f71d3c4f7df5',
				),
				array(
					'key' => 'field_61b0c95ad6d10',
					'label' => 'List Item',
					'name' => 'employee_list_item',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => 'Add List Item',
					'sub_fields' => array(
						array(
							'key' => 'field_61b0c96fd6d11',
							'label' => 'List Item',
							'name' => 'list_item_detail',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'parent_repeater' => 'field_61b0c95ad6d10',
						),
					),
					'rows_per_page' => 20,
					'parent_repeater' => 'field_5f71d3c4f7df5',
				),
			),
			'rows_per_page' => 20,
		),
		array(
			'key' => 'field_60186fba8bbe2',
			'label' => 'More Info Link',
			'name' => 'more_info_link',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_64ee390570c1b',
			'label' => 'Videos',
			'name' => 'videos',
			'aria-label' => '',
			'type' => 'group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'sub_fields' => array(
				array(
					'key' => 'field_64ee391070c1c',
					'label' => 'Video Section Title',
					'name' => 'video_section_title',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_64ee370297947',
					'label' => 'YouTube Videos',
					'name' => 'youtube_videos',
					'aria-label' => '',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'table',
					'pagination' => 0,
					'min' => 0,
					'max' => 0,
					'collapsed' => '',
					'button_label' => 'Add Row',
					'rows_per_page' => 20,
					'sub_fields' => array(
						array(
							'key' => 'field_64ee373597948',
							'label' => 'YouTube Video ID',
							'name' => 'youtube_video_id',
							'aria-label' => '',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'maxlength' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'parent_repeater' => 'field_64ee370297947',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_65523d85ff0e1',
			'label' => 'Book a Meeting URL',
			'name' => 'employee_bookings_url',
			'aria-label' => '',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_6579cadbf45bb',
			'label' => 'Recruiter Cadence Number',
			'name' => 'recruiter_cadence',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6579cb81f45bc',
			'label' => 'Recruiter Metro Cincinnato',
			'name' => 'recruiter_metro_cincinnati',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_6579cbe337e85',
			'label' => 'Recruiter States',
			'name' => 'recruiter_states',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'AL' => 'Alabama',
				'AK' => 'Alaska',
				'AZ' => 'Arizona',
				'AR' => 'Arkansas',
				'CA' => 'California',
				'CO' => 'Colorado',
				'CT' => 'Connecticut',
				'DE' => 'Delaware',
				'DC' => 'District Of Columbia',
				'FL' => 'Florida',
				'GA' => 'Georgia',
				'HI' => 'Hawaii',
				'ID' => 'Idaho',
				'IL' => 'Illinois',
				'IN' => 'Indiana',
				'IA' => 'Iowa',
				'KS' => 'Kansas',
				'KY' => 'Kentucky',
				'LA' => 'Louisiana',
				'ME' => 'Maine',
				'MD' => 'Maryland',
				'MA' => 'Massachusetts',
				'MI' => 'Michigan',
				'MN' => 'Minnesota',
				'MS' => 'Mississippi',
				'MO' => 'Missouri',
				'MT' => 'Montana',
				'NE' => 'Nebraska',
				'NV' => 'Nevada',
				'NH' => 'New Hampshire',
				'NJ' => 'New Jersey',
				'NM' => 'New Mexico',
				'NY' => 'New York',
				'NC' => 'North Carolina',
				'ND' => 'North Dakota',
				'OH' => 'Ohio',
				'OK' => 'Oklahoma',
				'OR' => 'Oregon',
				'PA' => 'Pennsylvania',
				'RI' => 'Rhode Island',
				'SC' => 'South Carolina',
				'SD' => 'South Dakota',
				'TN' => 'Tennessee',
				'TX' => 'Texas',
				'UT' => 'Utah',
				'VT' => 'Vermont',
				'VA' => 'Virginia',
				'WA' => 'Washington',
				'WV' => 'West Virginia',
				'WI' => 'Wisconsin',
				'WY' => 'Wyoming',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'multiple' => 1,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_6579cc6e37e86',
			'label' => 'Recruiter Counties',
			'name' => 'recruiter_counties',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_6579cbe337e85',
						'operator' => '==contains',
						'value' => 'WV',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Barbour' => 'Barbour',
				'Berkeley' => 'Berkeley',
				'Boone' => 'Boone',
				'Braxton' => 'Braxton',
				'Brooke' => 'Brooke',
				'Cabell' => 'Cabell',
				'Calhoun' => 'Calhoun',
				'Clay' => 'Clay',
				'Doddridge' => 'Doddridge',
				'Fayette' => 'Fayette',
				'Gilmer' => 'Gilmer',
				'Grant' => 'Grant',
				'Greenbrier' => 'Greenbrier',
				'Hampshire' => 'Hampshire',
				'Hancock' => 'Hancock',
				'Hardy' => 'Hardy',
				'Harrison' => 'Harrison',
				'Jackson' => 'Jackson',
				'Jefferson' => 'Jefferson',
				'Kanawha' => 'Kanawha',
				'Lewis' => 'Lewis',
				'Lincoln' => 'Lincoln',
				'Logan' => 'Logan',
				'Marion' => 'Marion',
				'Marshall' => 'Marshall',
				'Mason' => 'Mason',
				'Mercer' => 'Mercer',
				'Mineral' => 'Mineral',
				'Mingo' => 'Mingo',
				'Monongalia' => 'Monongalia',
				'Monroe' => 'Monroe',
				'Morgan' => 'Morgan',
				'McDowell' => 'McDowell',
				'Nicholas' => 'Nicholas',
				'Ohio' => 'Ohio',
				'Pendleton' => 'Pendleton',
				'Pleasants' => 'Pleasants',
				'Pocahontas' => 'Pocahontas',
				'Preston' => 'Preston',
				'Putnam' => 'Putnam',
				'Raleigh' => 'Raleigh',
				'Randolph' => 'Randolph',
				'Ritchie' => 'Ritchie',
				'Roane' => 'Roane',
				'Summers' => 'Summers',
				'Taylor' => 'Taylor',
				'Tucker' => 'Tucker',
				'Tyler' => 'Tyler',
				'Upshur' => 'Upshur',
				'Wayne' => 'Wayne',
				'Webster' => 'Webster',
				'Wetzel' => 'Wetzel',
				'Wirt' => 'Wirt',
				'Wood' => 'Wood',
				'Wyoming' => 'Wyoming',
			),
			'default_value' => array(
			),
			'return_format' => 'value',
			'multiple' => 1,
			'allow_null' => 1,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'employee',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'field',
	'hide_on_screen' => array(
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
		3 => 'revisions',
		4 => 'author',
		5 => 'categories',
		6 => 'tags',
		7 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_5fda17ea665f8',
	'title' => 'Profile Departments Meta',
	'fields' => array(
		array(
			'key' => 'field_5fda1809c81fa',
			'label' => 'Listing Display',
			'name' => 'department_listing_display',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => 'Inherit will use the default setting for the site.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'inherit' => 'Inherit',
				'table' => 'Table',
				'row' => 'Row',
				'enhanced' => 'Enhanced',
				'full-profile' => 'Full Profile',
				'card' => 'Card',
				'basic' => 'Basic',
				'icon-card' => 'Icon Card',
			),
			'default_value' => 'inherit',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5fff27c858618',
			'label' => 'Display Link',
			'name' => 'department_display_link',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'If turned off the department will not display on any of the listings or profile pages.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_6018754861104',
			'label' => 'Custom Title',
			'name' => 'department_custom_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => 'If text is entered this will overwrite the title at the top of the department\'s listing page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_6022b5ff32ae1',
			'label' => 'Hide Department',
			'name' => 'department_hide',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'This will hide the department from being listed on any page relating to a Profile.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_614a3089dbb10',
			'label' => 'Redirect Department Page',
			'name' => 'department_redirect_department_page',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'This will prevent visitors from being able to access the default department archive page. Visitors will be redirected to the site homepage.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_65576b58bcb86',
			'label' => 'Per Row',
			'name' => 'department_per_row',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5fda1809c81fa',
						'operator' => '==',
						'value' => 'icon-card',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				4 => '4',
				3 => '3',
				2 => '2',
			),
			'default_value' => 4,
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'department',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );

	acf_add_local_field_group( array(
	'key' => 'group_5f5a670b426b6',
	'title' => 'Profile Display Settings',
	'fields' => array(
		array(
			'key' => 'field_5f5a67199170c',
			'label' => 'Show Email Address',
			'name' => 'profile_show_email_address',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'both' => 'Department Listing and Profile Page',
				'listing' => 'Department Listing Only',
				'profile' => 'Profile Page Only',
				'none' => 'Neither',
			),
			'default_value' => 'both',
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_600f05e7ff04b',
			'label' => 'Row Title',
			'name' => 'profile_row_title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_601325f95f478',
			'label' => 'Hide "Profile"',
			'name' => 'hide_profile',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'If selected this will hide the word "Profile" in the header on Profile pages.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_60da01c42a647',
			'label' => 'Sort by Last Name, First Name',
			'name' => 'sort_by_last_name_first_name',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'If this is set to true all profiles must have a first name and last name entered or they will not display.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5f622f21a96e2',
			'label' => 'Listing Display',
			'name' => 'profile_listing_display',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'table' => 'Table',
				'row' => 'Row',
				'enhanced' => 'Enhanced',
				'full-profile' => 'Full Profile',
				'card' => 'Card',
				'basic' => 'Basic',
				'icon-card' => 'Icon Card',
			),
			'default_value' => 'table',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_64dcbe2014e00',
			'label' => 'Link from Directory to Profile',
			'name' => 'profile_link_to_profile',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'profile-display-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );