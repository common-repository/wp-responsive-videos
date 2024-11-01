<?php

function get_youtube_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe src="//www.youtube.com/embed/';
	$output_post = '" height="240" width="320" allowfullscreen="" frameborder="0"></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_vimeo_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe src="//player.vimeo.com/video/';
	$output_post = '" height="240" width="320" allowfullscreen="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_dailymotion_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe frameborder="0" width="320" height="240" src="//www.dailymotion.com/embed/video/';
	$output_post = '" allowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_vube_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe type="text/html" width="320" height="240" src="http://vube.com/embed/video/';
	$output_post = '" frameborder="0" allowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_archieve_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe type="text/html" width="320" height="240" src="https://archive.org/embed/';
	$output_post = '" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_blip_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe width="320" height="240" src="http://blip.tv/play/';
	$output_post = '" frameborder="0" allowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_collegehumor_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe width="320" height="240" src="http://www.collegehumor.com/e/';
	$output_post = '?embed=1" frameborder="0" webkitAllowFullScreen allowFullScreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_fod_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe width="320" height="240" src="http://www.funnyordie.com/embed/';
	$output_post = '" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_gametrailers_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe width="320" height="240" src="http://media.mtvnservices.com/embed/mgid:arc:video:gametrailers.com:';
	$output_post = '" frameborder="0" ></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}

function get_ign_video($id){
	$output_pre = '<div class="wptuts-video-container"><iframe width="320" height="240" src="http://widgets.ign.com/video/embed/content.html?url=';
	$output_post = '" frameborder="0" ></iframe></div>';
	
	$output = $output_pre.$id.$output_post;
	
	return $output;
}







//<iframe src="http://widgets.ign.com/video/embed/content.html?url=http://www.ign.com/videos/2014/04/28/destiny-video-preview" width="468" height="263" scrolling="no" frameborder="0" allowfullscreen></iframe>
