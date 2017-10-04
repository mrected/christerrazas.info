<?php
// Colors
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Colors', 'doyle' ),
	'id'               => 'bt_colors',
	'icon'             => 'el el-tint',
	'fields'           => array(
		array(
			'id'       => 'main_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Main Color', 'doyle' ),
			'subtitle' => esc_html__( 'Control the main highlight color throughout the theme. Class apply: bt-main-color', 'doyle' ),
			'default'  => '#0a6edd',
			'output'   => array('.bt-main-color')
		),
		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__( 'Secondary Color', 'doyle' ),
			'subtitle' => esc_html__( 'Control the secondary highlight color throughout the theme. Class apply: bt-secondary-color', 'doyle' ),
			'default'  => '#00c282',
			'output'   => array('.bt-secondary-color')
		),
		array(
			'id'       => 'link_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Link Color', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the color of all text links.', 'doyle' ),
			'active'    => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'output'   => array('a, .bt-link-color')
		),
		
	)
) );
