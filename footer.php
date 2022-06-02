<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sample
 */

?>

<footer id="colophon" class="site-footer" style="background-color:rgb(255, 153, 51);height:60px">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'sample')); ?>"style="margin-left:850px;">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'sample'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>