<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'portfolio_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'portfolio-layout' => array(
				'title' => __('Layout Settings', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'layout' => array(
						'type'  => 'select',
						'value' => 'default',
						'label' => __('Layout', 'doyle'),
						'desc'  => __('Select a layout of project', 'doyle'),
						'choices' => array(
							'default' => __('Default(Image Left)', 'doyle'),
							'layout1' => __('Layout 1(Image Top)', 'doyle'),
							'layout2' => __('Layout 2(Image Bottom)', 'doyle')
						)
					),
					'gallery-column' => array(
						'type'  => 'short-select',
						'value' => 'default',
						'label' => __('Select Gallery Columns', 'doyle'),
						'desc'  => __('Select gallery columns of project', 'doyle'),
						'choices' => array(
							'col-md-12' => __('1 Column', 'doyle'),
							'col-md-6' => __('2 Columns', 'doyle'),
							'col-md-4' => __('3 Columns', 'doyle'),
							'col-md-3' => __('4 Columns', 'doyle')
						)
					),
					'gallery-space' => array(
						'type'  => 'short-text',
						'value' => '30',
						'label' => __('Gallery Space', 'doyle'),
						'desc'  => __('Please, enter gallery space of project.', 'doyle'),
					),
				),
			),
			'portfolio-meta' => array(
				'title' => __('Meta Fields', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'infor-title' =>  array( 
						'type' => 'text',
						'value' => 'Infor',
						'label' => __('Info Title', 'doyle'),
						'desc'  => __('Please, enter info title of project.', 'doyle'),
					),
					'info-option' => array(
						'type'  => 'addable-popup',
						'value' => array(
							array(
								'title' => 'Client:',
								'value' => 'Bearsthemes'
							),
							array(
								'title' => 'Date:',
								'value' => 'May 14, 2017'
							),
							array(
								'title' => 'Tags:',
								'value' => 'photography, agency, creative'
							),
							array(
								'title' => 'Project Type:',
								'value' => 'Multipurpose Template'
							)
						),
						'label' => __('Info Option', 'doyle'),
						'desc'  => __('Please configs info option of project', 'doyle'),
						'popup-options' => array(
							'title' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Title', 'doyle'),
								'desc'  => __('Please, enter title of project item.', 'doyle'),
							),
							'value' => array( 
								'type' => 'text',
								'value' => '',
								'label' => __('Value', 'doyle'),
								'desc'  => __('Please, enter value of project item.', 'doyle'),
							)
						),
						'template' => '{{- title }}',
						'add-button-text' => __('Add', 'doyle'),
						'sortable' => true,
					)
					
				),
			),
			'portfolio-social' => array(
				'title' => __('Social', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'social-title' =>  array( 
						'type' => 'text',
						'value' => 'Share',
						'label' => __('Social Title', 'doyle'),
						'desc'  => __('Please, enter social title of project.', 'doyle'),
					),
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
								'title' => 'Pinterest',
								'icon' => 'fa fa-pinterest',
								'link' => '#'
							),
							array(
								'title' => 'Behance',
								'icon' => 'fa fa-behance',
								'link' => '#'
							),
							array(
								'title' => 'Instagram',
								'icon' => 'fa fa-instagram',
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