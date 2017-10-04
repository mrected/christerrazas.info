<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

$options = array(
	'post_options' => array(
		'type' => 'multi',
		'label' => false,
		'inner-options' => array(
			'post_general' => array(
				'title' => __('General', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'social-title' =>  array( 
						'type' => 'text',
						'value' => 'Share',
						'label' => __('Social Title', 'doyle'),
						'desc'  => __('Please, enter social title of post.', 'doyle'),
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
								'title' => 'Google Plus',
								'icon' => 'fa fa-google-plus',
								'link' => '#'
							),
							array(
								'title' => 'Instagram',
								'icon' => 'fa fa-instagram',
								'link' => '#'
							)
						),
						'label' => __('Social', 'doyle'),
						'desc'  => __('Please configs social of post', 'doyle'),
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
			'post_gallery' => array(
				'title' => __('Gallery', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'gallery_images' => array(
						'label' => esc_html__( 'Add Images', 'doyle' ),
						'desc'  => esc_html__( 'Upload gallery images.', 'doyle' ),
						'type'  => 'multi-upload',
					),
				),
			),
			'post_video' => array(
				'title' => __('Video', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'video_url' => array(
						'label' => esc_html__( 'Video Url', 'doyle' ),
						'desc'  => esc_html__( 'Please video url(vimeo/youtube/mp4). Ex: https://www.youtube.com/embed/YE7VzlLtp-4?rel=0', 'doyle' ),
						'type'  => 'text',
					),
					'video_poster' => array(
						'label' => esc_html__( 'Add Image', 'doyle' ),
						'desc'  => esc_html__( 'Upload video poster image.', 'doyle' ),
						'type'  => 'upload',
					),
					'video_caption' => array(
						'label' => esc_html__( 'Video Caption', 'doyle' ),
						'desc'  => esc_html__( 'Please video caption.', 'doyle' ),
						'type'  => 'text',
					),
				),
			),
			'post_audio' => array(
				'title' => __('Audio', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'audio_type' => array(
						'type' => 'multi-picker',
						'label' => false,
						'desc' => false,
						'picker' => array(
							'type' => array(
								'type' => 'short-select',
								'label' => __('Audio Types', 'doyle'),
								'desc' => __('Choose the audio type.', 'doyle'),
								'value' => 'html5',
								'choices' => array(
									'html5' => __('HTML5', 'doyle'),
									'embed' => __('Embed', 'doyle')
								),
							),
						),
						'choices' => array(
							'html5' => array(
								'format' => array(
									'type'  => 'short-select',
									'value' => 'mp3',
									'label' => __('Format', 'doyle'),
									'desc'  => __('Choose the audio format.', 'doyle'),
									'choices' => array(
										'audio/mpeg' => __('MP3', 'doyle'),
										'audio/ogg' => __('Ogg', 'doyle'),
										'audio/wav' => __('Wav', 'doyle')
									)
								),
								'src' => array(
									'label' => __('Src', 'doyle'),
									'desc' => __('Enter url audio (Ex: http://yourdomain.com/audio.mp3)', 'doyle'),
									'type' => 'text',
									'value' => ''
								),
							),
							'embed' => array(
								'iframe' => array(
									'label' => __('Embed', 'doyle'),
									'desc' => __('Please enter embed code(SoundCloud, ...)', 'doyle'),
									'type' => 'textarea',
									'value' => '',
								),
							),
							
						),
					),
				),
			) ,
			'post_quote' => array(
				'title' => __('Quote', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'quote_text' => array(
						'label' => esc_html__( 'Quote Text', 'doyle' ),
						'desc'  => esc_html__( 'Please enter quote.', 'doyle' ),
						'type'  => 'textarea',
					),
				),
			),
			'post_link' => array(
				'title' => __('Link', 'doyle'),
				'type' => 'tab',
				'options' => array(
					'url' => array(
						'label' => esc_html__( 'Url', 'doyle' ),
						'desc'  => esc_html__( 'Please enter url.', 'doyle' ),
						'type'  => 'text',
					),
				),
			),
			
		),
	),
	
);
