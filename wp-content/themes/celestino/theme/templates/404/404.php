<?php 
/**
 * Your Inspiration Themes
 * 
 * In this files there is a collection of a functions useful for the core
 * of the framework.   
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

?>
<img class="error-404-image group" src="<?php echo get_template_directory_uri() ?>/images/404.png" title="<?php _e( 'Error 404', 'yit' ); ?>" alt="404" />
<div class="error-404-text group">
    <p>We are sorry but the page you are looking for does not exist.<br />You could <a href="<?php echo home_url(); ?>">return to the home page</a> or search using the search box below.</p>
    <?php get_search_form() ?>
</div>
