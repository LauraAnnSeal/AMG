<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WAN-IFRA_AMG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<!-- HTML Meta Tags -->
	<title>Environmental Reporting Africa</title>
	<meta name="description" content="This website showcases some of the work produced through this grant initiative from each of the 27 successful recipients, focused on environmental reporting.">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="https://climatereporting.wan-ifra.org/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Environmental Reporting Africa">
	<meta property="og:description" content="This website showcases some of the work produced through this grant initiative from each of the 27 successful recipients, focused on environmental reporting.">
	<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/AMG-CLIMATE-REPORTING-AFRICA.jpg">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="https://climatereporting.wan-ifra.org/">
	<meta property="twitter:url" content="https://climatereporting.wan-ifra.org/">
	<meta name="twitter:title" content="Environmental Reporting Africa">
	<meta name="twitter:description" content="This website showcases some of the work produced through this grant initiative from each of the 27 successful recipients, focused on environmental reporting.">
	<meta name="twitter:image" content="<?php echo get_template_directory_uri() ?>/assets/images/AMG-CLIMATE-REPORTING-AFRICA.jpg">

	<!-- Meta Tags Generated via https://www.opengraph.xyz -->
      

	 <!-- Bootstrap -->
	<link href="<?php echo get_template_directory_uri() ?>/bootstrap.css" rel="stylesheet">

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/2df8336dae.js" crossorigin="anonymous"></script>

	<!-- slick -->
	<link href="<?php echo get_template_directory_uri() ?>/assets/slick/slick.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/assets/slick/slick-theme.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wan-ifra-amg' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div id="nav" class="row">
			<a href="<?php the_permalink('68') ?>" id="nav-title" class="col-4 col-md-3 col-lg-2 col-xxl-1 text-end">
				Environmental 
				<br>
				Reporting
			</a>
			<div id="nav-region" class="col-4 col-md-5 col-lg-2 col-xxl-4 d-flex align-items-center">
				AFRICA
			</div>
			<div id="header-search" class="d-none d-lg-flex align-items-center justify-content-center col-lg-4 col-xxl-3 px-5">
				<?php echo do_shortcode('[ivory-search id="90" title="Default Search Form"]') ?>
			</div>
			<div id="burger-nav" class="col-4 d-flex align-items-center justify-content-end">
					<span class="menu-title d-none d-md-block">Menu</span>
					<div class="icon nav-icon-5">
						<span></span>
						<span></span>
						<span></span>
					</div>
			</div>
		</div>

	</header><!-- #masthead -->


	<menu id="menu" class="container-fluid menu-closed">
		<div class="container me-md-0">
			<div id="menu-backing"></div>
			<div id="menu-row" class="row">
				<div class="col-12 col-md-8 col-lg-4 offset-md-4 offset-lg-8 row">
					<!-- Search bar -->
					<div class="col-12 p-0 d-lg-none">
						<?php echo do_shortcode('[ivory-search id="90" title="Default Search Form"]') ?>
					</div>

					<!-- Page links -->
					<div class="col-12 white-box">
						<ul>
							<li><a class="menu-link <?php get_template_part('template-parts/content', 'active', 68) ?>">Home</a></li>

							<li><a class="menu-link <?php if(get_post_type()  == 'project' || get_post_type()  == 'locations'){echo 'active';}; get_template_part('template-parts/content', 'active', 116) ?>">Projects</a></li>

							<li><a class="menu-link <?php if(get_post_type()  == 'context' || get_post_type()  == 'key_issues'); get_template_part('template-parts/content', 'active', 118) ?>">Contexts</a></li>

							<li><a class="menu-link <?php get_template_part('template-parts/content', 'active', 74) ?>">About</a></li>

							<li><a class="menu-link <?php get_template_part('template-parts/content', 'active', 76) ?>">Contact</a></li>

							<li><a class="menu-link <?php get_template_part('template-parts/content', 'active', 78) ?>">Grants & Resources</a></li>
						</ul>
					</div>

					<!-- Key issues -->
					<div id="key-issues-menu" class="col-12 white-box">
						<div class="pb-1"><span>Key Issues</span></div>
						
						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Energy', 'id' => 128]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Land Degradation', 'id' => 129]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Water', 'id' => 130]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Conservation', 'id' => 131]) ?> 

						<?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Responses', 'id' => 132]) ?> 
					</div>

					<!-- Countries -->
					<div class="col-12 white-box" id="countries-menu">
						<div class="pb-1"><span>Countries</span></div>
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Botswana') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Kenya') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Malawi') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Rwanda') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'South Africa') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Tanzania') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Uganda') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Zambia') ?> 
						<?php get_template_part('template-parts/content', 'location-btn-header', 'Zimbabwe') ?> 
					</div>
				</div>
			</div>
		</div>
	</menu>

	<div id="wrapper">
