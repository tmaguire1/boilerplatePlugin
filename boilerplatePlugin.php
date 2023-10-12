<?php

/**
 * Plugin Name: Boilerplate Plugin
 * Description: Boilerplate Plugin
 * Version: 1.0
 * Text Domain: Boilerplate Plugin
 */



 if(!defined('ABSPATH')){
     die('No Access');
 };


 if(!class_exists('PluginClass')){
        class PluginClass {


            public function __construct(){

                define('Plugin_Path', plugin_dir_path( __FILE__ ));

                require_once( Plugin_Path . '/vendor/autoload.php');
            }


            public function init()
            {

                include_once Plugin_Path . '/includes/utilities.php';

                include_once Plugin_Path . '/includes/optionsPage.php';

                include_once Plugin_Path . '/includes/content.php';


            }
     

    }

    
    $pluginClass = new PluginClass;
    $pluginClass->init();



}
 
     