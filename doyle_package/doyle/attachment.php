<?php get_header(); ?>
<?php
global $doyle_options;
$doyle_show_page_title = isset($doyle_options['doyle_post_show_page_title']) ? $doyle_options['doyle_post_show_page_title'] : 1;
$doyle_show_page_breadcrumb = isset($doyle_options['doyle_post_show_page_breadcrumb']) ? $doyle_options['doyle_post_show_page_breadcrumb'] : 1;
doyle_title_bar($doyle_show_page_title, $doyle_show_page_breadcrumb);
$doyle_post_show_post_nav = (int) isset($doyle_options['doyle_post_show_post_nav']) ?  $doyle_options['doyle_post_show_post_nav']: 1;
$doyle_post_show_post_author = (int) isset($doyle_options['doyle_post_show_post_author']) ? $doyle_options['doyle_post_show_post_author'] : 1;
$doyle_post_show_post_comment = (int) isset($doyle_options['doyle_post_show_post_comment']) ?  $doyle_options['doyle_post_show_post_comment']: 1;
?>
	<div class="main-content bt-blog-article">
		<div class="row">
			<div class="container">
				<?php
				$doyle_blog_layout = isset($doyle_options['doyle_post_layout']) ? $doyle_options['doyle_post_layout'] : '2cr';
				$cl_sb_left = isset($doyle_options['doyle_post_left_sidebar_col']) ? $doyle_options['doyle_post_left_sidebar_col'] : 'col-xs-12 col-sm-3 col-md-3 col-lg-3';
				$cl_content = isset($doyle_options['doyle_post_content_col']) ? $doyle_options['doyle_post_content_col'] : ( is_active_sidebar('doyle-main-sidebar') ? 'col-xs-12 col-sm-9 col-md-9 col-lg-9' : 'col-xs-12 col-sm-12 col-md-12 col-lg-12' );
				if ( !is_active_sidebar('doyle-main-sidebar') && !is_active_sidebar('doyle-left-sidebar') && !is_active_sidebar('doyle-left-sidebar') ) {
					$cl_content = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
				}
				$cl_sb_right = isset($doyle_options['doyle_post_right_siedebar_col']) ? $doyle_options['doyle_post_right_siedebar_col'] : 'col-xs-12 col-sm-3 col-md-3 col-lg-3';
				?>
				<!-- Start Left Sidebar -->
				<?php if ( $doyle_blog_layout == '2cl' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_left) ?> sidebar-left">
						<?php if (is_active_sidebar('doyle-left-sidebar')) { dynamic_sidebar($sb_left); } else { dynamic_sidebar('doyle-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Left Sidebar -->
				<!-- Start Content -->
				<div class="<?php echo esc_attr($cl_content) ?> content bt-blog">
					<?php
					while ( have_posts() ) : the_post();
						if ( wp_attachment_is_image( get_the_ID() ) ) {
							$att_image = wp_get_attachment_image_src( get_the_ID(), "full");
							echo '<img src="'.esc_attr($att_image[0]).'" width="'.esc_attr($att_image[1]).'" height="'.esc_attr($att_image[2]).'"  class="attachment-medium" alt="'.esc_html__('Thumbnail', 'doyle').'" />';
						}
					endwhile;
					?>
				</div>
				<!-- End Content -->
				<!-- Start Right Sidebar -->
				<?php if ( $doyle_blog_layout == '2cr' ) { ?>
					<div class="<?php echo esc_attr($cl_sb_right) ?> sidebar-right">
						<?php if (is_active_sidebar('doyle-right-sidebar')) { dynamic_sidebar($sb_right); } else { dynamic_sidebar('doyle-main-sidebar'); } ?>
					</div>
				<?php } ?>
				<!-- End Right Sidebar -->
			</div>
		</div>
	</div>
<?php get_footer(); ?>