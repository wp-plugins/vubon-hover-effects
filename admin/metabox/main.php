<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'amaz-hover',
		'priority'  => 'high',
		'title'     => __('Vubon Hover Item', 'vp_textdomain'),
		'fields'    => array(
		
			 array(
				'type' => 'upload',
				'name' => 'imgup_1',
				'label' => __('Upload Image', 'vp_textdomain'),
			),
		
		 array(
			'type' => 'textbox',
			'name' => 'title',
			'label' => __('Enter your title', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Title Here',
			),

			array(
			'type' => 'textarea',
			'name' => 'desc',
			'label' => __('Enter your description', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Enter your Description',
			),
			
			
			

		),
	),
);

/**
 * EOF
 */