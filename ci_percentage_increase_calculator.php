<?php
/*
Plugin Name: CI Percentage increase calculator
Plugin URI: https://www.calculator.io/percentage-increase-calculator/
Description: Percentage increase calculator to find an increase from one number to another, calculate growth rate and calculate price increase in percentages.
Version: 1.0.0
Author: Percentage Increase Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_percentage_increase_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Percentage Increase Calculator by www.calculator.io";

function display_calcio_ci_percentage_increase_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Percentage Increase Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_percentage_increase_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_percentage_increase_calculator', 'display_calcio_ci_percentage_increase_calculator' );