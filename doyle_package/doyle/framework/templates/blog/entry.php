<?php
	global $doyle_options;
	$post_title = isset($doyle_options['post_title']) ? $doyle_options['post_title']: true;
	$post_featured = isset($doyle_options['post_featured']) ? $doyle_options['post_featured']: true;
	$post_image_size = isset($doyle_options['post_image_size']) ? $doyle_options['post_image_size']: '';
	$post_meta = isset($doyle_options['post_meta']) ? $doyle_options['post_meta']: true;
	$post_meta_author = isset($doyle_options['post_meta_author']) ? $doyle_options['post_meta_author']: true;
	$post_meta_author_label = isset($doyle_options['post_meta_author_label'])&&$doyle_options['post_meta_author_label'] ? $doyle_options['post_meta_author_label']: esc_html__('By:', 'doyle');
	$post_meta_date = isset($doyle_options['post_meta_date']) ? $doyle_options['post_meta_date']: true;
	$post_meta_date_label = isset($doyle_options['post_meta_date_label'])&&$doyle_options['post_meta_date_label'] ? $doyle_options['post_meta_date_label']: esc_html__('Date:', 'doyle');
	$post_meta_date_format = isset($doyle_options['post_meta_date_format'])&&$doyle_options['post_meta_date_format'] ? $doyle_options['post_meta_date_format']: get_option('date_format');
	$post_meta_comment = isset($doyle_options['post_meta_comment']) ? $doyle_options['post_meta_comment']: true;
	$post_meta_comment_label = isset($doyle_options['post_meta_comment_label'])&&$doyle_options['post_meta_comment_label'] ? $doyle_options['post_meta_comment_label']: esc_html__('Comment:', 'doyle');
	$post_meta_comments_label = isset($doyle_options['post_meta_comments_label'])&&$doyle_options['post_meta_comments_label'] ? $doyle_options['post_meta_comments_label']: esc_html__('Comments:', 'doyle');
	$post_meta_category = isset($doyle_options['post_meta_category']) ? $doyle_options['post_meta_category']: true;
	$post_meta_category_label = isset($doyle_options['post_meta_category_label'])&&$doyle_options['post_meta_category_label'] ? $doyle_options['post_meta_category_label']: esc_html__('Category:', 'doyle');
	$post_excerpt = isset($doyle_options['post_excerpt']) ? $doyle_options['post_excerpt']: true;
	$post_excerpt_length = (int) isset($doyle_options['post_excerpt_length']) ? $doyle_options['post_excerpt_length']: 55;
	$post_excerpt_more = isset($doyle_options['post_excerpt_more']) ? $doyle_options['post_excerpt_more']: '[...]';
	$post_readmore = isset($doyle_options['post_readmore']) ? $doyle_options['post_readmore']: true;
	$post_readmore_label = isset($doyle_options['post_readmore_label'])&&$doyle_options['post_readmore_label'] ? $doyle_options['post_readmore_label']: esc_html__('Read More', 'doyle');
	
	$format = get_post_format() ? get_post_format() : 'standard';
	$post_options = function_exists("fw_get_db_post_option")?fw_get_db_post_option(get_the_ID(), 'post_options'):array();
?>
<article <?php post_class(); ?>>
	<div class="bt-post-item">
		
		<?php if($post_title){ ?>
			<h3 class="bt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>
		
		<?php if($post_featured && has_post_thumbnail()){ ?>
			<div class="bt-media <?php echo esc_attr($format); ?>">
				<?php
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
		
		<?php if($post_excerpt){ ?>
			<div class="bt-excerpt">
				<?php echo wp_trim_words(get_the_excerpt(), $post_excerpt_length, $post_excerpt_more); ?>
			</div>
		<?php } ?>
		
		<?php if($post_readmore){ ?>
			<a class="bt-readmore" href="<?php the_permalink(); ?>"><?php echo esc_html($post_readmore_label); ?></a>
		<?php } ?>
		
	</div>
</article>
