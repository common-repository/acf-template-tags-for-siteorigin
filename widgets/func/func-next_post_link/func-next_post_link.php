<?php
/*
Widget Name: Next Post Link
Description: Displays a link to the next post.
Author: Echelon
Author URI: http://echelonso.com
*/

class EchelonSOFuncNextPostLink extends SiteOrigin_Widget {
	
	function __construct() {
		
		global $acftt;
		
		parent::__construct(
			'echelonso-func-next_post_link',
			__('Next Post Link', $acftt->plugin_text_domain() ),
			array(
				'description' => __('Displays a link to the next post.', $acftt->plugin_text_domain() ),
			),
			array(
				
			),
			array(
				'option' => array(
					'type' => 'section',
					'label' => __( 'Options' , $acftt->plugin_text_domain() ),
					'hide' => true,
					'fields' => array(
						'link_text' => array(
							'type' => 'text',
							'label' => __( 'Link Text', $acftt->plugin_text_domain() ),
							'description' => __( 'Text to for the link, defaults to the posts title.' , $acftt->plugin_text_domain() ),
							'default' => '',
						)
					)
				)
			),
			plugin_dir_path(__FILE__)
		);
	}
	
	function get_less_variables($instance) {
		return array();
	}
	
	function get_template_name($instance) {
		return 'tpl';
	}
	
	function get_style_name($instance) {
		return false;
	}
	
}

siteorigin_widget_register('echelonso-func-next_post_link', __FILE__, 'EchelonSOFuncNextPostLink');