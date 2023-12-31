<?php 
/**
 * The Footer for Shopzee Pro
 *
 * Displays the footer area of the template.
 *
 * @package Shopzee Pro
 * 
 * @since Shopzee Pro 1.0
 */
global $complete;?>

	<?php /*To Top Button */?>
	<a class="to_top <?php if (empty ($complete['totop_id'])) { ?>hide_totop<?php } ?>"><i class="fa-angle-up fa-2x"></i></a>
<!--Footer Start-->
<div class="footer_wrap layer_wrapper <?php if(!empty($complete['hide_mob_footwdgt'])){ echo 'mobile_hide_footer';} ?>">
<?php
  global $complete;
  $footertype = $complete['foot_layout_id']; 
?>
<div id="footer" class="footer-type<?php echo $footertype; ?>">
	<?php if($complete['hide_foot_infobox'] == '') { ?> 
		<div class="footer-infobox-newsletter">
        	<div class="center"><?php echo do_shortcode($complete['footer_infobox_content']); ?></div>
        </div>
    <?php } ?>
    <?php if($complete['hide_foot_infobox2'] == '') { ?> 
        <div class="footer-infobox">
        	<div class="center">
                <a class="footer-logo-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $complete['footer_logo']; ?>"></a>
            </div>
        </div>
    <?php } ?>
	<div class="center">
    	<div class="rowfooter<?php if ($footertype == 5) {?> footernone<?php } ?>">
            <div class="clear"></div>
    		<?php if ($footertype == 4) {?>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?>
            </div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-3')) : else : ?><h3><?php if (!empty ($complete['foot_cols3_title'])) { $ftcols3 = html_entity_decode($complete['foot_cols3_title']); $ftcols3 = stripslashes($ftcols3); echo do_shortcode($ftcols3); } ?></h3><?php $ftcols3cntnt = $complete['foot_cols3_content']; echo do_shortcode($ftcols3cntnt); endif;?></div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-4')) : else : ?><h3><?php if (!empty ($complete['foot_cols4_title'])) { $ftcols4 = html_entity_decode($complete['foot_cols4_title']); $ftcols4 = stripslashes($ftcols4); echo do_shortcode($ftcols4); } ?></h3><?php $ftcols4cntnt = $complete['foot_cols4_content']; echo do_shortcode($ftcols4cntnt); endif;?></div>
            <?php } if ($footertype == 3) {?>    
            <div class="footercols3"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols3"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?></div>
            <div class="footercols3"><?php if (dynamic_sidebar('footer-3')) : else : ?><h3><?php if (!empty ($complete['foot_cols3_title'])) { $ftcols3 = html_entity_decode($complete['foot_cols3_title']); $ftcols3 = stripslashes($ftcols3); echo do_shortcode($ftcols3); } ?></h3><?php $ftcols3cntnt = $complete['foot_cols3_content']; echo do_shortcode($ftcols3cntnt); endif;?></div>
            <?php } ?>
            <?php if ($footertype == 2) {?>    
            <div class="footercols2"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols2"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?></div>
            <?php } if ($footertype == 1) { if(!dynamic_sidebar('footer-1')) : ?> 
            <div class="footercols1"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <?php  endif; ?>          
            <?php } ?>
        </div>              
            <div class="clear"></div> 
    </div>
    
    <div id="copyright">
        <div class="center">
            <div class="copytext"><?php $copyrightcntnt = $complete['footer_text_id']; echo do_shortcode($copyrightcntnt); ?></div>
        </div>
	</div>
    
</div>

<!--Footer END-->
</div><!--layer_wrapper class END-->
<?php wp_footer(); ?>
</body>
</html>