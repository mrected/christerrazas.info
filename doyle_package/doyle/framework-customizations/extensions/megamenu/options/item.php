<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'mega_menu_item_type' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'type' => array(
				'type' => 'short-select',
				'label' => esc_html__( 'Type', 'doyle' ),
				'desc' => esc_html__( 'Please select menu type', 'doyle' ),
				'value' => '',
				'choices' => array(
					'default' => __('Default', 'doyle'),
					'sidebar' => __('Sidebar', 'doyle'),
				),
			),
		),
		'choices' => array(
			'sidebar' => array(
				'sidebar_id' => array(
					'type' => 'select',
					'label' => esc_html__( 'Sidebar', 'doyle' ),
					'desc' => esc_html__( 'Please select sitebar', 'doyle' ),
					'value' => '',
					'choices' => doyle_get_sidebars(),
				),
			),
		),
	),
	'badge' => array(
		'type' => 'multi-picker',
		'label' => false,
		'desc' => false,
		'picker' => array(
			'selected' => array(
				'type' => 'switch',
				'value' => 'no',
				'label' => __('Badge', 'doyle'),
				'left-choice' => array(
					'value' => 'no',
					'label' => __('No', 'doyle'),
				),
				'right-choice' => array(
					'value' => 'yes',
					'label' => __('Yes', 'doyle'),
				)
			),
		),
		'choices' => array(
			'yes' => array(
				'badge_group' => array(
					'type' => 'group',
					'attr' => array('class' => ''),
					'options' => array(
						'badge_text' => array(
							'type' => 'short-text',
							'html' => '',
							'value' => '',
							'label' => __('Text', 'doyle'),
						),
						'badge_background_color' => array(
							'value' => '#E23F3F',
							'type' => 'color-picker',
							'label' => __('Background Color', 'doyle'),
						),
						'badge_color' => array(
							'value' => '#FFFFFF',
							'type' => 'color-picker',
							'label' => __('Color', 'doyle'),
						),
					),
				),
			),
		),
	),
);
