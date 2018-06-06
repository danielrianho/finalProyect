<!DOCTYPE html>
<html>
<head>
	<title>Frigga Bygg</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device_width, initial-scale=1, maximun.scale=1" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div id="wrap">

<header id="header">
	<div class="container-fluid">
		<section class="row">
			<div class="col-xs-4 col-sm-4"  logo-wrap">
				<a href="<?php bloginfo("url"); ?>"/ class="logo_menu"> <?php the_field('name_comp','options'); ?>
				</a>
			</div>
			<div class="col-xs-8 col-md-8 hidden-xs " menu-wrap">
				<a><?php wp_nav_menu(); ?></a>
			</div>
			<div class="col-xs-8 col-md-8 text-right visible-xs">
				<div class="mobile-menu-wrap">
					<i class="fa fa-bars menu-icon"></i>
				</div>
			</div>
		</section>
		<section class="main-menu hidden-md hidden-lg">
			<div class="container-fluid">
				<div class="row">	
					<div class="col-xs-12">
						<a><?php wp_nav_menu(); ?></a>
					</div>
				</div>
			</div>
		</section>
	</div>
</header>

<main id="main">

