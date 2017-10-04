<?php
// Blog
Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Archive Blog', 'doyle' ),
	'id'               => 'bt_blog',
	'icon'             => 'el el-file-edit',
	'fields'           => array(
		array(
			'id'       => 'blog_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'blog_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'doyle' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('blog_fullwidth' , '=', '1'),
			'output'    => array('.category .bt-main-content, .tag .bt-main-content, .search .bt-main-content')
		),
		array(
			'id'            => 'blog_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'blog_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'doyle' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.category .bt-titlebar, .tag .bt-titlebar, .search .bt-titlebar'),
		),
		array(
			'id'    => 'blog_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'doyle' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'doyle' )
		),
		array(
			'id'       => 'post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'doyle' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '28px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '40px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_title_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Title Color', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the color post title.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title a, .tag .bt-post-item .bt-title a, .search .bt-post-item .bt-title a')
		),
		array(
			'id'       => 'post_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Title Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post title.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_title' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-title, .tag .bt-post-item .bt-title, .search .bt-post-item .bt-title')
		),
		array(
			'id'       => 'post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'doyle' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'doyle' ),
			'default'  => 'full',
			'required' 		=> array('post_featured' , '=', '1')
		),
		array(
			'id'       => 'post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_featured' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-media, .tag .bt-post-item .bt-media, .search .bt-post-item .bt-media')
		),
		array(
			'id'       => 'post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'doyle' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li, .tag .bt-post-item .bt-meta > li, .search .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta > li a, .tag .bt-post-item .bt-meta > li a, .search .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'post_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Meta Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post meta.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'doyle' ),
			'default'  => 'By:',
			'required' 		=> array('post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'doyle' ),
			'default'  => 'Date:',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'doyle' ),
			'default'  => 'M d, Y',
			'required' 		=> array('post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comment_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comment Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'doyle' ),
			'default'  => 'Comment:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_comments_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comments Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'doyle' ),
			'default'  => 'Comments:',
			'required' 		=> array('post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('post_meta' , '=', '1'),
		),
		array(
			'id'       => 'post_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'doyle' ),
			'default'  => 'Category:',
			'required' 		=> array('post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Excerpt', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the excerpt.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'post_excerpt_length',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt Length', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt length number. Leave empty to use "55" for excerpt lenght.', 'doyle' ),
			'default'  => '55',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_more',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Excerpt More', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter excerpt more. Leave empty to use "[...]" for excerpt more.', 'doyle' ),
			'default'  => '[...]',
			'required' 		=> array('post_excerpt' , '=', '1'),
		),
		array(
			'id'       => 'post_excerpt_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Excerpt Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '15px'
			),
			'required' 		=> array('post_excerpt' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-excerpt, .tag .bt-post-item .bt-excerpt, .search .bt-post-item .bt-excerpt')
		),
		array(
			'id'       => 'post_readmore',
			'type'     => 'switch',
			'title'    => esc_html__( 'Read More button', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the read more button.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'post_readmore_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Read More Button Typography', 'doyle' ),
			'subtitle' => esc_html__( 'These settings control the typography post read more button.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('post_readmore' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-readmore, .tag .bt-post-item .bt-readmore, .search .bt-post-item .bt-readmore')
		),
		array(
			'id'       => 'post_readmore_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the label read more button. Leave empty to use "Read More" label.', 'doyle' ),
			'default'  => 'Read More',
			'required' 		=> array('post_readmore' , '=', '1'),
		),
		array(
			'id'       => 'blog_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.category .bt-post-item, .tag .bt-post-item, .search .bt-post-item')
		),
		
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => esc_html__( 'Single Post', 'doyle' ),
	'id'               => 'bt_post',
	'subsection'       => true,
	'fields'           => array(
		array(
			'id'       => 'post_fullwidth',
			'type'     => 'switch',
			'title'    => esc_html__( 'Full Width (100%)', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to have the content area display at 100% width according to the window size. Turn off to follow site width.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'post_fullwidth_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'padding',
			'top'      => false,
			'bottom'   => false,
			'title'    => esc_html__( 'Full Width Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the left/right padding the content area display.', 'doyle' ),
			'default'  => array(
				'padding-left'    => '15px',
				'padding-right' => '15px'
			),
			'required' 		=> array('post_fullwidth' , '=', '1'),
			'output'    => array('.single-post .bt-main-content')
		),
		array(
			'id'            => 'post_sidebar_width',
			'type'          => 'slider',
			'title'         => esc_html__( 'Sidebar Width', 'doyle' ),
			'subtitle'      => esc_html__( 'Controls the width of the left/right sidebar.', 'doyle' ),
			'default'       => 3,
			'min'           => 1,
			'step'          => 1,
			'max'           => 5,
			'display_value' => 'text'
		),
		array(
			'id'       => 'post_titlebar_bg',
			'type'     => 'background',
			'title'    => esc_html__( 'Title Bar Background', 'doyle' ),
			'subtitle' => esc_html__( 'Control the background of the title bar.', 'doyle' ),
			'default'  => array(
				'background-color' => '#171721',
			),
			'output'    => array('.single-post .bt-titlebar'),
		),
		array(
			'id'       => 'single_post_navigation',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Navigation', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the post navigation.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_navigation_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Navigation Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post navigation.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_post_navigation' , '=', '1'),
			'output'   => array('.single-post .bt-blog-article-nav')
		),
		array(
			'id'       => 'single_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Author', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the author.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_author_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Author Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the author.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '60px'
			),
			'required' 		=> array('single_author' , '=', '1'),
			'output'   => array('.single-post .bt-about-author')
		),
		array(
			'id'       => 'single_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Comment', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the comment.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_comment_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Comment Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the comment.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_comment' , '=', '1'),
			'output'   => array('.single-post .bt-comment-wrapper')
		),
		array(
			'id'    => 'single_post_info',
			'type'  => 'info',
			'style' => 'info',
			'title' => esc_html__( 'Post Settings', 'doyle' ),
			'desc'  => esc_html__( 'This is the options you can change the post on the blog page or archive pages.', 'doyle' )
		),
		array(
			'id'       => 'single_post_title',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Title', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to display the post title.', 'doyle' ),
			'default'  => false
		),
		array(
			'id'       => 'single_post_title_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Title Typography', 'doyle' ),
			'subtitle' => esc_html__( 'These settings control the typography post title.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'color'   => false,
			'default'  => array(
				'font-size'   => '36px',
				'font-family' => 'Lato',
				'font-weight' => '700',
				'line-height' => '46px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_title_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Title Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post title.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_title' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-title')
		),
		array(
			'id'       => 'single_post_featured',
			'type'     => 'switch',
			'title'    => esc_html__( 'Featured Image / Video', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the image / video.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_image_size',
			'type'     => 'text',
			'title'    => esc_html__( 'Image Size', 'doyle' ),
			'subtitle' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size.', 'doyle' ),
			'default'  => 'full',
			'required' 		=> array('single_post_featured' , '=', '1')
		),
		array(
			'id'       => 'single_post_featured_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Featured Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post featured.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_featured' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-media')
		),
		array(
			'id'       => 'single_post_meta',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_meta_font',
			'type'     => 'typography',
			'title'    => esc_html__( 'Post Meta Typography', 'doyle' ),
			'subtitle' => esc_html__( 'These settings control the typography post meta.', 'doyle' ),
			'subsets'   => false,
			'letter-spacing'   => true,
			'text-align'   => false,
			'text-transform'   => true,
			'default'  => array(
				'color'       => '#686876',
				'font-size'   => '14px',
				'font-family' => 'Lato',
				'font-weight' => '400',
				'line-height' => '24px',
				'letter-spacing' => '0'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li')
		),
		array(
			'id'       => 'single_post_meta_color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Post Meta Color', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the color post meta.', 'doyle' ),
			'active'   => false,
			'default'  => array(
				'regular' => '#171721',
				'hover'   => '#0a6edd',
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-meta > li a')
		),
		array(
			'id'       => 'single_post_meta_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Meta Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post meta.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_meta' , '=', '1'),
			'output'   => array('.category .bt-post-item .bt-meta, .tag .bt-post-item .bt-meta, .search .bt-post-item .bt-meta')
		),
		array(
			'id'       => 'single_post_meta_author',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Author', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_author_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Author Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field author. Leave empty to use "By:" label.', 'doyle' ),
			'default'  => 'By:',
			'required' 		=> array('single_post_meta_author' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Date', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field author.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field date. Leave empty to use "Date:" label.', 'doyle' ),
			'default'  => 'Date:',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_date_format',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Date Format', 'doyle' ),
			'subtitle' => esc_html__( 'Controls the date format that displays in the post. http://codex.wordpress.org/Formatting_Date_and_Time', 'doyle' ),
			'default'  => 'M d, Y',
			'required' 		=> array('single_post_meta_date' , '=', '1'),
		),
		
		array(
			'id'       => 'single_post_meta_comment',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Comment', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field comment.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comment_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comment Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comment:" label.', 'doyle' ),
			'default'  => 'Comment:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_comments_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Comments Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field comment. Leave empty to use "Comments:" label.', 'doyle' ),
			'default'  => 'Comments:',
			'required' 		=> array('single_post_meta_comment' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Meta Field Category', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the meta field category.', 'doyle' ),
			'default'  => true,
			'required' 		=> array('single_post_meta' , '=', '1'),
		),
		array(
			'id'       => 'single_post_meta_category_label',
			'type'     => 'text',
			'title'    => esc_html__( 'Post Meta Field Category Label', 'doyle' ),
			'subtitle' => esc_html__( 'Please, Enter label of the meta field category. Leave empty to use "Category:" label.', 'doyle' ),
			'default'  => 'Category:',
			'required' 		=> array('single_post_meta_category' , '=', '1'),
		),
		array(
			'id'       => 'single_post_content',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Content', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the content.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_content_sapce',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Content Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post excerpt.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'required' 		=> array('single_post_content' , '=', '1'),
			'output'   => array('.single-post .bt-post-item .bt-content')
		),
		array(
			'id'       => 'single_post_tag',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Tags', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the tags.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_post_share',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post Shares', 'doyle' ),
			'subtitle' => esc_html__( 'Turn on to show the share.', 'doyle' ),
			'default'  => true
		),
		array(
			'id'       => 'single_article_space',
			'type'     => 'spacing',
			'units'    => array( 'em', 'px', '%' ),
			'mode'     => 'margin',
			'top'      => false,
			'right'   => false,
			'left'   => false,
			'title'    => esc_html__( 'Post Space', 'doyle' ),
			'subtitle' => esc_html__( 'Control the bottom margin the post.', 'doyle' ),
			'default'  => array(
				'margin-bottom' => '30px'
			),
			'output'    => array('.single-post .bt-post-item')
		),
		
	)
) );
