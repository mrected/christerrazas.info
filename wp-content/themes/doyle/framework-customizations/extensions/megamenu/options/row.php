<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_mega_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Type', 'doyle'),
				'value' => 'customize',
				'choices' => array(
					'customize' => __('Customize', 'doyle'),
					'fullwidth' => __('Fullwidth', 'doyle'),
				),
			)
		),
		'choices' => array(
			'customize' => array(
				'menu_mega_container_width' => array(
					'label' => __('Width', 'doyle'),
					'desc' => __('Please enter number with px for container width (default: 840px)', 'doyle'),
					'type' => 'short-text',
					'value' => '840px'
				),
				'menu_mega_container_position' => array(
					'label' => __('Position', 'doyle'),
					'desc' => __('Select the sub menu display position', 'doyle'),
					'type' => 'radio',
					'value' => 'menu-item-pos-left',
					'choices' => array(
						'menu-item-pos-left' => __('Left', 'doyle'),
						'menu-item-pos-center' => __('Center', 'doyle'),
						'menu-item-pos-right' => __('Right', 'doyle'),
					),
					'inline' => true,
				),
			),
		),
	),
	'menu_mega_container_bg' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc'  => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label'   => __('Background Type', 'doyle'),
				'value' => 'color',
				'choices' => array(
					'color' => __('Color', 'doyle'),
					'image' => __('Image', 'doyle'),
				),
			)
		),
		'choices' => array(
			'color' => array(
				'bg_color' => array(
					'label' => esc_html__( 'Background Color', 'doyle' ),
					'desc'  => esc_html__( 'Choose background color for container mega menu (default: #f1f4fb)', 'doyle' ),
					'type'  => 'color-picker',
					'value' => '#f1f4fb',
				),
			),
			'image' => array(
				'bg_image' => array(
					'label' => esc_html__( 'Background Image', 'doyle' ),
					'desc'  => esc_html__( 'Choose background image for container mega menu', 'doyle' ),
					'type'  => 'upload',
				),
				'bg_image_repeat' => array(
					'label' => esc_html__( 'Background Repeat', 'doyle' ),
					'desc'  => esc_html__( 'Choose background repeat for container mega menu', 'doyle' ),
					'type' => 'short-select',
					'value' => 'no-repeat',
					'choices' => array(
						'no-repeat' => __('No Repeat', 'doyle'),
						'repeat' => __('Repeat', 'doyle'),
					),
				),
				'bg_image_size' => array(
					'label' => esc_html__( 'Background Size', 'doyle' ),
					'desc'  => esc_html__( 'Choose background size for container mega menu', 'doyle' ),
					'type' => 'short-select',
					'value' => 'cover',
					'choices' => array(
						'cover' => __('Cover', 'doyle'),
						'contain' => __('Contain', 'doyle'),
					),
				),
				'bg_image_position' => array(
					'label' => esc_html__( 'Background Position', 'doyle' ),
					'desc'  => esc_html__( 'Please enter background position for container mega menu (default: center center)', 'doyle' ),
					'type' => 'short-text',
					'value' => 'center center',
				),
			),
		),
	),
	'menu_mega_row_padding' => array(
		'label' => __('Padding', 'doyle'),
		'desc' => __('Please enter number with px or % for row padding (default: 15px 10px)', 'doyle'),
		'type' => 'short-text',
		'value' => '15px 10px'
	),
);
