<?php

//vc_row
$attributes = array(
    'type' => 'checkbox',
    'heading' => 'Row Container',
    'param_name' => 'row_container',
    'value' => '',
    'weight' => 1,
    'description' => esc_html__( 'Enable row container.', 'doyle' )
);
vc_add_param( 'vc_row', $attributes );

//vc_custom_heading
$attributes = array(
    'type' => 'textarea',
    'heading' => 'Custom Style',
    'param_name' => 'custom_style',
    'value' => '',
    'description' => esc_html__( 'Enter custom style for heading element', 'doyle' ),
	'group' => __('Extra Options', 'doyle')
);
vc_add_param( 'vc_custom_heading', $attributes );