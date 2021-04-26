<?php
/*
Plugin Name: Kerge Share Buttons
Plugin URI: http://lmpixels.com
Description: Kerge Theme Share Buttons
Author: LMPixels
Version: 1.1.0
*/

add_action( 'plugins_loaded', 'kerge_sb_textdomain' );

function kerge_sb_textdomain() {
    load_plugin_textdomain( 'kerge-share-buttons', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}

if ( ! function_exists( 'kerge_theme_share_buttons' ) ) :
    function kerge_theme_share_buttons($permalink) {
        /**
         * Display share buttons
         * @param string $permalink
         */
        ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($permalink); ?>"
            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn"
            target="_blank" title="<?php esc_attr_e('Share on Facebook', 'kerge-share-buttons'); ?>">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com/share?url=<?php echo esc_url($permalink); ?>"
            onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" class="btn"
            target="_blank" title="<?php esc_attr_e('Share on Twitter', 'kerge-share-buttons'); ?>">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($permalink); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn"
            title="<?php esc_attr_e('Share on LinkedIn', 'kerge-share-buttons'); ?>">
            <i class="fa fa-linkedin"></i>
        </a>
        <a href="http://www.digg.com/submit?url=<?php echo esc_url($permalink); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="btn"
            title="<?php esc_attr_e('Share on Digg', 'kerge-share-buttons'); ?>">
            <i class="fa fa-digg"></i>
        </a>
    <?php }
endif;
