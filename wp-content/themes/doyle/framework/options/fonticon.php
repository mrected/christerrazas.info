<?php
// Icons
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Font Icons', 'doyle' ),
	'id'               => 'bt_fonticons',
	'icon'             => 'el el-info-circle',
	'fields'           => array(
		array(
			'id'       => 'font_awesome',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Awesome', 'doyle' ),
			'subtitle' => esc_html__( 'Use font awesome.', 'doyle' ),
			'default'  => true,
		),
		array(
			'id'       => 'font_pe_icon_7_stroke',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Pe Icon 7 Stroke', 'doyle' ),
			'subtitle' => esc_html__( 'Use font pe icon 7 stroke.', 'doyle' ),
			'default'  => false,
		),
		array(
			'id'       => 'flaticon',
			'type'     => 'switch',
			'title'    => esc_html__( 'Font Flaticon', 'doyle' ),
			'subtitle' => esc_html__( 'Use font flaticon.', 'doyle' ),
			'default'  => false,
		),
	)
) );
