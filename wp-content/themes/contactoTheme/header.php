<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57751537-1', 'auto');
		  ga('send', 'pageview');

		</script>		

		<!-- Facebook Conversion Code for Suscribete -->
		<script>(function() {
		  var _fbq = window._fbq || (window._fbq = []);
		  if (!_fbq.loaded) {
		    var fbds = document.createElement('script');
		    fbds.async = true;
		    fbds.src = '//connect.facebook.net/en_US/fbds.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(fbds, s);
		    _fbq.loaded = true;
		  }
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', '6020573656236', {'value':'0.01','currency':'PEN'}]);
		</script>
		<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6020573656236&amp;cd[value]=0.01&amp;cd[currency]=PEN&amp;noscript=1" /></noscript>		
		<!-- Fin Facebook Conversion Code for Suscribete -->
		
		<meta name="google-site-verification" content="Yl7pSQTaubSiv0nj4cppnJNaSq1A73Zv1woqNHhvT1Y" />		
		<meta property="og:url" content="http://futbolfemenino.pe/unete/" /> 
		<meta property="og:title" content="ÚNETE A LA HINCHADA" />
		<meta property="og:description" content="Pre suscríbete a la primera revista de fútbol femenino de Perú y recibe la primera edición gratis." /> 
		<meta property="og:image" content="http://104.236.14.59/unete/wp-content/uploads/2015/01/futbolfemenino_fb-11.jpg" /> 

		<meta name="twitter:card" content="photo" />
		<meta name="twitter:site" content="http://futbolfemenino.pe/" />
		<meta name="twitter:title" content="FÚTBOLL FEMENINO" />
		<meta name="twitter:image" content="http://104.236.14.59/unete/wp-content/uploads/2015/01/futbolfemenino_fb-11.jpg" />
		<meta name="twitter:url" content="http://futbolfemenino.pe/unete/" />		

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/foundation.css" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favico.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">

		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'>		
		<link href='http://fonts.googleapis.com/css?family=Sansita+One|Amatic+SC:400,700' rel='stylesheet' type='text/css'>
		<!-- <link rel="stylesheet" href="http://i.icomoon.io/public/temp/f4ad43806b/UntitledProject/style.css"> -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '744314922272246',
          xfbml      : true,
          version    : 'v2.1',
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/es_LA/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

   

	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
<!-- 	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
			<h1 class="title"><?php bloginfo( 'name' ); ?></h1>

		</section>
	</nav> -->

	<?php //get_template_part('parts/off-canvas-menu'); ?>

	<?php //get_template_part('parts/top-bar'); ?>

	<header>
		<div class="row">
			<div class="medium-6 columns">
				<a href="http://futbolfemenino.pe/unete/">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/logo.png">
				</a>
			</div>
			<div class="medium-6 columns facebook-compartir-header">
				<div
				  class="fb-like"
				  action="recommend"
				  data-send="true"
				  data-width="450"
				  data-show-faces="false"
				  data-layout="button_count">
				</div>				
			</div>
		</div>
	</header>	

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>