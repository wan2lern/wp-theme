<?php get_header(); ?>
<div id="menu">
    <!-- Loop menu here -->
</div>
<section id="main">
    <?php
    // check if user can edit options/is admin
    if(current_user_can('manage_options')) { 
        echo '<h2 style="color: green; font: 1.7em/150% sans-serif;text-align: center;">USER CAN MANAGE OPTIONS</h2>';
    } else {
        echo '<h2 style="color: red; font: 1.7em/150% sans-serif;text-align: center;">USER CAN\'T MANAGE OPTIONS</h2>';
    } ?>
    <!-- Loop content here -->
</section>
<?php get_footer(); ?>