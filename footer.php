<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
$logo = esc_attr( get_option( 'logo_url' ) );

?>

	</main>

	
	


	<?php wp_footer(); ?>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>