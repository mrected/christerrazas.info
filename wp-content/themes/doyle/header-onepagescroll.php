<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<?php do_action('doyle_add_content_before_header'); ?>
	<div id="bt-main">
		<?php 
			global $doyle_options;
			$container_class = (isset($doyle_options['honepage1_fullwidth'])&&$doyle_options['honepage1_fullwidth'])?'fullwidth':'container';
		?>
		<header id="bt_header" class="bt-header-onepage bt-header-onepagev1">
				
			<div class="bt-subheader bt-header-inner">
				<div class="bt-subheader-inner <?php echo esc_attr($container_class); ?>">
					<div class="bt-subheader-cell bt-left">
						<div class="bt-content text-left">
							<?php
								$logo = isset($doyle_options['honepage1_logo']['url'])?$doyle_options['honepage1_logo']['url']:'';
								
								$logo_height = (isset($doyle_options['honepage1_logo_height'])&&$doyle_options['honepage1_logo_height'])?$doyle_options['honepage1_logo_height']:'40';
								
								doyle_logo($logo, $logo_height); 
								
								
							?>
						</div>
					</div>
					
					<div class="bt-subheader-cell bt-right">
						<div class="bt-content text-right">
							<?php
								if(isset($doyle_options['honepage1_content_right_element'])&&$doyle_options['honepage1_content_right_element']&&isset($doyle_options['honepage1_content_right_element'])&&$doyle_options['honepage1_content_right_element']){
									echo '<div class="bt-menu-content-right">';
										foreach($doyle_options['honepage1_content_right_element'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									echo '</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="bt-scroll-menu-wrap">
				<?php
					$menu_assign = isset($doyle_options['honepage1_menu_assign'])&&($doyle_options['honepage1_menu_assign'] != 'auto')?$doyle_options['honepage1_menu_assign']:'';
					doyle_nav_menu($menu_assign, 'main_navigation', 'bt-menu-list');
				?>
			</div>
				
		</header>