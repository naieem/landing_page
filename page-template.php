<?php
/**
 * Template Name: Page template Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>HIDEO HTML5, CSS3, responsive, Bootstrap 3 website template</title>
	<meta name="description" content="HIDEO is a One Page Bootstrap 3 Premium website Template, using nice Paralax effect, HTML5, CSS3 and Twitter Bootstrap 3">
	<meta name="author" content="Little NEKO">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/css/bootstrap.min.css">


	<!-- web font  -->
	<link href='//fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
	<!-- Pop up-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/magnific-popup/magnific-popup.css" />
	<!-- Owl carousel-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/owl-carousel/owl.theme.css">
	<!-- nekoAnim-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/appear/nekoAnim.css" />
	<!-- Background Video -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/ytplayer/YTPlayer.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/css/sea-green.css">
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/landing_page/css/custom.css">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="<?php echo get_template_directory_uri(); ?>/landing_page/js/modernizr-2.6.1.min.js"></script>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/landing_page/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/landing_page/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/landing_page/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/landing_page/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/landing_page/images/apple-touch-icon-144x144.png">
</head>
<body class="activateAppearAnimation">
	<!-- Primary Page Layout 
	================================================== -->
	<!-- globalWrapper -->
	<div id="globalWrapper">
		<header class="navbar-fixed-top">
			<!-- pre header -->
			<div id="preHeader" class="hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<ul class="quickMenu">
								<li><a href="template-site-map.html" class="linkLeft">Site map</a></li>
								<li><a href="template-about.html">About us</a></li>
								<li><a href="template-team.html">Our team</a></li>
								<li><a href="template-contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-xs-6">
							<div id="contactBloc" class="clearfix">
								<!-- social icons -->
								<ul class="socialNetwork">
									<li><a href="#" class="tips" title="follow me on Facebook"> <i class="icon-facebook-1"></i></a></li>
									<li> <a href="#" class="tips" title="follow me on Twitter"> <i class="icon-twitter-bird"></i> </a> </li>
									<li>
										<a href="#" class="tips" title="follow me on Google+">
											<i class="icon-gplus-1"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tips" title="follow me on Linkedin">
											<i class="icon-linkedin-1"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tips" title="follow me on Dribble">
											<i class="icon-dribbble"></i>
										</a>
									</li>
									<!-- social icons -->
								</ul>
								<!-- phone -->
								<span class="contactPhone"><i class="icon-mobile"></i>615.987.1234</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- pre header -->
			<!-- header -->
			<div id="mainHeader" role="banner">
				<div class="container">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<!-- responsive navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Logo -->
							<a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/main-logo.png" alt="HIDEO website template"/></a>
						</div>
						<div class="collapse navbar-collapse" id="mainMenu">
							<!-- Main navigation -->
							<ul class="nav navbar-nav pull-right">

								<li class="primary">
									<a href="index.html" class="firstLevel active hasSubMenu" >Home</a>
									<ul class="subMenu">
										<li><a href="index.html">Default</a></li>
										<li><a href="home1.html">Revolution Slider</a></li>
										<li><a href="home2.html">Revolution Slider 2</a></li>
										<li><a href="home3.html">Camera Slider</a></li>
										<li><a href="home8.html">Fullscreen Slider</a></li>
										<li><a href="home4.html">Blog style</a></li>
										<li><a href="home7.html">No Slider</a></li>
										<li><a href="home9.html">HTML5 video</a></li>
										<li class="last"><a href="index-one-page.html">One page</a></li>
									</ul>
								</li>

								<li class="sep"></li>

								<li class="primary"> 
									<a href="features-neko-shortcodes.html" class="firstLevel hasSubMenu" >Features</a>
									<ul class="subMenu">
										<li><a href="features-neko-shortcodes.html">Neko shortcodes</a></li>
										<li><a href="features-animation.html">Neko animations</a></li>
										<li><a href="features-headers.html">Headers</a></li>
										<li><a href="features-footers.html">Footers</a></li>
										<li><a href="features-columns.html">Columns</a></li>
										<li><a href="features-typography.html">Typography</a></li>
										<li><a href="features-tables.html">Tables</a></li>
										<li><a href="features-buttons.html">Buttons</a></li>
										<li><a href="features-icons.html">Icons</a></li>
										<li><a href="features-tabs.html">Tabs and accordions</a></li>
										<li><a href="features-pagination.html">Pagination</a></li>
										<li><a href="features-labels.html">Labels and badges</a></li>
										<li><a href="features-alerts.html">Alerts</a></li>
										<li><a href="features-progress.html">Progress bar</a></li>
										<li ><a href="features-pricing.html">Pricing tables</a></li>

										<li class="dropdownSubmenu last">
											<a href="#" class="hasSubMenu">Sub menu</a>
											<ul class="subMenu">
												<li><a href="#" class="">Third level 1</a></li>
												<li><a href="#" class="">Third level 2</a></li>
												<li class="last"><a href="#" class="">Third level 3</a></li>
											</ul>

										</li>
									</ul>
								</li>
								
								<li class="sep"></li>

								<li class="primary nekoMegaMenuTrigger">
									<a href="#" class="firstLevel hasSubMenu">Mega menu</a>

									<div class="nekoMegaMenu subMenu">
										<div class="container">	
											<div class="row">
												<div class="col-sm-4">

													<div class="megaInner">
														<h2>Who doesn't love mega menu?</h2>
														<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/pic-mega-menu.png" class="img-responsive">
													</div>
													
												</div>
												<div class="col-sm-4">
													<div class="megaInner">
														<h2>Home options</h2>
														<ul>
															<li><a href="index.html">Default</a></li>
															<li><a href="home1.html">Revolution Slider</a></li>
															<li><a href="home2.html">Revolution Slider 2</a></li>
															<li><a href="home3.html">Camera Slider</a></li>
															<li><a href="home8.html">Fullscreen Slider</a></li>
															<li><a href="home4.html">Blog style</a></li>
															<li><a href="home7.html">No Slider</a></li>
															<li><a href="index-one-page.html">One page</a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="megaInner">
														<h2>Some page templates</h2>
														<ul>
															<li><a href="template-menu-left.html">Menu left</a></li>
															<li><a href="template-sidebar-right.html">Sidebar right</a></li>
															<li><a href="template-2-sidebars.html">2 sidebars</a></li>
															<li><a href="template-contact.html">Contact</a></li>
															<li><a href="template-full-width.html">Full width</a></li>
															<li><a href="template-plans.html">Our plans</a></li>
															<li><a href="template-about.html">About us</a></li>
															<li><a href="template-team.html">Our team</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>

								<li class="sep"></li>

								<li class="primary">
									<a href="template-menu-left.html" class="firstLevel hasSubMenu">Templates</a>
									<ul class="subMenu">
										<li class="dropdownSubmenu">
											<a href="template-contact.html" class="hasSubMenu">Contact</a>
											<ul class="subMenu">
												<li><a href="template-contact.html">Contact 1</a></li>
												<li><a href="template-contact-2.html">Contact 2</a></li>
												<li><a href="template-contact-3.html">Contact 3</a></li>
												<li><a href="template-contact-4.html">Contact 4</a></li>
											</ul>
										</li>
										<li class="dropdownSubmenu">
											<a href="template-about.html" class="hasSubMenu">About us</a>
											<ul class="subMenu">
												<li><a href="template-about.html">About us 1</a></li>
												<li><a href="template-about-2.html">About us 2</a></li>
												<li><a href="template-about-3.html">About us 3</a></li>
												<li><a href="template-about-4.html">About us 4</a></li>
											</ul>
										</li>
										<li class="dropdownSubmenu">
											<a href="template-team.html" class="hasSubMenu">Our team</a>
											<ul class="subMenu">
												<li><a href="template-team.html">Team 1</a></li>
												<li><a href="template-team-2.html">Team 2</a></li>
												<li><a href="template-team-3.html">Team 3</a></li>
												<li><a href="template-team-4.html">Team 4</a></li>
											</ul>
										</li>
										<li class="dropdownSubmenu">
											<a href="template-faq.html" class="hasSubMenu">FAQ</a>
											<ul class="subMenu">
												<li><a href="template-faq.html">FAQ 1</a></li>
												<li><a href="template-faq-2.html">FAQ 2</a></li>
												
											</ul>
										</li>
										<li><a href="template-full-width.html">Full width</a></li>
										<li><a href="template-big-header.html">Big page header</a></li>
										<li><a href="template-plans.html">Our plans</a></li>
										<li><a href="template-parallax-header.html">Parallax header</a></li>
										<li><a href="template-services.html">Services</a></li>
										<li><a href="template-clients.html">Clients</a></li>
										<li><a href="template-404.html">404 error</a></li>
										<li><a href="template-site-map.html">Site map</a></li>
										<li><a href="template-menu-left.html">Menu left</a></li>
										<li><a href="template-sidebar-right.html">Sidebar right</a></li>
										<li class="last"><a href="template-2-sidebars.html">2 sidebars</a></li>
									</ul>
								</li>

								<li class="sep"></li>

								<li class="primary">
									<a href="portfolio-masonery.html" class="firstLevel hasSubMenu">Portfolio</a>
									<ul class="subMenu">
										<li><a href="portfolio-masonery.html" >Masonry</a></li>
										<li class="dropdownSubmenu">
											<a href="portfolio-2columns.html" class="hasSubMenu">Filterable</a>
											<ul class="subMenu">
												<li><a href="portfolio-2columns.html">2 columns</a></li>
												<li><a href="portfolio-3columns.html">3 columns</a></li>
												<li class="last"><a href="portfolio-4columns.html">4 columns</a></li>
											</ul>
										</li>
										<li class="dropdownSubmenu">
											<a href="portfolio-project-image.html" class="hasSubMenu">Single project</a>
											<ul class="subMenu">
												<li><a href="portfolio-project-image.html">Image</a></li>
												<li><a href="portfolio-project-carousel.html">Carousel</a></li>
												<li class="last"><a href="portfolio-project-video.html">Video</a></li>
											</ul>
										</li>
										<li class="dropdownSubmenu last">
											<a href="portfolio-project-fullwidth-image.html" class="hasSubMenu last">Single project full width</a>
											<ul class="subMenu">
												<li><a href="portfolio-project-fullwidth-image.html">Image</a></li>
												<li><a href="portfolio-project-fullwidth-carousel.html">Carousel</a></li>
												<li class="last"><a href="portfolio-project-fullwidth-video.html">Video</a></li>
											</ul>
										</li>
									</ul>
								</li>

								<li class="sep"></li>
								<li class="primary">
									<a href="blog-home-sidebar-right.html" class="firstLevel hasSubMenu">Blog</a>
									<ul class="subMenu">
										<li><a href="blog-home-sidebar-right.html">Blog sidebar right</a></li>
										<li class="last"><a href="blog-post.html" class="last">Post</a></li>
									</ul>
								</li>
								<li class="sep"></li>
								<li id="lastMenu" class="last"><a href="template-contact.html" class="firstLevel last">Contact</a></li>
							</ul>
							<!-- End main navigation -->
						</div>
					</nav>
				</div>
			</div>
		</header>
		<!-- header -->
		<!-- ======================================= content ======================================= -->
		<!-- slider -->
		<section class="carouselHome pt40 pb40 color2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel nekoDataOwl" data-neko_items="1" data-neko_singleitem="true" data-neko_paginationnumbers="true" data-neko_transitionstyle="fadeUp">
							<!--item -->
							<div class="item">
								<div class="row">
									<div class="col-md-5 col-md-offset-1">

										<img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/home-carousel-1.png" alt="HIDEO premium website template" class="img-responsive"/>
									</div>

									<div class="col-md-6 pt40">
										<h1>Hideo Premium Website Template</h1>
										<h2>Made with love by Little Neko</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

									</div>
									
								</div>
							</div>
							<!--item -->
							<!--item -->
							<div class="item">
								<div class="row">
									

									<div class="col-md-6 col-md-offset-1 pt40">
										<h1>30 + templates</h1>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

									</div>
									<div class="col-md-5">

										<img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/home-carousel-2.png" alt="HIDEO premium website template" class="img-responsive"/>
									</div>
									
								</div>
							</div>
							<!--item -->
							<!--item -->
							<div class="item">

								<div class="row">

									<div class="col-md-5 col-md-offset-1 ">

										<img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/home-carousel-3.png" alt="HIDEO premium website template" class="img-responsive"/>
									</div>

									<div class="col-md-6 pt40">
										<h1>Mobile first, responsive and retina ready</h1>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</p>

									</div>
									
								</div>
							</div> 
							<!--item -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- slider -->


		<section id="content">

			<!-- services -->
			<section id="services">
				<div class="container pt40 pb40">

					<div class="row">
						<div class="span12 text-center mb40">
							<h1>Hideo HTML5 & CSS3 premium website template</h1>
							<h2 class="subTitle">Clean, unique, easy to use</h2>
						</div>
					</div>


					<div class="row">

						<div class="col-md-4 col-sm-12">
							<article class="boxIcon">
								<a href="#">
									<div class="imgBorder">
										<img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-1.jpg" alt="" />
									</div>
									<h2>Clean design</h2>
									<p>Elegant layouts that help you organize your content in the best way</p>
								</a>
							</article>
						</div>

						<div class="col-md-4 col-sm-12">
							<article class="boxIcon">
								<a href="#">
									<div class="imgBorder">
										<img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-2.jpg" alt="" />
									</div>
									<h2>HTML5 &amp; CSS3</h2>
									<p>Built with modern technologies like HTML5 and CSS3, SEO optimised</p>
								</a>
							</article>
						</div>

						<div class="col-md-4 col-sm-12">
							<article class="boxIcon">
								<a href="#">
									<div class="imgBorder">
										<img class="img-circle img-responsive" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-3.jpg" alt="" />
									</div>
									<h2>Responsive design</h2>
									<p>Compatible with various desktop, tablet, and mobile devices.</p>
								</a>
							</article>
						</div>

					</div>
				</div>
			</section>


			<div class="container" >
				<div class="row">
					<div class="span12 text-center mb40">
						<h1>Our work</h1>
						<h2 class="subTitle">We do a lot of things, we put them inside squared boxes</h2>
					</div>
				</div>
			</div>


			<!-- works -->

			<section id="homePortfolio" class="imgHover clearfix portfolioMosaic mosaic5 mosaicMoreLink neko-hover-1">

				<article>
					<figure class="minimalBox">
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign6.jpg" class="img-responsive">
						<figcaption>
							<div class="pinInfo">
								<h3>Full width image</h3>
								<p class="hidden-xs">Lorem ipsum dolor sit amet</p>
							</div>
							<div class="iconLinks">
								<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture"></i></a>
								<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom6.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
							</div>
						</figcaption>
					</figure>
				</article>

				<article>
					<figure class="minimalBox">
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign8.jpg" class="img-responsive">

						<figcaption>
							<div class="pinInfo">
								<h3>Youtube Video</h3>
								<p class="hidden-xs">Lorem ipsum dolor sit amet</p>
							</div>
							<div class="iconLinks">
								<a href="portfolio-project-fullwidth-video.html" title="link"><i class="icon-videocam"></i></a>
								<a href="https://www.youtube.com/watch?v=k-xSP_T0VqU" class="image-iframe" title="Zoom" ><i class="icon-search"></i></a>
							</div>
						</figcaption>
					</figure>
				</article>

				<article>
					<figure class="minimalBox">
						<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign2.jpg" class="img-responsive">

						<figcaption>
							<div class="pinInfo">
								<h3>Video Vimeo</h3>
								<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-video.html" title="link" ><i class="icon-videocam"></i></a>
									<a href="//player.vimeo.com/video/62198366" class="image-iframe" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>

					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign1.jpg" class="img-responsive">

							<figcaption>
								<div class="pinInfo">
									<h3>Gallery</h3>
									<p class="hidden-xs">Lorem ipsum dolor sit amet</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-camera"></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom3.jpg" data-gallery="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom1.jpg,<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom2.jpg"  class="image-link" title="Zoom" >
									<i class="icon-search"></i>
									</a>
								</div>
							</figcaption>

						</figure>	

					</article>





					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign5.jpg" class="img-responsive">

							<figcaption>
								<div class="pinInfo">
									<h3>Photo</h3>
									<p class="hidden-xs">Lorem ipsum dolor sit amet</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom5.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>

					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign7.jpg" class="img-responsive">


							<figcaption>
								<div class="pinInfo">
									<h3>Photo</h3>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom7.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>

					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign3.jpg" class="img-responsive">

							<figcaption>
								<div class="pinInfo">
									<h3>Photo</h3>
									<p class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom3.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>

					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign4.jpg" class="img-responsive">

							<figcaption>
								<div class="pinInfo">
									<h3>Photo</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom4.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>

					<article>
						<figure class="minimalBox">
							<img alt="" src="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/vign9.jpg" class="img-responsive">

							
							<figcaption>
								<div class="pinInfo">
									<h3>Photo</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.
									</p>
								</div>
								<div class="iconLinks">
									<a href="portfolio-project-fullwidth-image.html" title="link"><i class="icon-picture "></i></a>
									<a href="<?php echo get_template_directory_uri(); ?>/landing_page/images/portfolio/zoom9.jpg" class="image-link" title="Zoom" ><i class="icon-search"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>



				</section>
				<!-- works -->



				<section class="color1">
					<div class="container">

						<div class="row">
							<div class="col-md-12 text-center pt40 pb40">
								<h1>You can't stop the future</h1>
								<h2 class="subTitle">Clean design, modern and minimal, Hideo is the new way to go</h2>
							</div>
							<div class="col-md-12 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/devices.png" class="img-responsive" alt="Hideo Premium Website template" data-nekoanim="fadeInUp" data-nekodelay="200"/>
							</div>
						</div>
					</div>
				</section>


				<!-- parallax -->

				<section id="paralaxSlice2" data-stellar-background-ratio="0.5">
					<div class="maskParent">
						<div class="paralaxMask"></div>
						<div class="paralaxText">

							<h2>
								<i class="icon-rocket iconMedium iconRounded"></i><br />
								For the wise man looks into space and he knows <br />there is no limited dimensions.
							</h2>

						</div>
					</div>
				</section>
				<!-- parallax -->

				<!-- team -->

				<section id="team" class="pt40 pb40">

					<div class="container">
						<div class="row"> 
							<div class="col-md-12 mb30 text-center">
								<h1>Meet our team</h1>
								<p class="subTitle">
									The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,'<br/> the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.
								</p>


							</div>
							<section class="col-md-12">
								<div class="row mb15">

									<div class="col-sm-3" data-nekoanim="fadeIn" data-nekodelay="100">
										<article>
											<div><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-1.jpg" alt="" class="img-responsive"></div>
											<div class="boxContent text-center">
												<h3>Janice Rand</h3>
												<p>Executive Director</p>
											</div>
										</article>
									</div>

									<div class="col-sm-3" data-nekoanim="fadeIn" data-nekodelay="200">
										<article>
											<div><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-2.jpg" alt="" class="img-responsive"></div>
											<div class="boxContent text-center">
												<h3>Rick Deckard</h3>
												<p>Salesman</p>
											</div>
										</article>
									</div>

									<div class="col-sm-3" data-nekoanim="fadeIn" data-nekodelay="300">
										<article>
											<div><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-3.jpg" alt="" class="img-responsive"></div>
											<div class="boxContent text-center">
												<h3>Christine Chapel</h3>
												<p>Graphic designer</p>
											</div>
										</article>
									</div>

									<div class="col-sm-3" data-nekoanim="fadeIn" data-nekodelay="400">
										<article>
											<div><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/team/team-corporate-4.jpg" alt="" class="img-responsive"></div>
											<div class="boxContent text-center">
												<h3>Leon Kowalski</h3>
												<p>Programmer</p>
											</div>
										</article>
									</div>
								</div>
							</section>


						</div>
					</div>

				</section>

				<!-- team -->
				<!-- video fullscreen -->
				<a id="videoBg" data-property="{videoURL:'BsekcY04xvQ',containment:'self',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,printUrl:true,showYTLogo:false,showControls:false}">
				</a>
				<!-- video fullscreen -->

				<!-- contact -->
				<section class="mt40">

					<div class="container">

						<div class="row">
							<div class="span12 text-center mb40">
								<h1>Keep in touch</h1>
								<h2 class="subTitle">We would love to hear from you</h2>
							</div>


							<div class="col-md-8 col-md-offset-2 boxFocus pt30 mb30">
								
								<div class="row">

									<div class="col-md-5 col-md-offset-1" > 
										<section class="boxFocus color2">
											<h3>Little NEKO</h3>
											<address>
												<p>
													<i class="icon-location"></i>&nbsp;2001 Space Odyseey<br>
													Houston, Texas - USA <br>
													<i class="icon-phone"></i>&nbsp;256.478.3252 <br>
													<i class="icon-mail-alt"></i>&nbsp;<a href="/cdn-cgi/l/email-protection#e5898c91918980a5898c91918980c88b808e8acb868a88"><span class="__cf_email__" data-cfemail="8ce0e5f8f8e0e9cce0e5f8f8e0e9a1e2e9e7e3a2efe3e1">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>
												</p>
											</address>
										</section>
									</div>


									<div class="col-md-5" > 
										<form method="post" action="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/neko-contact-ajax-plugin/php/form-handler.php" id="contactfrm" role="form" class="mb15 pb40">

											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Enter name"  title="Please enter your name (at least 2 characters)"/>
											</div>
											<div class="form-group">
												<label for="email">Email</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address"/>
											</div>

											<div class="form-group">
												<label for="comments">Comments</label>
												<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
											</div>


											<div class="result"></div>
											<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>


										</form>
									</div>

								</div>

							</div>
							
						</div>
					</div>

				</section>

				<!-- contact -->

				<!-- call to action -->

				<section id="shareProject" class="pt40 pb40 color2">

					<div class="container">

						<div class="row"> 

							<div class="col-md-12 mb30 text-center"  data-nekoanim="fadeInUp" >
								<h1>Hideo is the template you need for your next project</h1>
								<p>
									Spread the word :)
								</p>
							</div>

							<div class="col-md-12 text-center">
								<div id="sharemeBtn" data-url="" data-title="Awesome html5 css3 premium template" data-desc="Check out this great #themeforest item HIDEO HTML5, CSS3, Bootstrap website template" data-network="facebook,twitter" data-label="share me" data-size="btn-lg">
							</div>


						</div>

					</div>

				</section>

				<!-- call to action -->
			</section>


			<!-- content -->
			<!-- footer -->
			<footer id="footerWrapper" class="footer2">
				<section id="mainFooter">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="footerWidget">
									<img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/neko-logo.png" alt="latest Little Neko news" id="footerLogo">
									<p><a href="//www.little-neko.com" title="Little Neko, website template creation">Little Neko</a> is a web design and development studio. We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences. We love what we do and we hope you too ! </p>
								</div>
							</div>


							<div class="col-md-3 col-sm-6">
								<div class="footerWidget">

									<h3>Latest works</h3>
									<ul class="list-unstyled worksList">
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works1.jpg" alt="works"></a></li>
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works2.jpg" alt="works"></a></li>
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works3.jpg" alt="works"></a></li>
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works4.jpg" alt="works"></a></li>
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works5.jpg" alt="works"></a></li>
										<li><a href="#" class="tips" title="Little Neko work"><img src="<?php echo get_template_directory_uri(); ?>/landing_page/images/theme-pics/works6.jpg" alt="works"></a></li>

									</ul>
								</div>
							</div>



							<div class="col-md-3 col-sm-6">
								<div class="footerWidget">

									<h3>Latest news</h3>
									<ul class="list-unstyled iconList borderList">
										<li><a href="#">Solace of a lonely highway</a></li>
										<li><a href="#">Write with purpose</a></li>
										<li><a href="#">Tree on a lake</a></li>
										<li><a href="#">Don’t stop questioning</a></li>
										<li><a href="#">Overheard this morning</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="footerWidget">

									<h3>Little NEKO</h3>
									<address>
										<p>
											<i class="icon-location"></i>&nbsp;2001 Space Odyseey<br>
											Houston, Texas - USA <br>
											<i class="icon-phone"></i>&nbsp;256.478.3252 <br>
											<i class="icon-mail-alt"></i>&nbsp;<a href="/cdn-cgi/l/email-protection#9ff3f6ebebf3fadff3f6ebebf3fab2f1faf4f0b1fcf0f2"><span class="__cf_email__" data-cfemail="2c4045585840496c4045585840490142494743024f4341">[email&#160;protected]</span></a>
										</p>
									</address>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section id="footerRights">
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<ul class="socialNetwork">
									<li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
									<li><a href="#" class="tips" title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
									<li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
									<li><a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
									<li><a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
								</ul>     
							</div>


							<div class="col-md-12">
								<p>Copyright © 2012 <a href="//www.little-neko.com" target="blank">Little NEKO</a> / All rights reserved.</p>
							</div>

						</div>
					</div>
				</section>
			</footer>
			<!-- End footer -->
		</div>
		<!-- global wrapper -->
	<!-- End Document 
	================================================== -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/respond/respond.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/jquery/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/jquery/jquery-ui-1.8.23.custom.min.js"></script>

	<!-- third party plugins  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/easing/jquery.easing.1.3.js"></script>
	<!-- carousel -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/owl-carousel/owl.carousel.min.js"></script>
	<!-- pop up -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- isotope -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/isotope/jquery.isotope.min.js"></script>
	<!-- parallax -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/parallax/jquery.stellar.min.js"></script>
	<!-- Background Video -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/ytplayer/jquery.mb.YTPlayer_modifed.js"></script>
	<!-- appear -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/appear/jquery.appear.js"></script>

	<!-- toucheeffect -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing_page/js-plugin/toucheeffect/toucheffects.js"></script>
	
	<!-- Custom  -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
