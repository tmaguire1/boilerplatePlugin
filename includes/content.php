<?php



add_shortcode('pluginShortCode', 'show_content');


function show_content()
{
    include Plugin_Path . 'includes/templates/template_1.php';


};