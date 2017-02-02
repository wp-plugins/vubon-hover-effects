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

		if ($style=='style1') {

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

		if ($style=='style2') {

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
		if ($style=='style3') {

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
		if ($style=='style4') {

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
		if ($style=='style5') {

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

		if ($style=='style6') {

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
		if ($style=='style7') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style8') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style9') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style10') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
if ($style=='style11') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}

		if ($style=='style12') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style13') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style14') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style15') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style16') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style17') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style18') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style19') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style20') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style21') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
				';
		}
		if ($style=='style22') {

		$output .= '
<h2 style="color: red;">This Feature Only For Pro Version. If you want to buy Please <a style="color: blue;" href="http://wpexpert24.com/vubon-hover-effects-pro/">Click Here</a></h2>
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
