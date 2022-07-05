<?
// Header and body backend scripts
$code_head = get_theme_mod('setting_header_code');
$code_body = get_theme_mod('setting_body_code');
$theme_color = get_theme_mod('setting_theme_color');

//$cig_video_url = wp_get_attachment_url(26);
$cig_video_url = wp_get_attachment_url(27);


// get global Mobile Detect
global $detect;
?>
<!doctype html>

<!--
Lavet af Superego - https://superego.nu
Telefon: +45 78 70 29 29 - Email: horsens@superego.nu
 -->

<html class="no-js" <? language_attributes(); ?> dir="ltr">

<head>
	<meta charset="<? bloginfo('charset'); ?>">
	<? if (!is_plugin_active('wordpress-seo/wp-seo.php')) : ?>
		<title><? wp_title(); ?></title>
	<? endif; ?>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Theme color -->
	<meta name="theme-color" content="<?= $theme_color ?>">

	<? if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
		<link rel="icon" href="<?= get_template_directory_uri() ?>/assets/images/theme-default/favicon.png">
		<link href="<?= get_template_directory_uri() ?>/assets/images/theme-default/apple-icon-touch.png" rel="apple-touch-icon" />
	<? endif; ?>

	<!-- Preconnect Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<? wp_head(); ?>

	<? if ($code_head) :
		echo $code_head;
	endif; ?>
</head>

<body <? body_class('bg-secondary-l mt-24'); ?>>

	<? if ($code_body) :
		echo $code_body;
	endif; ?>

	<div id="wrapper" class="wrapper">
		<header id="main-header" class="header h-24 flex items-center fixed" role="banner" aria-label="Site header">
			<div class="container mx-0 h-full bg-primary-d-2">
				<div class="grid grid-cols-12 justify-center items-center h-full"> 				
					<div class="col-span-10">	
						<video src="<?= $cig_video_url ?>" id="cigVideo" playsinline="true" webkit-playsinline="true" preload="auto" muted="muted"></video>
					</div>

					<div class="col-span-2">
						<? if ($detect->isMobile()) : ?>
							<nav id="main-navigation-mobile" class="outOfBounds">
								<? superego_top_nav('main-nav-mobile'); ?>
							</nav>

							<div id="menu-toggle-mobile" class="flex flex-row justify-center items-center">
								<div id="toggle-mobile" class="not-active">
									<div class="inner">
										<span id="line_1"></span>
										<span id="line_2"></span>
										<span id="line_3"></span>
									</div>
								</div>
							</div>
						<? else : ?>
							<nav id="main-navigation">
								<? superego_top_nav('main-nav'); ?>¨
							</nav>
						<? endif; ?>
					</div>
				</div>
			</div>	
		</header>
		<!-- end #main-header -->