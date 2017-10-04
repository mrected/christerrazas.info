<?php
// General
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'General', 'doyle' ),
	'id'               => 'bt_general',
	'icon'             => 'el el-adjust-alt',
	'fields'           => array(
		array(
			'id'       => 'less_design',
			'type'     => 'switch',
			'title'    => esc_html__( 'Enable Less Design', 'doyle' ),
			'subtitle' => esc_html__( 'Enable less design to generate css over time...', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_layout',
			'type'     => 'button_set',
			'title'    => __('Site Layout', 'doyle'),
			'subtitle' => __('Control the site layout.', 'doyle'),
			'options' => array(
				'wide' => __('Wide', 'doyle'), 
				'boxed' => __('Boxed', 'doyle'),
			 ), 
			'default' => 'wide'
		),
		array(
			'id'            => 'site_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Site Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Control the overall site width.', 'doyle' ),
			'default'       => 1200,
			'min'           => 1200,
			'step'          => 1,
			'max'           => 1600,
			'display_value' => 'text',
			'required' 		=> array('site_layout' , '=', 'boxed')
		),
		array(
			'id'       => 'boxed_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Boxed Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background color of the boxed.', 'doyle' ),
			'background-repeat' => false,
			'background-attachment' => false,
			'background-position' => false,
			'background-image' => false,
			'background-size' => false,
			'preview' => false,
			'default'  => array(
				'background-color' => '#FFFFFF',
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'boxed_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'right'         => false,
			'left'          => false,
			'title'    => esc_html__( 'Boxed Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the space top and bottom of boxed.', 'doyle' ),
			'default'  => array(
				'margin-top'    => '10px',
				'margin-bottom' => '10px'
			),
			'required' 		=> array('site_layout' , '=', 'boxed'),
			'output'    => array('.boxed #bt-main')
		),
		array(
			'id'       => 'body_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Body Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of the body.', 'doyle' ),
			'default'  => array(
				'background-color' => '#F8F8F8',
			),
			'output'    => array('body'),
		),
		array(
			'id'            => 'mobile_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Mobile Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the width to enable mobile.', 'doyle' ),
			'default'       => 991,
			'min'           => 540,
			'step'          => 1,
			'max'           => 1199,
			'display_value' => 'text'
		),
		array(
			'id'       => 'smooth_scroll',
			'type'     => 'switch',
			'title'    => esc_html__( 'Smoth Scroll', 'doyle' ),
			'subtitle' => esc_html__( 'Use smoth scroll.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top',
			'type'     => 'switch',
			'title'    => esc_html__( 'Back To Top', 'doyle' ),
			'subtitle' => esc_html__( 'Control button back to top.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'back_to_top_style',
			'type'     => 'select',
			'title'    => esc_html__( 'Back To Top Style', 'doyle' ),
			'subtitle' => esc_html__( 'Select style button back to top.', 'doyle' ),
			'options'  => array(
				'square' => esc_html__( 'Square', 'doyle' ),
				'rounded' => esc_html__( 'Rounded', 'doyle' ),
				'circle' => esc_html__( 'Circle', 'doyle' )
			),
			'default'  => 'square',
			'required' 		=> array('back_to_top' , '=', '1')
		),
		array(
			'id'       => 'site_loading',
			'type'     => 'switch',
			'title'    => esc_html__( 'Site Loading', 'doyle' ),
			'subtitle' => esc_html__( 'Control animation before site load complete.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'site_loading_spinner',
			'type'     => 'select',
			'title'    => esc_html__( 'Spinner Style', 'doyle' ),
			'subtitle' => esc_html__( 'Select style spinner.', 'doyle' ),
			'options'  => array(
				'spinner0' => esc_html__( 'Default', 'doyle' ),
				'spinner1' => esc_html__( 'Style 1', 'doyle' ),
				'spinner2' => esc_html__( 'Style 2', 'doyle' ),
				'spinner3' => esc_html__( 'Style 3', 'doyle' ),
				'spinner4' => esc_html__( 'Style 4', 'doyle' ),
				'spinner5' => esc_html__( 'Style 5', 'doyle' )
			),
			'default'  => 'spinner0',
			'required' 		=> array('site_loading' , '=', '1')
		),
		array(
			'id'       => 'site_loading_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Site Loading Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of site loading.', 'doyle' ),
			'default'  => array(
				'background-color' => '#0a6edd',
			),
			'required' 		=> array('site_loading' , '=', '1'),
			'output'    => array('#site_loading')
		),
		
	)
) );
