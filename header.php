<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/khadang.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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

				<!-- nav -->
					<nav class="nav" role="navigation">
						<div class="page-width">
						<?php html5blank_nav(); ?></div>
					</nav>
					<!-- /nav -->
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<?php $logo = get_template_directory_uri().'/img/cover.png'; ?>
							<?php $options = get_option('stheme_options'); ?>
							<?php if($options) : ?>
							<?php if($options['logo_url']) : ?>
							<?php $logo = $options['logo_url']; ?>
							<?php endif; ?>
							<?php endif; ?>
							<img src="<?php echo $logo; ?>" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					

			</header>
			<!-- /header -->
			<div id="content" class="content">