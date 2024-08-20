<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Pour swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <ul>
                <li></li>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                <li>
                    <button class="menu_button_switch" aria-controls="primary-menu" aria-expanded="false">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </li>
            </ul>

		</nav><!-- #site-navigation -->
        <div id="menu_fs">
            <div id="logo_menu_fs"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_no_studio.png'?>" alt="logo Fleurs d'oranger & chats errants"></div>
            <ul>
                <li><div class="menu_titles"><a href="#story">Histoire</a></div></li>
                <li><div class="menu_titles"><a href="#characters">Personnages</a></div></li>
                <li><div class="menu_titles"><a href="#place">Lieu</a></div></li>
                <li class="menu_titles">
                    <a class="two-words" href="#studio">
                        <div class="first-word">
                            Studio 
                        </div>
                        <div class="second-word"> 
                            Koukaki
                        </div>
                    </a>
                </li>
            </ul>
            <img id="purple_flower_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/purple_flower_menu_fs.png'?>" alt="fleur violette">
            <img id="blue_cat_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blue_cat_menu_fs.png'?>" alt="tête chat bleu">
            <img id="orange_flower_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orange_flower_menu_fs.png'?>" alt="fleur orange">
            <img id="orange_cat_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orange_cat_menu_fs.png'?>" alt="tête chat orange">
            <img id="white_flower_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/white_flower_menu_fs.png'?>" alt="fleur blanche">
            <img id="pink_flower_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/pink_flower_menu_fs.png'?>" alt="fleur rose">
            <img id="black_cat_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/black_cat_menu_fs.png'?>" alt="tête chat noir">
            <img id="big_flower_menu_fs" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_flower_menu_fs.png'?>" alt="fleur grande">
            <p id="copyright_menu_fs">STUDIO KOUKAKI</p>
        </div>
	</header><!-- #masthead -->
