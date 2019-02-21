<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php
			$description = get_bloginfo( 'description', 'display' );

			if ( $description || is_customize_preview() ) :
			?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
	<?php if ( has_nav_menu( 'top' ) ) : ?>
			<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">Menu
				<?php
				echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
				//echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
				_e( '', 'twentyseventeen' );
				?>
			</button>
			<div class="navigation-top">
				<div class="wrap">
					<button class="menu-close" aria-controls="top-menu">
						<?php
						echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
						_e( '', 'twentyseventeen' );
						?>   
					</button>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
	<?php endif; ?>
	<div class="main-searchbox searchbox-standalone">
		<?php get_search_form(); ?>
	</div>
