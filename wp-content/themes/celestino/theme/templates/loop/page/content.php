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

if( have_posts() ) :
    while( have_posts() ) : the_post();
        ?>
        <div id="post-<?php the_ID() ?>" <?php post_class( 'group' ) ?>>
            <?php the_content() ?>
        </div>
        <?php
    endwhile;
endif;

wp_reset_postdata();
?>