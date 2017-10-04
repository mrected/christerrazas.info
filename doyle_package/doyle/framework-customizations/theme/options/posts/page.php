<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$menu_slug_opt = array();
$menus_obj = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$menu_slug_opt['auto'] = 'Auto';
foreach ( $menus_obj as $menu_obj ) {
	$menu_slug_opt[$menu_obj->slug] = $menu_obj->name;
}

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'page_general_setting' => array(
				'title' => __('General', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'page_titlebar' => array(
						'type' => 'switch',
						'label' => __('Disable Title Bar', 'doyle'),
						'desc' => __('Turn on to disable title bar in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'page_footer_space' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Space', 'doyle'),
						'desc' => __('Turn on to disable space between footer and content in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					
				),
			),
			'page_header_setting' => array(
				'title' => __('Header', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'header_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Header Layout', 'doyle'),
						'desc'  => __('Select a header layout in current page', 'doyle'),
						'choices' => array(
							'default' => __('Default', 'doyle'),
							'1' => __('Header 1', 'doyle'),
							'2' => __('Header 2', 'doyle'),
							'3' => __('Header 3', 'doyle'),
							'onepage' => __('Header One Page', 'doyle')
						)
					),
					'header_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'doyle'),
						'desc' => __('Turn on to disable header full width (100%) in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top', 'doyle'),
						'desc' => __('Turn on to disable header top in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'header_logo' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo', 'doyle'),
						'desc'  => __('Select image to change the logo in current page.', 'doyle'),
					),
					'header_logo_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'doyle'),
						'desc'  => __('Controls the height of the logo in current page. EX: 50', 'doyle')
					),
					'header_menu_assign' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Menu Assign', 'doyle'),
						'desc'  => __('Select a menu assign of header layout in current page', 'doyle'),
						'choices' => $menu_slug_opt
					),
					'header_stick' => array(
						'type' => 'switch',
						'label' => __('Disable Header Sticky', 'doyle'),
						'desc' => __('Turn on to disable header stick in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'header_logo_stick' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Stick', 'doyle'),
						'desc'  => __('Select image to change the logo stick in current page.', 'doyle'),
					),
					'header_logo_stick_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'doyle'),
						'desc'  => __('Controls the height of the logo stick in current page. EX: 40', 'doyle')
					),
					'mobile_header_top' => array(
						'type' => 'switch',
						'label' => __('Disable Header Top Mobile', 'doyle'),
						'desc' => __('Turn on to disable header top mobile in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'logo_mobile' => array(
						'type'  => 'upload',
						'value' => array(
							'url' => ''
						),
						'label' => __('Logo Mobile', 'doyle'),
						'desc'  => __('Select image to change the logo mobile in current page.', 'doyle'),
					),
					'logo_mobile_height' => array(
						'type'  => 'short-text',
						'value' => '',
						'label' => __('Logo Height', 'doyle'),
						'desc'  => __('Controls the height of the logo mobile in current page. EX: 30', 'doyle')
					),
					
				),
			),
			'page_titlebar_setting' => array(
				'title' => __('Title Bar', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'titlebar_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Title Bar Layout', 'doyle'),
						'desc'  => __('Select a title bar layout in current page', 'doyle'),
						'choices' => array(
							'default' => __('Default', 'doyle'),
							'1' => __('Title Bar 1', 'doyle'),
							'2' => __('Title Bar 2', 'doyle')
						)
					),
				),
			) ,
			'page_footer_setting' => array(
				'title' => __('Footer', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'footer_layout' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Footer Layout', 'doyle'),
						'desc'  => __('Select a footer layout in current page', 'doyle'),
						'choices' => array(
							'default' => __('Default', 'doyle'),
							'1' => __('Footer 1', 'doyle'),
							'2' => __('Footer 2', 'doyle')
						)
					),
					'footer_fullwidth' => array(
						'type' => 'switch',
						'label' => __('Disable Full Width (100%)', 'doyle'),
						'desc' => __('Turn on to disable footer full width (100%) in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
					'footer_top' => array(
						'type' => 'switch',
						'label' => __('Disable Footer Top', 'doyle'),
						'desc' => __('Turn on to disable footer top in current page.', 'doyle'),
						'value' => '',
						'left-choice' => array(
							'value' => '',
							'label' => __('Off', 'doyle'),
						),
						'right-choice' => array(
							'value' => '1',
							'label' => __('On', 'doyle'),
						),
					),
				),
			),
		),
	),
	
);