<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Atom
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
<body>
<header>
	<nav>
		<div class='container'>
			<div class='row'>
				<?php
				wp_nav_menu( array(
					'container'=> false,
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav col-sm-8',
				) );
				?>
				<div class='city_select inactive col-sm-4'>
					<p>Выберите город</p>
					<div class='select'>
						<label><input type='text' placeholder='Город' /></label>
						<ul>
							<li>Название города</li>
							<li>Название города</li>
							<li>Value</li>
							<li>Value</li>
							<li>Value</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class='block'>
		<div class='container'>
			<div class='row'>
					<div class='logo col-xl-2'>
						<!--<img src='img/logo.svg' alt='logo' width='161' height ='62'/>-->
						<?php the_custom_logo(); ?>
					</div>
					<div class='col-md-3 col-12'>
						<a href='#cities'>
							Находимся в 38 городах<br />
							по всей Росии
						</a>
					</div>
					<div class='number col-xl-4 col-md-3 col-12'>
						<span>8 800 637-96-96</span>
						<button type='button' class='recall'>Заказать звонок</button>
					</div>
					<div class='col-md-3 col-12'>
						<a href='#' class='btn'>Личный кабинет</a>
					</div>
			</div>
		</div>
	</div>
</header>
