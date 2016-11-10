<!--[if IE]><![endif]-->
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6"><![endif]-->
<!--[if IE 7]><html class="no-js ie7"><![endif]-->
<!--[if IE 8]><html class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>><!-- bara den här syns -->
    <!--<![endif]-->
    <head>
        <!--=== META TAGGAR ===-->
        <meta charset="utf-8">
        <!-- säkerställer att webbläsare inte använder quirks mode -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!--=== TITEL ===-->
        <title><?php if (!is_home()) { wp_title(); } else { echo 'Välkommen'; } ?> | <?php bloginfo('name'); ?></title>

        <meta name="description" content="<?php if (is_single()) { single_post_title('', true); } else { bloginfo('name'); echo " | "; bloginfo('description'); } ?>">
        <meta name="author" content="<?php echo AUTHOR; ?>">

        <!-- Nästa tagg tar bort/återställer standardzoom på mobil enhet (iPad och iPhone) -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--=== LÄNK TAGGAR ===-->
        <!-- En länk till RSS-flödet på din webbplats. -->
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>">

        <!-- En länk för Pingback URL för din webbplats -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <script src="https://use.fontawesome.com/f22bfd3892.js"></script>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>favicon.ico" type="image/x-icon">

        <?php wp_head(); ?>
    </head>

    <!-- body taggen har en hook som hjälper tema/plugin att styla med CSS -->
    <body <?php body_class($class); ?>> 
        <header class="banner">
            <div class="menu-wrapper">
                <div id="main-menu">
                    <label for="toggler" class="menu-icon">☰</label>
                    <input type="checkbox" id="toggler">
                    <div class="responsive-menu">
                        <?php wp_nav_menu(array('theme_location' => 'main', 'container' => 'nav', 'container_class' => 'main-navigation')); ?>
                    </div>
                </div>
                <!-- Titel & Slogan -->
                <div class="site-name">
                    <h1 class="the-title"><a href='<?php echo esc_url(home_url('/')); ?>'><?php bloginfo('name'); ?></a></h1>
                    <h2 class="the-description"><?php bloginfo('description'); ?></h2>
                </div>
            </div>
        </header>
        <div id="main" class="container-flex">

