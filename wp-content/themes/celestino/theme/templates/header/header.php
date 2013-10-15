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

do_action( 'yit_before_logo' ) ?>

<div class="row">
	<!-- START LOGO -->
	<div id="logo" class="span4 group">
	    <?php
	    /**
	     * @see yit_logo
	     */
	    do_action( 'yit_logo' ) ?> 
	</div>
	<!-- END LOGO -->
	<?php do_action( 'yit_after_logo' ) ?>
	<div id="menu" class="span8 group">
		<!-- START MAIN NAVIGATION -->
		<?php
		/**
		 * @see yit_main_navigation
		 */
		do_action( 'yit_main_navigation') ?>
		<!-- END MAIN NAVIGATION -->
	</div>
</div>