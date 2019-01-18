<?php

// add_action( 'admin_head', function() {
// 	if( ! isset( $_GET['debug'] ) ) {
// 		return;
// 	}

// 	echo '<pre>';
// 	global $post;

// 	$content = get_content( $post->post_content );

// 	echo '<br/><br/><br/>';
// 	echo $content;

// 	wp_die();
// } );

// function get_content( $content ) {
// 	$all_links   = wp_extract_urls( $content );
// 	$image_links = array();
// 	$image_map   = array();

// 	foreach ($all_links as $key => $link) {
// 		if ( preg_match( '/\.(jpg|jpeg|png|gif)/i', $link ) ) {
// 			$image_links[] = $link;
// 		}
// 	}
// 	print_r( $image_links );
	
// 	// Download images.
// 	foreach ($image_links as $key => $image_url) {
// 		$image = array(
// 	 	    'url' => $image_url,
// 	 	    'id'  => 0,
// 	 	);
// 		$downloaded_image = WP_Download_Image::get_instance()->import( $image );
// 	 	$image_map[ $image_url ] = $downloaded_image['url'];
// 	}
	
// 	echo '<br/><br/><br/>';
// 	print_r( $image_map );

// 	$content = esc_html( $content );
// 	foreach ($image_map as $old_url => $new_url) {
// 		$content = str_replace($old_url, $new_url, $content);
// 	}

// 	return $content;
// }

// add_action( 'wp_download_image_importer_skip_image', function( $default, $attachment ) {

// 	$excluded_domains = array(
// 		'http://localhost/dev.fresh/',
// 	);

// 	foreach ($excluded_domains as $key => $domain) {
// 		if( false !== strpos( $domain, $attachment['url'] ) ) {
// 			return true;
// 		}
// 	}
// 	return false;
// }, 10, 2);
