<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); print ' | '; bloginfo('description'); ?></title>
    <meta name="description" content="<?php print 'A private blog - '; bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('admin_email'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />
    <meta property="og:type" content="blog" /> 

    <link href='http://fonts.googleapis.com/css?family=Arimo:700|Noticia+Text' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url').'/css/font-awesome.min.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url').'/css/style.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url').'/style.css' ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <style type="text/css">
    #avatar{        
     background-image: url(<?php echo get_avatar_url(get_avatar( get_option('mf2013_gravatar'), 200, $d)); ?>);
    }
    </style>    

 <?php wp_head(); ?>


</head>
<body>
    <div id="wrapper">
        <header>
            <div id="home">
            	<a href="<?php bloginfo('url'); ?>">
                 <h1><?php bloginfo('name'); ?></h1><br>
                 <h2><?php bloginfo('description'); ?></h2>
             </a>
         </div>
         <div id="avatar-wrapper">
            <div id="avatar"></div>
        </div>
        <div class="spacer"></div>
    </header>

    <div id="main">
        <!--[if lt IE 8]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->