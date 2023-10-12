<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('after_setup_theme', 'load_cabon_fields');

add_action('carbon_fields_register_fields', 'create_options_page');


function load_cabon_fields()

{
    
    \Carbon_Fields\Carbon_Fields::boot();
}


function create_options_page(){


    Container::make( 'theme_options', __( 'Boilerplate Plugin Options Name' ) )
    ->add_fields( array(
        Field::make( 'text', 'field_1', __( 'Field Name 1' ) ),
        Field::make( 'file', 'field_2', __( 'Field Name 2' ) )
    ) );
}