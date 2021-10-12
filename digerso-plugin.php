<?php 
/*
Plugin Name: Digerso Plugin
Description: Digerso Plugin for Form 
Plugin URI: https://digersogroup.com/
Author URI: https://digersogroup.com/
Author: Jair Morillo
License: Public Domain
Version: 0.1
*/

//Registramos javascripts y ccs en el front
defined( 'ABSPATH' ) or die( '¡Sin trampas!' );


require plugin_dir_path( __FILE__ ) . 'includes/funding.php';
require plugin_dir_path( __FILE__ ) . 'includes/fes.php';
require plugin_dir_path( __FILE__ ) . 'includes/Bellbank.php'; 
require plugin_dir_path( __FILE__ ) . 'includes/Car_short.php'; 
require plugin_dir_path( __FILE__ ) . 'includes/Car_long.php'; 


function calendar_styles() { 
    wp_enqueue_style( 'core',plugins_url( 'css/main.css', __FILE__ ) );   
    }
add_action( 'wp_enqueue_scripts', 'main_form_styles' );


function calendar_scripts() {
    wp_enqueue_script( 'core',plugins_url( 'css/main.js', __FILE__ ), array('jquery'), '1.0' );        
   }
add_action( 'wp_enqueue_scripts', 'main_form_scripts' );









?>