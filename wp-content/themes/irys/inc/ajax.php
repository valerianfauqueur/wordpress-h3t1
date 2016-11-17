<?php
add_action('wp_ajax_displayNextEvent','displayNextEvent');
add_action('wp_ajax_nopriv_displayNextEvent','displayNextEvent');
function displayNextEvent()
{
    global $wpdb, $_POST;

    $param = $_POST['param'];
   include  get_template_directory().'/views/ajax-irys.php';

    die();
}
