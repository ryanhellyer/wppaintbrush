=== WP Paintbrush ===
Contributors: Ryan Hellyer
Donate link: http://wppaintbrush.com/plugins/
Tags: dark, light, white, black, gray, red, orange, yellow, green, blue, purple, one-column, two-columns, three-columns, left-sidebar, right-sidebar, fixed-width, flexible-width, custom-background, custom-colors, custom-header, custom-menu, featured-image-header, featured-images, full-width-template, theme-options, translation-ready
Requires at least: 3.3
Tested up to: 3.3
Stable tag: 1.0.6

The file is a work in progres ... WP Paintbrush provides an easy to use wysiwyg editing tool for redesigning your site.

== Description ==

WP Paintbrush provides an easy to use wysiwyg editing tool for redesigning your site.

== Installation ==

1. Upload the `wppaintbrush` folder to the `/wp-content/themes/` directory
2. Activate the Theme through the 'Themes' menu in WordPress
3. Head to the front-end of the site to use the wysiwyg editor tool

== Theme Notes ==

== Frequently Asked Questions ==

= Can I extend WP Paintbrush? =

Yes, plugins for WP Paintbrush are available at http://wppaintbrush.com/plugins/

== Screenshots ==

1. Front-end editor

== Changelog ==

= 1.0.7 beta [4/11/2011] =
* Now serves error when incompatible child theme used
* If no minimum version specified in child theme then no error served

= 1.0.6 beta [3/11/2011] =
* Minor bug fixes
* Removed built in design functionality
* Moved built in designs to child themes
* Fixed bugs relating to magazine layout plugin (coming soon)
* Theme reset functionality added
* Header/footer dissapearing bug fixed
* Ability to edit child theme designs without losing changes to other child themes
* Tag shortcode bug fixed
* Close button bug fixed

= 1.0.5.1 beta [25/10/2011] =
* Minor bug fixes

= 1.0.5 beta [23/10/2011] =
* Fixed bug which prevented changes in HTML for published designs from appearing on the live site
* Improved support for changing the home page via plugins
* Fixed broken close button on front-end editor
* Fixed drag and drop editor

= 1.0.4 beta [23/10/2011] =
* Fixed folder name and removed errant backup files
* Renamed some functions to make them more descriptive
* Comments  now appear correctly on static pages
* “No comments” now displays on blog posts with no comments
* The update_colours() JS function was removed from live sites HTML
* "Open" link removed from HTML when not needed (previously removed with CSS)
* Some variables renamed to avoid naming clashes and to make them more descriptive
* Incorrect use of is_int() has been fixed
* Some action hooks which should have been filters have been fixed where appropriate
* Improvements to allow for increased plugin functionality

= 1.0.3.1 beta [21/10/2011] =
* Fixed folder name and removed errant backup files

= 1.0.3 beta [20/10/2011] =
* Added support for Magazine layouts via hooks and extra code
* Performance enhancement via improved use of data sanitization
* Minor code improvements
* Minor bug fixes
* Added auto update functionality

= 1.0.2 beta [05/10/2011] =
* Added readme.txt file (which you are reading right now!)
* Changed references to 'ptc' to 'wppb'. 'ptc' was a reference to the code name "PixoPoint Theme Creator" which was used during the very early alpha builds
* Changed ptc_load_css() to wppb_load_processed_css()
* Removed references to comments_template() and add_editor_style() from functions.php as they are already in use in shortcodes.php file

= 1.0.1 beta [05/10/2011] =
* Added auto-updating support

== Upgrade Notice ==

= 1.0.2 beta =
Maintenance release. Minor updates only.
