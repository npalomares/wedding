<?
function gm_timeline_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'orderby' => 'ASC',
		'cat' => '',
		'display' => 'excerpt',
	), $atts ) );

	$db_args = array(
		'post_type' => 'timeline',
		'order' => 'ASC',
		'orderby' => $orderby,
	);

	$i=0;
	

	$original_query = $wp_query;
	$timeline_loop = new WP_Query( $db_args );
	if($timeline_loop->have_posts()) {
		$content .= "<div class=\"timeline-wrap\">";
		$content .= "<div class=\"begin\"><p>Start</p></div>";
		$content .= "<section id=\"cd-timelineOne\" class=\"cd-container\">";


		while( $timeline_loop->have_posts() ) : $timeline_loop->the_post();
			$content_filtered = get_the_content();
			$content_filtered = apply_filters('the_content', $content_filtered);
			$content_filtered = str_replace(']]>', ']]&gt;', $content_filtered);
			$content .= "<div class=\"cd-timeline-block\">";

			if($i > 0) {
				$class = 'is-hidden';
			}
			$content .= "<div class=\"cd-timeline-img ".$class."\"></div>";
			$content .= "<div class=\"cd-timeline-body ".$class."\">";
			$content .= "<h2>".get_the_title()."</h2>";
			$content .= "<p>".$content_filtered."</p>";
			$content .= "<div class=\"timeline-image\">".get_the_post_thumbnail()."</div>";
			$content .= "</div>";
			$content .= "</div>";

			$i++;
		endwhile;

		$content .= "</section>";
		$content .= "<div class=\"end\"><p>Today</p></div>";
		$content .= "</div>"; //close timeline wrap
			
	}
	$wp_query = null;
	$wp_query = $original_query;
	wp_reset_postdata();
	return $content;
				
}
add_shortcode( 'gm_timeline', 'gm_timeline_shortcode' );