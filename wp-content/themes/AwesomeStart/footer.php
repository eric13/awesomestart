<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<span class="site-title">Site archived in 2016. Functionality may be limited.
				<br>This site uses <a href=https://duckduckgo.com>Duck Duck Go</a>, the search engine that doesn't track you.
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->

	<div style="text-align:center;">

		<a href="http://validator.w3.org/check/referer" target="_blank" rel="nofollow"><div class="validator"><div class='w3c'>W3C</div><div class='badge-type'>XHTML 1.0</div></div></a>

		<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank" rel="nofollow"><div class="validator"><div class='w3c w3c-green'>W3C</div><div class='badge-type'>CSS 3.0</div></div></a>

		<br>

		<a href="https://doublefeature.fm" style="color: #777">Double Feature</a> |
		<a href="https://ericthirteen.com/" style="color: #777">Eric Thirteen</a> |
		<a href="https://tbmchicago.com/" style="color: #777">The Birthday Massacre</a>

	</div>


</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
