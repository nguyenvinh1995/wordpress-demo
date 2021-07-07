<?php
/**
 * Pro Designs and Plugins Feed
 *
 * @package Footer Mega Grid Columns
 * @since 1.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>
<div class="wrap fmgc-wrap">
<h2><?php _e( 'How It Works', 'footer-mega-grid-columns' ); ?></h2>
	<style type="text/css">
	.wpos-pro-box .hndle{background-color:#0073AA; color:#fff;}
	.wpos-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
	.postbox-container .wpos-list li:before{font-family: dashicons; content: "\f139"; font-size:20px; color: #0073aa; vertical-align: middle;}
	.fmgc-wrap .wpos-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
	.fmgc-shortcode-preview{background-color: #e7e7e7; font-weight: bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
	.upgrade-to-pro{font-size:18px; text-align:center; margin-bottom:15px;}
</style>

<div id="poststuff">
	<div id="post-body" class="metabox-holder columns-2">
		<!--How it workd HTML -->
		<div id="post-body-content">
			<div class="meta-box-sortables">
				<div class="postbox">

					<h3 class="hndle">
						<span><?php _e( 'How It Works - Display and Shortcode', 'footer-mega-grid-columns' ); ?></span>
					</h3>

					<div class="inside">
						<table class="form-table">
							<tbody>
								<tr>
									<th>
										<label><?php _e('Getting Started', 'footer-mega-grid-columns'); ?></label>
									</th>
									<td>
										<ul>
											<li><?php _e('Step-1. Go to widget Tab and click on any widget.', 'footer-mega-grid-columns'); ?></li>
											<li><?php _e('Step-2. Add widgets in Footer Mega Grid Columns in widget', 'footer-mega-grid-columns'); ?></li>
										</ul>
									</td>
								</tr>

								<tr>
									<th>
										<label><?php _e('How Shortcode Works', 'footer-mega-grid-columns'); ?></label>
									</th>
									<td>
										<ul>
											<li><?php _e('Paste below template code in footer tag in footer.php file in active theme.', 'footer-mega-grid-columns'); ?></li>
											<li class="fmgc-shortcode-preview">&lt;?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?&gt;</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div><!-- .inside -->
				</div><!-- #general -->

				<div class="postbox">
					<div class="postbox-header">
						<h2 class="hndle">
							<span><?php _e( 'Need Support?', 'footer-mega-grid-columns' ); ?></span>
						</h2>
					</div>
					<div class="inside">
						<table class="form-table">
							<tbody>
								<tr>
									<td>
										<p><?php _e('Check plugin document for shortcode parameters and demo for designs.', 'footer-mega-grid-columns'); ?></p> <br/>
										<a class="button button-primary" href="https://docs.wponlinesupport.com/footer-mega-grid-columns/" target="_blank"><?php _e('Documentation', 'footer-mega-grid-columns'); ?></a>
										<a class="button button-primary" href="https://demo.wponlinesupport.com/footer-mega-grid-columns-demo/" target="_blank"><?php _e('Demo for Designs', 'footer-mega-grid-columns'); ?></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- .postbox -->

				<div class="postbox">
					<div class="postbox-header">
						<h2 class="hndle">
							<span><?php _e( 'Help to improve this plugin!', 'footer-mega-grid-columns' ); ?></span>
						</h2>
					</div>
					<div class="inside">
						<p><?php _e('Enjoyed this plugin? You can help by rate this plugin', 'footer-mega-grid-columns'); ?> <a href="https://wordpress.org/support/plugin/footer-mega-grid-columns/reviews/#new-post" target="_blank"><?php _e('5 stars!', 'footer-mega-grid-columns'); ?></a></p>
					</div><!-- .inside -->
				</div><!-- .postbox -->

			</div><!-- .meta-box-sortables -->
		</div><!-- #post-body-content -->

		<!--Upgrad to Pro HTML -->
		<div id="postbox-container-1" class="postbox-container">
			<div class="meta-box-sortables">
				<div class="postbox wpos-pro-box">

					<h3 class="hndle">
						<span><?php _e( 'Upgrate to Pro', 'footer-mega-grid-columns' ); ?></span>
					</h3>
					<div class="inside">
						<ul class="wpos-list">
							<li><?php _e( '3 display output method.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( '1 Shortcode.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Grid Support.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Custom CSS editor.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Custom CSS class support.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Footer wrap width.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Widget title color.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Widget link color.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( 'Widget content color.', 'footer-mega-grid-columns' ); ?></li>
							<li><?php _e( '100% Multilanguage.', 'footer-mega-grid-columns' ); ?></li>
						</ul>
						<div class="upgrade-to-pro"><?php _e( 'Gain access to <strong>Footer Mega Grid Columns Pro</strong> included in <br /><strong>Essential Plugin Bundle', 'footer-mega-grid-columns'); ?></div>
						<a class="button button-primary wpos-button-full" href="https://www.wponlinesupport.com/wp-plugin/footer-mega-grid-columns/?ref=WposPratik&utm_source=WP&utm_medium=Footer-Mega-Grid&utm_campaign=Upgrade-PRO" target="_blank"><?php _e('Go Premium', 'footer-mega-grid-columns'); ?></a>
						<p><a class="button button-primary wpos-button-full" href="https://demo.wponlinesupport.com/prodemo/footer-mega-grid-columns-pro/?utm_source=WP&utm_medium=Footer-Mega-Grid&utm_campaign=PRO-Demo" target="_blank"><?php _e('View PRO Demo', 'footer-mega-grid-columns'); ?></a></p>
					</div><!-- .inside -->
				</div><!-- #general -->
			</div><!-- .metabox-holder -->
		</div><!-- #post-container-1 -->
	</div><!-- #post-body -->
</div><!-- #poststuff -->

</div><!-- end .fmgc-wrap -->