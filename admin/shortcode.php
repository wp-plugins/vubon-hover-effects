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
					<figure class="effect-lily">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<div>
								<h2>'.$info['title'].'</h2>
								<p>'.$info['desc'].'</p>
							</div>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		
		if ($style==style2) {
		
		$output .= '
					<figure class="effect-sadie">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style3) {
		
		$output .= '
					<figure class="effect-layla">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style4) {
		
		$output .= '
					<figure class="effect-oscar">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style5) {
		
		$output .= '
					<figure class="effect-marley">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		
		if ($style==style6) {
		
		$output .= '
					<figure class="effect-ruby">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style7) {
		
		$output .= '
					<figure class="effect-roxy">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style8) {
		
		$output .= '
					<figure class="effect-bubba">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style9) {
		
		$output .= '
					<figure class="effect-romeo">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
				';
		}
		if ($style==style10) {
		
		$output .= '
					<figure class="effect-dexter">
						<img src="'.$info['imgup_1'].'"/>
						<figcaption>
							<h2>'.$info['title'].'</h2>
							<p>'.$info['desc'].'</p>
							<a href="#"></a>
						</figcaption>			
					</figure>
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