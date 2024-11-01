<?php
/**
 * @package wp-syntax-hacktify
 * @author Nathan Vonnahme
 * @version 1.0
 */
/*
Plugin Name: Wp-Syntax Hacktify
Plugin URI: http://wordpress.org/extend/plugins/wp-syntax-hacktify
Description:  Make the GeSHi syntax more blacker (but still readable) and more elegantly customizable, using real CSS classes instead of inline styles, ewww.
Author: Nathan Vonnahme
Version: 1.0
Author URI: http://n8v.enteuxis.org
*/



function hacktify_headers() {
        echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/wp-syntax-hacktify/hacktified.css" />' . "\n";

	if (file_exists('wp-content/plugins/uglier_syntax_styles.css')) {
	  echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/uglier_syntax_styles.css" />' . "\n";
	}
/* 	echo '<!-- '.getcwd().' -->'; */
/* 	echo '<!-- WPSyntax CSS Hacktification complete! -->'; */

}

function my_custom_geshi_styles(&$geshi)
{

  $geshi->enable_classes();

  // TODO:  optionify these

  $geshi->enable_keyword_links(true);
  $geshi->set_overall_style('color: #ccc; font: 12px Consolas, Lucida Console, Monaco, monospace;', true); // Strangely, this controls regexps.

  return true;


}


add_action('wp_syntax_init_geshi', 'my_custom_geshi_styles');
add_action('wp_head', 'hacktify_headers', 99999);

