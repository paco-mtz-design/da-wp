<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta name="description" content="Línea de Prêt à Porter de ropa para hombre y ropa para mujer. Creada por diseñadoras mexicanas. Venta online, con envíos a toda la república" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<div id="home_cover">
			<div class="cover_info">
				<h1>Dâmoiselle</h1>
				<h2>Fall Delivery.</h2>
			</div>
		</div>

		<div id="container">

		<div id="top_menu">
			<a href="<?php echo home_url(); ?>"><h1>Dâ Wearhouse</h1></a>
			<nav class="nav-collapse">
				<ul  id="st-trigger-effects">
					<li><a href="<?php echo home_url(); ?>">Inicio</a></li>
					<!-- li id="st-trigger-effects"><a href="#" title="st-effect-3">Acerca</a></li -->
					<li><a href="<?php echo home_url(); ?>/mujer">Mujer</a></li>
					<li><a href="https://www.kichink.com/stores/dawearhouse#.VT7esq1VhBf">Tienda</a></li>
					<li><a class="socicon" target="_blank" href="https://www.facebook.com/dawearhouse424">b</a></li>
					<li><a class="socicon" target="_blank"href="https://twitter.com/dawearhousemx">a</a></li>
					<li><a class="socicon" target="_blank"href="http://instagram.com/dawearhouse">x</a></li>
					<li><a class="socicon" target="_blank"href="http://www.pinterest.com/DaWearhouse/">d</a></li>
				</ul>
			</nav>
		</div>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
