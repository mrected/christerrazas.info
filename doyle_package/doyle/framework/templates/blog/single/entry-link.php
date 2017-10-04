<?php
	global $doyle_options;
	$post_title = isset($doyle_options['single_post_title']) ? $doyle_options['single_post_title']: true;
	$post_featured = isset($doyle_options['single_post_featured']) ? $doyle_options['single_post_featured']: true;
	$post_image_size = isset($doyle_options['single_post_image_size']) ? $doyle_options['single_post_image_size']: '';
	$post_meta = isset($doyle_options['single_post_meta']) ? $doyle_options['single_post_meta']: true;
	$post_meta_author = isset($doyle_options['single_post_meta_author']) ? $doyle_options['single_post_meta_author']: true;
	$post_meta_author_label = isset($doyle_options['single_post_meta_author_label'])&&$doyle_options['single_post_meta_author_label'] ? $doyle_options['single_post_meta_author_label']: esc_html__('By:', 'doyle');
	$post_meta_date = isset($doyle_options['single_post_meta_date']) ? $doyle_options['single_post_meta_date']: true;
	$post_meta_date_label = isset($doyle_options['single_post_meta_date_label'])&&$doyle_options['single_post_meta_date_label'] ? $doyle_options['single_post_meta_date_label']: esc_html__('Date:', 'doyle');
	$post_meta_date_format = isset($doyle_options['single_post_meta_date_format'])&&$doyle_options['single_post_meta_date_format'] ? $doyle_options['single_post_meta_date_format']: get_option('date_format');
	$post_meta_comment = isset($doyle_options['single_post_meta_comment']) ? $doyle_options['single_post_meta_comment']: true;
	$post_meta_comment_label = isset($doyle_options['single_post_meta_comment_label'])&&$doyle_options['single_post_meta_comment_label'] ? $doyle_options['single_post_meta_comment_label']: esc_html__('Comment:', 'doyle');
	$post_meta_comments_label = isset($doyle_options['single_post_meta_comments_label'])&&$doyle_options['single_post_meta_comments_label'] ? $doyle_options['single_post_meta_comments_label']: esc_html__('Comments:', 'doyle');
	$post_meta_category = isset($doyle_options['single_post_meta_category']) ? $doyle_options['single_post_meta_category']: true;
	$post_meta_category_label = isset($doyle_options['single_post_meta_category_label'])&&$doyle_options['single_post_meta_category_label'] ? $doyle_options['single_post_meta_category_label']: esc_html__('Category:', 'doyle');
	$post_content = isset($doyle_options['single_post_content']) ? $doyle_options['single_post_content']: true;
	$post_tag = isset($doyle_options['single_post_tag']) ? $doyle_options['single_post_tag']: true;
	$post_share = isset($doyle_options['single_post_share']) ? $doyle_options['single_post_share']: true;
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
	$url = isset($post_options['url'])?$post_options['url']:'';
	
	$social_title = isset($post_options['social-title'])?$post_options['social-title']:'';
	$social = isset($post_options['social'])?$post_options['social']:array();

	$social_item = array();
	if(!empty($social)){
		foreach($social as $item){
			$social_item[] = '<li><a href="'.esc_url($item['link']).'"><i class="'.esc_attr($item['icon']).'"></i></a></li>';
		}
	}
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><?php the_title(); ?></h3>
		<?php } ?>
		
		<?php if($post_featured){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
					if($url){
						echo '<a href="'.esc_url($url).'" target="_blank">'.$url.'</a>';
					}else{
						if($post_image_size){
							$thumb_size = (!empty($post_image_size))?$post_image_size:'full'; 
							$thumbnail = wpb_getImageBySize( array(
								'post_id' => get_the_ID(),
								'attach_id' => null,
								'thumb_size' => $thumb_size,
								'class' => ''
							) );
							echo (!empty($thumbnail))?$thumbnail['thumbnail']:'';
						}else{
							if (has_post_thumbnail()) the_post_thumbnail('full');
						}
					}
				?>
			</div>
		<?php } ?>
		
		<?php if($post_meta){ ?>
			<ul class="bt-meta">
				<?php if($post_meta_author){ ?>
					<li class="bt-author"><?php echo '<strong>'.esc_html($post_meta_author_label).' </strong>'.get_the_author(); ?></li>
				<?php } ?>
				<?php if($post_meta_date){ ?>
					<li class="bt-public"><?php echo '<strong>'.esc_html($post_meta_date_label).' </strong>'.get_the_date($post_meta_date_format); ?></li>
				<?php } ?>
				<?php if($post_meta_comment){ ?>
					<li><a href="<?php comments_link(); ?>"><?php comments_number( '<strong>'.esc_html($post_meta_comment_label).' </strong> 0', '<strong>'.esc_html($post_meta_comment_label).' </strong> 1', '<strong>'.esc_html($post_meta_comments_label).' </strong> %' ); ?></a></li>
				<?php } ?>
				<?php if($post_meta_category){ ?>
					<li><?php the_terms( get_the_ID(), 'category', '<strong>'.esc_html($post_meta_category_label).' </strong>', ', ' ); ?></li>
				<?php } ?>
			</ul>
		<?php } ?>
		
		<?php if($post_content){ ?>
			<div class="bt-content">
				<?php
					the_content();
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __('Pages:', 'doyle'),
						'after' => '</div>',
					));
				?>
			</div>
		<?php } ?>
		
		<?php if($post_tag || $post_share){ ?>
			<div class="bt-tag-share">
				<?php if($post_tag){ ?>
					<div class="bt-tag"><?php the_tags( '', '', '' ); ?> </div>
				<?php } ?>
				<?php if($post_share){ ?>
					<div class="bt-share">
						<?php
							if($social_title) echo '<h4>'.$social_title.'</h4>';
							if(!empty($social_item)) echo '<ul>'.implode(' ', $social_item).'</ul>'; 
						?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</article>
