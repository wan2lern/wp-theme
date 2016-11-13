<?php
    header("Content-type: text/css; charset: UTF-8");
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);

    $bodyBg = isset($_GET['BODY_BG']) ? $_GET['BODY_BG'] : NULL;
    $navbarBg = isset($_GET['NAVBAR_BG']) ? $_GET['NAVBAR_BG'] : NULL;
    $navbarText = isset($_GET['NAVBAR_TEXT']) ? $_GET['NAVBAR_TEXT'] : NULL;
    $searchBoxBg = isset($_GET['SEARCH_BOX_BG']) ? $_GET['SEARCH_BOX_BG'] : NULL;
    $searchBoxText = isset($_GET['SEARCH_BOX_TEXT']) ? $_GET['SEARCH_BOX_TEXT'] : NULL;
    $contentBg = isset($_GET['CONTENT_BG']) ? $_GET['CONTENT_BG'] : NULL;
    $contentText = isset($_GET['CONTENT_TEXT']) ? $_GET['CONTENT_TEXT'] : NULL;
    $buttonBg = isset($_GET['BUTTON_BG']) ? $_GET['BUTTON_BG'] : NULL;
    $buttonText = isset($_GET['BUTTON_TEXT']) ? $_GET['BUTTON_TEXT'] : NULL;
    $activeButtonBg = isset($_GET['ACTIVE_BUTTON_BG']) ? $_GET['ACTIVE_BUTTON_BG'] : NULL;
    $activeButtonText = isset($_GET['ACTIVE_BUTTON_TEXT']) ? $_GET['ACTIVE_BUTTON_TEXT'] : NULL;
    $listObjectsBg = isset($_GET['LIST_OBJECTS_BG']) ? $_GET['LIST_OBJECTS_BG'] : NULL;
    $accent = isset($_GET['ACCENT']) ? $_GET['ACCENT'] : NULL;
    $headingText = isset($_GET['HEADING_TEXT']) ? $_GET['HEADING_TEXT'] : NULL;
    $subHeadingText = isset($_GET['SUBHEADING_TEXT']) ? $_GET['SUBHEADING_TEXT'] : NULL;
    $link = isset($_GET['LINK']) ? $_GET['LINK'] : NULL;
    $linkHover = isset($_GET['LINK_HOVER']) ? $_GET['LINK_HOVER'] : NULL;
    $brokerArea = isset($_GET['BROKER_AREA_BG']) ? $_GET['BROKER_AREA_BG'] : NULL;
    $inputBg = isset($_GET['INPUT_AREA']) ? $_GET['INPUT_AREA'] : NULL;
?>

body {
    background-color: <?php echo $bodyBg; ?> !important;
}

#print-header,
.navbar-default {
    background-color: <?php echo $navbarBg; ?> !important;
}

#print-header,
.navbar-default,
.navbar-default a,
.navbar-default button {
    color: <?php echo $navbarText; ?> !important;
}

.navbar-default .current-menu-item {
    border-bottom-color: <?php echo $navbarText; ?> !important;
}

#search-box input[type='text'] {
    background-color: <?php echo $searchBoxBg; ?> !important;
    color: <?php echo $searchBoxText; ?> !important;
}

div#main-content {
    background-color: <?php echo $contentBg; ?> !important;
    color: <?php echo $contentText; ?> !important;
}

#main-content .container {
    background-color: <?php echo $contentBg; ?> !important;
    color: <?php echo $contentText; ?> !important;
}

#main-content pre {
    color: <?php echo $contentText; ?> !important;
}

.button-link,
#property-navigation a,
.bidding-is-active {
    background-color: <?php echo $buttonBg; ?> !important;
    color: <?php echo $buttonText; ?> !important;
}

#property-navigation a.active {
    background-color: <?php echo $activeButtonBg; ?> !important;
    color: <?php echo $activeButtonText; ?> !important;
}

.objectlist-item {
    background-color: <?php echo $listObjectsBg; ?> !important;
}

.objectlist-item:hover {
    border-bottom-color: <?php echo $accent; ?> !important;
}

h1,
hr,
#property-information h2,
#property-images h2,
#property-files h2,
#property-floorplan h2,
#property-houseasosimage h2,
#property-houseasosfile h2,
#property-maps h2,
#object .property-title,
#object #short-info h3,
.object-type-title {
    color: <?php echo $headingText; ?> !important;
}

.object-type-title {
    opacity: 0.4
}

.object-contacts {
    background-color: <?php echo $brokerArea ?> !important;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
    background-color: <?php echo $inputBg ?> !important;
}

.arrow-up {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 15px solid <?php echo $activeButtonBg; ?>;
    margin: -2px 0px;
}
.arrow-down {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 15px solid <?php echo $activeButtonBg; ?>;
}

.arrow-circle {
    border: 2px solid <?php echo $activeButtonBg; ?>;
    border-radius: 40px;
    width: 40px;
    height: 40px;
    display: block;
    margin: -20px 25px;
    padding: 12px 7px;
    float: right;
}

.marker {
    border: 3px solid <?php echo $headingText; ?>;
}

h3,
#object .property-region,
.objectlist-item .property-city {
    color: <?php echo $subHeadingText; ?> !important;
}

a {
    color: <?php echo $link; ?> !important;
}

a:hover {
    color: <?php echo $linkHover; ?> !important;
}