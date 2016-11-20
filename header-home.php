<!--[if IE]><![endif]-->
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6"><![endif]-->
<!--[if IE 7]><html class="no-js ie7"><![endif]-->
<!--[if IE 8]><html class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- secures that the browser won't go into quirks mode -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo <?php bloginfo('name') . ' | ' . 'Välkommen'; ?></title>

        <meta name="description" content="<?php if (is_single()) { single_post_title('', true); } else { bloginfo('name'); echo " | "; bloginfo('description'); } ?>">
        <meta name="author" content="<?php echo bloginfo('author'); ?>">

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <script src="https://use.fontawesome.com/f22bfd3892.js"></script>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>favicon.ico" type="image/x-icon">
        
        <!-- head hook for scripts/styles -->
        <?php wp_head(); ?>
    </head>

    <!-- body tag hook which helps theme/plugin to style it -->
    <body <?php body_class($class); ?>> 
        
        <header class="banner">
            <div class="menu-wrapper">
                <div id="main-menu">
                    <label for="toggler" class="menu-icon">☰</label>
                    <input type="checkbox" id="toggler">
                    <nav class="responsive-menu">
                        <ul id="output-menu"></ul>
                    </nav>
                </div>
                <!-- Title & description -->
                <div class="site-name">
                    <h1 class="the-title center"><a href='<?php echo esc_url(home_url('/')); ?>'><?php bloginfo('name'); ?></a></h1>
                    <h2 class="the-description center"><?php bloginfo('description'); ?></h2>
                </div>
            </div>
        </header>
        
        <div id="main" class="container-fluid">
            <!-- Render result from WP REST API -->