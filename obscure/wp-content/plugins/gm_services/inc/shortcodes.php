<?
function gm_services_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'orderby' => 'menu_order',
		'cat' => '',
		'display' => 'excerpt',
	), $atts ) );

	$db_args = array(
		'post_type' => 'services',
		'order' => 'ASC',
		'orderby' => $orderby,
		//'service_categories' => $cat,
	);

	$original_query = $wp_query;
	$services_loop = new WP_Query( $db_args );
	if($services_loop->have_posts()) {
		switch($display) {		
			case "content":
				$content .= "<div class=\"services_wrapper\">";
				while( $services_loop->have_posts() ) : $services_loop->the_post();
					$content_filtered = get_the_content();
					$content_filtered = apply_filters('the_content', $content_filtered);
					$content_filtered = str_replace(']]>', ']]&gt;', $content_filtered);
					$content .= "<div class=\"service_single\">";
					$content .= "<h3 class=\"service_title\">".get_the_title()."</h3>";
					$content .= "<div class=\"service_content\">$content_filtered</div>";
					$content .= "</div>";
				endwhile;
				$content .= "</div>";
				break;
			case "excerpt":
				$content .= "<div class=\"services_wrapper\">";
				while( $services_loop->have_posts() ) : $services_loop->the_post();
					$content .= "<div class=\"service_single\">";
					$content .= "<h3 class=\"service_title\"><a href=".get_permalink().">".get_the_title()."</a></h3>";
					$content .= "<div><span class=\"service_excerpt\">".get_the_excerpt()."</span></div>";
					$content .= "</div>";
				endwhile;
				$content .= "</div>";
				break;
			case "list":
				$content .= "<ul class=\"services_wrapper\">";
				while( $services_loop->have_posts() ) : $services_loop->the_post();
					$content .= "<li class=\"service_single\">";
					$content .= "<span class=\"service_title\"><a href=".get_permalink().">".get_the_title()."</a></span>";
					$content .= "</li>";
				endwhile;
				$content .= "</ul>";
				break;
		}
			
	}
	$wp_query = null;
	$wp_query = $original_query;
	wp_reset_postdata();
	return $content;
				
}
add_shortcode( 'gm_services', 'gm_services_shortcode' );