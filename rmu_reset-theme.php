<?php

/**
 * Reset theme
 *
 * Force websites to change the current theme
 *
 * @link http://hookr.io/functions/get_sites/
 * @link https://hotexamples.com/examples/-/-/get_sites/php-get_sites-function-examples.html
 * @link https://wordpress.stackexchange.com/questions/54543/changing-multisite-themes-on-mass/329959#329959
 *
 * @package reset-multisite
 * @subpackage reset-multisite/reset-permalinks
 * @since 1.0 (when the file was introduced)
 */


/**
  * Error:
  * ty of non-object in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/extensions-for-pressbooks/default/efpb-default-theme.php on line 48
  * Warning: Cannot modify header information - headers already sent by (output started at /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/extensions-for-pressbooks/default/efpb-default-theme.php:48) in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-includes/functions.php on line 6029
  * Warning: Cannot modify header information - headers already sent by (output started at /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/extensions-for-pressbooks/default/efpb-default-theme.php:48) in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-admin/includes/misc.php on line 1252
  * Warning: Cannot modify header information - headers already sent by (output started at /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/extensions-for-pressbooks/default/efpb-default-theme.php:48) in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-admin/admin-header.php on line 9
  * Notice: Undefined variable: _SESSION in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/pressbooks/inc/namespace.php on line 177
  * Notice: Undefined variable: _SESSION in /var/www/vhosts/books4languages.com/open.books4languages.com/wp-content/plugins/pressbooks/inc/namespace.php on line 177
  *
  *
  * Note that style.css is not used except to provide Pressbooks with theme file header information.
  * Your web theme stylesheet is compiled when your theme is activated or theme options that affect it are changed.
  * For easier development, you can add the following line to wp-config.php: define('WP_ENV', 'development');
  * This will turn on the development compiler introduced in Pressbooks 3.9.0,
  * which triggers a recompile of your web theme stylesheet if the source files have been modified since it was last compiled when you visit any page in your webbook (see here).
  *
  * define('WP_ENV', 'development');
  *
  **/



 // function switch_all_multisite_themes()
 // 	{
 //     foreach ( get_sites(array('fields' => 'ids', 'number' => 369)) as $site ) // Number of sites in the network
 // 				{
 //         switch_to_blog( $site->blog_id );
 //
 //         switch_theme( 'books4languages-book-child-theme-for-pressbooks' );// pressbooks-book / books4languages-book-child-theme-for-pressbooks
 //
 //
 //         restore_current_blog();
 //     }
 // }
 // switch_all_multisite_themes();  // run this function only once
