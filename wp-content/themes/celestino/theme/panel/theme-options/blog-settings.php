<?php
/**
 * Your Inspiration Themes
 * 
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

function yit_tab_blog_settings( $items ) {
    unset( $items[65], $items[66] );
    
    return $items;
}
add_filter( 'yit_submenu_tabs_theme_option_blog_settings', 'yit_tab_blog_settings' );

add_filter( 'yit_blog-read-more-text_std', create_function( '', 'return "[read more]";' ) );

function yit_blog_date_icon_std() {
    return array( 'icon' => 'icon-calendar', 'custom' => YIT_THEME_IMG_URL . '/icons/date.png' );
}
add_filter( 'yit_blog-date-icon_std', 'yit_blog_date_icon_std' );

function yit_blog_author_icon_std() {
    return array( 'icon' => 'icon-user', 'custom' => YIT_THEME_IMG_URL . '/icons/author.png' );
}
add_filter( 'yit_blog-author-icon_std', 'yit_blog_author_icon_std' );

function yit_blog_comments_icon_std() {
    return array( 'icon' => 'icon-comment', 'custom' => YIT_THEME_IMG_URL . '/icons/comments.png' );
}
add_filter( 'yit_blog-comments-icon_std', 'yit_blog_comments_icon_std' );