<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
	$fav = esc_attr( get_option( 'favicon_url' ) );
	$logo = esc_attr( get_option( 'logo_url' ) );
	$fb = esc_attr( get_option('fb_url') );
	$twit = esc_attr( get_option('twitter_url') );
	$insta = esc_attr( get_option('insta_url') );
	$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
	$phoneUrl = esc_attr( get_option( 'phone_url' ) );
	$copyright = esc_attr( get_option( 'copyright_url' ) );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="<?php echo $logo; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
</head>
<body <?php body_class(); ?>>


<!-- header -->
	<header class="Header">
		<div class="HeaderContainer">
			<div class="HeaderRow">
				<div class="HeaderLogo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
				</div>
				<div class="HeaderButtonWrapper">
					<div class="HeaderButton">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
								<path d="M1.615 14C1.155 14 0.771 13.846 0.463 13.538C0.154333 13.2293 0 12.845 0 12.385V1.615C0 1.155 0.154333 0.771 0.463 0.463C0.771 0.154333 1.155 0 1.615 0H16.385C16.845 0 17.229 0.154333 17.537 0.463C17.8457 0.771 18 1.155 18 1.615V12.385C18 12.845 17.846 13.229 17.538 13.537C17.2293 13.8457 16.845 14 16.385 14H1.615ZM9 7.115L1 1.885V12.385C1 12.5643 1.05767 12.7117 1.173 12.827C1.28833 12.9423 1.43567 13 1.615 13H16.385C16.5643 13 16.7117 12.9423 16.827 12.827C16.9423 12.7117 17 12.5643 17 12.385V1.885L9 7.115ZM9 6L16.692 1H1.308L9 6ZM1 1.885V1V12.385C1 12.5643 1.05767 12.7117 1.173 12.827C1.28833 12.9423 1.43567 13 1.615 13H1V1.885Z" fill="white"/>
							</svg>
							無料相談はこちら
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- end of header -->

<main>