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

function yit_header_background_images( $bgs ) {       
    return array_merge( $bgs, array( 
        YIT_THEME_IMG_URL . '/backgrounds/032.jpg' => __( 'Background 01', 'yit' ),
        YIT_THEME_IMG_URL . '/backgrounds/045.jpg' => __( 'Background 02', 'yit' ),
        'custom' => __( 'Custom background', 'yit' )
    ) );
}
add_filter( 'yit_header_backgrounds', 'yit_header_background_images' );

function yit_body_background_images( $bgs ) {       
    return array_merge( $bgs, array(                                             
        YIT_THEME_IMG_URL . '/backgrounds/032.jpg' => __( 'Background 01', 'yit' ),
        YIT_THEME_IMG_URL . '/backgrounds/045.jpg' => __( 'Background 02', 'yit' ),
        'custom' => __( 'Custom background', 'yit' ),
    ) );
}
add_filter( 'yit_body_backgrounds', 'yit_body_background_images' );