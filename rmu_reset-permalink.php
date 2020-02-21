<?php

/**
 * Permalinks
 *
 * Reset permalinks in all subsites.
 *
 * @link https://jeremyfelt.com/2015/07/17/flushing-rewrite-rules-in-wordpress-multisite-for-fun-and-profit/?unapproved=154558&moderation-hash=ce37f136b6eb6e669c20033e0d56b49c#comment-154558
 *
 * @package reset-multisite
 * @subpackage reset-multisite/reset-permalinks
 * @since 1.0 (when the file was introduced)
 */


/**
 * File responsible for reseting permalinks in al sub-sites
 */


// Much better...
if ( wp_is_large_network() ) {
    return;
}

// ...and we're probably still friends.
$sites = get_sites( array( 'network' => 1, 'limit' => 1000 ) );
foreach( $sites as $site ) {
    switch_to_blog( $site->blog_id );
    delete_option( 'rewrite_rules' );
    restore_current_blog();
}
