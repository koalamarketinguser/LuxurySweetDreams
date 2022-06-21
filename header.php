<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
<!-- <img class="test-layout" src="wp-content/themes/luxury/assets/img/project.png"/> -->
<?php wp_body_open(); ?>
<!-- get_template_part('template-parts/header', 'sticky') -->
<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'luxury' ); ?></a>
<div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
    <div class="offcanvas-header main-navigation">
	<?php
		$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

		if ( ! empty( $header_logo ) ) :?>
		<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
        <?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">
	<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu_id' => 'menu-main-sidebar',
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav menu',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
						
						?>
<?php echo do_shortcode('[wpml_language_selector_widget]');?>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col min-vh-100 p-0">
            <!-- toggler -->
            <!-- <button class="btn float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
               <img src="wp-content/themes/luxury/assets/img/menu-bar.svg" alt="">
            </button> -->
			<div id="wrapper">
	<header>
		<nav id="header" class="main-navigation navbar navbar-expand-md">
			<div class="container">
			<button class="btn float-end d-md-none d-flex" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" role="button">
			<i class="fa-solid fa-bars"></i>
			</button>
		
			<a class="navbar-brand d-md-none d-flex" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>
				<ul class="icon-list sidebar d-md-none d-flex">
					
					<li class="mini-cart-item"> 
						<a  class="icon-item" href="<?php echo WC()->cart->get_cart_url(); ?>">
						<img src="wp-content/themes/luxury/assets/img/shopping-bag.svg" alt="">
						</a>
						<div id="cart_container">
						<div class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
							</div> 
						</div>
					</li>
			</ul>
			

				<div id="navbar" class="collapse navbar-collapse ">
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php
							if ( ! empty( $header_logo ) ) :
						?>
							<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php
							else :
								echo esc_attr( get_bloginfo( 'name', 'display' ) );
							endif;
						?>
					</a>
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu_id' => 'menu-main-menu',
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav menu',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
						
						?>
							
						<ul class="icon-list">
							<li class="acount-options">
							<a href="#" class="icon-item"  ><img src="wp-content/themes/luxury/assets/img/account.svg" alt=""></a>
								<?php
									wp_nav_menu( [
										'container_class' => 'menu-account-inner',
										'theme_location' => 'account_menu',
										'menu' => 'Menu Konta'
									] );
									?>
							</li>
							<li id="search-btn" class="search-btn"><a class="icon-item" href="#" ><img src="wp-content/themes/luxury/assets/img/search.svg" alt=""></a></li>
							<li class="mini-cart-item"> 
								<a  class="icon-item" href="<?php echo WC()->cart->get_cart_url(); ?>">
								<img src="wp-content/themes/luxury/assets/img/shopping-bag.svg" alt="">
								
								<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
								</a>
								<div id="cart_container">
								<div class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									</div> 
								</div>
							</li>
						</ul>
				
				
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
	<?php
		get_sidebar();
	?>

	<main id="main" class="container" <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>

        </div>
    </div>
</div>
