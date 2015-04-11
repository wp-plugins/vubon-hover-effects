<?php


// Register Shortcode
function vubon_short_ganerator_eff($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',		
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'amaz-hover', 'amaz_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		$subtlemeta = vp_metabox('amzhovpck.amaz-hover', false);
		
	$i = 0;

		$output = '<div class="content"><div class="grid">';
		
		foreach ($subtlemeta as $info) {	

		if ($style==style1) {
		
		$output .= '
					<vubon_figure class="effect-lily" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<div>
								<h2>'.$info['title'].'</h2>
								<p>'.$info['desc'].'</p>
							</div>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		
		if ($style==style2) {
		
		$output .= '
					<vubon_figure class="effect-sadie" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style3) {
		
		$output .= '
					<vubon_figure class="effect-layla" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style4) {
		
		$output .= '
					<vubon_figure class="effect-oscar" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style5) {
		
		$output .= '
					<vubon_figure class="effect-marley" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		
		if ($style==style6) {
		
		$output .= '
					<vubon_figure class="effect-ruby" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style7) {
		
		$output .= '
					<vubon_figure class="effect-roxy" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style8) {
		
		$output .= '
					<vubon_figure class="effect-bubba" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style9) {
		
		$output .= '
					<vubon_figure class="effect-romeo" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		if ($style==style10) {
		
		$output .= '
					<vubon_figure class="effect-dexter" id="vubon_bor_box">
						<img src="'.$info['imgup_1'].'"/>
						<vubon_figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</vubon_figcaption>			
					</vubon_figure>
				';
		}
		
		$i++;
	}
	
	endwhile;
	$output .='</div></div>';
	wp_reset_query();
	return $output;
}

add_shortcode('amzhover', 'vubon_short_ganerator_eff');

?>