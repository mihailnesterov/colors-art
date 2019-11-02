<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colors-Art
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta property="og:title" content="<?= the_title() ?> - COLORS-ART" />
	<meta property="og:description" content="Colors-art - творческая студия. Наша задача дать возможность взрослым и детям приобрести фундаментальные навыки рисунка и живописи" />
	<meta property="og:image" content="https://colors-art.ru/wp-content/themes/colors-art/images/banner.jpg" />
	<meta property="og:url" content="https://colors-art.ru" />
	<meta property="og:site_name" content="Colors-Art" />
	<meta name="yandex-verification" content="f7a90d67682c808a" />
	<?php wp_head(); ?>
	
	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '704976569936087');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=704976569936087&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
	   ym(53520193, "init", {
	        clickmap:true,
	        trackLinks:true,
	        accurateTrackBounce:true,
	        webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/53520193" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
	<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-408735-9WR09"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-408735-9WR09" style="position:fixed; left:-999px;" alt=""/></noscript>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140254970-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-140254970-1');
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<header class="container-fluid">
			<div class="row text-center">
				<div class="col-12 d-none d-md-block fixed-top bg-white shadow">
					<div class="container">
						<div class="row pt-3">
							<div class="col-3 col-md-2 text-center align-middle">
								<a href="/">
									<img id="logo" src="<?= get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo" class="img-fluid mr-2 p-1">
								</a>
							</div>
							<div class="col-5 col-md-6 text-left align-middle mt-3">
								<div class="text-uppercase">
									<h4>Творческая студия "COLORS-ART"<br> м.Первомайская</h4>
								</div>
							</div>
							<div class="col-4 col-md-4 text-right align-middle mt-3">
								<div class="row">
									<div class="col-12 text-right">
										<h2>
											<a href="tel:+79299092925" class="text-decoration-none text-dark">
												<i class="fa fa-phone text-success"></i> +79299092925
											</a> 
										</h2>
									</div>
									<div class="col-12 text-right">
										<div class="d-inline-block align-middle m-0 p-0">
											<a href="https://www.instagram.com/colorsart.ru/?hl=ru" target="_blank" title="@colorsart.ru"><i class="fa fa-instagram text-white bg-danger" style="padding:1px 3px;border-radius:5px;margin-right:-5px;"></i></a>
										</div>
										<div class="d-inline-block align-middle">
											<?php echo do_shortcode("[uptolike]"); ?>
										</div>
									</div>
								</div> <!-- end row -->
							</div>
						</div> <!-- end row -->
						<div class="row">
							<div class="col-12 mt-0 pt-0 pb-2">
								<ul class="nav justify-content-center m-0">
									<li class="nav-item">
										<a class="nav-link active" href="/">Главная</a>
									</li>
									<li class="nav-item pl-3 pr-3">
										<a class="nav-link" href="/#courses">Курсы</a>
									</li>
									<li class="nav-item pl-3 pr-3">
										<a class="nav-link" href="/shedule">Расписание</a>
									</li>
									<li class="nav-item pl-3 pr-3">
										<a class="nav-link" href="/teachers">Преподаватели</a>
									</li>
									<li class="nav-item pl-3 pr-3">
										<a class="nav-link" href="/#map">Контакты</a>
									</li>
									<li class="nav-item pl-3 pr-3">
										<a class="nav-link btn btn-success text-white rounded" href="#" data-toggle="modal" data-target="#order">Записаться</a>
									</li>
								</ul>
							</div>
						</div>
					</div> <!-- end container -->
				</div> <!-- end col -->
				
				<div class="col-12 d-md-none">
					<!-- Fixed navbar -->
					<nav id="main-menu-container" class="navbar navbar-expand-md navbar-light fixed-top bg-white pt-1 pb-1 border-bottom shadow-lg">
						<a class="navbar-brand d-md-none text-left" href="/">
							<img id="logo-brand" src="<?= get_stylesheet_directory_uri() ?>/images/logo.png" alt="logo-brand" class="img-fluid align-middle" width="50px">
						</a>
						<div class="text-center d-md-none mt-1">
							<a href="tel:89299092925 " class="text-decoration-none text-dark">
								<i class="fa fa-mobile text-success small mr-2"></i>+79299092925 
							</a>
						</div>
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item pl-3 pr-3">
									<a class="nav-link" href="/#courses">Курсы</a>
								</li>
								<li class="nav-item pl-3 pr-3">
									<a class="nav-link" href="/shedule">Расписание</a>
								</li>
								<li class="nav-item pl-3 pr-3">
									<a class="nav-link" href="/teachers">Преподаватели</a>
								</li>
								<li class="nav-item pl-3 pr-3">
									<a class="nav-link" href="/#map">Контакты</a>
								</li>
							</ul>
						</div>
						<div class="text-center d-md-none pb-3 mt-0" style="width: 100%;">
							<h5 class="text-center small mb-2">Творческая студия "COLORS-ART"</h5>
							<a href="#" class="text-center px-3 py-2 bg-success text-white small rounded shadow-sm" data-toggle="modal" data-target="#order">Записаться</a>
						</div>
					</nav>	<!-- end nav -->
				</div> <!-- end col -->
				
				<div class="col-12" style="margin-top:9em;">
				</div> <!-- end col -->
				
			</div>	<!-- end row -->
		</header>	<!-- end container-fluid -->

		<main role="main">
