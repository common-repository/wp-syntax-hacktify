=== Wp-Syntax Hacktify ===
Plugin Name: Wp-Syntax Hacktify
Contributors: n8v
Donate link: http://worldvision.org
Tags: WP-Syntax, color, colors, customization, customize, theme, colorizer, custom, edit, wp, syntax, highlight, highlighting, code, pre, markup, css, style, keyword, colour
Requires at least: 2.0
Tested up to: 3.1alpha
Stable tag: trunk
Version: 1.0

== Description ==

A plugin allowing you to change the WP-Syntax code highlighting color scheme elegantly.

[WP-Syntax](http://wordpress.org/extend/plugins/wp-syntax/ "WP-Syntax") rawks for writing about geeky stuff, but I want it more blacker.  And I want a CSS file to hack instead of those icky and inefficient inline styles.

I got the basic idea from [WP-Syntax-Colorizer](http://wordpress.org/extend/plugins/wp-syntax-colorizer/) but went further with an external CSS file.

== Installation ==

= Prerequisite = 

1. Install [WP-Syntax](http://wordpress.org/extend/plugins/wp-syntax/ "WP-Syntax").

= Installification = 
1. Either
  1. Unpack the zip file and upload the files to `wp-content/plugins/wp-syntax-hacktify`, 

     or my favorite,
  2. Check it out fresh with Subversion:
<pre>
		     cd wp-content/plugins
		     svn co http://svn.wp-plugins.org/wp-syntax-hacktify/trunk wp-syntax-hacktify
</pre>

2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Enjoy my colors, or override them yourself by making a file named `uglier_syntax_styles.css` in your plugins directory (`wp-content/plugins`)!  Use `wp-content/plugins/wp-syntax-hacktify/hacktified.css` as an example.

== Frequently Asked Questions ==

= WTF? =

Everything in the [WP-Syntax documentation](http://wordpress.org/extend/plugins/wp-syntax/) still applies.

If you're confused by the CSS styles, look at the [GeSHi documentation](http://qbnz.com/highlighter/documentation.php "GeSHi documentation"), and the language-specific files in `wp-content/plugins/wp-syntax/geshi/geshi`.

== Screenshots ==

1. New colors for `diff` output
2. Some PHP with my new colors
3. Some HTML with my new colors


