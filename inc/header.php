<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cloud Comp</title>
        <meta name="description" content="Cloud Comp was built to provide designers a way to present comps to their clients inside of a realistic device shell.">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/js/custom-scrollbar/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="/css/main.css">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="<?php echo $pageID; ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <?php if($pageID == 'dashboard') { ?>
        <header>
        	<a href="/logout.php">Logout</a>
        </header>
        <?php } ?>
        
        <div id="container">
        