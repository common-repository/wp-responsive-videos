=== WP Responsive Videos ===

Tags: embed videos, responsive videos shortcode, video shortcode
Requires at least: 3.0.1
Tested up to: 3.8.1
Stable tag: 1.1.1
License: GPLv2 or later

This plugin enables you to embed responsive video on your WP posts, pages and even on to your sidebars/widgets using both shortcodes and widgets. 

== Description ==

This plugin enables you to embed responsive video on your WP posts, pages and even on to your sidebars/widgets. It works like a charm with any theme or WP framework, even your custom themes as well. Currently, it supports many different platforms including: 
=Youtube=
=Vimeo=
=Vube=
=Daily Motion=
=Archeve=
=College Humor=
=Funny or Die=
=Game Trailers=
=IGN

== Installation ==

1. Upload 'wp-responsive-videos' folder to the `/wp-content/plugins/` directory by ftping to your server
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place [wp-respnsive-video] in the page/post/widget and specify 'source' and 'id' of the video or use 'echo do_shortcode('[wp-respnsive-video]');' in your template files to make it work with theme.
4. Or you can use widget as well
5. Sit back and relax the responsiveness of the plugin 


== Frequently Asked Questions ==

= Where can I use the shortcode? =

You can use the shortcode either in your pages, posts and widgets/sidebars.   

= What attributes does the shortcode support? =

For now, it supports following attributes:

'source': Can be either youtube or vimeo depending on your video`s publishihng platform. Default: 'youtube'
'id': ID of the video as found in the video URL. 

Here is one example: [wp-respnsive-video source="youtube" id="gMuS2vpld-w"]

= Where do I find video ID? =
Well, many video providers provide you video ID in the share code or in the URL of the video you are watching. 
Usually, its after embed/ or in case of IGN, you don`t need to specify the URL, just specify the video source that comes after 'url=' in the embed code.
 Also, in case of gametrailers.com, specify the ID after 'gametrailers.com:' in the embed code. 

= Can I specify the video dimensions? =

The video adapts to the dimensions of its outer containing block and adapts automatically when resized. Our advise is to use a wrapper as per the theme in place. 

= Can I use the plugin with my template file? =

Yes, you can put this code: 'echo do_shortcode('[wp-respnsive-video]');' You can specify the attributes here as well. 

= How does the widget work? =

Select the source and provide it the ID of the video of the respective source and then you are good to go.  

== Changelog ==

= 1.0.0 =
* Support for Youtube and Vimeo included
* Responsive right from the Go

= 1.1.0 =
* Widget support added
* Support for Vube, Daily Motion, Archeve, College Hhumor, Funny or Die, Game Trailers and IGN added
*Bug fixes and errors

= 1.1.1 =
*Bug fixes 


