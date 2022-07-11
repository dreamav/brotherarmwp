<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <!-- Lib CSS -->
        <link rel="stylesheet" type="text/css" href="<?bloginfo('template_url');?>/lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
        
        <? if( $post->post_name == 'sample-page' ) : ?>
        <link href="<?bloginfo('template_url');?>/css/vue-tabs.css" rel="stylesheet">
        <? endif; ?>
        <link href="<?bloginfo('template_url');?>/css/main.css" rel="stylesheet">
        <!-- Favicons -->
        <!-- <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicons/favicon.ico">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon1.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicons/apple-touch-icon-114x114.png"> -->

        <? wp_head();?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
        	<script src="js/html5shiv.js"></script>
        	<script src="js/respond.min.js"></script>
        	<![endif]-->
        <!--[if IE 9 ]><script src="js/ie-matchmedia.js"></script><![endif]-->
    </head>