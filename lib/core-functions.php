<?php

/*********CONSTANTS**************/
define('WPRV_PLUGIN_URL',WP_PLUGIN_URL.'/wp-responsive-videos');

/********INCLUDES****************/

include('helpers.php');
include('widgets/wp-responsive-video-widget.php');


add_action( 'wp_enqueue_scripts', 'wptuts_responsive_video_add_stylesheet' );
add_shortcode ('wp-respnsive-video', 'taleriod_video_shortcode' );

function taleriod_video_shortcode( $atts ) {
    extract( shortcode_atts( array (
		'source' => 'youtube',
		'id'=>''
    ), $atts) );
	
	
	//Embed video
	if(isset($id) && ($id !='') ){
		$op = taleroid_embed_video($source,$id);		
	}	
	//Check for errors
	else{
		$op = taleroid_error_check($id);		
	}
	return $op;
}

function taleroid_embed_video($source,$id){
	
	if(isset($source)){
		$function_name = 'get_'.$source.'_video';	
		$output = $function_name($id);	
	}
	else{
		$output = 'Video source not supported/Wrong video source name';	
	} 
	
	return $output;	
}
function taleroid_error_check($id){
	if(!isset($id)||($id==''))
	{
		return 'Video ID cannot be blank';
	}
	else{			
		return 'There was some error specifying/rendering the video';
	}
}

// Register stylesheet with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
function wptuts_responsive_video_add_stylesheet() {
    wp_register_style( 'wptuts_responsive_video_style', WPRV_PLUGIN_URL.'/css/style.css' );
    wp_enqueue_style( 'wptuts_responsive_video_style' );
}