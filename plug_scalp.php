<?php

/*

Plugin Name: plug_scalp - TIMER
Description: My first plugin - It's a Timer, if you want add it in you web site, you can use ShortCode. Like this : [timer year="value" month="value" day="value" hour="value" min="value" sec="value"] and set your values.
Version: 0.1

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'SCALP_DIR', plugin_dir_path( __FILE__) );
define( 'SCALP_URL', plugin_dir_url( __FILE__) );

/**
*	Chargement des styles CSS et JS
**/
function custom_shortcode_scripts() {
	global $post;
	if( has_shortcode( $post->post_content, 'timer' ) ) {

		wp_enqueue_style( 'style-timer', plugins_url( 'css/styles.css', __FILE__ ));//style décompte
		wp_enqueue_style( 'style-timer_roboto', 'https://fonts.googleapis.com/css?family=Roboto');//font family roboto
		//wp_enqueue_script( 'style-timer_script_jquery', plugins_url('js/jquery-1.11.3.min.js',__FILE__));//jquery
		//wp_enqueue_script( 'style-timer_script', plugins_url('js/script.js',__FILE__));//js

	}
}

add_action('wp_enqueue_scripts','custom_shortcode_scripts');


/**
* Permet d'afficher le compte a rebours avec un shortcode [Timer]
**/



// [timer year="value" month="value" day="value" hour="value" min="value" sec="value"]
function timer_function( $atts ) {
    $a = shortcode_atts( array(
        'year' => 'something',
        'month' => 'something else',
        'day' => 'something else',
        'hour' => 'something else',
        'min' => 'something else',
        'sec' => 'something else',
    ), $atts );


    wp_enqueue_script('timer_handle', plugins_url('js/script.js',__FILE__));//js
    
    wp_localize_script( 'timer_handle', 'object_name', $a );//

    //return "foo = {$a['bar']}";
    return '<div class="decompte">
					<p>Coming Soon !</p>

					<div class="style_decompte">
						<div class="cadre cb day" ></div>
						<div class="cadre ca hours" ></div>
						<div class="cadre cb minutes" ></div>
						<div class="cadre ca seconds" ></div>
					</div>
				</div>';
}
add_shortcode( 'timer', 'timer_function' );









