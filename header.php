<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package azandmag
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a class="logoSection" href="#">
				<svg width="50" height="50" fill="#de5826" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.37 13.68-4-12a1 1 0 0 0-1-.68H5.63a1 1 0 0 0-.95.68l-4.05 12a1 1 0 0 0 1 1.32h2.93a1 1 0 0 0 .94-.68l.61-1.78 3 2.27a1 1 0 0 0 .6.19h4.68a1 1 0 0 0 .98-1.32Zm-5.62.66a.32.32 0 0 1-.2-.07L3.9 10.08l-.09-.07h3l.08-.21 1-2.53 2.24 6.63a.34.34 0 0 1-.38.44Zm4.67 0H10.7a1 1 0 0 0 0-.66l-4.05-12h3.72a.34.34 0 0 1 .32.23l4.05 12a.34.34 0 0 1-.32.43Z"/></svg>
			</a>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container_class'=>'mainMenu'
					)
				);
			?>
			<a class="searchIcon">
				<div class="searchIconBack">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#fff"><path d="m20.449 18.751-4.586-4.586a7.222 7.222 0 1 0-1.7 1.7l4.586 4.586zM4.4 10a5.6 5.6 0 1 1 5.6 5.6A5.6 5.6 0 0 1 4.4 10z"/></svg>
				</div>
				<span>جستجو</span>
			</a>
		</div>
	</div>
	<div class="mainHeaderStickyBack">
		<div class="mainHeader mainView">
			<a class="logoSection" href="#">
				<svg width="50" height="50" fill="#de5826" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.37 13.68-4-12a1 1 0 0 0-1-.68H5.63a1 1 0 0 0-.95.68l-4.05 12a1 1 0 0 0 1 1.32h2.93a1 1 0 0 0 .94-.68l.61-1.78 3 2.27a1 1 0 0 0 .6.19h4.68a1 1 0 0 0 .98-1.32Zm-5.62.66a.32.32 0 0 1-.2-.07L3.9 10.08l-.09-.07h3l.08-.21 1-2.53 2.24 6.63a.34.34 0 0 1-.38.44Zm4.67 0H10.7a1 1 0 0 0 0-.66l-4.05-12h3.72a.34.34 0 0 1 .32.23l4.05 12a.34.34 0 0 1-.32.43Z"/></svg>
			</a>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container_class'=>'mainMenu'
					)
				);
			?>
			<a class="searchIcon">
				<div class="searchIconBack">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#fff"><path d="m20.449 18.751-4.586-4.586a7.222 7.222 0 1 0-1.7 1.7l4.586 4.586zM4.4 10a5.6 5.6 0 1 1 5.6 5.6A5.6 5.6 0 0 1 4.4 10z"/></svg>
				</div>
				<span>جستجو</span>
			</a>
		</div>
	</div>
