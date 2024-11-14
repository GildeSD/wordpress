<?php
/*
Plugin Name: Inspirerende Quotes
Plugin URI: http://example.com
Description: Toont willekeurige inspirerende quotes op je website.
Version: 1.0
Author: Jouw Naam
Author URI: http://example.com
*/

// Functie om een willekeurige quote op te halen
function get_random_quote() {
    $file_path = plugin_dir_path(__FILE__) . 'quotes.json';
    $quotes = json_decode(file_get_contents($file_path), true);

    if (!empty($quotes)) {
        $random_key = array_rand($quotes);
        return $quotes[$random_key];
    }
    return "Geen quote beschikbaar.";
}

// Shortcode-functie om de quote te tonen
function display_random_quote() {
    $quote = get_random_quote();
    return "<div class='random-quote'>" . esc_html($quote) . "</div>";
}
add_shortcode('quote_of_the_day', 'display_random_quote');

// CSS laden
function load_quote_styles() {
    wp_enqueue_style('quote-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'load_quote_styles');
