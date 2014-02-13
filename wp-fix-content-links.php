<?php
/*
Plugin Name: WordPress Fix Content Links
Plugin URI: https://github.com/nunomorgadinho/wp-fix-content-links
Description: sometimes authors forget to include the necessary http:// prefix. this fixes such cases by replacing www by http://www
Author: WidgiLabs
Version: 0.1
Author URI: https://github.com/nunomorgadinho
*/
function wp_fix_content_links($content) {
	
	$content = preg_replace('/href="(?!http:\/\/)www?([^"]+)"/', "href=\"http://www\\1\"", $content);
	
	return $content;
}
add_filter('the_content', 'wp_fix_content_links');
?>
