<?php
class WPBakeryShortCode_bt_button extends WPBakeryShortCode {
	
	protected function content( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'style' => 'inline',
			'min_width' => '',
			'align' => 'left',
			'content_space' => '',
			'css_animation' => '',
			'el_id' => '',
			'el_class' => '',
			
			'font_size' => '',
			'font_weight' => '',
			'line_height' => '',
			'letter_spacing' => '',
			'color' => '',
			'hover_effect' => '',
			
			'css' => ''
			
		), $atts));
		
		$css_class = array(
			$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
			'bt-element',
			'bt-button-element',
			$style,
			$align,
		);
		
		$wrapper_attributes = array();
		if ( ! empty( $el_id ) ) {
			$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
		}
		
		$link = isset($atts['link'])?vc_build_link( $atts['link'] ):array();
		$button_text = '';
		$button_attributes = array();
		
		if(!empty($hover_effect)) $button_attributes[] = 'class="'.esc_attr($hover_effect).'"';
		
		if(!empty($link)){
			if ( ! empty( $link['url'] ) ) {
				$button_attributes[] = 'href="' . esc_attr( $link['url'] ) . '"';
			}
			
			if ( ! empty( $link['target'] ) ) {
				$button_attributes[] = 'target="' . esc_attr( $link['target'] ) . '"';
			}
			
			if ( ! empty( $link['rel'] ) ) {
				$button_attributes[] = 'rel="' . esc_attr( $link['rel'] ) . '"';
			}
			
			$css_button = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
			if ( ! empty( $css_button ) ) {
				$button_attributes[] = 'class="' . esc_attr( $css_button ) . '"';
			}
			
			$style_button = array();
			if($font_size) $style_button[] = 'font-size: '.$font_size.';';
			if($font_weight) $style_button[] = 'font-weight: '.$font_weight.';';
			if($line_height) $style_button[] = 'line-height: '.$line_height.';';
			if($letter_spacing) $style_button[] = 'letter-spacing: '.$letter_spacing.';';
			if($color) $style_button[] = 'color: '.$color.';';
			if($style != 'block' && $min_width) $style_button[] = 'min-width: '.$min_width.';';
			
			
			if ( ! empty( $style_button ) ) {
				$button_attributes[] = 'style="' . esc_attr( implode(' ', $style_button) ) . '"';
			}
			
			if ( ! empty( $link['title'] ) ) {
				$button_text = $link['title'];
			}
		}
		
		$output = '<div class="'.esc_attr(implode(' ', $css_class)).'" '.implode( ' ', $wrapper_attributes ).'>';
		$output .= '<a '.implode(' ', $button_attributes).'>'.$button_text.'</a>';
		$output .= '</div>';

		return $output;
	}
}

vc_map(array(
	'name' => __('Button', 'doyle'),
	'base' => 'bt_button',
	'category' => __('BT Elements', 'doyle'),
	'icon' => 'bt-icon',
	'params' => array(
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Style', 'doyle'),
			'param_name' => 'style',
			'value' => array(
				'Inline' => 'inline',
				'Block' => 'block'
			),
			'description' => __('Select layout style in this elment.', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Min Width', 'doyle'),
			'param_name' => 'min_width',
			'value' => '',
			'dependency' => array(
				'element'=>'style',
				'value'=> 'inline'
			),
			'description' => __('Please, enter number with px min width in this element. Ex: 200px', 'doyle')
		),
		array(
			'type' => 'dropdown',
			'class' => '',
			'heading' => __('Align', 'doyle'),
			'param_name' => 'align',
			'value' => array(
				'Left' => 'text-left',
				'Center' => 'text-center',
				'Right' => 'text-right',
			),
			'dependency' => array(
				'element'=>'style',
				'value'=> 'inline'
			),
			'description' => __('Select layout align in this elment.', 'doyle')
		),
		vc_map_add_css_animation(),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Element ID', 'doyle'),
			'param_name' => 'el_id',
			'value' => '',
			'description' => esc_html__( 'Enter element ID (Note: make sure it is unique and valid).', 'doyle' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Extra Class', 'doyle'),
			'param_name' => 'el_class',
			'value' => '',
			'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'doyle' )
		),
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'doyle' ),
			'param_name' => 'link',
			'group' => __('Link', 'doyle'),
			'description' => esc_html__( 'Add link of button in this element.', 'doyle' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Size', 'doyle'),
			'param_name' => 'font_size',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Please, enter number with px font size text in this element. Ex: 14px', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Font Weight', 'doyle'),
			'param_name' => 'font_weight',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Please, enter number font weight text in this element. Ex: 400', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Line Height', 'doyle'),
			'param_name' => 'line_height',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Please, enter number with px line height text in this element. Ex: 24px', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Letter Spacing', 'doyle'),
			'param_name' => 'letter_spacing',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Please, enter number with px letter spacing text in this element. Ex: 1.2px', 'doyle')
		),
		array(
			'type' => 'colorpicker',
			'class' => '',
			'heading' => __('Color', 'doyle'),
			'param_name' => 'color',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Select color text in this element.', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Letter Spacing', 'doyle'),
			'param_name' => 'letter_spacing',
			'value' => '',
			'group' => __('Link', 'doyle'),
			'description' => __('Please, enter number with px letter spacing text in this element. Ex: 1.2px', 'doyle')
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => __('Hover Effect', 'doyle'),
			'param_name' => 'hover_effect',
			'value' =>  '',
			'group' => __('Link', 'doyle'),
			'description' => __('Select hover effect in this element. EX: hvr-bounce-to-right, hvr-bounce-to-left, hvr-bounce-to-top, hvr-bounce-to-bottom ...', 'doyle')
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'CSS box', 'doyle' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design Options', 'doyle' ),
		)
	)
));
