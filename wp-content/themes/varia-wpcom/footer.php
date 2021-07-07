<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer', 'content' ); ?>
<?php if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); } ?>

<div class="copy-custom bg_full text-center">© Copyright 2020-2021 ulife.co</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
