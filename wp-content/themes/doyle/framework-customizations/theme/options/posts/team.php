<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'team_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'team-meta' => array(
				'title' => __('Meta Fields', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'position' => array(
						'type'  => 'text',
						'value' => 'Ceo/Founder',
						'label' => __('Position', 'doyle'),
						'desc'  => __('Please, enter position of member.', 'doyle'),
					),
					'email' => array(
						'type'  => 'text',
						'value' => 'bearsthemes@gmail.com',
						'label' => __('Email', 'doyle'),
						'desc'  => __('Please, enter email of member.', 'doyle'),
					),
					'phone' => array(
						'type'  => 'text',
						'value' => '(1200)-0989-568-331',
						'label' => __('Phone', 'doyle'),
						'desc'  => __('Please, enter phone number of member.', 'doyle'),
					),
					
				),
			),
			'team-social' => array(
				'title' => __('Social', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'social' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Facebook',
								'icon' => 'fa fa-facebook',
								'link' => '#'
							),
							array(
								'title' => 'Twitter',
								'icon' => 'fa fa-twitter',
								'link' => '#'
							),
							array(
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							)
						),
						'label' => __('Social', 'doyle'),
						'desc'  => __('Please configs social of member', 'doyle'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'doyle'),
								'desc'  => __('Please, enter title of social item.', 'doyle'),
							),
							'icon' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Icon', 'doyle'),
								'desc'  => __('Please, enter icon of social item.', 'doyle'),
							),
							'link' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Url(Link)', 'doyle'),
								'desc'  => __('Please, enter link of social item.', 'doyle'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', 'doyle'),
						'sortable' => true,
					)
					
				),
			),
			
		)
	)
	
);