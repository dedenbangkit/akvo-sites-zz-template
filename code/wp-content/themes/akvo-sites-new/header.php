<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Akvo Sites Testing domain &#8211; Testing Akvo Sites new template</title>

    <!-- Bootstrap -->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"-->
    <!--link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/styles/main.css"-->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head();?>
  </head>
<body>
	<header class="banner" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 logo">
					<a class="brand" href="<?= esc_url(home_url('/')); ?>">
						<?php if ( get_theme_mod( 'akvo_logo' ) ) : 
					        /* set the image url */
							$image_url = esc_url( get_theme_mod( 'akvo_logo' ) );
				        	/* store the image ID in a var */
							$image_id = pn_get_attachment_id_from_url($image_url);
          					/* retrieve the thumbnail size of our image */
							$image_thumb = wp_get_attachment_image_src($image_id, 'medium');
						?>
							<img src='<?php echo $image_thumb[0]; ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
						<?php else : ?>
							<img src="<?php bloginfo('template_url'); ?>/dist/images/logo-sample.svg">
						<?php endif; ?>
					</a>
				</div>
				<div class="col-sm-6 wrap-search-menu">
					<div class="hidden-xs">
						<?php get_search_form();?>	
					</div>
					<div class="navbar-header menu-mobile">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars fa-2x"></i>
						</button>

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".search-collapse">
							<span class="sr-only">Toggle search</span>
							<i class="fa fa-search fa-2x"></i>
						</button>

					</div>
      				<!--div id="sub-header" class="clearfix">
						<div id="text-6" class="widget widget_text">
							<div class="textwidget">
								<div style="text-align: right;margin-top: 10px;">
									<div style="display: inline-block;">
									</div>
								</div>
							</div>
						</div>
					</div-->
      			</div>
			</div>
			<div class="row">
				<div class="col-md-12 navi">
					<div class="collapse search-collapse">
						<?php get_search_form();?>	
					</div>

					<nav class="navbar-collapse collapse in" role="navigation" aria-expanded="true" style="">
						<?php
							if (has_nav_menu('primary_navigation')){
								wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
							}
							if ( is_plugin_active( 'google-website-translator/google-website-translator.php' ) && !is_user_logged_in() ) : ?>
							<div style="display:none;"><?php echo do_shortcode('[prisna-google-website-translator]'); ?></div>
						<?php endif;?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	