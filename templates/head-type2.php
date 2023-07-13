<?php 
/**
 * Header layout 2 for Shopzee Pro
 *
 * Displays The Header layout 2. This file is imported in header.php
 *
 * @package Shopzee Pro
 * 
 * @since Shopzee Pro 1.0
 */
global $complete;?>

<!--HEADER STARTS-->

<div class="header type1">
  <div class="center">
    <div class="head_inner"> 
      <!--LOGO START-->
      <div class="logo">
        <?php if(!empty($complete['logo_image_id']['url'])){   ?>
        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a> <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php }else{ ?>
        <?php if ( is_home() ) { ?>
        <h1><a href="<?php echo esc_url( home_url( '/' ) );?>">
          <?php bloginfo('name'); ?>
          </a></h1>
        <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php }else{ ?>
        <h2><a href="<?php echo esc_url( home_url( '/' ) );?>">
          <?php bloginfo('name'); ?>
          </a></h2>
        <span class="desc"><?php echo bloginfo('description'); ?></span>
        <?php } ?>
        <?php } ?>
      </div>
      <!--LOGO END-->
      <div class="header-content-right"> 
        <div class="header-extras">
        	<li>
            	<form class="product-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
                	<input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search', 'woocommerce' ); ?>" />
                    <i class="fa fa-search" aria-hidden="true"><input type="submit" value="<?php echo esc_attr__( 'Search' ); ?>" /></i>
                    <input type="hidden" name="post_type" value="product" />
                </form>
            </li>
            <li class="skt-account-link">
            	<?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><i class="fa fa-user-circle" aria-hidden="true"></i> ACCOUNT</a>
                <?php } else { ?>
                <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><i class="fa fa-user-circle" aria-hidden="true"></i> ACCOUNT</a>
                <?php } ?>
            </li>
			<li><a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View Cart' ); ?>"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="custom-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a></li>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="topmenu-bar">
	<div class="center">
    	<div id="topmenu" class="<?php if ('header' == $complete['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
          <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </div>
        <!--MOBILE MENU START--> 
        <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a> 
        <!--MOBILE MENU END-->
    </div>
</div>
<!--HEADER ENDS-->