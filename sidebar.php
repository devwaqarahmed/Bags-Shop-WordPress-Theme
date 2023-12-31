<?php 
/**
 * The Sidebar for Shopzee Pro
 *
 * Stores the sidebar area of the template. loaded in other template files with get_sidebar();
 *
 * @package Shopzee Pro
 * 
 * @since Shopzee Pro 1.0
 */
global $complete;?>

            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <div id="sidebar" class="home_sidebar <?php if(!empty($complete['hide_mob_rightsdbr'])){ echo 'hide_mob_rightsdbr';} ?>">
                    <div class="widgets">  
                            <?php dynamic_sidebar('sidebar'); ?>
                     </div>
                 </div>
            <?php endif; ?>
