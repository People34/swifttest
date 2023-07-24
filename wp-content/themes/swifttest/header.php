<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SwiftTest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'swifttest'); ?>
		</a>

		<header class="header">
			<div class="container">
				<div class="header__inner">
					<div class="menu">
						<ul class="menu__list">
							<li class="menu__item">
								<a class="menu__link" href="#services">
									ПРАЙС
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__link" href="#garant">
									ГАРАНТІЯ
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__link" href="#feedback">
									ВІДГУКИ
								</a>
							</li>
							<li class="menu__item">
								<a class="menu__link" href="#contact">
									КОНТАКТИ
								</a>
							</li>
						</ul>
					</div>
					<div class="header__inner-title">
						<h1>
							НАКРУТКА СОЦІАЛЬНИХ МЕРЕЖ
						</h1>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->