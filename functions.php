<?php
// define root of theme
define("THEME_DIR", get_template_directory_uri());

// require_once('mspecs/estates.php');

/* Add MSPECS API settings page
require_once('inc/options.php'); */

// remove version info meta
remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form'));
add_theme_support('menus');

function mspecs_scripts() {
    wp_enqueue_style('mspecs-css', THEME_DIR . '/dist/main.css', '1.0.0');
    wp_enqueue_script('mspecs-js', THEME_DIR . '/dist/app.min.js', '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mspecs_scripts');

if (!function_exists('register_mspecs_theme_menus')) {
    function register_mspecs_theme_menus() {
        register_nav_menus( array('main' => __('Main Menu')) );
    }
}
add_action('init', 'register_mspecs_theme_menus');

// Add excerpt link
function add_read_more_link( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'mspecs') . '</a>';
}
add_filter( 'excerpt_more', 'add_read_more_link' );

add_action('admin_menu', 'mspecs_page_create');
function mspecs_page_create() {
    $page_title = 'Mspecs Estate Page';
    $menu_title = 'Mspecs Estate Page';
    $capability = 'edit_posts';
    $menu_slug = 'mspecs_page';
    $function = 'mspecs_new_estate_page';
    $icon_url = 'dashicons-admin-home';
    $position = 24;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

function mspecs_new_estate_page() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( 'You do not have sufficient permissions to access this page.' );
    }
?><div>
        <h2><span class=" dashicons-admin-home"></span>Create a new estate</h2>

        <form method="post" action="options.php" id="estate-form">
            <?php
            // Estate title
            settings_fields( 'estate_description' ); 
            do_settings_fields( 'estate_description', '' );
    
            // Estate description
            settings_fields( 'estate_description' ); 
            do_settings_fields( 'estate_description', '' );
            
            // Broker
            settings_fields( 'estate-broker' ); 
            do_settings_fields( 'estate-broker', '' );
    
            // Street address
            settings_fields( 'street-address' ); 
            do_settings_fields( 'street-address', '' );
    
            // Street address
            settings_fields( 'zipcode' ); 
            do_settings_fields( 'zipcode', '' );
    
            // City
            settings_fields( 'city' ); 
            do_settings_fields( 'city', '' );
            ?>

            <p><?php _e('Ange objekt titel här.', 'mspecs'); ?></p>
            <input type="text" name="estate_title" value="<?php echo get_option('estate_title') ?>" />
            <hr />
            
            <p><?php _e('Ange objekt beskrivning här.', 'mspecs'); ?></p>
            <textarea type="text" name="estate_description" value="<?php echo get_option('estate_description') ?>"></textarea>
            <hr />
            <p><?php _e('Gatuadress', 'mspecs'); ?></p>
            <input type="text" name="street_address" value="<?php echo get_option('street-address'); ?>" />
            <hr />
            <p><?php _e('Postnummer', 'mspecs'); ?></p>
            <input type="text" name="zipcode" value="<?php echo get_option('city'); ?>" />
            <hr />
            <p><?php _e('Ort', 'mspecs'); ?></p>
            <input type="text" name="region" value="<?php echo get_option('region'); ?>" />
            <hr />
            <p><?php _e('Stad', 'mspecs'); ?></p>
            <input type="text" name="city_name" value="<?php echo get_option('city'); ?>" />
            <hr />
            <p><?php _e('Gatuadress', 'mspecs'); ?></p>
            <input type="text" name="city_name" value="<?php echo get_option('city'); ?>" />
            <hr />
            <p><?php _e('Ange mäklarens namn här:', 'mspecs') ?></p>
            <input type="text" name="estate_broker_name" value="<?php echo get_option('estate-broker'); ?>" />
            <hr />
            <p><?php _e('Ange mäklarens namn här:', 'mspecs') ?></p>
            <input type="text" name="estate_broker_name" value="<?php echo get_option('estate-broker'); ?>" />

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}