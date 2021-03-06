=== Content Widget ===
Contributors: shazdeh
Plugin Name: Content Widget
Tags: post, content, widget, sidebar
Requires at least: 3.3
Tested up to: 4.6
Stable tag: 0.4.2

A widget that allows you to display the content of a post (of any type) in a widget area.

== Description ==

With this plugin you can display the content of a post (of any type) in a widget area. You can also limit number of words, change the delimiter and add a read more link to it.

This means, in a widgetized theme, you can move the content around and arrange it however you like, and even reuse it in multiple places. Also comes in handy if you want your client to be in charge of the content, without having access to the Widgets manager.

Since 0.3 you can also query for a random post, or the latest post and limit it by category and offset.


== Installation ==

1. Upload the whole plugin directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Goto Appearance -> Widgets and add some Content Widget.
4. Enjoy!


== Screenshots ==

1. Widget options


== Changelog ==

= 0.4.2 =
* Compatibility with SiteOrigin Page Builder and Themify Builder plugins

= 0.4.1 =
* Fix notice and warning messages
* Add option to show featured image

= 0.4 =
* Code refactor
* i18n support

= 0.3 =
* Improvements suggested by Carsten Bach here: https://gist.github.com/3866525. Thanks Carsten!
* Added the ability to query latest post or random post
* Added the category and offset options

= 0.2.1 =
* Replaced limit_words method with the built-in wp_trim_words function

= 0.2 =
* Added templating capability
* Fixed a left over print command which was intended for debugging purposes :)

= 0.1.2 =
* Fixed a minor bug concerning WP_Query and post_type parameter

= 0.1.1 =
* Added the option to hide the title