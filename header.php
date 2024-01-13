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
<div class="searchOverlay"></div>
<div class="searchParent mainBoxShadow">
	<div class="closeIcon">
		<svg width="25" height="25" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#fc0000" fill-rule="evenodd" d="M11.293 3.293a1 1 0 1 1 1.414 1.414L9.414 8l3.293 3.293a1 1 0 0 1-1.414 1.414L8 9.414l-3.293 3.293a1 1 0 0 1-1.414-1.414L6.586 8 3.293 4.707a1 1 0 0 1 1.414-1.414L8 6.586l3.293-3.293Z"/></svg>
	</div>
    <form action="/" method="get">
        <button type="submit">
			<svg stroke="#777" width="25px" height="25px" xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><circle cx="11.854" cy="11.854" r="9" fill="none" stroke-miterlimit="10" stroke-width="2"></circle><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M18.451 18.451l7.695 7.695"></path></svg>
		</button>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="دنبال چه میگردید؟" />
		<div class="searchButtonContainer">
			<button type="submit" class="generalButton fillButton fillButtonNoArrow" fdprocessedid="x887ac">جستجو</button>
			<a class="closeBtn generalButton noArrowButton">بستن</a>
		</div>
    </form>
</div>
<div class="mobileMenuContainer">
	<div class="mobileMenuHeader">
		<div class="mobilemenuClose">
		<svg height="20" width="20" fill="#fff" stroke="#fff" stroke-width="10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 476.213 476.213" xml:space="preserve" transform="rotate(180)"><path d="M476.213 223.107H57.427l94.393-94.394-21.213-21.213L0 238.106l130.607 130.608L151.82 347.5l-94.393-94.393h418.786z"/></svg>
		</div>
		<span>گروه مهندسی آزند کنترل</span>
	</div>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'container_class'=>'mainMenu'
			)
		);
	?>
</div>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a class="logoSection" href="#">
				<svg width="50" height="30" fill="#de5826" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.37 13.68-4-12a1 1 0 0 0-1-.68H5.63a1 1 0 0 0-.95.68l-4.05 12a1 1 0 0 0 1 1.32h2.93a1 1 0 0 0 .94-.68l.61-1.78 3 2.27a1 1 0 0 0 .6.19h4.68a1 1 0 0 0 .98-1.32Zm-5.62.66a.32.32 0 0 1-.2-.07L3.9 10.08l-.09-.07h3l.08-.21 1-2.53 2.24 6.63a.34.34 0 0 1-.38.44Zm4.67 0H10.7a1 1 0 0 0 0-.66l-4.05-12h3.72a.34.34 0 0 1 .32.23l4.05 12a.34.34 0 0 1-.32.43Z"/></svg>
			</a>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container_class'=>'mainMenu'
					)
				);
			?>
			<a class="searchIcon" id="openSearchContainer">
				<div class="searchIconBack">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#fff"><path d="m20.449 18.751-4.586-4.586a7.222 7.222 0 1 0-1.7 1.7l4.586 4.586zM4.4 10a5.6 5.6 0 1 1 5.6 5.6A5.6 5.6 0 0 1 4.4 10z"/></svg>
				</div>
				<span>جستجو</span>
			</a>
			<span class="headerMobileMenu">
				<svg height="30" width="30" fill="#32323c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" xml:space="preserve"><path d="M28 0C12.561 0 0 12.561 0 28s12.561 28 28 28 28-12.561 28-28S43.439 0 28 0zm12 41H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4zm0-11H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4zm0-11H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4z"/></svg>
			</span>
		</div>
	</div>
	<div class="mainHeaderStickyBack">
		<div class="mainHeader mainView">
			<a class="logoSection" href="#">
				<svg width="50" height="30" fill="#de5826" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.37 13.68-4-12a1 1 0 0 0-1-.68H5.63a1 1 0 0 0-.95.68l-4.05 12a1 1 0 0 0 1 1.32h2.93a1 1 0 0 0 .94-.68l.61-1.78 3 2.27a1 1 0 0 0 .6.19h4.68a1 1 0 0 0 .98-1.32Zm-5.62.66a.32.32 0 0 1-.2-.07L3.9 10.08l-.09-.07h3l.08-.21 1-2.53 2.24 6.63a.34.34 0 0 1-.38.44Zm4.67 0H10.7a1 1 0 0 0 0-.66l-4.05-12h3.72a.34.34 0 0 1 .32.23l4.05 12a.34.34 0 0 1-.32.43Z"/></svg>
			</a>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container_class'=>'mainMenu'
					)
				);
			?>
			<a class="searchIcon" id="openSearchContainer">
				<div class="searchIconBack">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#fff"><path d="m20.449 18.751-4.586-4.586a7.222 7.222 0 1 0-1.7 1.7l4.586 4.586zM4.4 10a5.6 5.6 0 1 1 5.6 5.6A5.6 5.6 0 0 1 4.4 10z"/></svg>
				</div>
				<span>جستجو</span>
			</a>
			<span class="headerMobileMenu">
				<svg height="30" width="30" fill="#32323c" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" xml:space="preserve"><path d="M28 0C12.561 0 0 12.561 0 28s12.561 28 28 28 28-12.561 28-28S43.439 0 28 0zm12 41H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4zm0-11H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4zm0-11H16a2 2 0 0 1 0-4h24a2 2 0 0 1 0 4z"/></svg>
			</span>
		</div>
	</div>
