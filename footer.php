<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TFC_Nathan_Small
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-footer-wrapper">
        <?php shoreditch_social_menu(); ?>

        <div class="site-info">
            <p class="sponsor">
                <?php _e( 'Paid for by New Mexicans for Nathan Small', 'tfc-nathan-small' ); ?>
            </p>
            <p class="tfc">
                <a href="<?php echo esc_url( __( 'https://techforcampaigns.org/', 'tfc-nathan-small' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'tfc-nathan-small' ), 'Tech for Campaigns' ); ?></a>
            </p>
        </div><!-- .site-info -->
    </div><!-- .site-footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
