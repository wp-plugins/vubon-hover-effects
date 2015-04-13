<?php

return array(
// menus
'Vubon Hover' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('Vubon Hover Shortcode Settings', 'qualia_td'),
			'code' => '[amzhover]',
			'attributes' => array(
			
							array(
			'type' => 'notebox',
			'name' => 'nb_1',
			'label' => __('Author Comment', 'vp_textdomain'),
			'description' => __('If you want to enable this awesome features, you need to buy pro version from here <a target="_blank" href="http://wpexpert24.com/vubon-hover-effects-pro/">Vubon Hover Effects Pro</a>', 'vp_textdomain'),
			'status' => 'error',
				),
				
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Hover Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),	
						array(
							'value' => 'style3',
							'label' => 'Style 3',
						),	
						array(
							'value' => 'style4',
							'label' => 'Style 4',
						),	
						array(
							'value' => 'style5',
							'label' => 'Style 5',
						),	
						array(
							'value' => 'style6',
							'label' => 'Style 6',
						),	
						array(
							'value' => 'style7',
							'label' => 'Style 7 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style8',
							'label' => 'Style 8 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style9',
							'label' => 'Style 9 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style10',
							'label' => 'Style 10 (<strong>Pro Only</strong>)',
						),				
							array(
							'value' => 'style11',
							'label' => 'Style 11 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style12',
							'label' => 'Style 12 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style13',
							'label' => 'Style 13 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style14',
							'label' => 'Style 14 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style15',
							'label' => 'Style 15 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style16',
							'label' => 'Style 16 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style17',
							'label' => 'Style 17 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style18',
							'label' => 'Style 18 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style19',
							'label' => 'Style 19 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style20',
							'label' => 'Style 20 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style21',
							'label' => 'Style 21 (<strong>Pro Only</strong>)',
						),	
						array(
							'value' => 'style22',
							'label' => 'Style 22 (<strong>Pro Only</strong>)',
						),
	
						
				),	),
					


					array(
						'type' => 'select',
						'name' => 'google_font',
						'label' => __('Text Font <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'default' => 'Roboto',
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),
					
					 array(
						'type' => 'slider',
						'name' => 'title_size',
						'label' => __('Title Font Size <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '1',
						'max' => '100',
						'step' => '1',
						'default' => '22',
					),	
					
					array(
						'type'  => 'color',
						'name'  => 'title_color',
						'label' => __('Title Font Color <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
					 array(
						'type' => 'slider',
						'name' => 'des_size',
						'label' => __('Description Font Size <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						//'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'vp_textdomain'),
						'min' => '1',
						'max' => '100',
						'step' => '1',
						'default' => '12',
					),	
					
					array(
						'type'  => 'color',
						'name'  => 'des_color',
						'label' => __('Description Font Color <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						'default' => '#ffffff',
					),
					
					
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab? <br/>(<strong style="color: red">PRO ONLY</strong>)', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					
				
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>
?>