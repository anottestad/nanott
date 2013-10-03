<!doctype html>

<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (!IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    
    <script type="text/javascript">
        var browser            = navigator.userAgent;
        var browserRegex    = /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
        var isMobile        = false;
        if(browser.match(browserRegex)) {
            isMobile            = true;
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){
                window.scrollTo(0,1);
            }
        }
    </script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/base.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/amazium.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/layout.css">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon-114x114.png" />
    
</head>
<body>
<header>
	<div class="row">
		<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="Stardog Logo" class="float-left entry-title">
        <div class="float-right snippet">
            <div class="quote">
                "Erika is awesome! She clearly has a lot of passion for her job for training animals, and we are positively thrilled with our experience with her..."
            </div>
            <a href="/testimonials">Read more</a> or <a href="/contact">Contact me!</a>
        </div>
	</div>
</header>
<div class="navigation">
    <a href="/stardog">
        <span data-title="Home">Home</span>
    </a>
    <a href="/stardog/about">
        <span data-title="About">About</span>
    </a>
    <a href="/stardog/our-methods">
        <span data-title="Our Methods">Our Methods</span>
    </a>
    <a href="/stardog/services">
        <span data-title="Services">Services</span>
    </a>
    <a href="/stardog/testimonials">
        <span data-title="Testimonials">Testimonials</span>
    </a>
    <a href="/stardog/contact">
    	<span data-title="Contact">Contact</span>
    </a>
</div>

<div class="row">