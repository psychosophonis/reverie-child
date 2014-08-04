<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->


<head>



<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="//use.typekit.net/iha6sbi.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>

	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header id="header" class="contain-to-grid show-for-medium-up"> 
	
	
	<div class="row">
		<div class="large-12 columns text-center name">
				<h1><a href="http://runningbeta.dev"> running<span class="super">beta</span><!--<?php bloginfo( 'name' ); ?> --><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sneakerrev.svg" width=80px></a></h1>
				<!-- <a href="https://twitter.com/betarunning" class="hide-for-small" rel="external" id="twitter-feed-icon">Follow us on Twitter</a> -->
				<!-- <h4><?php echo get_bloginfo ( 'description' );  ?></h4> -->
		</div>
	</div>
			
	<div class="row" class="show-for-medium-up">
			<div class="large-1 columns"></div>		
			<div class="large-10 columns large-centered">
			   <nav class="top-bar" data-topbar>
				
						<ul class="title-area">
	    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	        				<li class="toggle-topbar"><a href="#"></a></li>	
	    				</ul>
	    
	    		<section class="top-bar-section">
	    			<?php
	      				  wp_nav_menu( array(
	       			  'theme_location' => 'primary',
	        		  'container' => false,
	         		  'depth' => 0,
	          		  'items_wrap' => '<ul class="left">%3$s</ul>',
	          		  'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	         		  'walker' => new reverie_walker( array(
	         		  	'in_top_bar' => true,
	         		  	'item_type' => 'li',
	                  	'menu_type' => 'main-menu'
	            		) ),
	        			) );
	    			?>
			
	    			<ul id="menuright" class="right">
	    					<li id="searchmenuitem" class="searchform"><?php echo top_bar_search() ?></li> 
	    	 	  			<li class="divider"></li>
	    	 				<li class="active" id="rss"><a href="http://runningbeta.dev/rss2">rss</a></li>
	    	 				<li class="divider"></li>
	    	 				<li class="active" id="email"><a href="http://runningbeta.dev/rss2">subscribe</a></li>
	   				</ul>    	 	
	   			 </section>
				</nav> 

			
			</div>
			<div class="large-1 columns"></div>			
	
	</div>
	
</header>


<header id="small-header" class="show-for-small">
		
		<div class="text-center name">
		<a href="#mobile-menu-drop" id="button">Run Effect</a>
		<h1><a href="http://runningbeta.dev">running<span class="super">beta</span><!-- <?php bloginfo( 'name' ); ?> --></a></h1>
		</div>

		<?php echo top_bar_search() ?>


	
			
   
		<nav id="effect" class="toggler mobile-menu-drop" style="display: none;" data-topbar>
	    <section class="top-bar-section">
	    			<?php
	      				  wp_nav_menu( array(
	       			  'theme_location' => 'primary',
	        		  'container' => false,
	         		  'depth' => 0,
	          		  'items_wrap' => '<ul id="mobile-menu-drop" class="menu">%3$s</ul>',
	        			) );
	    			?>  	 	
	   			 </section>
		
	    
	</nav>
	
		</header>







<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/headertemp.jpg" height="545" width="1559" alt="runningbeta - running a better life." id="header-image"> -->

<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">