<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'menu_item_padding' => array(
		'label' => __('Menu Item Padding', 'doyle'),
		'desc' => __('Please enter number with px or % for menu item level 1 padding (default: 0px 10px)', 'doyle'),
		'type' => 'short-text',
		'value' => '0px 10px'
	),
	'sub_menu_padding' => array(
		'label' => __('Sub Menu Padding', 'doyle'),
		'desc' => __('Please enter number with px or % for sub menu padding (default: 0px)', 'doyle'),
		'type' => 'short-text',
		'value' => '0px'
	),
	'sub_menu_align' => array(
		'label' => __('Position', 'doyle'),
		'desc' => __('Select the sub menu display position', 'doyle'),
		'type' => 'radio',
		'value' => 'menu-align-left',
		'choices' => array(
			'menu-align-left' => __('Left', 'doyle'),
			'menu-align-right' => __('Right', 'doyle'),
		),
		'inline' => true,
	),
);