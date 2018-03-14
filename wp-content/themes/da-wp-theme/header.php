<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<?php wp_head(); ?>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/templates.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/type.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/queries.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.desoslide.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.js"></script>
		<script type="text/javascript" src="https://www.kichink.com/js/api/v1.0/kichink.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.desoslide.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta name="description" content="Línea de Prêt à Porter de ropa para hombre y ropa para mujer. Creada por diseñadoras mexicanas. Venta online, con envíos a toda la república" />

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

		<!-- CD-Sidebar --><div id="st-container" class="st-container">
		<!-- content push wrapper -->
		<!-- CD-Sidebar --><div class="st-pusher">
		<!-- CD-Sidebar --><div class="st-content"><!-- this is the wrapper for the content -->
		<!-- CD-Sidebar --><div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
		<!-- the content tha will be pushed goes here-->


		<?php if ( is_home() ) { ?>

			<div id="home_cover" style="background-image: url(<?php the_field('home-main-cover-img', 'option'); ?>)">
				<div class="cover_info">
					<h1 style="background-image: url(<?php the_field('home-collection-logo', 'option'); ?>)">Dâmoiselle</h1>
					<h2><?php the_field('home-collection-tagline', 'option'); ?></h2>
				</div>
			</div>

		<?php } ?>

		<!-- container -->
		<div id="container">

		<div id="top_menu">
			<a href="<?php echo home_url(); ?>"><h1>Dâ Wearhouse</h1></a>
			<nav class="nav-collapse" role="navigation">
				<ul  id="st-trigger-effects">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<!-- li id="st-trigger-effects"><a href="#" title="st-effect-3">Acerca</a></li -->
					<li><a href="<?php echo home_url(); ?>/mujer">Lookbook</a></li>
					<li><a href="https://www.kichink.com/stores/dawearhouse#.VT7esq1VhBf">Store</a></li>
					<li><a class="socicon" target="_blank" href="https://www.facebook.com/dawearhouse424">b</a></li>
					<li><a class="socicon" target="_blank"href="https://twitter.com/dawearhousemx">a</a></li>
					<li><a class="socicon" target="_blank"href="http://instagram.com/dawearhouse">x</a></li>
					<li><a class="socicon" target="_blank"href="http://www.pinterest.com/DaWearhouse/">d</a></li>
				</ul>
			</nav>
		</div>

		<!-- wrapper -->
		<div class="wrapper">
